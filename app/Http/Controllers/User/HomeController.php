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
use App\Models\Alerts;
use App\Models\Coupons;
use App\Models\Payment;
use App\Models\EmailTemplate;
use App\Models\TempRequestUser;
use App\Models\PurchaseCoupon;
use App\Models\PaymentOptions;
use App\Models\Kitchens;
use App\Models\Setting;
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

class HomeController extends Controller
{
	//Records per page 
	protected $per_page;
	private $qr_code_path;
	public function __construct()
    {
		$this->client_id = 'AddTN_OWP675fIVxuKT_c8GUxfMLn0xrLyV4cmjr-hkgqJOVD6lL5zBSTKkmWURXeMdyN7N6ET4MzdqJ';
            $this->secret = 'EOf90TwEeJUrIaZyN_n6cbkr4SzLBioIOvuFCmC1xb3w_MhwQw7Ag4RhyYHanmaatdDrkNyFoQAq9Ph3';
            $this->api_url = 'https://api.sandbox.paypal.com';
			
	    $this->per_page = Config::get('constant.posts_per_page');;
		$this->report_path = public_path('/uploads/users');
		$this->coupon_path = public_path('/uploads/coupons');
    }
	
	
	public function home_page()
    {
		$number_of_records =$this->per_page;
		$user = Auth::user();
		$forms = Article::where('type','form')->where('is_featured',1)->paginate(8);
		$infographics = Article::where('type','infographic')->where('is_featured',1)->paginate(8);
		$templates = Article::where('type','template')->where('is_featured',1)->paginate(8);
		
		$plans = Plan::with('features')->orderBy('display_order','asc')->paginate(8);
		if(isset($user) && !empty($user)){
			$Subscription = Subscription::where('user_id',$user->id)->where('status','ACTIVE')->first();
			return view('frontend.pages.home.landing',compact('plans','forms','infographics','templates','user','Subscription'));
		}else{
			return view('frontend.pages.home.landing',compact('plans','forms','infographics','templates','user'));
		}
		
    }
	
	public function landing_page() 
    {
		$currentTime = strtotime("now");
		$coupons = DB::table('coupons')
					->select(['coupons.*', 'users.restaurant_name'])
					->join('users', 'users.id', '=', 'coupons.user_id')
					->whereRaw("find_in_set('1',coupons.coupon_display)")
					->where('coupons.is_varified',1)
					->where('coupons.is_store_verified',1)
					->where('coupons.coupon_end_time','>=', $currentTime)
					->whereNull('coupons.deleted_at')
					->orderBy("created_at", "Desc")
					->get();
		
        return view('frontend.pages.home.landing',compact('coupons'));
    }
	
	
	public function affilate_page($affilate_id)
    {
		$currentTime = strtotime("now");

		Session::put('affilate_id', $affilate_id);
		$coupons = DB::table('coupons')
					->select(['coupons.*', 'users.restaurant_name'])
					->join('users', 'users.id', '=', 'coupons.user_id')
					->whereRaw("find_in_set('1',coupons.coupon_display)")
					->where('coupons.is_varified',1)
					->where('coupons.is_store_verified',1)
					->where('coupons.coupon_end_time','>=', $currentTime)
					->whereNull('coupons.deleted_at')
					->orderBy("created_at", "Desc")
					->get();	
					
        return view('frontend.pages.home.landing',compact('coupons'));
    }
	
	public function searchrestaurant(request $request){
		if(isset($request->search_lat) && isset($request->search_lng)){
			$request->session()->put('latitude', $request->search_lat);
			$request->session()->put('longitude', $request->search_lng);
			$Kitchens  = Kitchens::where('status',1)->get();
			$latitude  = $request->search_lat;
			$longitude = $request->search_lng;
			
			//$restaurant = DB::select("SELECT *, (((acos(sin((".$latitude."*pi()/180)) * sin((`latitude`*pi()/180)) + cos((".$latitude."*pi()/180)) * cos((`latitude`*pi()/180)) * cos(((".$longitude."- `longitude`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `users` WHERE status = 1 and admin_verify_status = 1 and profile_photo IS NOT NULL and address IS NOT NULL having distance < dilevery_range ORDER BY distance ASC");

			$restaurant = DB::select("SELECT mainData.*,(mainData.store_delivery_range - mainData.distance) AS distDiff FROM (SELECT DISTINCT users.*,store_postcodes.delivery_range as store_delivery_range, store_postcodes.delivery_cost as store_delivery_cost, store_postcodes.order_amount as store_min_amount , (((acos(sin((".$latitude."*pi()/180)) * sin((`latitude`*pi()/180)) + cos((".$latitude."*pi()/180)) * cos((`latitude`*pi()/180)) * cos(((".$longitude."- `longitude`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `users` LEFT JOIN store_postcodes ON users.id = store_postcodes.user_id WHERE users.status = 1 and users.admin_verify_status = 1 and users.profile_photo IS NOT NULL and users.address IS NOT NULL having distance < store_delivery_range and store_delivery_range IS NOT NULL ORDER BY distance,store_delivery_range,store_postcodes.id ASC ) AS mainData  GROUP BY mainData.id order by distDiff ASC");

			//echo '<pre>';
			//print_r($restaurant);
			//die;
			
			
			return view('frontend.pages.home.store',compact('restaurant','Kitchens'));
		}else{
			return redirect('/store');
		}
	}

	/**public function getClosest($search, $arr) {
		echo "hi".$search;
		$closest = null;
		foreach ($arr as $key => $item) {
		   if ($closest === null || abs($search - $closest) > abs($key - $search)) {
			  $closest = $key;
		   }
		}
		return $closest;
	} **/
	
