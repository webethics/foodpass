<?php   
	//$currentAction = \Route::currentRouteAction();
    //list($controller, $method) = explode('@', $currentAction); 
   // $controller = preg_replace('/.*\\\/', '', $controller);  
    ?>
     <nav class="navbar navbar-expand-lg navigationbar" id="navigationbar">
         <div class="container p-0">
            <a class="navbar-brand" href="/"><img src="{{asset('frontend/images/logo.png')}}" class="img-fluid" /></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('/how-it-works')}}">How It Works</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('/contact-us')}}">Contact</a>
                  </li>
               </ul>
            </div>
            <div class="userprofile_img">
               <div class="notoficationicon">
                  <a href="#"><img src="{{asset('frontend/images/bell.svg')}}" /><span>4</span></a>
               </div>
			   
			    @if(!Auth::user())
					<a href="#" data-toggle="modal" data-target="#formmodal"><img src="{{asset('frontend/images/usericon.png')}}" /></a>
			   @else
					<a href="{{('/logout')}}" class="btn btn-danger" style="margin-left:20px">{{trans('common.logout')}} </a>   
				 @endif
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
            </div>
         </div>
      </nav>