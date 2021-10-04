@extends('frontend.creaters.landing.landing')
@section('pageTitle','FAQ')
@section('content')

         <section class="innerbannersection faqbannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">FAQ</h2>
               </div>
            </div>
         </section>
         <section class="innercontent faqcont">
		 {!! $faq->content !!}
         </section>
@endsection