	public function searchstore(request $request){
		
		$latitude  = $request->session()->get('latitude');
		$longitude = $request->session()->get('longitude');

		if(isset($request->searchvalue) && !empty($request->searchvalue)){
			$queryResName = ' and users.restaurant_name like "%'.$request->searchvalue.'%" ';
		} else {
			$queryResName = '';
		}
		if(isset($request->order_amount) && $request->order_amount != ""){
			$queryMinAmount = " and store_postcodes.order_amount < ".$request->order_amount." ";
		} else {
			$queryMinAmount = '';
		}

		if(isset($request->delivery_Cost) && $request->delivery_Cost != ""){
			$queryDelvCost = " and store_postcodes.delivery_cost < ".$request->delivery_Cost." ";
		} else {
			$queryDelvCost = '';
		}

		if(isset($request->kitchen) && $request->kitchen != ""){
			$explode = explode(",",$request->kitchen);
			$explode = array_unique($explode); 
			$explode = array_filter($explode); 
			//echo '<pre>'; print_r($explode);
			
			// foreach($filter_array as $new_filter){
				// $sub_query[] = " FIND_IN_SET (".$new_filter.", coupon_filters) ";
			// }
			
			$sub_query = array();
			foreach($explode as $val){
				$sub_query[] = " FIND_IN_SET (".$val.", users.restaurant_kitchens) ";
			}
			$implode_sub_qury = implode("AND",$sub_query);
			$querykitCheck = " and ".$implode_sub_qury;
		} else {
			$querykitCheck = '';
		}

		
		
		if(isset($request->sortval) && !empty($request->sortval)){
			if($request->sortval == 1){
				$querySortVal = ' superData.restaurant_name ';
			}elseif($request->sortval == 2){
				$querySortVal = ' superData.store_delivery_cost ';
			}elseif($request->sortval == 3){
				$querySortVal = ' superData.store_min_amount ';
			}elseif($request->sortval == 4){
				$querySortVal = ' superData.distance ';
			}else{
				$querySortVal = ' superData.distance ';
			}
		}else{
			$querySortVal = ' superData.distance ';
		}


		//$query = "SELECT mainData.*,(mainData.store_delivery_range - mainData.distance) AS distDiff FROM (SELECT DISTINCT users.*,store_postcodes.delivery_range as store_delivery_range, store_postcodes.delivery_cost as store_delivery_cost, store_postcodes.order_amount as store_min_amount , (((acos(sin((".$latitude."*pi()/180)) * sin((`latitude`*pi()/180)) + cos((".$latitude."*pi()/180)) * cos((`latitude`*pi()/180)) * cos(((".$longitude."- `longitude`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `users` LEFT JOIN store_postcodes ON users.id = store_postcodes.user_id WHERE users.status = 1 and users.admin_verify_status = 1 and users.profile_photo IS NOT NULL and users.address IS NOT NULL ".$queryResName." ".$queryMinAmount." ".$queryDelvCost." ".$querykitCheck." having distance < store_delivery_range and store_delivery_range IS NOT NULL ORDER BY distance, store_delivery_range,store_postcodes.id ASC ) AS mainData  GROUP BY mainData.id order by distDiff".$querySortVal." ASC";

		$query = "SELECT superData.* FROM (SELECT mainData.*,(mainData.store_delivery_range - mainData.distance) AS distDiff FROM (SELECT DISTINCT users.*,store_postcodes.delivery_range as store_delivery_range, store_postcodes.delivery_cost as store_delivery_cost, store_postcodes.order_amount as store_min_amount , (((acos(sin((".$latitude."*pi()/180)) * sin((`latitude`*pi()/180)) + cos((".$latitude."*pi()/180)) * cos((`latitude`*pi()/180)) * cos(((".$longitude."- `longitude`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `users` LEFT JOIN store_postcodes ON users.id = store_postcodes.user_id WHERE users.status = 1 and users.admin_verify_status = 1 and users.profile_photo IS NOT NULL and users.address IS NOT NULL ".$queryResName." ".$queryMinAmount." ".$queryDelvCost." ".$querykitCheck." having distance < store_delivery_range and store_delivery_range IS NOT NULL ORDER BY distance, store_delivery_range,store_postcodes.id ASC ) AS mainData  GROUP BY mainData.id order by distDiff ASC) as superData ORDER BY ".$querySortVal." ASC ";
		
		//echo $query;die;
		$restaurant = DB::select($query);
		
		// $restaurant = DB::select('SELECT *, (((acos(sin(('.$latitude.'*pi()/180)) * sin((`latitude`*pi()/180)) + cos(('.$latitude.'*pi()/180)) * cos((`latitude`*pi()/180)) * cos((('.$longitude.'- `longitude`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `users` WHERE status = 1 and admin_verify_status = 1 and profile_photo IS NOT NULL and restaurant_name like "%'.$search_param.'%" and address IS NOT NULL having distance < dilevery_range ORDER BY distance ASC');
		
		$count = count($restaurant);
		if(isset($restaurant) && $count > 0){
			$view = view("frontend.pages.home.search_store",compact('restaurant'))->render();
			$success = true;
		}else{
			$view = '<div class="storeblk">Search result not found</div>';
			$success = true;
		}
		//echo "reached here";
		//die();
		
		return Response::json(array(
		  'success'=>$success,
		  'html'=>$view
		 ), 200);
	}
	
	
	public function SearchajaxCoupons(request $request){
		
		// $search_param = $request->searchvalue;
		$latitude  = $request->session()->get('latitude');
		$longitude = $request->session()->get('longitude');
		
		$query = 'SELECT users.status,users.admin_verify_status,users.address,users.dilevery_range,users.restaurant_name,coupons.*, (((acos(sin(('.$latitude.'*pi()/180)) * sin((`latitude`*pi()/180)) + cos(('.$latitude.'*pi()/180)) * cos((`latitude`*pi()/180)) * cos((('.$longitude.'- `longitude`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `users` INNER JOIN coupons ON users.id = coupons.user_id
		WHERE users.status = 1 and users.admin_verify_status = 1 and users.address IS NOT NULL and coupons.is_varified = 1 and coupons.is_store_verified = 1 and coupons.deleted_at IS NULL and coupons.coupon_end_time >= ".$currentTime." ';
		
		if(isset($request->searchvalue) && $request->searchvalue != ""){
			$query = $query.' and product_name like "%'.$request->searchvalue.'%"  ';
		}
		
		if(isset($request->order_amount)){
			$query = $query." and coupons.copuon_order_price < ".$request->order_amount;
		}
		if(isset($request->delivery_Cost)){
			$query = $query." and coupons.delivery_cost < ".$request->delivery_Cost;
		}
		if(isset($request->deliver_pick)){
			$query = $query." and coupons.coupon_pickup_delivery = ".$request->deliver_pick;
		}
		if(isset($request->coupon_filters) && $request->coupon_filters != ""){
			$filter_array = explode(",",$request->coupon_filters);
			$sub_query = array();
			foreach($filter_array as $new_filter){
				$sub_query[] = " FIND_IN_SET (".$new_filter.", coupon_filters) ";
			}
			$implode_sub_qury = implode("AND",$sub_query);
			
			$query = $query." and ".$implode_sub_qury;
		}
		
		$query = $query.' having distance < dilevery_range';		
		
		if(isset($request->sortval) && $request->sortval != ""){
			if($request->sortval == 1){
				$query = $query. ' ORDER BY product_name ASC';
			}elseif($request->sortval == 2){
				$query = $query. ' ORDER BY delivery_cost ASC';
			}elseif($request->sortval == 3){
				$query = $query. ' ORDER BY copuon_order_price ASC';
			}elseif($request->sortval == 4){
				$query = $query. ' ORDER BY distance ASC';
			}else{
				$query = $query. ' ORDER BY distance ASC';
			}
		}else{
			$query = $query.' ORDER BY distance ASC';
		}
		
		// echo $query;die;
		
		$restaurant = DB::select($query);
		
		$count = count($restaurant);
		if(isset($restaurant) && $count > 0){
			$view = view("frontend.pages.home.search_coupons",compact('restaurant'))->render();
			$success = true;
		}else{
			$view = '<div class="storeblk" style="width:100%">Search coupon not found</div>';
			$success = true;
		}
		
		return Response::json(array(
		  'success'=>$success,
		  'html'=>$view
		 ), 200);
	}
	
	
	public function sortmycoupons(request $request){
		$login_id = Auth::user()->id;
		if($request->sortval == 1){
			//sort by name
			
			$coupons = DB::table('purchase_coupons')
					->join('coupons', 'coupons.id', '=', 'purchase_coupons.coupon_id')
					->join('users', 'users.id', '=', 'purchase_coupons.store_id')
					->where('purchase_coupons.customer_id', '=', $login_id)
					->where('coupons.is_varified',1)
					->where('coupons.is_store_verified',1)
					->orderBy("coupons.product_name",'ASC')
					->paginate($this->per_page,array( 'purchase_coupons.id as unique_purchase_id','purchase_coupons.*','coupons.id as unique_coupon_id','coupons.*','users.id as unique_user_id','users.*'));
					// echo "<pre>";print_r($coupons->toArray());die;
		}elseif($request->sortval == 2){
			//sort by date 
			
			$coupons = PurchaseCoupon::where("customer_id",$login_id)->with("mycoupons")->with('store')->orderBy("created_at",'DESC')->paginate($this->per_page);
		}else{
			//clear sort
			
			$coupons = PurchaseCoupon::where("customer_id",$login_id)->with("mycoupons")->with('store')->paginate($this->per_page);
		}
		// echo "<pre>";print_r($coupons->toArray());die;
		$count = count($coupons);
		if(isset($coupons) && $count > 0){
			$sortkey  = $request->sortval;
			$view = view("frontend.pages.home.sortmycoupons",compact('coupons','sortkey'))->render();
			$success = true;
		}else{
			$view = '<div class="storeblk" style="width:100%">No result found.</div>';
			$success = true;
		}
		
		return Response::json(array(
		  'success'=>$success,
		  'html'=>$view
		 ), 200);
		
	}
	
