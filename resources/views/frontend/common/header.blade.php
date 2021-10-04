 @if(Auth::user() && Auth::user()->role_id == 3)
	 <nav class="navbar navbar-expand-lg navigationbar" id="navigationbar">
         <div class="container p-0">
            <a class="navbar-brand" href="/"><img src="{{asset('frontend/images/logo.png')}}" class="img-fluid" /></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "") echo "active";?>">
                     <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "about-us") echo "active";?>">
                     <a class="nav-link" href="{{url('/about-us')}}">Over ons</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?php if(collect(request()->segments())->last() == "how-it-works") echo "active";?>" href="{{url('/how-it-works')}}">Hoe werkt het</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?php if(collect(request()->segments())->last() == "faq") echo "active";?>" href="{{url('/faq')}}">FAQ</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?php if(collect(request()->segments())->last() == "contact-us") echo "active";?>" href="{{url('/contact-us')}}">Contact</a>
                  </li>
				  <input type = "hidden" id="user_role" value="{{ Auth::user()->role_id }}">
				  <input type = "hidden" id="login_user_id" value="{{ Auth::user()->id }}">
               </ul>
            </div>
            <div class="userprofile_img">
               <div class="notoficationicon">
                 <!-- <a href="#"><img src="{{asset('frontend/images/bell.svg')}}" /><span>4</span></a> -->
               </div>
			   <div class="dropdown hdrdropdown">
				  <a href="" class="dropdown-toggle" data-toggle="dropdown">
					  @php
							$photo =  profile_photo(auth::user()->id);
							$user_data = user_data();
					  @endphp
					  @if($user_data->profile_photo != "" && $user_data->profile_photo != null)
						<img src="{{timthumb($photo,80,80)}}" />
					  @else
						  <img src="{{asset('frontend/images/usericon.png')}}" />
					  @endif	
				  </a>
				  <div class="dropdown-menu">
					<a class="dropdown-item" href="{{('/store-profile')}}">My Profile</a>
					<a class="dropdown-item" href="{{('/logout')}}">Logout</a>
				  </div>
				</div>
			   	<!--<a href="{{('/logout')}}" class="btn btn-danger" style="margin-left:20px">{{trans('common.logout')}} </a>-->
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
            </div>
         </div>
      </nav>
	  @elseif(Auth::user() && Auth::user()->role_id != 3 && Auth::user()->role_id != 1)
	  <?php
	  $get_notification = App\Models\Alerts::where('user_id',Auth::user()->id)->where('is_read',0)->count();
	  ?>
	  <nav class="navbar navbar-expand-lg navigationbar" id="navigationbar">
         <div class="container p-0">
            <a class="navbar-brand" href="/"><img src="{{asset('frontend/images/logo.png')}}" class="img-fluid" /></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "") echo "active";?>">
                     <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "about-us") echo "active";?>">
                     <a class="nav-link" href="{{url('/about-us')}}">Over ons</a>
                  </li>
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "how-it-works") echo "active";?>">
                     <a class="nav-link" href="{{url('/how-it-works')}}">Hoe werkt het</a>
                  </li>
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "faq") echo "active";?>">
                     <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
                  </li>
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "contact-us") echo "active";?>">
                     <a class="nav-link" href="{{url('/contact-us')}}">Contact</a>
                  </li>
				  <input type = "hidden" id="user_role" value="{{ Auth::user()->role_id }}">
				  <input type = "hidden" id="login_user_id" value="{{ Auth::user()->id }}">
               </ul>
            </div>
            <div class="userprofile_img">
               <div class="notoficationicon">
                  <a href="{{('/alerts')}}">
					<img src="{{asset('frontend/images/bell.svg')}}" />
					@if($get_notification > 0)
					<span>{{ $get_notification }}</span>
					@endif
				  </a>
               </div>
			   <div class="dropdown hdrdropdown">
				  <a href="" class="dropdown-toggle" data-toggle="dropdown">
					  @php
							$photo =  profile_photo(auth::user()->id);
							$user_data = user_data();
					  @endphp
					  @if($user_data->profile_photo != "" && $user_data->profile_photo != null)
						<img src="{{timthumb($photo,80,80)}}" />
					  @else
						  <img src="{{asset('frontend/images/usericon.png')}}" />
					  @endif	
				  </a>
				  <div class="dropdown-menu">
					<a class="dropdown-item" href="{{('/profile')}}">My Profile</a>
					<a class="dropdown-item" href="{{('/logout')}}">Logout</a>
				  </div>
				</div>
			   <!--	<a href="{{('/logout')}}" class="btn btn-danger" style="margin-left:20px">{{trans('common.logout')}} </a>-->
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
            </div>
         </div>
      </nav>
	  @else
		<nav class="navbar navbar-expand-lg navigationbar" id="navigationbar">
         <div class="container p-0">
            <a class="navbar-brand" href="/"><img src="{{asset('frontend/images/logo.png')}}" class="img-fluid" /></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "") echo "active";?>">
                     <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "about-us") echo "active";?>">
                     <a class="nav-link" href="{{url('/about-us')}}">Over ons</a>
                  </li>
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "how-it-works") echo "active";?>">
                     <a class="nav-link" href="{{url('/how-it-works')}}">Hoe werkt het</a>
                  </li>
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "faq") echo "active";?>">
                     <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
                  </li>
                  <li class="nav-item <?php if(collect(request()->segments())->last() == "contact-us") echo "active";?>">
                     <a class="nav-link" href="{{url('/contact-us')}}">Contact</a>
                  </li>
				  <input type = "hidden" id="user_role" value="">
				  <input type = "hidden" id="login_user_id" value="">
               </ul>
            </div>
            <div class="userprofile_img">
               <div class="notoficationicon">
                  <!--<a href="#"><img src="{{asset('frontend/images/bell.svg')}}" /><span>4</span></a>-->
               </div>
			   	<a href="#" data-toggle="modal" data-target="#formmodal"><img src="{{asset('frontend/images/usericon.png')}}" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
            </div>
         </div>
      </nav>
     @endif
     <link rel="stylesheet" href="https://cdn.rawgit.com/infostreams/bootstrap-select/fd227d46de2afed300d97fd0962de80fa71afb3b/dist/css/bootstrap-select.min.css" />
     <script src="https://cdn.rawgit.com/infostreams/bootstrap-select/fd227d46de2afed300d97fd0962de80fa71afb3b/dist/js/bootstrap-select.min.js"></script>