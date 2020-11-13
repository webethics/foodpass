<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ url('frontend/css/bootstrap-select.min.css')}}">
      <link rel="stylesheet" href="{{ url('frontend/css/fontawesome.min.css')}}" type="text/css">
      <link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image">
      <link rel="stylesheet" href="{{ url('frontend/css/animate.css')}}" type="text/css">
      <link rel="stylesheet" href="{{ url('frontend/css/style.css')}}" type="text/css">	
      <link rel="stylesheet" href="{{ url('frontend/css/slick.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{ url('frontend/css/slick-theme.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{ url('frontend/css/custom.css')}}" type="text/css" />
     <title>{{ showSiteTitle('title') }} | @yield('pageTitle')</title>
	  <script> 
		base_url ="{{ url('/') }}";
	</script > 
   </head>
   <body>
		@include('frontend.common.header')	
		@yield('content')
		@include('frontend.common.footer')
		
		<script src="{{ url('frontend/js/jquery-2.2.0.min.js')}}" type="text/javascript"></script>
		 <script src="{{ url('frontend/js/bootstrap.bundle.min.js')}}"></script> 
		  <script src="{{ url('frontend/js/bootstrap-select.min.js')}}"></script> 
		  <script src="{{ url('frontend/js/slick.js')}}"></script>
		  <script src="{{ url('frontend/js/wow.js')}}"></script>
		  <script src="{{ url('frontend/js/vendor/notifications.js')}}"></script>
	<script src="{{ url('frontend/js/module/login.js')}}"></script>	 
	<script src="{{ url('frontend/js/dore.script.js')}}"></script>	
	<script src="{{ url('frontend/js/custom.js')}}"></script>	
		  
		  <script type="text/javascript">
         $(document).on('ready', function() {
         $('.featuredslider').slick({
         centerMode: true,
         centerPadding: '0px',
         slidesToShow: 4,
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