	public function searchsortbooking(request $request){
		$sortval 	= $request->sortval;
		$search_val = $request->search_val;
		$login_id   = $request->userid;
		
		$query = "SELECT pc.id as unique_purchase_id, pc.*,coupon.id as unique_coupon_id, coupon.coupon_code,coupon.user_id, coupon.product_name, coupon.coupon_image, coupon.coupon_start_time, coupon.coupon_end_time, coupon.coupon_price, coupon.copuon_order_price, coupon.coupon_pickup_delivery, coupon.delivery_cost, coupon.discount_1, coupon.new_price_1, coupon.coupon_type, coupon.free_coupon_type, coupon.free_product, coupon.coupon_filters, coupon.coupon_display, coupon.details, coupon.is_varified, coupon.is_store_verified, coupon.is_notify, coupon.deleted_at as coupon_deleted_at, user.id as unique_user_id, user.customer_id, user.first_name, user.last_name, user.role_id, user.created_by, user.email, user.mobile_number, user.email_verified_at, user.verify_token, user.password, user.profile_photo, user.menu_file, user.status, user.is_store_coupons_enabled_from_admin, user.admin_verify_status, user.remember_token, user.address, user.post_code, user.city, user.website, user.instagram, user.facebook, user.delivery_cost, user.dilevery_range, user.order_amount, user.restaurant_name, user.restaurant_kitchens, user.order_options, user.affilate_id, user.latitude, user.longitude, user.otp FROM `purchase_coupons` as pc 
		INNER JOIN `coupons` as coupon ON coupon.id = pc.coupon_id 
		INNER JOIN `users` as user ON user.id = pc.customer_id 
		WHERE coupon.is_varified = 1 and coupon.is_store_verified = 1  and coupon.is_store_verified IS NOT NULL and pc.`store_id` = ".$login_id; 

		/* $query = "SELECT pc.id as unique_purchase_id,pc.created_at as pc_created_at,pc.updated_at as pc_updated_at, pc.*,coupon.id as unique_coupon_id,coupon.*,user.id as 		     unique_user_id,user.* FROM `purchase_coupons` as pc 
			INNER JOIN `coupons` as coupon ON
			coupon.id = pc.coupon_id
			INNER JOIN `users` as user ON
			user.id = pc.customer_id 
			WHERE pc.`confirm_status` = 0 and coupon.is_varified = 1 and coupon.is_store_verified = 1 and pc.`store_id` = ".$login_id; */

		
		if($sortval == 1){
		//Today	
			$query = $query.' and pc.date = '."'".Carbon::now()->toDateString()."'" ;
		}elseif($sortval == 2){
		//Yesterday
			$query = $query.' and pc.date >= '."'".Carbon::now()->subdays(1)->toDateString()."'";
		}elseif($sortval == 3){
		//This week
			$query = $query.' and pc.date >= '."'".Carbon::now()->subdays(7)->toDateString()."'";
		}elseif($sortval == 4){
		//This month
			$query = $query.' and pc.date >= '."'".Carbon::now()->subdays(30)->toDateString()."'";
		}else{
			$query = $query;

		}
		
		if($search_val != ""){
			$query = $query.' and user.first_name like "%'.$search_val.'%"  OR pc.order_number like "%'.$search_val.'%" ';
		}
		//echo $query;die;
		
		$booking = DB::select($query);
		//echo "<pre>";print_r($booking);die;
		$count = count($booking);
		
		if(isset($booking) && $count > 0){
			$onlineView = view("frontend.pages.home.sortbookings",compact('booking'))->render();
			$expiredView = view("frontend.pages.home.sortbookingsExpired",compact('booking'))->render();
			$success = true;
			
		}else{
			$onlineView = '<tr><td colspan="7" class="storeblk" style="width:100%;background: #f5f8fa;margin-bottom: 10px;">No result found.</td></tr>';
			$expiredView = '<tr><td colspan="7" class="storeblk" style="width:100%;background: #f5f8fa;margin-bottom: 10px;">No result found.</td></tr>';
			//$view = '<tr><td colspan="7" class="storeblk" style="width:100%;background: #f5f8fa;margin-bottom: 10px;">No result found.</td></tr>';
			$success = true;
		}
		
		return Response::json(array(
		  'success'=>$success,
		  'online'=>$onlineView,
		  'expired'=>$expiredView,
		 ), 200);
		
	}
	
