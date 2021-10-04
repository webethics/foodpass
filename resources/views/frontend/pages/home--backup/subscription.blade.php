@extends('frontend.creaters.landing.landing')
@section('pageTitle','Subscription')
@section('content')

<main class="site-content">
         <section class="innerbannersection subscribebannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">Subscription</h2>
               </div>
            </div>
         </section>
         <section class="innercontent subscribe_section">
            <div class="container p-0">
            <div class="row">
               <div class="col-md-6 subscribe_left">
                  <div class="subscribe_blk redblock">
                     <div class="subscribe_cont">
                        <h4>Annual <br/> First 2 weeks free</h4>
                        <p>$69.99/year, that's $5.83/month</p>
                     </div>
                     <div class="subscribe_btn">
                        <a href="#">best value</a>
                     </div>
                  </div>
                  <div class="subscribe_blk yellowblock">
                     <div class="subscribe_cont">
                        <h4>Monthly <br/> First 1 weeks free</h4>
                        <p>$12.99/month</p>
                     </div>
                     <div class="subscribe_btn">
                        <a href="#">get coupon</a>
                     </div>
                  </div>
                  <ul class="subs_benefits">
                     <h3>Benefits</h3>
                     <li>Unlock the full Foodpass experience.</li>
                     <li>A new dishes everyday.</li>
                     <li>Get food delivery on your door.</li>
                     <li>Order food, Get food and enjoy food.</li>
                  </ul>
               </div>
               <div class="col-md-6 subscribe_right">
                  <div class="forumleft">
                     <form class="forumform">
                        <h2>Subscription</h2>
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <label>First Name</label>
                              <input type="text" class="form-control" placeholder="" value="John">
                           </div>
                           <div class="col-md-6 form-group">
                              <label>Last Name</label>
                              <input type="text" class="form-control" placeholder="" value="Doe">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 form-group">
                              <label>Address</label>
                              <input type="text" class="form-control" placeholder="" value="222 Pulaski St, Dunellen">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <label>Postcode</label>
                              <input type="text" class="form-control" placeholder="" value="088122">
                           </div>
                           <div class="col-md-6 form-group">
                              <label>City</label>
                              <input type="text" class="form-control" placeholder="" value="New York">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="" value="johndoe123@mail.com">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <label>Tel nr</label>
                              <input type="text" class="form-control" placeholder="" value="202-555-0139">
                           </div>
                           <div class="col-md-6 form-group">
                              <label>IBAN</label>
                              <input type="text" class="form-control" placeholder="" value="">
                           </div>
                        </div>
                        <div class="custom-control custom-checkbox form-checkbox">
                           <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                           <label class="custom-control-label" for="customControlAutosizing">Bank collection permission</label>
                        </div>
                        <button type="submit" class="btn text-uppercase">submit</button>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </main>
 
@endsection