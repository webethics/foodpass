<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Frontend\UpdateUserProfile;
use App\Http\Requests\Frontend\UpdateUserPassword;
use App\Http\Requests\Frontend\CreateContactRequest;

use App\Http\Requests\Frontend\UploadProfilePhoto;
use App\Http\Requests\Frontend\UploadBanner;

use App\Models\Article;
use App\Models\Download;
use App\Models\Role;
use App\Models\User;
use App\Models\Payment;
use App\Models\Plan;
use App\Models\Coupons;
use App\Models\Subscription;
use App\Models\EmailTemplate;
use App\Models\TempRequestUser;
use League\Csv\Writer;	
use Auth;
use Config;
use App\Models\CmsPage;
use Response;
use Hash;
use DB;
use DateTime;
use Session;
use \stdClass;
use Carbon\Carbon;
use Mollie\Laravel\Facades\Mollie;

class PaymentController extends Controller
{

	protected $per_page;
	private $qr_code_path;
	public function __construct()
    {
		Mollie::api()->setApiKey('test_JnmANfRWnVwVhUv9VnHEK89CzxwC87'); 
			
	    $this->per_page = Config::get('constant.posts_per_page');;
		$this->report_path = public_path('/uploads/users');
		$this->coupon_path = public_path('/uploads/coupons');
    }
	
	
	public function buysubscription(request $request){
		$id = Auth::user()->id;
		if(isset($request) && !empty($request)){
			$username = $request->first_name." ".$request->last_name;
			$email    = $request->hiddenemail;
			$amount   = $request->amount.".00";
			
			$check_customer = Payment::where("user_id",$id)->first();
			if(isset($check_customer) && !empty($check_customer) && $check_customer->customer_id != ""){
				$customer_id = $check_customer->customer_id;
			}else{
				$customer = Mollie::api()->customers()->create([
					  "name" => $username,
					  "email" => $email,
				]);
				$customer_id =  $customer->id;
			}
			
			$molliepayment = Mollie::api()->payments()->create([
								'amount' => [
									'currency' => 'EUR',
									'value' => $amount, 
								],
								'description' => 'Payment By FoodPass', 
								'customerId' => $customer_id,
								'sequenceType' => 'first',
								// 'webhookUrl' => route('user.payment.webhook'),
								'redirectUrl' => route('user.payment.success'),
								]);
				
			if(isset($check_customer) && !empty($check_customer)){
				$check_customer->payment_id = $molliepayment->id;
				$check_customer->amount = $amount;
				$check_customer->save();
			}else{
				$payment = new Payment();
				$payment->user_id = $id;
				$payment->customer_id = $customer_id;
				$payment->payment_id = $molliepayment->id;
				$payment->amount = $amount;
				$payment->save();
			}
			
			return redirect($molliepayment->getCheckoutUrl(), 303);	
		}else{
			return redirect('/subscription')->with('error','Something went wrong!');
		}
	}
	
	/**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess() {
		$id = Auth::user()->id;
		$check_payment = Payment::where("user_id",$id)->first();
		if(isset($check_payment) && !empty($check_payment) && $check_payment->payment_id != ""){
			$payment_id = $check_payment->payment_id;
			$payment = Mollie::api()->payments()->get($payment_id);
			if($payment->status == "paid"){
				 $customer = Mollie::api()->customers->get($check_payment->customer_id);
				 
				 if($check_payment->amount == "12"){
					 $amount = (string)$check_payment->amount;
					 $interval = "12 months";
					 $description = "Per year payment";
				 }else{
					 $amount = (string)$check_payment->amount;
					 $interval    = "1 months";
					 $description = "Per month payment";
				 }
				 $subscription = $customer->createSubscription([
								   "amount" => [
										 "currency" => "EUR",
										 "value" => $amount,
								   ],
								   "interval" => $interval,
								   "description" => $description,
								   // "webhookUrl" => route('user.payment.webhook'),
								]);
				if($subscription->status == "active"){
					$check_payment->subscription_id = $subscription->id;
					$check_payment->status = 1;
					$check_payment->cancel_status = 0;
					$check_payment->save();
					return redirect('/subscription')->with('success','You are successfully subcribed for the plan.');
				}else{
					return redirect('/subscription')->with('error','You are not subscribe for the plan,Please try again.');
				}
			}else{
				return redirect('/subscription')->with('error','You have not subscibed for the plan.');
			}
		}else{
			return redirect('/subscription')->with('error','Something went wrong!');
		}
		 
    }
	
	
	public function cancelsubscription(request $request){
		if(isset($request) && !empty($request)){
			$subscription_id = $request->subscription_id;
			$customer_id = $request->customer_id;
			$user_id = $request->user_id;
			
			if($subscription_id != "" && $customer_id != "" && $user_id != ""){
				 $customer = Mollie::api()->customers->get($customer_id);
				 if(isset($customer) && !empty($customer)){
					 $subscription = $customer->cancelSubscription($subscription_id);
					 if(isset($subscription) && !empty($subscription) && $subscription->status == "canceled"){
						 
						 $subscriptio_cancelled = Payment::where('user_id', $user_id)
													->where("subscription_id",$subscription_id)
													->where("customer_id",$customer_id)
													->where("cancel_status",0)
													->where("status",1)
													->update([
														'cancel_status' => 1,
														'status' => 0,
													]);
						 if($subscriptio_cancelled){
							  return redirect('/subscription')->with('success','Subscription is cancelled.');
						 }else{
							 return redirect('/subscription')->with('error','Some problem occured in the process!');
						 }
					 }else{
						 return redirect('/subscription')->with('error','Subscription not found!');
					 }
				 }else{
					 return redirect('/subscription')->with('error','Customer id not found!');
				 }
			}else{
				return redirect('/subscription')->with('error','Customer id not found!');
			}
		}else{
			return redirect('/subscription')->with('error','Something went wrong!');
		}
	}
	
	public function paymentwebhook(){
		$data = file_get_contents("php://input");
		$events = json_decode($data, true);
		echo "<pre>";print_r($events);die("hrr");
	}
	
	
}