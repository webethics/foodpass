<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Config;
use App\Models\Setting;
use App\Models\User;
use App\Models\EmailTemplate;
use Auth;
use App\Models\AuditLog;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use QrCode;
use Session;
use Illuminate\Auth\Events\Registered;
use Response;
use DB;
use DateTime;
// use App\Models\Plan;
use App\Http\Requests\CreateUserRequest;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
	

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
	
        $this->middleware('guest');
    }
	
	
	public function showRegistrationForm()
	{
		
		return view('auth.register');	
		
	}
	
	
	
	public function checkemail(Request $req)
	{
		$email = $req->email;
		$emailcheck = DB::table('users')->where('email',$email)->count();
		if($emailcheck > 0)
		{
		 $result =array('success' => false,'msg'=>'The email has already been taken.');	
		}else{
			$result =array('success' => true,'msg'=>'');	
		}

		return Response::json($result, 200);
	}
	
	
	 protected function register(CreateUserRequest $request)
    {
		// $digits = 5;
		// $customer_id = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
		$customer_id = $this->generateclient_id();
			if (Session::has('affilate_id'))
			{
				$affilate_value = Session::get('affilate_id');
				Session::forget('affilate_id');
			}else{
				$affilate_value = '';
			}
		    $token = getToken();
			if($request->user_type == 2){
				User::create([
					'email' => $request->email,
					'role_id' => $request->user_type,
					'status' => 1,
					'password' => Hash::make($request->password),
					'customer_id' => $customer_id,
					'affilate_id' => $affilate_value,
					'verify_token' => $token,
				]); 
			}else{
				User::create([
					'email' => $request->email,
					'role_id' => $request->user_type,
					'status' => 1,
					'admin_verify_status' => 0,
					'password' => Hash::make($request->password),
					'customer_id' => $customer_id,
					'affilate_id' => $affilate_value,
					'verify_token' => $token,
				]); 
			}
		    
		
		  //SEND EMAIL TO REGISTER USER.
			// $uname = $request->first_name .' '.$request->last_name;
			$uname = $request->email;
			$logo = url('/frontend/images/logo.png');
			$link= url('verify/account/'.$token);
			$to = $request->email;
			//EMAIL REGISTER EMAIL TEMPLATE 
			$result = EmailTemplate::where('id',2)->get();
			$subject = $result[0]->subject;
      		$message_body = $result[0]->content;
      		
      		$list = Array
              ( 
                 '[NAME]' => $uname,
				 '[USERNAME]' => $request->email,
				 '[PASSWORD]' => $request->password,
                 '[LINK]' => $link,
                 '[LOGO]' => $logo,
              );

      		$find = array_keys($list);
      		$replace = array_values($list);
      	    $message = str_ireplace($find, $replace, $message_body);
			
			//$mail = send_email($to, $subject, $message, $from, $fromname);
			
			$mail = send_email($to, $subject, $message);
			if($request->user_type == 3){
				 return Response::json(array(
				  'success'=>true,
				  'message'=> 'Your account is under verification process.Thank you for signin up, you will receive confirmation within 48 hours.Please <a id="confirmation_popup" href="#">Sign In </a> to your account and
				  setup your store profile.'
				 ), 200);
			}else{
				return Response::json(array(
				  'success'=>true,
				  'message'=> '<h4>Your account is created successfully.</h4> <p>Please <a id="confirmation_popup" href="#">Sign In </a> to your account.</p>'
				 ), 200);
			}
			
	}


	//Generate unique client id
	public function generateclient_id(){
		$digits = 5;
		$customer_id = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
		$get_user = User::where('customer_id',$customer_id)->first();
		if(isset($get_user) && !empty($get_user)){
			 $this->generateclient_id(); // should work better
		}else{
			return $customer_id;
		}
	}
	
	//VERIFY ACCOUNT  
	public function verifyAccount($token)
    {
		
		$result = User::where('verify_token', '=' ,$token)->get();
		$notwork =false; 
		if(count($result)>0){
	    $userUpdate = User::where('email',$result[0]->email);
		$data['verify_token'] =NULL;					
		$data['status'] =1;					
		$userUpdate->update($data);	
		//$url_post = url('password/reset_new_user_password');
		//$notwork =true;  
		//Session::flash('success', 'Your Account has been verified.');
	  //  return redirect('login');
		return redirect('/')->with('success','Your Account has been verified.');
			//return view('auth.passwords.reset',compact('token','notwork','url_post'));	
		}else{
			 return redirect('/')->with('error','Your link is not correct.');	;
		}
		
		
        	
    }
	
	//VERIFY ACCOUNT  
	public function Registeration_confirmation()
    {	
		return view('auth.verify');
    }
	
	
	
	/* public function register(Request $request)
	{
		
		$this->validator($request->all())->validate();

		event(new Registered($user = $this->create($request->all())));

		$this->guard()->login($user);

		return $this->registered($request, $user)
							?: redirect($this->redirectPath());
	 }  */
	 

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
	protected function validator(array $data)
    {
		
		$return = [];
		$return = [
            'first_name'     => [
                'required',
            ],
			'email' => [
				'required','unique:users'
			],
			'last_name'     => [
                'required',
            ],
			'login_password'    => [
				'required', 'regex:/^.*(?=.{3,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!$#%@]).*$/', 'min:6'
			],
			'login_password_confirmation'    => [
                'required','same:login_password',
            ],
			'email*' => [
				'unique:users'
			],
            'mobile_number'   => [
				'required','numeric','regex:/[0-9]{9}/',
             ],
			'terms_and_condtions'   => [
               'required',
            ],
		]; 
		return Validator::make($data,$return );
    } 

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
		
		$dat =  User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'mobile_number' => $data['mobile_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['login_password']),
			'role_id' => 2,
			'status' => 1,
			
			
		]);
		
		if($dat){
			$user_data = User::where('id',$dat->id);
			//die;
			Session::flash('message', "Welcome to Bread and Beauty - Bigfoot. Please logged into your account and setup your profile.");
			return $dat;
		}

		return redirect()->route('account'); 
    }

    /*fetch plan related info*/
    // public function fetchPlanLockingPeriod($plan_id){
    //     $selectedPlanInfo = Plan::where('id',$plan_id)->first();
    //     $lockingPeriod = 0;
    //     if(!is_null($selectedPlanInfo) && ($selectedPlanInfo->count())>0){
    //         $lockingPeriod = $selectedPlanInfo->locking_period;
    //     }
    //     return $lockingPeriod;

    // }
}
