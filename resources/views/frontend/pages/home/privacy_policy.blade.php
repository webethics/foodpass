@extends('frontend.creaters.landing.landing')
@section('pageTitle','Privacy Policy')
@section('content')

         <section class="innerbannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">Privacy Policy</h2>
               </div>
            </div>
         </section>
         <section class="innercontent abtcont">
            {!! $privacy->content !!}
         </section>
@endsection