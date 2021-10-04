<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="">
    <meta name="author" content="">
	  <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ url('frontend/css/bootstrap-select.min.css')}}">
      <link rel="stylesheet" href="{{ url('frontend/css/fontawesome.min.css')}}" type="text/css">
      <link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image">
      <link rel="stylesheet" href="{{ url('frontend/css/animate.css')}}" type="text/css">
      <link rel="stylesheet" href="{{ url('frontend/css/style.css')}}" type="text/css">	
      <link rel="stylesheet" href="{{ url('frontend/css/slick.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{ url('frontend/css/slick-theme.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{ url('frontend/css/croppie.min.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{ url('frontend/css/toastr.min.css')}}" type="text/css" />
	  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	  <link rel="stylesheet" href="{{ url('frontend/css/custom.css')}}" type="text/css" />
	  <script src="{{ url('frontend/js/jquery-2.2.0.min.js')}}" type="text/javascript"></script>
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCv7y5VKmkH23_g213OnkY0UoIYNjNfow&sensor=false&amp;libraries=places" type="text/javascript"></script>
     <title>{{ showSiteTitle('title') }} | @yield('pageTitle')</title>
	  <script> 
		base_url ="{{ url('/') }}";
	</script > 
   </head>
   <body>
		@include('frontend.common.header')	
		
		<main class="site-content">
		@include('flash-message')
		@yield('content')
		</main>
		@include('frontend.common.footer')
		
		
		 <script src="{{ url('frontend/js/bootstrap.bundle.min.js')}}"></script> 
		 <script src="{{ url('frontend/js/bootstrap-select.min.js')}}"></script> 
		 <script src="{{ url('frontend/js/slick.js')}}"></script>
	     <script src="{{ url('frontend/js/wow.js')}}"></script>
		<script src="{{ url('frontend/js/vendor/notifications.js')}}"></script>
		<script src="{{ url('frontend/js/module/login.js')}}"></script>	 
		<script src="{{ url('frontend/js/dore.script.js')}}"></script>
		<script src="{{ url('frontend/js/toastr.min.js')}}"></script>	
		
		  
		  <script type="text/javascript">
         $(document).on('ready', function() {
         $('.featuredslider').slick({
         centerMode: true,
         centerPadding: '0px',
         slidesToShow: 3,
         autoplay: true,
         arrows: true,
         autoplaySpeed: 2000,
         responsive: [
         
         {
           breakpoint: 1199,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 3
           }
         },
         {
           breakpoint: 991,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 2
           }
         },
         
         {
           breakpoint: 480,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 1
           }
         }
         ]
         });
         
         });
      </script>
      <script>
         wow = new WOW(
           {
             animateClass: 'animated',
             offset:       100,
             callback:     function(box) {
               console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
             }
           }
         );
         wow.init();
       /*   document.getElementById('moar').onclick = function() {
           var section = document.createElement('section');
           section.className = 'section--purple wow fadeInDown';
           this.parentNode.insertBefore(section, this);
         }; */
      </script>
   </body>
</html>