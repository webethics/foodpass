@extends('frontend.creaters.landing.landing')
@section('pageTitle','Affiliate')
@section('content')

<main class="site-content">
         <section class="innerbannersection affiliatebannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">Affiliate</h2>
               </div>
            </div>
         </section>
         <section class="innercontent aff_innersec">
            <div class="mobaff_img">
               <img src="{{asset('frontend/images/mobaffilitate-bg.png')}}" class="img-fluid" />		 
            </div>
            <div class="aff_innerbg">
               <div class="container">
                  <div class="row">
                     <div class="aff_innercont">
                        <span class="remark_span"><span class="remark">15</span>/20</span>
                        <h4>Total Earned :¢15</h4>
                        <h3>Refer friends. Get rewards</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                        <div class="form-group aff_input">
                           <input type="text" class="form-control" placeholder="https://www.foodpass.com/ref/referral=#12343?">
                           <i class="fa fa-copy"></i>
                        </div>
                        <div class="sharebtn">
                           <a href="#" class="getstarted">Share</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
 
@endsection