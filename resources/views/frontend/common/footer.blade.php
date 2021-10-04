<footer class="site-footer">
         <div class="container">
            <div class="footercontsec">
               <div class="row footerrow">
                  <div class="col-md-5 footerinfo">
                     <div class="col-md-12 footerlogo p-0">
                        <img class="img-fluid" src="{{asset('frontend/images/footerlogo.png')}}">
                     </div>
                     <p>FOODPASS takes advantage of the newest <br/>technologies to deliver restaurant content straight</p>
                  </div>
                  <div class="col-md-7 footerlinks">
                     <div class="footerlink_widget">
                        <div class="footerlink_area">
                           <h4>Menu</h4>
                           <ul class="footerlink_list">
                              <li><a href="/">Home </a></li>
                              <li><a href="{{url('/about-us')}}">About Us</a></li>
							  <li><a href="{{url('/how-it-works')}}">How it Works</a></li>
                              <li><a href="{{url('/privacy')}}">Privacy policy</a></li>
                              <li><a href="{{url('/terms')}}">Terms</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="footerlink_widget">
                        <div class="footerlink_area">
                           <h4>Contact</h4>
                           <ul class="footerlink_list">
                              <li><a href="tel:+1 631 123 5481"><img src="{{asset('frontend/images/call.png')}}" />+1 631 123 5481 </a></li>
                              <li><a href="mailto:foodpass@mail.com"><img src="{{asset('frontend/images/mail.png')}}" />foodpass@mail.com</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="footerlink_widget">
                        <div class="footerlink_area">
                           <h4>Social</h4>
                           <ul class="footersocial_icons">
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footercopyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 footercopyright_left text-center">
                     <p>Copyright © FASTFOOD 2020 All Rights Reserved</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
	  @include('frontend.common.signin_modal')