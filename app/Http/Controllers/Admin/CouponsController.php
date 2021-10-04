<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Requests\UpdateUserPassword;
use App\Http\Requests\sendEmailNotification;
use App\Http\Requests\ResetPassword;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\AlertSetting;
use App\Models\PurchaseCoupon;
use App\Models\Coupons;
use App\Models\Alerts;
use App\Models\Payment;
use App\Models\EmailTemplate;
use League\Csv\Writer;	
use Auth;
use Config;
use Response;
use Session;
use Hash;
use DB;
use DateTime;
use \stdClass;
use Carbon\Carbon;

class CouponsController extends Controller
{
	protected $per_page;
	public function __construct()
    {
	    
        $this->per_page = Config::get('constant.per_page');
    }
	
	public function coupons(Request $request)
    {
		
        $customers_data = $this->coupons_search($request,$pagination=true);
		if($customers_data['success']){
			$coupons = $customers_data['coupons'];
			$page_number =  $customers_data['current_page'];
			if(empty($page_number))
				$page_number = 1;
			if(!is_object($coupons)) return $coupons;
			if ($request->ajax()) {
				return view('admin.coupons.couponsPagination', compact('coupons','page_number'));
			}
			$roles = Role::all();
			return view('admin.coupons.coupons',compact('coupons','page_number','roles'));	
		}else{
			return $customers_data['message'];
		}
	}
	
	public function coupons_search($request,$pagination)
	{
		
		$page_number = $request->page;
		$number_of_records =$this->per_page;
		
		
		$result = Coupons::where(`1`, '=', `1`);
		
		if($pagination == true){
			$coupons = $result->orderBy('created_at', 'desc')->paginate($number_of_records);
		}else{
			$coupons = $result->orderBy('created_at', 'desc')->get();
		}
		
		// echo "<pre>";print_r($coupons->toArray());die;
		$data = array();
		$data['success'] = true;
		$data['coupons'] = $coupons;
		$data['current_page'] = $page_number;
		return $data;
	}
	
	
	public function editcoupons($coupon_id){
		$coupons = Coupons::where('id',$coupon_id)->first();
		return view('admin.coupons.editcoupon', compact('coupons'));
	} 
	
	public function updatecoupons(request $request,$coupon_id){
		
		$coupon_filters = implode(",",$request->coupon_filters);
		$coupon_display = implode(",",$request->coupon_display);
		
		$Coupons = Coupons::where('id', $coupon_id)->update([
						'coupon_filters' => $coupon_filters,
						'coupon_display' => $coupon_display,
						'is_varified' => $request->is_varified,
					]);
		if($Coupons){
			return redirect('/admin/coupons')->with('success','Coupons information update successfully!');
		}else{
			return redirect('/admin/coupons')->with('success','Something went wrong.');
		}
	}
	
	public function notifycoupons($coupon_id){
		$coupon = Coupons::where('id',$coupon_id)->where('is_varified',1)->where('is_store_verified',1)->first();
		if(isset($coupon) && !empty($coupon)){
			$store_id = $coupon->user_id;
			$get_store = User::where('id',$store_id)->where('admin_verify_status',1)->first();
			if(isset($get_store) && !empty($get_store)){
				
				$filters  = $coupon->coupon_filters;
				$kitchens = $get_store->restaurant_kitchens;
				$get_users = User::where('role_id',2)->get();
				if(isset($get_users) && !empty($get_users)){
					foreach($get_users as $users){
						$alertsetting = AlertSetting::where('user_id',$users->id)->first();
						if(isset($alertsetting) && !empty($alertsetting)){
							$query = "SELECT * FROM alert_settings where  user_id = ".$users->id." AND FIND_IN_SET (".$store_id.", store) ";
							
							if(isset($filters) && $filters != ""){
								$filter_array = explode(",",$filters);
								$sub_query = array();
								foreach($filter_array as $new_filter){
									$sub_query[] = " FIND_IN_SET (".$new_filter.", coupon_type) ";
								}
								$implode_sub_qury = implode("OR",$sub_query);
								
								$query = $query." AND (".$implode_sub_qury.")";
							}
							
							
							if(isset($kitchens) && $kitchens != ""){
								$kitchens_array = explode(",",$kitchens);
								$sub_query_kitc = array();
								foreach($kitchens_array as $kitchen_filter){
									$sub_query_kitc[] = " FIND_IN_SET (".$kitchen_filter.", kitchens) ";
								}
								$implode_kitchen_qury = implode("OR",$sub_query_kitc);
								
								$query = $query." AND (".$implode_kitchen_qury.")";
							}
							// echo $query;die;
							$alert = DB::select($query);
							$count = count($alert);
							if(isset($alert) && $count > 0){
									if($alert[0]->alert_type == "1,2"){
										$result = EmailTemplate::where('id',21)->get();
										$subject = $result[0]->subject;
							      		$message_body = $result[0]->content;
										//sendemail
										$user_data = user_data_by_id($alert[0]->user_id);
										$expire_date = date("d M, Y",$coupon->coupon_end_time);
										$expire_time = date("h:i a",$coupon->coupon_end_time);
										$to = $user_data->email;
										//$to = 'shivani.webethics@gmail.com';
										$list = Array
							              ( 
							                 '[NAME]' => $user_data->email,
							                 '[coupon_name]' => $coupon->product_name,
							                 '[store_name]' => $get_store->restaurant_name,
							                 '[expire_date]' => $expire_date." ".$expire_time,
							              );

							             	$find = array_keys($list);
								      		$replace = array_values($list);
								      	    $message = str_ireplace($find, $replace, $message_body);

								        $mail = send_email($to, $subject, $message);
									}
									$alerts = new Alerts();
									$alerts->user_id = $alert[0]->user_id;
									$alerts->coupon_id = $coupon->id;
									$alerts->is_read   = 0;
									$alerts->save();
							}
						}else{
							$alerts = new Alerts();
							$alerts->user_id = $users->id;
							$alerts->coupon_id = $coupon->id;
							$alerts->is_read   = 0;
							$alerts->save();
						}
					}
					$coupon->is_notify = 1;
					$coupon->save();
					return redirect('/admin/coupons')->with('success','Notification send to users.');
				}else{
					return redirect('/admin/coupons')->with('error','No user found.');
				}
			}else{
				return redirect('/admin/coupons')->with('error','Store is not verified by Admin.');
			}
		}else{
			return redirect('/admin/coupons')->with('error','Coupon is not enable.');
		}
	}
	
