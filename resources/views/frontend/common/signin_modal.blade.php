<!-- Modal -->
<div class="modal formmodal" id="formmodal">
         <div class="modal-dialog">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <!-- Modal body -->
               <div class="modal-body">
                  <ul class="nav nav-tabs">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#login">Login</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#signup">Signup</a>
                     </li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane container active" id="login">
                        <div class="formarea">
                           <ul class="form_socialicons">
                              <li><a href="#"><img src="{{asset('frontend/images/facebook.svg')}}"><span>Facebook</span></a></li>
                              <li><a href="#"><img src="{{asset('frontend/images/google.svg')}}"><span>Google</span></a></li>
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
                              <li><a href="#"><img src="{{asset('frontend/images/facebook.svg')}}"><span>Facebook</span></a></li>
                              <li><a href="#"><img src="{{asset('frontend/images/google.svg')}}"><span>Google</span></a></li>
                           </ul>
                           <div class="formborder text-center">
                              <img src="{{asset('frontend/images/formborder.svg')}}" class="img-fluid" />
                           </div>
                           <form class="formwidget">
                              <div class="form-group">
                                 <input type="email" class="form-control" placeholder="Email" />
                              </div>
                              <div class="form-group passwordfield">
                                 <input type="password" class="form-control" placeholder="Password" />
                              </div>
                              <div class="form-group passwordfield">
                                 <input type="password" class="form-control" placeholder="Confirm Password" />
                              </div>
                              <div class="custom-control custom-checkbox form-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                 <label class="custom-control-label" for="customControlAutosizing">By continuing, you agree to our User Agreement and Privacy Policy</label>
                              </div>
                              <div class="formbutton signupbtn">
                                 <button type="submit" class="btn">Sign Up</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>