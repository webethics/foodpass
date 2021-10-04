@extends('frontend.creaters.landing.landing')
@section('pageTitle','How It Works')
@section('content')


         <section class="innerbannersection workbannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">HOW IT WORKS</h2>
               </div>
            </div>
         </section>
         
         {!! $how_works->content !!}
         <section class="innercontent forumsection">
            <div class="container p-0">
               <div class="row subscriptionrow">
                  <div class="col forumleft">
                     <form class="forumform">
                        <div class="row">
                           <div class="col-md-12 form-group">
                              <label>How much € do you spend monthly on Ordering Food</label>
                              <input type="text" class="form-control" id="amount" placeholder="€">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 p-0">
                              <div class="form-group">
                                 <label>Average Discount % on Foodpass</label>
                                 <input type="text" id="discountprecent" class="form-control" placeholder="{{$settings->how_it_works}}%" value="{{$settings->how_it_works}}%" disabled>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 subscriptionformgrp">
                              <label>Subscription Type</label>
                              <div class="row">
							  <input type = "hidden" id="membership" value="">
                                 <div class="col-md-6 subscriptioninput cursor" data-id="1">
                                    <div class="form-group cursor">
                                       <span class="subs_circle redcircle cursor"></span>
									   <input type="text" class="form-control" placeholder="€ 3/Month">
                                    </div>
                                 </div>
                                 <div class="col-md-6 subscriptioninput cursor" data-id="3">
                                    <div class="form-group cursor">
                                       <span class="subs_circle greycircle cursor"></span>
									   <input type="text" class="form-control" placeholder="€ 12/Year (Save 2 months)">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row hide_show_class" style="display:none;">
                           <div class="col-md-12 form-group">
                              <label>Total Monthly Discount</label>
                              <input type="text" class="form-control" id="save_amount" placeholder="€" value = "">
                           </div>
                        </div>
                        <button type="submit" onclick="calculatediscount(event);" class="btn">GET STARTED</button>
                     </form>
                  </div>
                  <div class="col forumright">
                     <img src="{{asset('frontend/images/euro.svg')}}" />
                     <h2>Discount Form</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                  </div>
               </div>
            </div>
         </section>
		 <script src="{{ url('frontend/js/user.js')}}" type="text/javascript"></script>
@endsection