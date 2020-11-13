@extends('frontend.creaters.landing.landing')
@section('pageTitle','Landing')
@section('content')
<main class="site-content">
         <section class="bannersection videoheader">
            <div class="container">
               <div class="videooverlay"></div>
               <video autoplay="autoplay" muted="muted">
                  <source src="{{asset('frontend/videos/FoodpassHomepageMainbackground.mp4')}}" type="video/mp4">
               </video>
               <h1 class="wow fadeInUp" data-wow-duration="1500ms">Find Your Perfect Food <br/>Everyday</h1>
               <form class="form-inline searchform justify-content-center mt-4">
                  <input class="form-control mr-sm-2" type="search" placeholder="Enter Location" aria-label="Search">
                  <button class="btn" type="submit"><img src="{{asset('frontend/images/arrowwhite.png')}}" /></button>
               </form>
            </div>
         </section>
         <section class="homesection howitwork_sec">
            <div class="container">
               <h2 class="pagetitle text-center wow fadeInUp" data-wow-duration="1500ms">How It Works</h2>
               <div class="row mt-5">
                  <div class="col-md-4 workblk">
                     <div class="workblk_bg blue_bg">
                        <img src="{{asset('frontend/images/findlocation.png')}}" />
                        <h3>Find Location</h3>
                        <p>Enter your address or let us determine your position.</p>
                     </div>
                  </div>
                  <div class="col-md-4 workblk">
                     <div class="workblk_bg green_bg">
                        <img src="{{asset('frontend/images/coupon.png')}}" />
                        <h3>Choose a Coupon</h3>
                        <p>What do you fancy? Scroll through numerous menus and ratings.</p>
                     </div>
                  </div>
                  <div class="col-md-4 workblk">
                     <div class="workblk_bg pink_bg">
                        <img src="{{asset('frontend/images/delivered.png')}}" />
                        <h3>Order and have it delivered</h3>
                        <p>Pay cash or online with Credit card, PayPal. Enjoy your meal!</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="homesection about_sec">
            <div class="container">
               <h2 class="pagetitle text-center wow fadeInUp" data-wow-duration="1500ms">About Us</h2>
               <p class="text-center mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis eleifend quam adipiscing vitae proin sagittis nisl. Venenatis a condimentum vitae sapien pellentesque habitant. Ornare arcu odio ut sem. Non quam lacus suspendisse faucibus interdum posuere lorem. Dui ut ornare lectus sit amet est. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam erat.</p>
               <div class="row">
                  <div class="col-md-12 aboutimg mt-5">
                     <img src="{{asset('frontend/images/aboutimg.jpg')}}" class="img-fluid" />
                  </div>
               </div>
            </div>
         </section>
         <section class="homesection featured_sec">
            <div class="container">
               <h2 class="pagetitle text-center wow fadeInUp" data-wow-duration="1500ms">Featured Coupons</h2>
               <section class="featuredslider center slider mt-5">
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
                        </div>
                        <div class="featured_blkcontsec">
                           <span class="offer_tag">20%<br/><span class="lightweight">Off</span></span>
                           <h4>Free Sauce on Fries</h4>
                           <span class="date">Valid Till : 25 Oct, 2020</span>
                           <div class="borderdiv">
                              <span class="borderleft"></span>
                              <span class="borderright"></span>
                           </div>
                           <div class="featured_blkcont">
                              <h5>Johnny's Burgers</h5>
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
                        </div>
                        <div class="featured_blkcontsec">
                           <span class="offer_tag freecoupon">Free</span>
                           <h4>Free Sauce on Fries</h4>
                           <span class="date">Valid Till : 25 Oct, 2020</span>
                           <div class="borderdiv">
                              <span class="borderleft"></span>
                              <span class="borderright"></span>
                           </div>
                           <div class="featured_blkcont">
                              <h5>Johnny's Burgers</h5>
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
                        </div>
                        <div class="featured_blkcontsec">
                           <span class="offer_tag freecoupon">Free</span>
                           <h4>Free Sauce on Fries</h4>
                           <span class="date">Valid Till : 25 Oct, 2020</span>
                           <div class="borderdiv">
                              <span class="borderleft"></span>
                              <span class="borderright"></span>
                           </div>
                           <div class="featured_blkcont">
                              <h5>Johnny's Burgers</h5>
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
                        </div>
                        <div class="featured_blkcontsec">
                           <span class="offer_tag freecoupon">Free</span>
                           <h4>Free Sauce on Fries</h4>
                           <span class="date">Valid Till : 25 Oct, 2020</span>
                           <div class="borderdiv">
                              <span class="borderleft"></span>
                              <span class="borderright"></span>
                           </div>
                           <div class="featured_blkcont">
                              <h5>Johnny's Burgers</h5>
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
                        </div>
                        <div class="featured_blkcontsec">
                           <span class="offer_tag">20%<br/><span class="lightweight">Off</span></span>
                           <h4>Free Sauce on Fries</h4>
                           <span class="date">Valid Till : 25 Oct, 2020</span>
                           <div class="borderdiv">
                              <span class="borderleft"></span>
                              <span class="borderright"></span>
                           </div>
                           <div class="featured_blkcont">
                              <h5>Johnny's Burgers</h5>
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
                        </div>
                        <div class="featured_blkcontsec">
                           <span class="offer_tag freecoupon">Free</span>
                           <h4>Free Sauce on Fries</h4>
                           <span class="date">Valid Till : 25 Oct, 2020</span>
                           <div class="borderdiv">
                              <span class="borderleft"></span>
                              <span class="borderright"></span>
                           </div>
                           <div class="featured_blkcont">
                              <h5>Johnny's Burgers</h5>
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
                        </div>
                        <div class="featured_blkcontsec">
                           <span class="offer_tag freecoupon">Free</span>
                           <h4>Free Sauce on Fries</h4>
                           <span class="date">Valid Till : 25 Oct, 2020</span>
                           <div class="borderdiv">
                              <span class="borderleft"></span>
                              <span class="borderright"></span>
                           </div>
                           <div class="featured_blkcont">
                              <h5>Johnny's Burgers</h5>
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
                        </div>
                        <div class="featured_blkcontsec">
                           <span class="offer_tag freecoupon">Free</span>
                           <h4>Free Sauce on Fries</h4>
                           <span class="date">Valid Till : 25 Oct, 2020</span>
                           <div class="borderdiv">
                              <span class="borderleft"></span>
                              <span class="borderright"></span>
                           </div>
                           <div class="featured_blkcont">
                              <h5>Johnny's Burgers</h5>
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </section>
         <section class="homesection offersec">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offercont mt-4">
                     <h2 class="pagetitle wow fadeInUp" data-wow-duration="1500ms">Never Miss a <br/> Daily Offer Again</h2>
                     <p>Deal Alert is looking for daily offers for you And sends you a notification as soon as something is found</p>
                     <a href="#">Get Alert</a>
                  </div>
                  <div class="col-md-6 offerimg mt-4">
                     <img src="{{asset('frontend/images/alert.png')}}" class="img-fluid" />
                  </div>
               </div>
            </div>
         </section>
      </main>
	  @endsection