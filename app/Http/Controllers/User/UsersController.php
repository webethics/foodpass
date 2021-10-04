<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Frontend\UpdateUserProfile;
use App\Http\Requests\Frontend\UpdateUserPassword;

use App\Http\Requests\Frontend\UploadProfilePhoto;
use App\Http\Requests\Frontend\UploadBanner;

use App\Models\Role;
use App\Models\User;
use App\Models\StorePostcode;
use App\Models\Coupons;
use App\Models\StoreTimings;
use App\Models\EmailTemplate;
use App\Models\TempRequestUser;
use App\Models\PaymentOptions;
use League\Csv\Writer;	
use Auth;
use Config;
use Response;
use Hash;
use DB;
use DateTime;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UsersController extends Controller
{
	//Records per page 
	protected $per_page;
	private $qr_code_path;
	public function __construct()
    {
	    
        $this->per_page = Config::get('constant.per_page');
		$this->report_path = public_path('/uploads/users');
		$this->menu_path = public_path('/uploads/menus');
    }
	
	public function profile()
    {
		$id = Auth::user()->id;
		$user = User::where('id',$id)->first();
		return view('frontend.pages.home.profile',compact('user'));
    }
	
	public function editProfile()
    {
		$id = Auth::user()->id;
		$user = User::where('id',$id)->first();
		return view('frontend.pages.home.edit_profile',compact('user'));
    }
	
	public function editpassword()
    {
		$id = Auth::user()->id;
		$user = User::where('id',$id)->first();
		return view('frontend.pages.home.edit_password',compact('user'));
    }
	
	public function editstorepassword()
    {
		$id = Auth::user()->id;
		$user = User::where('id',$id)->first();
		return view('frontend.pages.home.edit_store_password',compact('user'));
    }
	
	public function store_profile()
    {
		$id = Auth::user()->id;
		$user = User::where('id',$id)->with('storetimings')->with('storepostcodes')->with('paymentoptions')->first();
		
		return view('frontend.pages.home.store_profile',compact('user'));
    }
	
	public function store_edit_profile()
    {
		$id = Auth::user()->id;
		$user = User::where('id',$id)->first();
		return view('frontend.pages.home.edit_profile2',compact('user'));
    }
	
	public function editstoretime(){
		
		$id = Auth::user()->id;
		$user = StoreTimings::where('user_id',$id)->first();
		if(!isset($user)){
			$user = new StoreTimings();
		}
		return view('frontend.pages.home.edit_store_time',compact('user'));
	}

	public function editPaymentOptions(){
		
		$id = Auth::user()->id;
		$user = PaymentOptions::where('user_id',$id)->get();
		if(!isset($user)){
			$user = new PaymentOptions();
		}
		return view('frontend.pages.home.edit_payment_options',compact('user'));
	}
	
	public function storetimings(request $request){
		$id = Auth::user()->id;
		$timings = StoreTimings::where('user_id',$id)->first();
		if(isset($timings) && !empty($timings)){
			$StoreTimings = StoreTimings::where('user_id', $id)->update([
								'mon_start' => $request->mon_start,
								'mon_end'  => $request->mon_end,
								'tue_start'  => $request->tue_start,
								'tue_end'  => $request->tue_end,
								'wed_start'  => $request->wed_start,
								'wed_end'  => $request->wed_end,
								'thu_start'  => $request->thu_start,
								'thu_end'  => $request->thu_end,
								'fri_start'  => $request->fri_start,
								'fri_end'  => $request->fri_end,
								'sat_start'  => $request->sat_start,
								'sat_end'  => $request->sat_end,
								'sun_start'  => $request->sun_start,
								'sun_end'  => $request->sun_end,
							]);
		}else{
			$StoreTimings = StoreTimings::create(array_merge($request->all(), ['user_id' => $id]));
		}
		
		if($StoreTimings){
			return redirect('/store-profile')->with('success','Store time information update successfully!');
		}else{
			return redirect('/store-profile')->with('error','Something went wrong!');
		}
	}

	
	public function storerestaurant(request $request){
		
		$id = Auth::user()->id;
		$user_info = User::where('id',$id)->first();
		$image_name = $user_info->menu_file;
		if(isset($request->menu_file) && !empty($request->menu_file)){
			$menu_file = $request->file('menu_file');
			//CREATE REPORT FOLDER IF NOT 
			if (!is_dir($this->menu_path)) {
				mkdir($this->menu_path, 0777);
			}
			
			$randomString = "Menus".time().'_'.rand(100,999);
			$save_name = $randomString . '.' . $menu_file->getClientOriginalExtension();
			$image_name = $save_name;
			//Move Uploaded File
			$menu_file->move($this->menu_path, $save_name);
		}
		User::where('id', $id)->update([
			'first_name' => $request->first_name,
			'last_name'  => $request->last_name,
			'mobile_number'  => $request->mobile_number,
			'address'  => $request->address,
			'post_code'  => $request->post_code,
			'city'  => $request->city,
			'restaurant_name'  => $request->restaurant_name,
			'delivery_cost'  => $request->delivery_cost,
			'dilevery_range'  => $request->dilevery_range,
			'order_amount'  => $request->order_amount,
			'website'  => $request->website,
			'instagram'  => $request->instagram,
			'facebook'  => $request->facebook,
			'latitude'  => $request->latitude,
			'longitude' => $request->longitude,
			'menu_file' => $image_name,
		]);
			return redirect('/store-profile')->with('success','Profile information updated successfully!');
	}
	
	public function storeuser(request $request){
		
		$id = Auth::user()->id;
		User::where('id', $id)->update([
			'first_name' => $request->first_name,
			'last_name'  => $request->last_name,
			'mobile_number'  => $request->mobile_number,
			'address'  => $request->address,
			'post_code'  => $request->post_code,
			'city'  => $request->city,
			'latitude'  => $request->latitude,
			'longitude' => $request->longitude,
		]);
			return redirect('/profile')->with('success','Profile information updated successfully!');
	}
	
	
	public function logout()
    {
		 \Auth::logout();
		 Session::put('is_admin_login', '');
		 return redirect('/');
    }
	
	function password_generate($chars) 
	{
	  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
	  return substr(str_shuffle($data), 0, $chars);
	}
	
	
	public function passwordUpdate(UpdateUserPassword $request)
    {
		// IF AJAX
		if($request->ajax()){
			$data=array();
			$userData = user_data();
			$user_id = auth::user()->id; 
			$userUpdate = User::where('id',$user_id);
			$newPassword=$request->password; //NEW PASSWORD
			$hashed = $userData->password;  //DB PASSWORD
	   
			if(Hash::check($request->old_password, $hashed)){
				$hashed = Hash::make($newPassword);
				
				$data['password'] = $hashed;			
				$userUpdate->update($data);
				$result =array(
				'success' => true
				);	
			}else{
				$result =array(
				'success' => false,
				'errors' => array('old_password'=>'Password does not match.')
				);	
			}
			return Response::json($result, 200);
		}
    }
	
	
	public function addstorepostcode(){
		
		return view('frontend.pages.home.add_post_code',compact('user'));
	}
	
	public function savestorepostcode(request $request){
		
		$id = Auth::user()->id;
		if(isset($request->unique_postal_id) && $request->unique_postal_id != ""){
			$StorePostcode = StorePostcode::where('id', $request->unique_postal_id)->update([
								'delivery_cost' => $request->delivery_cost,
								'order_amount'  => $request->order_amount,
								'delivery_range'  => $request->delivery_range
							]);
		}else{
			$StorePostcode = StorePostcode::create(array_merge($request->all(), ['user_id' => $id]));
		}
		if($StorePostcode){
			return redirect('/store-profile')->with('success','Postal code information update successfully!');
		}else{
			return redirect('/store-profile')->with('error','Something went wrong.');
		}
	}

	public function savePaymentOptions(request $request){
		
		$id = Auth::user()->id;
		$arrayCombine = array();
		if(!empty($request->payment_id)){
		$arrayCombine = array_combine($request->payment_id, $request->payment_options);
		foreach($arrayCombine as $key=>$value){
			$paymentOptions = PaymentOptions::where('id', $key )->update([
								'merchant_id'  => $value
							]);
			}
		}
		if($paymentOptions){
			return redirect('/store-profile')->with('success','Payment options updated successfully!');
		}else{
			return redirect('/store-profile')->with('error','Something went wrong.');
		}
	}
	
	public function editstorepostcode($postal_id){
		
		$postal = StorePostcode::where('id',$postal_id)->first();
		return view('frontend.pages.home.edit_post_code',compact('postal'));
	}
	
	
	public function deletestorepostcode($postal_id){
		$postal = StorePostcode::where('id',$postal_id)->first();
		if($postal->delete()){
			return redirect('/store-profile')->with('success','Record delete successfully!');
		}else{
			return redirect('/store-profile')->with('error','Something went wrong.');
		}
		
	}
	
	
	public function updateuserrole(request $request){
		$id = Auth::user()->id;
		if(isset($request) && !empty($request)){
			$role = $request->user_type;
			$get_user = User::where('id',$id)->update(['role_id' => $role]);
			if($role == 2){
				return redirect('/profile')->with('success','Profile update successfully.');
			}else if($role == 3){
				return redirect('/store-profile')->with('success','Profile update successfully.');
			}else{
				return redirect('/')->with('error','Something went wrong.');
			}
		}else{
			return redirect('/')->with('error','Something went wrong.');
		}
	}


	public function updatecouponstatus(request $request){
		if(isset($request) && !empty($request)){
			if($request->status != "" && $request->id != ""){
				$coupon_id = $request->id;
				$coupon_status = $request->status;

				$update_coupon = Coupons::where("id",$coupon_id)->first();
				if(isset($update_coupon) && !empty($update_coupon)){
					$updatestatus = Coupons::where('id', $coupon_id)->update([
								'is_varified' => $coupon_status,
							]);
					if($updatestatus){
						$result =array(
						'success' => true,
						'message' => "Coupon updated",
						);					
					}else{
						$result =array(
						'success' => false,
						'errors' => "Coupon not updated",
						);					
					}
				}else{
					$result =array(
					'success' => false,
					'errors' => "Coupon not found",
					);				
				}
			}else{
				$result =array(
				'success' => false,
				'errors' => "Something went wrong",
				);		
			}
		}else{
			$result =array(
				'success' => false,
				'errors' => "Something went wrong",
				);	
		}
		return Response::json($result, 200);
	}

	public function updatestorecouponstatus(request $request){
		if(isset($request) && !empty($request)){
			if($request->status != "" && $request->id != ""){
				$coupon_id = $request->id;
				$coupon_status = $request->status;

				$update_coupon = Coupons::where("id",$coupon_id)->first();
				if(isset($update_coupon) && !empty($update_coupon)){
					$updatestatus = Coupons::where('id', $coupon_id)->update([
								'is_store_verified' => $coupon_status,
							]);
					if($updatestatus){
						$result =array(
						'success' => true,
						'message' => "Coupon updated",
						);					
					}else{
						$result =array(
						'success' => false,
						'errors' => "Coupon not updated",
						);					
					}
				}else{
					$result =array(
					'success' => false,
					'errors' => "Coupon not found",
					);				
				}
			}else{
				$result =array(
				'success' => false,
				'errors' => "Something went wrong",
				);		
			}
		}else{
			$result =array(
				'success' => false,
				'errors' => "Something went wrong",
				);	
		}
		return Response::json($result, 200);
	}
	
	/*==================================================
	UPDATE USER PROFILE 
==================================================*/ 	
	/* public function UpdateEditProfile(UpdateUserProfile $request)
	{
		if($request->ajax()){
			$request->first_name;
			$id = auth::user()->id; 
			$data=array(
			'first_name'=>$request->first_name,
			'last_name'=>$request->last_name,
			);
			
			//check if other user take this name or not 
			$user = User::where('id','==',$id)->get();
			if(count($user) <=0){
				if($request->user_bio)
					$data['user_bio']=$request->user_bio;
					User::where('id',$id)->update($data);
					$result = array('success'=>true);
			}else{
				 $result = array('success'=>false);
			}	
			return Response::json($result, 200);
		}
    } */
	
	
	
	
	
    
	//VERIFY ACCOUNT  
	/* public function verifyAccount($token)
    {
		
		$result = User::where('verify_token', '=' ,$token)->get();
		$notwork =false; 
		if(count($result)>0){
			if($result[0]->created_by == 0){
				$userUpdate = User::where('email',$result[0]->email);
				$data['verify_token'] =NULL;			
				$data['status'] =1;		
				$data['created_by'] = 1;
				$userUpdate->update($data);
				return redirect('login')->with('success','Your account is verified.');	;
			}else{
				$url_post = url('password/reset_new_user_password');
				$notwork =true;  
				return view('auth.passwords.reset',compact('token','notwork','url_post'));	
			}
			
		}else{
			 return redirect('login')->with('error','Your Link is not correct to reset password.');	;
		}	
    } */
	
	/* public function passwordUpdate(UpdateUserPassword $request)
    {
		// IF AJAX
		if($request->ajax()){
			$data=array();
			$userData = user_data();
			$user_id = auth::user()->id; 
			$userUpdate = User::where('id',$user_id);
			$newPassword=$request->password; //NEW PASSWORD
			$hashed = $userData->password;  //DB PASSWORD
	   
			if(Hash::check($request->old_password, $hashed)){
				$hashed = Hash::make($newPassword);
				
				$data['password'] = $hashed;			
				$userUpdate->update($data);
				$result =array(
				'success' => true
				);	
			}else{
				$result =array(
				'success' => false,
				'errors' => array('old_password'=>'Password does not match.')
				);	
			}
			return Response::json($result, 200);
		}
    } */	
	
    public function uploadProfilePhoto(UploadProfilePhoto $request)
    {
		// IF AJAX
		if($request->ajax()){
			
			$image_file = $request->upload_profile_file;
			list($type, $image_file) = explode(';', $image_file);
			list(, $image_file)      = explode(',', $image_file);
			$image_file = base64_decode($image_file);
			$image_name= time().'_'.rand(100,999).'.png';
			
			
			$user_data = user_data();
			$user_id =$user_data->id;
			
					
			//CREATE REPORT FOLDER IF NOT 
			if (!is_dir($this->report_path)) {
				mkdir($this->report_path, 0777);
			}
			//CREATE USER ID FOLDER 
			$user_id_path = $this->report_path.'/'.$user_id;
			if (!is_dir($user_id_path)) {
				mkdir($user_id_path, 0777);
			}
			@unlink($user_id_path.'/'.$user_data->profile_photo);
			file_put_contents($user_id_path.'/'.$image_name, $image_file);
			//$image->move($user_id_path, $new_name);
			$userUpdate = User::where('id',$user_id);
			$data['profile_photo'] = $image_name;			
			$userUpdate->update($data);
			$path = url('uploads/users').'/'.$user_id.'/'.$image_name;
		
			$image_url  =  timthumb($path,80,80);
			
			
			  return response()->json([
			   'success'=>true,
			   'message' => 'Image Upload Successfully',
			   'image_url'  => $image_url
			  ]); 
		}
    }

	
	/* public function uploadBannerPhoto(UploadBanner $request)
    {
		// IF AJAX
		if($request->ajax()){
			
				$image = $request->file('upload_banner_file');
				// pr($image->getClientOriginalName());
				//$document_type = $request->document_type;
				$new_name = rand() . '_banner.' . $image->getClientOriginalExtension();
				
				$user_data =user_data();
				$user_id =$user_data->id;
			
					
				//CREATE REPORT FOLDER IF NOT 
				if (!is_dir($this->report_path)) {
					mkdir($this->report_path, 0777);
				}
				//CREATE USER ID FOLDER 
				$user_id_path = $this->report_path.'/'.$user_id;
				if (!is_dir($user_id_path)) {
					mkdir($user_id_path, 0777);
				}
				
			 	@unlink($user_id_path.'/'.$user_data->banner_photo);
				$image->move($user_id_path, $new_name);
				$userUpdate = User::where('id',$user_id);
				$data['banner_photo'] = $new_name;			
			    $userUpdate->update($data);
				$path = url('uploads/users').'/'.$user_id.'/'.$new_name;
				
                $image_url  =  timthumb($path,448,155);
				
				  return response()->json([
				   'success'=>true,
				   'message' => 'Image Upload Successfully',
				   'image_url'  => $image_url
				  ]); 
				
		}
    }	 */
	
	
   //logout 	
   
  
}
