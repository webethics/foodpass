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
use App\Models\Plan;
use App\Models\Coupons;
use App\Models\Payment;
use App\Models\Alerts;
use App\Models\AlertSetting;
use App\Models\EmailTemplate;
use App\Models\TempRequestUser;
use App\Models\PurchaseCoupon;
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

class AlertController extends Controller
{
	//Records per page 
	protected $per_page;
	private $qr_code_path;
	public function __construct()
    {
			
	    $this->per_page = Config::get('constant.posts_per_page');;
		$this->report_path = public_path('/uploads/users');
		$this->coupon_path = public_path('/uploads/coupons');
    }
	
	
	public function alert()
    {
		if(Auth::user()->role_id == 2){
			$user_id = Auth::user()->id;
			$store = User::where('role_id',3)
						->where('status',1)
						->where('admin_verify_status',1)
						->whereNotNull('restaurant_name')
						->whereNotNull('profile_photo')
						->get();
			$setting = AlertSetting::where('user_id',$user_id)->first();
			$user = User::where('id',Auth::user()->id)->first();
			return view('frontend.pages.home.alert',compact('store','setting','user'));
		}else{
			return redirect('/')->with('error','You have not authorize to access the page.');
		}
		
    }
	
	public function alerts()
    {
		$user = User::where('id',Auth::user()->id)->first();
		$update = Alerts::where('user_id',Auth::user()->id)->update([
						'is_read' => 1,
					]);
		$alerts = Alerts::where('user_id',Auth::user()->id)->whereNull('deleted_at')->orderBy('id', 'desc')->paginate(10);
		return view('frontend.pages.home.alerts',compact('alerts','user'));
    }
	
	public function savesetting(request $request){
		if(isset($request) && !empty($request)){
			
			$kitchens    = implode(",",$request->kitchens);
			$store       = implode(",",$request->store);
			$coupon_type = implode(",",$request->coupon_type);
			$alert_type  = $request->alert_type;
			
			$exist = AlertSetting::where('user_id',Auth::user()->id)->first();
			if(isset($exist) && !empty($exist)){
				$exist->user_id = Auth::user()->id;
				$exist->kitchens = $kitchens;
				$exist->store = $store;
				$exist->coupon_type = $coupon_type;
				$exist->alert_type = $alert_type;
				$save_result = $exist->save();
			}else{
				$alertsetting = new AlertSetting();
				$alertsetting->user_id = Auth::user()->id;
				$alertsetting->kitchens = $kitchens;
				$alertsetting->store = $store;
				$alertsetting->coupon_type = $coupon_type;
				$alertsetting->alert_type = $alert_type;
				$save_result = $alertsetting->save();
			}
			if($save_result){
				return redirect('/alert')->with('success','Alert setting save successfully.');
			}else{
				return redirect('/alert')->with('error','Alert setting not saved.');
			}
		}else{
			return redirect('/alert')->with('error','Something went wrong.');
		}
	}

	public function deleteAlert(request $request){
		if(isset($request) && !empty($request)){
			
			$alert_id  = $request->alert_id;
			$user = User::where('id',Auth::user()->id)->first();
			$currentTime = date('Y-m-d H:i:s');
			$update = Alerts::where('id',$alert_id )->update([
						'deleted_at' => $currentTime,
					]);
					
			if($update){
					$object = new stdClass();
					$object->redirect_url = url('alerts');
					return response()->json([
					'success'=>true,
					'alert'  => $object,
					]); 
				}else{
					return response()->json([
					'success'=>false,
					]); 

				}	
		}		
	}
}
?>