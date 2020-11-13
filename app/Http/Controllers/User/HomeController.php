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
use App\Models\User;use App\Models\Plan;
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
	public function faq()
    {
		return view('frontend.pages.home.faq');
    }
	public function contact_us()
    {
		return view('frontend.pages.home.contact_us');
    }
	public function how_it_works()
    {
		return view('frontend.pages.home.how_it_works');
    }
	public function subscription()
    {
		return view('frontend.pages.home.subscription');
    }
	public function affiliate()
    {
		return view('frontend.pages.home.affiliate');
    }
	public function about_us()
    {
		return view('frontend.pages.home.about_us');
    }
	public function store()
    {
		return view('frontend.pages.home.store');
    }
	public function coupons2()
    {
		return view('frontend.pages.home.coupons2');
    }
	public function booking()
    {
		return view('frontend.pages.home.booking');
    }
	public function makecoupon()
    {
		return view('frontend.pages.home.makecoupon');
    }
	public function addcoupon()
    {
		return view('frontend.pages.home.addcoupon');
    }
	public function store_profile()
    {
		return view('frontend.pages.home.store_profile');
    }
	public function profile()
    {
		return view('frontend.pages.home.profile');
    }
	public function my_coupon()
    {
		return view('frontend.pages.home.my_coupon');
    }
	public function alert()
    {
		return view('frontend.pages.home.alert');
    }
	public function menukaart()
    {
		return view('frontend.pages.home.menukaart');
    }
	public function coupons()
    {
		return view('frontend.pages.home.coupons');
    }
	public function info()
    {
		return view('frontend.pages.home.info');
    }
	public function edit_profile2()
    {
		return view('frontend.pages.home.edit_profile2');
    }
	public function alerts()
    {
		return view('frontend.pages.home.alerts');
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
