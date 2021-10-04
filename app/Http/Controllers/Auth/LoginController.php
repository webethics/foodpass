<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Config;
use App\Http\Requests\Frontend\LoginRequest;
use App\Models\Setting;
use App\Models\User;
use App\Models\EmailTemplate;
use Auth;
use Session;
use Response;
use App\Models\Role;
use App\Models\AuditLog;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
	
	  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		
		$this->middleware('guest')->except('logout');
	 //  $this->middleware('auth');
	
    }
	
	
	
	public function login(LoginRequest $request)
    {   
		
	
        $input = $request->all();
		
		$rules = array('email' => 'required|email|exists:users,email',
				   'password' => 'required',
				   );

		$validator = Validator::make($request->input(), $rules);
		if ($validator->fails())
		{
			//EVENT FAILED
			// return Response::json(array(
			// 				  'success'=>false,
			// 				  'message'=> 'Please enter correct credentials.'
			// 				 ), 200);
			return redirect('login')->withErrors($validator)->withInput($request->except('password'));
		}else
		{
			
			if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
			{ 
	
	
		        //IF STATUS IS NOT ACTIVE 
				if(Auth::check() && Auth::user()->verify_token !=NULL){
					//EVENT FAILED
					//create_failed_attemp_log($input['email'],$input['password']);
					Auth::logout();
					return Response::json(array(
							  'success'=>false,
							  'message'=> 'Please be sure to check your junk mail as well - sometimes it ends up there sadly!'
							 ), 200);
					// return redirect('/login')->with('error', 'Please be sure to check your junk mail as well - sometimes it ends up there sadly!');
				}else if(Auth::check() && Auth::user()->status == 0){ 
					//IF STATUS IS NOT ACTIVE 
					//EVENT FAILED
					//create_failed_attemp_log($input['email'],$input['password']);
					Auth::logout();
					return Response::json(array(
							  'success'=>false,
							  'message'=> 'Your account is deactivated.'
							 ), 200);
					// return redirect('/login')->with('error', 'Your account is deactivated.');
				
				}else if(Auth::check() && Auth::user()->role_id == 1){ 
					//IF STATUS IS NOT ACTIVE 
					//EVENT FAILED
					//create_failed_attemp_log($input['email'],$input['password']);
					Auth::logout();
					// return redirect('/login')->with('error', 'Please enter correct credentials.');
					return Response::json(array(
							  'success'=>false,
							  'message'=> 'Please enter correct credentials.'
							 ), 200);
				}
				
				
			  /* $user = auth()->user();
			  
			  $role_id =  $user->role_id;
			  Session::put('is_admin_login', '');
			  if( $request->session()->get('profile')){
				  if(strpos($request->session()->get('profile'), '/u') !== false)
				   return redirect( $request->session()->get('profile'));
			  }else{
				return redirect('profile');
			  } */
			  
			  if(Auth::check() && Auth::user()->role_id == 2){ 
					  $user = auth()->user();
					  $role_id =  $user->role_id;
					  Session::put('is_admin_login', '');
					   Session::put('admin_user_id', '');
					  if( $request->session()->get('profile')){
						  if(strpos($request->session()->get('profile'), '/u') !== false)
						   return redirect( $request->session()->get('profile'));
					  }else{
						  return Response::json(array(
							  'success'=>true,
							  'url'=>'/',
							  'message'=> ''
							 ), 200);
						// return redirect('profile');
					  }
				}else if(Auth::check() && Auth::user()->role_id == 3){ 
					  $user = auth()->user();
					  $role_id =  $user->role_id;
					  Session::put('is_admin_login', '');
					   Session::put('admin_user_id', '');
					  if( $request->session()->get('booking')){
						  if(strpos($request->session()->get('booking'), '/u') !== false)
						   return redirect( $request->session()->get('booking'));
					  }else{
						  return Response::json(array(
							  'success'=>true,
							  'url'=>'booking',
							  'message'=> ''
							 ), 200);
						// return redirect('store-profile');
					  }
				}else{
					Auth::logout();
				}
				
				
			
			}
			else{
				return Response::json(array(
							  'success'=>false,
							  'message'=> 'You have entered wrong details.'
							 ), 200);
				//EVENT FAILED
				//create_failed_attemp_log($input['email'],$input['password']);
				// return redirect()->route('login')
					// ->with('error','You have entered wrong details.');
			}
		}

    }
	
}