	public function updatebookingstatus(Request $request, $booking_id){
		$bookingUpdate = PurchaseCoupon::where('id', $booking_id)->update([
								'confirm_status' => 1,
								'is_show' => $request->is_show
							]);
		$loginid = Auth::user()->id;
		$booking = PurchaseCoupon::where("store_id",$loginid)
					->where("confirm_status",0)
					->whereDay('created_at', '=', date('d'))
					->with("mycoupons")->with('customer')->paginate($this->per_page);
		if($bookingUpdate){
			$view = view("frontend.pages.home.booking",compact('booking'))->render();
			$success = true;
		}else{
			$view = '<div class="storeblk" style="width:100%">No result found.</div>';
			$success = true;
		}
		
		return Response::json(array(
			'success'=>$success,
			'html'=>$view
			), 200);
	}
	
	
	
	public function subscription()
    {
		$id = Auth::user()->id;
		if(Auth::user()->role_id == 2){
			$user = User::where('id',$id)->first();
			$subscription = Payment::where('user_id',$id)->first();
			return view('frontend.pages.home.subscription',compact('user','subscription'));
		}else{
			return redirect('/')->with('error','You have not authorize to access the page.');
		}
		
    }
	public function affiliate()
    {
		$id = Auth::user()->id;
		$user = User::where('id',$id)->first();
		$affilate_user = User::where('affilate_id',$user->customer_id)->get();
		$settings =  Setting::where('id',1)->get()[0];
		$affcount = 0;
		foreach($affilate_user as $val){	
			$check_payment = Payment::where('user_id',$val->id)->first();
			if(isset($check_payment) && !empty($check_payment)){
				$affcount++;
			}elseif($val->role_id == 3){
				$affcount++;
			}
		}
		$count = $affcount * $settings->affilate;
		return view('frontend.pages.home.affiliate',compact('user','count'));
    }
	
	public function about_us()
    {
		$about_content = CmsPage::where('slug','about-us')->first();
		return view('frontend.pages.home.about_us',compact('about_content'));
    }
	public function terms()
    {
		$terms = CmsPage::where('slug','terms-and-condition')->first();
		return view('frontend.pages.home.terms_conditions',compact('terms'));
    }
	public function privacy()
    {
		$privacy = CmsPage::where('slug','privacy-policy')->first();
		return view('frontend.pages.home.privacy_policy',compact('privacy'));
    }
	public function store(request $request)
    {
		
		$latitude  = $request->session()->get('latitude');
		$longitude = $request->session()->get('longitude');
		$Kitchens  = Kitchens::where('status',1)->get();
		if($latitude != "" && $longitude != ""){
			$query = "SELECT *, (((acos(sin((".$latitude."*pi()/180)) * sin((`latitude`*pi()/180)) + cos((".$latitude."*pi()/180)) * cos((`latitude`*pi()/180)) * cos(((".$longitude."- `longitude`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `users` WHERE status = 1 and admin_verify_status = 1 and profile_photo IS NOT NULL and address IS NOT NULL";
			if(isset($request->order_amount)){
				$query = $query." and order_amount < ".$request->order_amount;
			}
			if(isset($request->delivery_Cost)){
				$query = $query." and delivery_cost < ".$request->delivery_Cost;
			}
			
			
			$query = $query." having distance < dilevery_range ORDER BY distance ASC";
			//echo $query; die;
			
			$restaurant = DB::select($query);
			
			return view('frontend.pages.home.store',compact('restaurant','Kitchens'));
		}else{
			return redirect('/');
		}
		
    }
	