	public function purchasecoupons(Request $request){
		// $purchase = PurchaseCoupon::orderby('created_at', 'DESC')->paginate(20);
		$PurchaseCoupon = $this->purchase_coupon_search($request,$pagination=true);
		
		if($PurchaseCoupon['success']){
			$purcoupons = $PurchaseCoupon['PurchaseCoupon'];
			$page_number =  $PurchaseCoupon['current_page'];
			$roles = Role::all();
			if(empty($page_number))
				$page_number = 1;
			if(!is_object($purcoupons)) return $purcoupons;
			if ($request->ajax()) {
				return view('admin.coupons.purchasecouponspegination', compact('purcoupons','page_number'));
			}
			return view('admin.coupons.purchasecoupon',compact('purcoupons','page_number','roles'));	
		}else{
			return $PurchaseCoupon['message'];
		}
		
	}
	
	
	public function purchase_coupon_search($request,$pagination)
	{
		
		$page_number = $request->page;
		$number_of_records =$this->per_page;
		
		
		$result = PurchaseCoupon::where(`1`, '=', `1`);
		
		if($pagination == true){
			$PurchaseCoupon = $result->orderBy('created_at', 'desc')->paginate($number_of_records);
		}else{
			$PurchaseCoupon = $result->orderBy('created_at', 'desc')->get();
		}
		
		// echo "<pre>";print_r($coupons->toArray());die;
		$data = array();
		$data['success'] = true;
		$data['PurchaseCoupon'] = $PurchaseCoupon;
		$data['current_page'] = $page_number;
		return $data;
	}
	
	
	
	public function affilate(Request $request){
		// $purchase = PurchaseCoupon::orderby('created_at', 'DESC')->paginate(20);
		$affilate_coupon = $this->affilate_search($request,$pagination=true);
		$roles = Role::all();
		// echo "<pre>";print_r($affilate_coupon);die("Here");
		if($affilate_coupon['success']){
			$affilate = $affilate_coupon['affilate_data'];
			$page_number =  $affilate_coupon['current_page'];
			if(empty($page_number))
				$page_number = 1;
			if(!is_object($affilate)) return $affilate;
			if ($request->ajax()) {
				return view('admin.coupons.affilatePagination', compact('affilate','page_number'));
			}
			return view('admin.coupons.affilate',compact('affilate','page_number','roles'));	
		}else{
			return $affilate_coupon['message'];
		}
	}
	
	public function affilate_search($request,$pagination)
	{
		
		$page_number = $request->page;
		$number_of_records =$this->per_page;
		
		$result = User::where(`1`, '=', `1`);
		
		if($pagination == true){
			$users = $result->where('role_id',2)->orderBy('created_at', 'desc')->paginate($number_of_records);
		}else{
			$users = $result->where('role_id',2)->orderBy('created_at', 'desc')->get();
		}
		$data = array();
		$data['success'] = true;
		$data['affilate_data'] = $users;
		$data['current_page'] = $page_number;

		return $data;
	}


	public function viewcoupons($coupon_id){
		
		$login_id = Auth::user()->id;
		$coupons = Coupons::where('id',$coupon_id)->first();
		if($coupons){
		 $subscribe_user = user_subscription_status();	
		 if(isset($subscribe_user) && $subscribe_user == 1){
			 $redirect_url = url("/ci/{$login_id}/st/{$coupons->user_id}/co/{$coupon_id}");
		 }else{
			  $redirect_url = url('subscription');
		 }
		 $expire_date = date("d M, Y",$coupons->coupon_end_time);
		 $expire_time = date("h:i a",$coupons->coupon_end_time);
		 
		 $object = new stdClass();
		 $object->coupon_image = coupon_image($coupons->id);
		 $object->expire_date_time = $expire_date ." & ". $expire_time;
		 $object->static_image = url('frontend/images/information.svg');
		 $object->product_name = $coupons->product_name;
		 $object->details = $coupons->details;
		 $object->coupon_code = $coupons->coupon_code;
		 $object->store_id = $coupons->user_id;
		 $object->login_id = $login_id;
		 $object->coupon_id = $coupon_id;
		 $object->redirect_url = $redirect_url;
			return response()->json([
			   'success'=>true,
			   'coupon'  => $object,
			  ]); 
		}else{
			return response()->json([
			   'success'=>false,
			  ]); 

		}		
	}
	
}
?>