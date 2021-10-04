@extends('frontend.creaters.landing.landing')
@section('pageTitle','About Us')
@section('content')

         <section class="innerbannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">About Us</h2>
               </div>
            </div>
         </section>
         <section class="innercontent abtcont">
		 {!! $about_content->content !!}
         </section>
@endsection