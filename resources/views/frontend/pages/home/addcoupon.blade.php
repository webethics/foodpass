@extends('frontend.creaters.landing.landing')
@section('pageTitle','Addcoupon')
@section('content')
<main class="site-content">
         <div class="container-fluid innercontainer">
            <div class="row">
               <div class="col leftsidebarsec dashboardsidebar mt-0">
                  <div class="sidebar_cont profilesidebar">
                     <ul class="accordion profilelist" id="accordion">
                        <li class="nav-link dropdown-toggle couponlink">
                           <a href="booking.html">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs></defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path class="b" d="M19,21H5a1,1,0,0,1-1-1V11H1L11.327,1.612a1,1,0,0,1,1.346,0L23,11H20v9A1,1,0,0,1,19,21Zm-6-2h5V9.157L12,3.7,6,9.157V19h5V13h2Z"/>
                                 </svg>
                                 Booking
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle couponlink">
                           <a href="makecoupon.html">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                    <defs>
                                       <style>.a{fill:none;}.b{fill:#0f0f0f;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H22V22H0Z"/>
                                    <path class="b" d="M2,8.778V3.889A.894.894,0,0,1,2.9,3H19.1a.894.894,0,0,1,.9.889V8.778a2.222,2.222,0,1,0,0,4.444v4.889a.894.894,0,0,1-.9.889H2.9a.894.894,0,0,1-.9-.889V13.222A2.222,2.222,0,1,0,2,8.778ZM3.8,7.416a3.978,3.978,0,0,1,0,7.168v2.638H18.2V14.584a3.978,3.978,0,0,1,0-7.168V4.778H3.8Zm4.5.917h5.4v1.778H8.3Zm0,3.556h5.4v1.778H8.3Z" transform="translate(0)"/>
                                 </svg>
                                 Coupons
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle couponlink active">
                           <a href="store-profile.html">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H22V22H0Z"/>
                                    <path d="M18,20H16.25V18.19a2.671,2.671,0,0,0-2.625-2.714H8.375A2.671,2.671,0,0,0,5.75,18.19V20H4V18.19a4.451,4.451,0,0,1,4.375-4.524h5.25A4.451,4.451,0,0,1,18,18.19Zm-7-8.143A5.342,5.342,0,0,1,5.75,6.429,5.342,5.342,0,0,1,11,1a5.342,5.342,0,0,1,5.25,5.429A5.342,5.342,0,0,1,11,11.857Zm0-1.81a3.561,3.561,0,0,0,3.5-3.619A3.561,3.561,0,0,0,11,2.81,3.561,3.561,0,0,0,7.5,6.429,3.561,3.561,0,0,0,11,10.048Z"/>
                                 </svg>
                                 Profile
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col rightcontentsec dashboardcontsec">
                  <section class="storesection innersection couponsection">
                     <h2>Make a coupon </h2>
                     <div class="addcouponsec">
                        <div class="container p-0">
                           <div class="row">
                              <div class="col-md-4 addcpn_image">
                                 <h4>Select product</h4>
                                 <div class="uploadimage_blk">
                                    <div class="circle">
                                       <!-- User Profile Image -->
                                       <img class="profile-pic" src="">
                                       <!-- Default Image -->
                                       <!-- <i class="fa fa-user fa-5x"></i> -->
                                    </div>
                                    <div class="p-image">
                                       <div class="upload-button">
                                          <img src="{{asset('frontend/images/picture.svg')}}" />
                                          <span class="selpdtlabel">Select Product</span>
                                       </div>
                                       <input class="file-upload" type="file" accept="image/*"/>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-8 addcpm_form">
                                 <form class="forumform addcouponform">
                                    <div class="row">
                                       <div class="col-md-6 form-group">
                                          <label>Product Name</label>
                                          <input type="text" class="form-control" placeholder="Enter Product Name" value="">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label>Expire time and date</label>
                                          <div class="row expirerow">
                                             <div class="col-md-6 expireinput">
                                                <input id="datepicker1" class="form-control" placeholder="From" />
                                             </div>
                                             <div class="col-md-6 expireinput">
                                                <input id="datepicker2" class="form-control" placeholder="Until" /> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6 form-group">
                                          <label>Current Price</label>
                                          <input type="text" class="form-control" placeholder="Current Price" value="">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label>Min. Order Price</label>
                                          <input type="text" class="form-control" placeholder="Enter min Order Price" value="">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6 form-group">
                                          <label>Pickup/Delivery</label>
                                          <div class="select-data sortselect">
                                             <select class="selectpicker">
                                                <option>Select Pickup/Delivery</option>
                                                <option>Delivery 1</option>
                                                <option>Delivery 2</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label>Delivery Costs</label>
                                          <input type="text" class="form-control" placeholder="Enter delivery costs" value="">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12 form-group">
                                          <div class="cpntype_div">
                                             <div class="cpntype_hdr">
                                                <label>Select Coupon type</label>
                                                <div class="cpntype_btns">
                                                   <span class="active">€</span>
                                                   <span>%</span>
                                                   <span class="active">Free</span>
                                                </div>
                                             </div>
                                             <div class="cpntype_input">
                                                <div class="cpntype_formgroup">
                                                   <input type="text" class="form-control" placeholder="Discount €" value="" />
                                                   <input type="text" class="form-control" placeholder="New Price" value="" />
                                                </div>
                                                <div class="cpntype_formgroup">
                                                   <input type="text" class="form-control" placeholder="Discount €" value="" />
                                                   <input type="text" class="form-control" placeholder="New Price" value="" />
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12 form-group">
                                          <label>Details</label>
                                          <textarea class="form-control" rows="3"></textarea>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12 submitbtn">
                                          <button type="submit" class="btn text-uppercase">Save Coupon</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>
	  
	  
	  <script>
         // Selectable
         
         const list1 = document.getElementById("switch1");
         
         const selectable1 = new Selectable({
         filter: list1.children,
         appendTo: list1
         });
         
         const list2 = document.getElementById("switch2");
         
         const selectable2 = new Selectable({
         filter: list2.children,
         appendTo: list2
         });
         
      </script>
      <script>
         $(function() {
         	var Accordion = function(el, multiple) {
         		this.el = el || {};
         		this.multiple = multiple || false;
         
         		// Variables privadas
         		var links = this.el.find('.link');
         		// Evento
         		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
         	}
         
         	Accordion.prototype.dropdown = function(e) {
         		var $el = e.data.el;
         			$this = $(this),
         			$next = $this.next();
         
         		$next.slideToggle();
         		$this.parent().toggleClass('open');
         
         
         	}	
         
         	var accordion = new Accordion($('#accordion'), false);
         });
      </script>
      <script>
         $('#datepicker1').datetimepicker({ footer: true});
         $('#datepicker2').datetimepicker({ footer: true});
      </script>
   </body>
   <!-- The Modal -->
   <div class="modal getcpn_modal" id="couponmodal">
      <div class="modal-dialog">
         <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- Modal body -->
            <div class="modal-body">
               <img src="{{asset('frontend/images/elcarne.png')}}" />
               <h4>Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
               <h5>Buy 2 Burgers, get 1 free!</h5>
               <p>Bestel twee burgers en ontvang de derde gratis!</p>
               <p>Expires on 31/10/2020 at 23:59</p>
               <a href="#getcpnbtn1" data-toggle="modal" data-target="#couponmodal2" class="getcpnbtn">Get Coupon</a>
            </div>
         </div>
      </div>
   </div>
   <!-- The Modal -->
   <div class="modal getcpn_modal getcpn_modal2" id="couponmodal2">
      <div class="modal-dialog">
         <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- Modal body -->
            <div class="modal-body">
               <img src="{{asset('frontend/images/elcarne.png')}}" />
               <h4>Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
               <h5>Buy 2 Burgers, get 1 free!</h5>
               <p>Bestel twee burgers en ontvang de derde gratis!</p>
               <p class="mb-0">Expires on 31/10/2020 at 23:59</p>
               <p class="mb-0">Client no : 54567</p>
               <h3>Ordernumber : 596 5543</h3>
               <div class="coupon_code">
                  <div class="row">
                     <div class="col-md-8">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetng industry. Lorem Ipsum has been the industry's standard dummy text ever..</p>
                     </div>
                     <div class="col-md-4 scannerimg">
                        <img src="{{asset('frontend/images/scanner.png')}}" />
                     </div>
                  </div>
               </div>
               <a href="#" data-dismiss="modal">Get Coupon</a>
            </div>
         </div>
      </div>
   </div>
   <!-- The Modal -->
   <div class="modal getcpn_modal couponmodal1" id="couponmodal">
      <div class="modal-dialog">
         <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- Modal body -->
            <div class="modal-body">
               <img src="{{asset('frontend/images/elcarne.png')}}" />
               <h4>Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
               <h5>Buy 2 Burgers, get 1 free!</h5>
               <p>Bestel twee burgers en ontvang de derde gratis!</p>
               <p>Expires on 31/10/2020 at 23:59</p>
               <a href="" id="getcpnbtn1" data-toggle="modal" data-target="#couponmodal2" class="getcpnbtn">Get Coupon</a>
            </div>
         </div>
      </div>
   </div>
   <!-- The Modal -->
   <div class="modal getcpn_modal getcpn_modal2" id="couponmodal2">
      <div class="modal-dialog">
         <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- Modal body -->
            <div class="modal-body">
               <img src="{{asset('frontend/images/elcarne.png')}}" />
               <h4>Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
               <h5>Buy 2 Burgers, get 1 free!</h5>
               <p>Bestel twee burgers en ontvang de derde gratis!</p>
               <p class="mb-0">Expires on 31/10/2020 at 23:59</p>
               <p class="mb-0">Client no : 54567</p>
               <h3>Ordernumber : 596 5543</h3>
               <div class="coupon_code">
                  <div class="row">
                     <div class="col-md-8">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetng industry. Lorem Ipsum has been the industry's standard dummy text ever..</p>
                     </div>
                     <div class="col-md-4 scannerimg">
                        <img src="{{asset('frontend/images/scanner.png')}}" />
                     </div>
                  </div>
               </div>
               <div class="couponbtns">
                  <a href="#" class="orderbtn">Order Online</a>
                  <a href="#" class="storebtn">Call Store</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
      $(document).ready(function(){
          $( '.getcpnbtn' ).click(function() {
      		$( '.modal.getcpn_modal2' ).css('background-color', 'rgba(0,0,0,0.2)');
          });	
      });
      
      
   </script>
 
@endsection