	//Search functionality for coupon
	public function searchcoupons(request $request)
    {
		$latitude  = $request->session()->get('latitude');
		$longitude = $request->session()->get('longitude');
		$Kitchens  = Kitchens::where('status',1)->get();

		$currentTime = strtotime("now");
		
		$query = "SELECT users.status,users.admin_verify_status,users.address,users.dilevery_range,users.restaurant_name,coupons.*, (((acos(sin((".$latitude."*pi()/180)) * sin((`latitude`*pi()/180)) + cos((".$latitude."*pi()/180)) * cos((`latitude`*pi()/180)) * cos(((".$longitude."- `longitude`) * pi()/180)))) * 180/pi()) * 60 * 1.1515 * 1.609344) as distance FROM `users` INNER JOIN coupons ON users.id = coupons.user_id
		WHERE users.status = 1 and users.admin_verify_status = 1 and users.address IS NOT NULL and coupons.is_varified = 1 and coupons.is_store_verified = 1 and coupons.deleted_at IS NULL and coupons.coupon_end_time >= ".$currentTime." ";
		if(isset($request->order_amount)){
			$query = $query." and coupons.copuon_order_price < ".$request->order_amount;
		}
		if(isset($request->delivery_Cost)){
			$query = $query." and coupons.delivery_cost < ".$request->delivery_Cost;
		}
		if(isset($request->deliver_pick)){
			$query = $query." and coupons.coupon_pickup_delivery = ".$request->deliver_pick;
		}
		if(isset($request->coupon_filters) && $request->coupon_filters != ""){
			$filter_array = explode(",",$request->coupon_filters);
			$sub_query = array();
			foreach($filter_array as $new_filter){
				$sub_query[] = " FIND_IN_SET (".$new_filter.", coupon_filters) ";
			}
			$implode_sub_qury = implode("AND",$sub_query);
			
			$query = $query." and ".$implode_sub_qury;
		}
		
		$query = $query." having distance < users.dilevery_range ORDER BY distance ASC";
		
		// echo $query;die;
		$restaurant = DB::select($query);
		return view('frontend.pages.home.coupons2',compact('restaurant','Kitchens'));
    }
	
	public function booking()
    {
		$loginid = Auth::user()->id;
		$booking = PurchaseCoupon::where("store_id",$loginid)
					->where("confirm_status",0)
					->whereDay('created_at', '=', date('d'))
					->with("mycoupons")->with('customer')->paginate($this->per_page);

		//echo "<pre>";print_r($expiredBooking->toArray());die;
		return view('frontend.pages.home.booking',compact('booking'));
    }
	
	public function addcoupon()
    {
		return view('frontend.pages.home.addcoupon');
    }
	public function makecoupon()
    {
		$id = Auth::user()->id;
		$coupons = Coupons::where('user_id',$id)->orderBy("created_at", "Desc")->paginate($this->per_page);
		return view('frontend.pages.home.makecoupon',compact('coupons'));
    }
	
	public function savecoupon(request $request ){
		$id = Auth::user()->id;
		$coupon_code =  mt_rand(100000, 999999).mt_rand(0, 9);
		$coupon_start_time = strtotime($request->coupon_start_time);
		$coupon_end_time = strtotime($request->coupon_end_time);
		$userData = User::where('id', $id)->select(['is_store_coupons_enabled_from_admin'])->first();
		$enabledStore = $userData->is_store_coupons_enabled_from_admin;
		if($enabledStore == 1){
			$Coupons = Coupons::create(array_merge($request->all(), ['coupon_start_time' => $coupon_start_time,'coupon_end_time' => $coupon_end_time,'coupon_code' => $coupon_code,'user_id' => $id,'is_varified' => 1 ,'is_store_verified' => 1 ,'is_notify' => 1]));
		} else {
			$Coupons = Coupons::create(array_merge($request->all(), ['coupon_start_time' => $coupon_start_time,'coupon_end_time' => $coupon_end_time,'coupon_code' => $coupon_code,'user_id' => $id]));
		}
		if($Coupons){
			if($enabledStore == 0){
				$coupon_id = $Coupons->id;
				$store = user_data_by_id($id);
				$result = EmailTemplate::where('template_name',"admin_coupon_approval")->get();
				$subject = $result[0]->subject;
				$message_body = $result[0]->content;

				//get coupon 
				
				$expire_date = date("d M, Y",$Coupons->coupon_end_time);
				$expire_time = date("h:i a",$Coupons->coupon_end_time);

				$logo = url('frontend/images/logo.png');

				$to = Config::get('adminmail.admin_email');
				//$to = 'shivani.webethics@gmail.com';	
				$list = Array( 
					'[LOGO]' => $logo,
					'[Coupon_Name]' => $Coupons->product_name,
					'[Store_Name]' => $store->first_name." ".$store->last_name,
					'[Expire_Date]' => $expire_date." ".$expire_time,
				);
				$find = array_keys($list);
				$replace = array_values($list);
				$message = str_ireplace($find, $replace, $message_body);

				$mail = send_email($to, $subject, $message); 
			}

			return redirect('/makecoupon')->with('success','Coupon created successfully!');
		}else{
			return redirect('/makecoupon')->with('erroe','Coupon not created, Somethign went wrong!');
		}
	}
	
	public function editcoupon($coupon_id){
		
		$coupons = Coupons::where('id',$coupon_id)->first();
		return view('frontend.pages.home.editcoupon',compact('coupons'));
	}
	
