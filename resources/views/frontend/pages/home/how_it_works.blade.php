@extends('frontend.creaters.landing.landing')
@section('pageTitle','How It Works')
@section('content')


<main class="site-content">
         <section class="innerbannersection workbannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">HOW IT WORKS</h2>
               </div>
            </div>
         </section>
         <section class="innercontent abtcont workcont">
            <div class="container p-0">
               <div class="row aboutrow reverserow mb-0">
                  <div class="col-md-6 abouttext innercontent_sec">
                     <h3 class="innerpagetitle wow fadeInUp" data-wow-duration="1500ms">Why become a member?</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                     <a href="#" class="getstarted">GET STARTED</a>
                  </div>
                  <div class="col-md-6 aboutimg">
                     <img src="{{asset('frontend/images/become_member.png')}}" class="img-fluid" />
                  </div>
               </div>
            </div>
         </section>
         <section class="innercontent benefitsec">
            <div class="container p-0">
               <h2 class="pagetitle text-center wow fadeInUp" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">Benefits</h2>
               <div class="row mt-5">
                  <div class="col-md-4 benefitblk">
                     <div class="benefitblk_bg">
                        <div class="row">
                           <div class="col benefiticon">
                              <img src="{{asset('frontend/images/benefiticon.png')}}" />
                           </div>
                           <div class="col benefitcont">
                              <h3>Benefits 1</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                           </div>
                        </div>
                        <div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 benefitblk">
                     <div class="benefitblk_bg">
                        <div class="row">
                           <div class="col benefiticon">
                              <img src="{{asset('frontend/images/benefiticon.png')}}" />
                           </div>
                           <div class="col benefitcont">
                              <h3>Benefits 1</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                           </div>
                        </div>
                        <div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 benefitblk">
                     <div class="benefitblk_bg">
                        <div class="row">
                           <div class="col benefiticon">
                              <img src="{{asset('frontend/images/benefiticon.png')}}" />
                           </div>
                           <div class="col benefitcont">
                              <h3>Benefits 1</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                           </div>
                        </div>
                        <div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-2 blandiv">
                  </div>
                  <div class="col-md-4 benefitblk">
                     <div class="benefitblk_bg">
                        <div class="row">
                           <div class="col benefiticon">
                              <img src="{{asset('frontend/images/benefiticon.png')}}" />
                           </div>
                           <div class="col benefitcont">
                              <h3>Benefits 1</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                           </div>
                        </div>
                        <div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 benefitblk">
                     <div class="benefitblk_bg">
                        <div class="row">
                           <div class="col benefiticon">
                              <img src="{{asset('frontend/images/benefiticon.png')}}" />
                           </div>
                           <div class="col benefitcont">
                              <h3>Benefits 1</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                           </div>
                        </div>
                        <div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-2 blandiv">
                  </div>
               </div>
            </div>
         </section>
         <section class="innercontent forumsection">
            <div class="container p-0">
               <div class="row subscriptionrow">
                  <div class="col forumleft">
                     <form class="forumform">
                        <div class="row">
                           <div class="col-md-12 form-group">
                              <label>How much € do you spend monthly on Ordering Food</label>
                              <input type="text" class="form-control" placeholder="€">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 p-0">
                              <div class="form-group">
                                 <label>Average Discount % on Foodpass</label>
                                 <input type="text" class="form-control" placeholder="9%">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 subscriptionformgrp">
                              <label>Subscription Type</label>
                              <div class="row">
                                 <div class="col-md-6 subscriptioninput activeinput">
                                    <div class="form-group">
                                       <span class="subs_circle redcircle"></span><input type="text" class="form-control" placeholder="€ 300/Month">
                                    </div>
                                 </div>
                                 <div class="col-md-6 subscriptioninput">
                                    <div class="form-group">
                                       <span class="subs_circle greycircle"></span><input type="text" class="form-control" placeholder="€ 3000/Year (Save 2 months)">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 form-group">
                              <label>Total Monthly Discount</label>
                              <input type="text" class="form-control" placeholder="€">
                           </div>
                        </div>
                        <button type="submit" class="btn">GET STARTED</button>
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
      </main>
@endsection