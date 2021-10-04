@extends('frontend.creaters.landing.landing')
@section('pageTitle','About Us')
@section('content')

 <main class="site-content">
         <section class="innerbannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">About Us</h2>
               </div>
            </div>
         </section>
         <section class="innercontent abtcont">
            <div class="container p-0">
               <div class="row aboutrow reverserow">
                  <div class="col-md-6 abouttext innercontent_sec">
                     <h3 class="innerpagetitle wow fadeInUp" data-wow-duration="1500ms">What do we do?</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                  <div class="col-md-6 aboutimg">
                     <img src="{{asset('frontend/images/about1.png')}}" class="img-fluid" />
                  </div>
               </div>
               <div class="row aboutrow aboutleftrow">
                  <div class="col-md-6 aboutimg">
                     <img src="{{asset('frontend/images/about2.png')}}" class="img-fluid" />
                  </div>
                  <div class="col-md-6 abouttext innercontent_sec">
                     <h3 class="innerpagetitle wow fadeInUp" data-wow-duration="1500ms">Why Choose Us?</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
               </div>
               <div class="row aboutrow reverserow">
                  <div class="col-md-6 abouttext innercontent_sec">
                     <h3 class="innerpagetitle wow fadeInUp" data-wow-duration="1500ms">What do we do?</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                  <div class="col-md-6 aboutimg">
                     <img src="{{asset('frontend/images/about3.png')}}" class="img-fluid" />
                  </div>
               </div>
            </div>
         </section>
      </main>
@endsection