	public function viewcoupon($coupon_id){
		
		$paymentArr = array();
		$login_id = Auth::user()->id;
		$coupons = Coupons::where('id',$coupon_id)->first();
		$store = User::where("id",$coupons->user_id)->first();
		$paymentOptions = PaymentOptions::where("user_id",$coupons->user_id)->get();
		foreach($paymentOptions as $payOptions){
			$paymentArr[] = $payOptions->payment_options;
		}
		$implodedVal = implode(', ', $paymentArr);
		if($coupons){
		 if($coupons->coupon_display != ""){
		 	$check_coupon_type = 	explode(',',$coupons->coupon_display);
		 	if(in_array(3, $check_coupon_type)){
		 		$coupon_contain_c = 1;
		 	}else{
		 		$coupon_contain_c = 0;
		 	}
		 }	
		 
		 if($coupon_contain_c == 1){
		 	$subscribe_user = user_subscription_status();	
			 if(isset($subscribe_user) && $subscribe_user == 1){
				 $redirect_url = url("/ci/{$login_id}/st/{$coupons->user_id}/co/{$coupon_id}");
			 }else{
				  $redirect_url = url('subscription');
			 }	
		 }else{
		 	$redirect_url = url("/ci/{$login_id}/st/{$coupons->user_id}/co/{$coupon_id}");
		 }
		 
		 $expire_date = date("d/m/Y",$coupons->coupon_end_time);
		 $expire_time = date("h:i a",$coupons->coupon_end_time);
		 
		 $object = new stdClass();
		 $object->coupon_image = coupon_image($coupons->id);
		 $object->expire_date_time = $expire_date ." at ". $expire_time;
		 $object->static_image = url('frontend/images/information.svg');
		 $object->product_name = $coupons->product_name;
		 $object->details = $coupons->details;
		 $object->coupon_code = $coupons->coupon_code;
		 $object->store_id = $coupons->user_id;
		 if($coupons->coupon_pickup_delivery == 1){
			$object->coupon_pickup_delivery = 'Alleen afhalen';
		 } elseif($coupons->coupon_pickup_delivery == 2) {
			$object->coupon_pickup_delivery = 'Alleen bezorgen';
		 }
		 $object->store_name = $store->first_name;
		 $object->payment_options = $implodedVal;
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
	
	
	public function purchasecoupon($purchase_coupon_id){
		
		$login_id = Auth::user()->id;
		$user_info = user_data_by_id($login_id);
		$coupons = PurchaseCoupon::where("id",$purchase_coupon_id)->with("mycoupons")->with('store')->first();
		
		$paymentOptions = PaymentOptions::where("user_id",$coupons->mycoupons->user_id)->get();
		foreach($paymentOptions as $payOptions){
			$paymentArr[] = $payOptions->payment_options;
		}
		$implodedVal = implode(', ', $paymentArr);
		$web = 0;
		$call = 0;
		$whatsapp = 0;
		if($coupons){
		 $expire_date = date("d/m/Y",$coupons->mycoupons->coupon_end_time); 
		 $expire_time = date("h:i a",$coupons->mycoupons->coupon_end_time);
		 
		 if($coupons->store->order_options != ""){
			 $order_options = explode(",",$coupons->store->order_options);
			 if(in_array("1",$order_options)){
				 $web = 1;
			 }
			 if(in_array("2",$order_options)){
				 $call = 1;
			 }
			 if(in_array("3",$order_options)){
				 $whatsapp = 1;
			 }
		 }
		 
		 
		 $object = new stdClass();
		 $object->coupon_image = coupon_image($coupons->mycoupons->id);
		 $object->expire_date_time = $expire_date ." at ". $expire_time;
		 $object->static_image = url('frontend/images/information.svg');
		 $object->product_name = $coupons->mycoupons->product_name;
		 $object->store_name = $coupons->store->first_name;
		 $object->payment_options = $implodedVal;
		 $object->details = $coupons->mycoupons->details;
		 $object->discount_code = $coupons->mycoupons->discount_code;
		 $object->coupon_code = $coupons->mycoupons->coupon_code;
		 $object->store_id = $coupons->mycoupons->user_id;
		 if($coupons->mycoupons->coupon_pickup_delivery == 1){
			$object->coupon_pickup_delivery = 'Alleen afhalen';
		 } elseif($coupons->mycoupons->coupon_pickup_delivery == 2) {
			$object->coupon_pickup_delivery = 'Alleen bezorgen';
		 }
		 $object->login_id = $login_id;
		 $object->customer_id = $user_info->customer_id;
		 $object->coupon_id = $coupons->mycoupons->id;
		 $object->discount_code = $coupons->mycoupons->discount_code; 
		 $object->ordernumber  = $coupons->order_number;
		 $object->qr_image = "https://chart.googleapis.com/chart?chs=268x268&cht=qr&chl=".$coupons->order_number."&choe=UTF-8";
		 // $object->coupon_id = $coupons->mycoupons->id;
		 $object->website = $coupons->store->website;
		 $object->mobile_number = $coupons->store->mobile_number;
		 $object->web = $web;
		 $object->call = $call;
		 $object->whatsapp = $whatsapp;
		 
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
	
	public function deletecoupon($coupon_id){
		$coupons = Coupons::where('id',$coupon_id)->delete();
		$check_purchase = PurchaseCoupon::where('coupon_id',$coupon_id)->first();
		$Alerts = Alerts::where('coupon_id',$coupon_id)->first();
		if(isset($check_purchase) && !empty($check_purchase)){
			$deltepurchasecoupons = PurchaseCoupon::where('coupon_id',$coupon_id)->delete();
		}
		if(isset($Alerts) && !empty($Alerts)){
			$deleteAlerts = Alerts::where('coupon_id',$coupon_id)->delete();
		}
		
		if($coupons){
			return redirect('/makecoupon')->with('success','Coupon deleted successfully!');
		}else{
			return redirect('/makecoupon')->with('erroe','Somethign went wrong!');
		}
	}
	
	public function updatecoupon(request $request,$coupon_id){

		$coupon_start_time = strtotime($request->coupon_start_time);
		$coupon_end_time = strtotime($request->coupon_end_time);
		
		$coupons = Coupons::where('id', $coupon_id)->update([
			'product_name' => $request->product_name,
			'coupon_start_time'  => $coupon_start_time,
			'coupon_end_time'  => $coupon_end_time,
			'delivery_range'  => $request->delivery_range,
			'discount_code'  => $request->discount_code,
			'coupon_price'  => $request->coupon_price,
			'copuon_order_price'  => $request->copuon_order_price,
			'coupon_pickup_delivery'  => $request->coupon_pickup_delivery,
			'delivery_cost'  => $request->delivery_cost,
			'discount_1'  => $request->discount_1,
			'new_price_1'  => $request->new_price_1,
			'coupon_type'  => $request->coupon_type,
			'free_coupon_type'  => $request->free_coupon_type,
			'free_product'  => $request->free_product,
			'details'  => $request->details,
			'coupon_image'  => $request->coupon_image,
		]);
		
		if($coupons){
			return redirect('/makecoupon')->with('success','Coupon Update successfully!');
		}else{
			return redirect('/makecoupon')->with('erroe','Somethign went wrong!');
		}
	}
	
	public function my_coupon()
    {
		$login_id = Auth::user()->id;
		$user = User::where("id",$login_id)->first();
		$coupons = PurchaseCoupon::where("customer_id",$login_id)->with("mycoupons")->with('store')->orderBy('created_at', 'desc')->paginate($this->per_page);
		// echo "<pre>";print_r($coupons->toArray());die("here");
		return view('frontend.pages.home.my_coupon',compact('coupons','user'));
    }

    public function couponhistory($coupon_id){
    	$coupons = PurchaseCoupon::where('coupon_id',$coupon_id)
    				->orderBy('created_at', 'desc')
    				->paginate($this->per_page);
		return view('frontend.pages.home.coupon_history',compact('coupons'));   				
    }
	
	public function menukaart($restaurant_id)
    {
		$user = User::where('id',$restaurant_id)
				->where("role_id",3)
				->first();
		return view('frontend.pages.home.menukaart',compact('user'));
    }
	public function coupons($restaurant_id)
    {
		$user = User::where('id',$restaurant_id)
				->where("role_id",3)
				->with('verifiedcoupons')
				->first();
		// echo "<pre>";print_r($user->toArray());die("here");
		return view('frontend.pages.home.coupons',compact('user'));
    }
	public function info($restaurant_id)
    {
		$user = User::where('id',$restaurant_id)
				->where("role_id",3)
				->with('storetimings')
				->first();
		return view('frontend.pages.home.info',compact('user'));
    }
	
	
	
	public function contact()
    {
		return view('frontend.pages.home.contact');
    }
	
	public function terms_conditions()
    {
		$term_content = CmsPage::where('slug','terms-and-condition')->first();
		return view('frontend.pages.home.terms_conditions',compact('term_content'));
    }
	public function cookie_policy()
    {
		$cookie_content = CmsPage::where('slug','cookie-policy')->first();
		return view('frontend.pages.home.cookie_policy',compact('cookie_content'));
    }
	public function privacy_policy()
    {
		$privacy_content = CmsPage::where('slug','privacy-policy')->first();
		return view('frontend.pages.home.privacy_policy',compact('privacy_content'));
    }
	
	public function faq()
    {
		$faq = CmsPage::where('slug','faq')->first();
		return view('frontend.pages.home.faq',compact('faq'));
    }
	public function contact_us()
    {
		return view('frontend.pages.home.contact_us');
    }
	public function how_it_works()
    {
		$how_works = CmsPage::where('slug','how-it-works')->first();
		$settings  =  Setting::where('id',1)->first();
		return view('frontend.pages.home.how_it_works',compact('how_works','settings'));
    }
	public function help()
    {
		$help = CmsPage::where('slug','help')->first();
		return view('frontend.pages.home.help',compact('help'));
    }
	public function documentation()
    {
		$documentation = CmsPage::where('slug','documentation')->first();
		return view('frontend.pages.home.documentation',compact('documentation'));
    }

	public function accessibility()
    {
		$accessibility = CmsPage::where('slug','accessibility')->first();
		return view('frontend.pages.home.accessibility',compact('accessibility'));
    }
	
	
	public function ordercoupon($ci,$st,$co){
		if(isset($ci) && $ci != "" && isset($st) && $st != "" && isset($co) && $co != ""){
			$customer_id = $ci;
			$coupon_id 	 = $co;
			$store_id    = $st;
			
			$order_number = $this->generateorder_id();
			$date = Carbon::now()->toDateString(); 
			$today_Count = PurchaseCoupon::where("date",$date)->where("customer_id",$customer_id)->count();
			if($today_Count == 3){
				return redirect('/my-coupon')->with('error','Only Ordered three coupons in a day !');
			}else{
				$existing_coupon = PurchaseCoupon::where("customer_id",$customer_id)
									->where("coupon_id",$coupon_id)
									->where("store_id",$store_id)
									->first();
				if(isset($existing_coupon) && !empty($existing_coupon)){
					return redirect('/my-coupon')->with('error','You have already purchase this coupon.');
				}else{
					$purchase = new PurchaseCoupon();
					$purchase->customer_id = $customer_id;
					$purchase->coupon_id = $coupon_id;
					$purchase->store_id = $store_id;
					$purchase->order_number = $order_number;
					$purchase->date = $date;
					
					if($purchase->save()){
						
						//Implement sent email code here.Admin recieve notification of the booking
						$store = user_data_by_id($store_id);
						$customer = user_data_by_id($customer_id);
						$result = EmailTemplate::where('template_name',"booking_notificaton")->get();
						$subject = $result[0]->subject;
			      		$message_body = $result[0]->content;

			      		//get coupon 
			      		$coupon_detail = Coupons::where("id",$coupon_id)->first();
			      		if(isset($coupon_detail) && !empty($coupon_detail)){
			      			$expire_date = date("d M, Y",$coupon_detail->coupon_end_time);
							$expire_time = date("h:i a",$coupon_detail->coupon_end_time);
							$to = $store->email;	
							$list = Array
				              ( 
				                 '[NAME]' => $store->restaurant_name,
				                 '[coupon_name]' => $coupon_detail->product_name,
				                 '[customer_name]' => $customer->first_name." ".$customer->first_name,
				                 '[expire_date]' => $expire_date." ".$expire_time,
				              );
				              	$find = array_keys($list);
						      	$replace = array_values($list);
						      	$message = str_ireplace($find, $replace, $message_body);

						        $mail = send_email($to, $subject, $message);
			      		}
						return redirect('/my-coupon')->with('success','Coupon purchased');
					}else{
						return redirect('/my-coupon')->with('error','Somethign went wrong!');
					}
				}
			}
		}else{
			return redirect('/my-coupon')->with('error','Order not completed, Somethign went wrong!');
		}
	}




	//Generate unique client id
	public function generateorder_id(){
		$order_number = mt_rand(100000, 999999).mt_rand(0, 9);
		$checkorder = PurchaseCoupon::where('order_number',$order_number)->first();
		if(isset($checkorder) && !empty($checkorder)){
			 $this->generateorder_id(); // should work better
		}else{
			return $order_number;
		}
	}
	
/* ==================================
* UPLOAD COUPON IMAGE 
* UPDATE THE COUPON IMAG
===========================================*/
	
	public function uploadcouponphoto(UploadProfilePhoto $request)
    {
		// IF AJAX
		if($request->ajax()){
			
			$image_file = $request->upload_profile_file;
			list($type, $image_file) = explode(';', $image_file);
			list(, $image_file)      = explode(',', $image_file);
			$image_file = base64_decode($image_file);
			$image_name= time().'_'.rand(100,999).'.png';
			
			
			$user_data = user_data();
			$user_id   = $user_data->id;
			
					
			//CREATE REPORT FOLDER IF NOT 
			if (!is_dir($this->coupon_path)) {
				mkdir($this->coupon_path, 0777);
			}
			//CREATE USER ID FOLDER 
			$user_id_path = $this->coupon_path.'/'.$user_id;
			if (!is_dir($user_id_path)) {
				mkdir($user_id_path, 0777);
			}
			// @unlink($user_id_path.'/'.$user_data->profile_photo);
			file_put_contents($user_id_path.'/'.$image_name, $image_file);
			//$image->move($user_id_path, $new_name);
			// $userUpdate = User::where('id',$user_id);
			// $data['profile_photo'] = $image_name;			
			// $userUpdate->update($data);
			$path = url('uploads/coupons').'/'.$user_id.'/'.$image_name;
						
			// $image_url  = $_SERVER
			// $image_url  =  timthumb($path,80,80);
			return response()->json([
			   'success'=>true,
			   'message' => 'Image Upload Successfully',
			   'image_url'  => $path,
			   'image_name'  => $image_name,
			  ]); 
		}
    }
	
	public function  getPaypalAccessToken(){
	
		$url = $this->api_url . '/v1/oauth2/token'; 
		$username = $this->client_id;   //Client ID
		$password = $this->secret;     //secret ID
		$headers = array(
				'Content-Type: application/x-www-form-urlencoded',
				'Authorization: Basic '. base64_encode("$username:$password")
			);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS , rawurldecode(http_build_query(array(
			'grant_type' => 'client_credentials'
		  ))));
		
		 $response = curl_exec($ch);
		 $result =array();
		 if(curl_errno($ch)){
			//If an error occured, throw an Exception.
			 $result['success']=false;
			 $result['msg']='Request Error:' . curl_error($ch);
			 $result['access_token']='';
		}else{
			$json = json_decode($response);
			$accessToken = $json->access_token;
			 $result['success']=true;
			 $result['msg']='';
			 $result['access_token']=$accessToken;
		}
		//pr($response)
		return $result;
		
		
	}
	
	/*Submit Contact Form*/
    public function contact_submit(CreateContactRequest $request){
        $requestData = $request->all();
        $response = [];
        $response['success'] = false;
        $response['message'] = 'Invalid Request';

        if(count($requestData) > 0){
            $contactData = [];

            $senderEmail = "contact@bidum.eu";

            foreach ($requestData as $key => $value) {
                if(!empty(trim($value))){
                    $key_text = str_replace("_"," ",$key);
                    $key_text = ucfirst($key_text);
                    $contactData[$key_text] = trim($value);
                }
            }
            
            $data = [
              'contactData'  => $contactData
            ];

            //Mail::to($senderEmail)->send(new ContactMail($data));

            $response['success'] = true;
            $response['message'] = 'Successfully submit form, we will contact you soon';
        }
        return Response::json($response, 200);
    }
	
	
	
	
	/* ==================================
* GET PLANS FROM  PAYPAL 
*  Update Plans is db
===========================================*/

	public function  getPaypalPlans($token){
	
		$url = $this->api_url . '/v1/billing/plans'; 
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.sandbox.paypal.com/v1/billing/plans",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
			"authorization: Bearer $token",
			"cache-control: no-cache",
			"content-type: application/json",
		  ),
		));

		$response = curl_exec($curl);
		 if(curl_errno($curl)){
			//If an error occured, throw an Exception.
			 $result['success']=false;
			 $result['msg']='Request Error:' . curl_error($curl);
		}else{
			$json = json_decode($response);
			if(isset($json) && !empty($json)){
				foreach($json->plans as $val){
					$get_plan = Plan::where('title', $val->name)->first();
					if(isset($get_plan)){
						$get_plan->plan_id = $val->id;
						$get_plan->save();
					}
				}
			}
			$result['success']=true;
			$result['msg']='';
		}
		//pr($response)
		return $result;
		
		
	}
	
}
