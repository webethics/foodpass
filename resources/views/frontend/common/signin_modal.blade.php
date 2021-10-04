<!-- Modal -->
<div class="modal formmodal" id="formmodal">
         <div class="modal-dialog">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <!-- Modal body -->
               <div class="modal-body">
                  <ul class="nav nav-tabs">
                     <li class="nav-item">
                        <a id="login_tab" class="nav-link active" data-toggle="tab" href="#login">Login</a>
                     </li>
                     <li class="nav-item">
                        <a id="registration_tab" class="nav-link" data-toggle="tab" href="#signup">Signup</a>
                     </li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane container active" id="login">
                        <div class="formarea">
                           <ul class="form_socialicons">
						   @php 
								$facbookurl = url('/redirect/0');
								$google_url = url('/redirectg/0');
						   @endphp
                              <li>
								<a onclick="return social_login_popup('{{$facbookurl}}')" href="javascript:void(0)">
									<img src="{{asset('frontend/images/facebook.svg')}}">
									<span>Facebook</span>
								</a>
							  </li>
                              <li>
								<a onclick="return social_login_popup('{{$google_url}}')" href="javascript:void(0)">
									<img src="{{asset('frontend/images/google.svg')}}">
									<span>Google</span>
								</a>
							  </li>
                           </ul>
                           <div class="formborder text-center">
                              <img src="{{asset('frontend/images/formborder.svg')}}" class="img-fluid" />
                           </div>
						   <div class="server_error errors text-left"></div>
                           <form class="formwidget" id="submitLoginForm" method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}
                              <div class="form-group">
                                 
								 <input class="form-control" id="email" type="email" name="email" placeholder="{{ trans('authentications.login.email') }}" >
								  <div class="error_margin"><span class="email_error errors" >  {{ $errors->first('email')  }} </span></div>
								  </div>
								 
                              <div class="form-group passwordfield">
                                  <input class="form-control" id="password" type="password" name="password" placeholder="{{ trans('authentications.login.password') }}" >
                                  <div class = "show_pass"></div>
								  <div class="error_margin"><span class="password_error errors" >  {{ $errors->first('password')  }} </span></div>
                              </div>
							  
							  
							  
                              <div class="formbutton">
                                 <button type="submit" class="btn btn-primary">{{ trans('authentications.login.login') }}<span class=" spinner spinner-border text-light request_loader" style="display:none"></span></button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="tab-pane container fade" id="signup">
                        <div class="formarea">
                           <ul class="form_socialicons">
						   @php 
								$facbookurl = url('/redirect/0');
								$google_url = url('/redirectg/0');
						   @endphp
                              <li>
								<a onclick="return social_login_popup('{{$facbookurl}}')" href="javascript:void(0)">
									<img src="{{asset('frontend/images/facebook.svg')}}">
									<span>Facebook</span>
								</a>
							  </li>
                              <li>
								<a onclick="return social_login_popup('{{$google_url}}')" href="javascript:void(0)">
									<img src="{{asset('frontend/images/google.svg')}}">
									<span>Google</span>
								</a>
							  </li>
                           </ul>
                           <div class="formborder text-center">
                              <img src="{{asset('frontend/images/formborder.svg')}}" class="img-fluid" />
                           </div>
						   <form class="formwidget" id="submitSignupForm" method="POST" action="{{ route('register') }}">
							  {{ csrf_field() }}
							  <div class="error_margin">
								<span class="email_error errors" >  {{ $errors->first('email')  }} </span>
							  </div>
                              <div class="form-group">
                                 <input name="email"  type="email" class="form-control" placeholder="Email" />
                              </div>
							  <div class="error_margin">
								<span class="password_error errors" >  {{ $errors->first('password')  }} </span>
							  </div>
                              <div class="form-group passwordfield">
                                 <input name="password" id="r_password" type="password" class="form-control" placeholder="Password" />
                                 <div class = "show_pass"></div>
                              </div>
							  <div class="error_margin">
								<span class="password_confirmation_error errors" >  {{ $errors->first('password_confirmation')  }} </span>
							  </div>
                              <div class="form-group passwordfield">
                                 <input name="password_confirmation" id="rc_password" type="password" class="form-control" placeholder="Confirm Password" />
                                 <div class = "show_pass"></div>
                              </div>
							  <div class="error_margin">
								<span class="user_type_error errors" >  {{ $errors->first('user_type')  }} </span>
							  </div>
							  <div class="form-group passwordfield">
								<select class="form-control" name="user_type" id="type">
								  <option value="">Select User Type</option>
								  <option value="2">User</option>
								  <option value="3">Restaurant</option>
								</select>
                              </div>
							  <div class="error_margin">
								<span class="terms_condition_error errors" >  {{ $errors->first('terms_condition')  }} </span>
							  </div>
                              <div class="custom-control custom-checkbox form-checkbox">
                                 <input type="checkbox" class="custom-control-input" name="terms_condition" id="customControlAutosizing">
                                 <label class="custom-control-label" for="customControlAutosizing">By continuing, you agree to our User Agreement and Privacy Policy</label>
                              </div>
                              <div class="formbutton signupbtn">
                                 <button type="submit" class="btn">Sign Up
								 <span class=" spinner spinner-border text-light request_loader" style="display:none"></span></button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  
	  
	  <!-- Modal -->
<div id="myModal" class="modal formmodal_show append_model" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
	   <!-- Modal body -->
	   <div class="modal-body">
	      <div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">×</button>
		  </div>
		  <div id="append_model_content"></div>
	   </div>
	</div>
 </div>
</div>



<div class="modal formmodal" id="userrolemodel">
	 <div class="modal-dialog">
		<div class="modal-content">
		   <button type="button" class="close" data-dismiss="modal">&times;</button>
		   <!-- Modal body -->
		   <div class="modal-body">
					<div class="formarea" style="padding:20px;">
					 <div class="formborder text-center">
                             <p>Select User Role</p>
                           </div>
					   <form class="formwidget" method="POST" action="{{ route('user.updateuserrole') }}">
						  {{ csrf_field() }}
						  
						  <div class="form-group passwordfield">
							<select class="form-control" name="user_type" id="user_role_type">
							  <option value="">Select User Type</option>
							  <option value="2">User</option>
							  <option value="3">Restaurant</option>
							</select>
						  </div>
						  <div class="formbutton signupbtn">
							 <button type="submit" class="btn" onclick="submituserrole(event);">Save
							 <span class=" spinner spinner-border text-light request_loader" style="display:none"></span></button>
						  </div>
					   </form>
					</div>
			  </div>
		   </div>
		</div>
	 </div>