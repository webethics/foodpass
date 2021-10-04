@extends('frontend.creaters.landing.landing')
@section('pageTitle','Make Coupon')
@section('content')

	<main class="site-content">
         <div class="container-fluid innercontainer">
            <div class="row">
               <div class="col leftsidebarsec dashboardsidebar mt-0">
                  <div class="sidebar_cont profilesidebar">
                     <ul class="accordion profilelist" id="accordion">
                        <li class="nav-link dropdown-toggle couponlink">
                           <a href="{{url('booking')}}">
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
                        <li class="nav-link dropdown-toggle couponlink active">
                           <a href="{{url('makecoupon')}}">
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
                        <li class="nav-link dropdown-toggle couponlink">
                           <a href="{{url('store-profile')}}">
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
                     <h2>Make a coupon <a href="{{url('/addcoupon')}}" class="addbtn"><i class="fa fa-plus"></i>Add</a></h2>
                     <div class="tablerow">
                        <div class="tablediv coupontablediv">
                           <table>
                              <tr>
                                 <th class="productimg_data"></th>
                                 <th>Product Name</th>
                                 <th>Expire date & time</th>
                                 <th>Current Price</th>
                                 <th>Min. Order Price</th>
                                 <th>Pickup/Delivery</th>
                                 <th>Delivery Cost</th>
                                 <th>Coupon Type</th>
                                 <th>New Price</th>
                                 <th>Action</th>
                              </tr>
                              <tr>
                                 <td class="profileimg"><img src="{{asset('frontend/images/productimg.png')}}" /></td>
                                 <td>101 Wine Press</td>
                                 <td>25 Oct, 2020 & 9:00am</td>
                                 <td>€ 100</td>
                                 <td>€ 200</td>
                                 <td>Pickup</td>
                                 <td>€ 10</td>
                                 <td>€ 50</td>
                                 <td>€ 50</td>
                                 <td class="actionbtn_icons"><a href="#"><img src="{{asset('frontend/images/eyeicon.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/edit-line.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/delete-bin-line.svg')}}" /></a></td>
                              </tr>
                              <tr>
                                 <td class="profileimg"><img src="{{asset('frontend/images/productimg.png')}}" /></td>
                                 <td>101 Wine Press</td>
                                 <td>25 Oct, 2020 & 9:00am</td>
                                 <td>€ 100</td>
                                 <td>€ 200</td>
                                 <td>Pickup</td>
                                 <td>€ 10</td>
                                 <td>€ 50</td>
                                 <td>€ 50</td>
                                 <td class="actionbtn_icons"><a href="#"><img src="{{asset('frontend/images/eyeicon.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/edit-line.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/delete-bin-line.svg')}}" /></a></td>
                              </tr>
                              <tr>
                                 <td class="profileimg"><img src="{{asset('frontend/images/productimg.png')}}" /></td>
                                 <td>101 Wine Press</td>
                                 <td>25 Oct, 2020 & 9:00am</td>
                                 <td>€ 100</td>
                                 <td>€ 200</td>
                                 <td>Pickup</td>
                                 <td>€ 10</td>
                                 <td>€ 50</td>
                                 <td>€ 50</td>
                                 <td class="actionbtn_icons"><a href="#"><img src="{{asset('frontend/images/eyeicon.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/edit-line.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/delete-bin-line.svg')}}" /></a></td>
                              </tr>
                              <tr>
                                 <td class="profileimg"><img src="{{asset('frontend/images/productimg.png')}}" /></td>
                                 <td>101 Wine Press</td>
                                 <td>25 Oct, 2020 & 9:00am</td>
                                 <td>€ 100</td>
                                 <td>€ 200</td>
                                 <td>Pickup</td>
                                 <td>€ 10</td>
                                 <td>€ 50</td>
                                 <td>€ 50</td>
                                 <td class="actionbtn_icons"><a href="#"><img src="{{asset('frontend/images/eyeicon.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/edit-line.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/delete-bin-line.svg')}}" /></a></td>
                              </tr>
                              <tr>
                                 <td class="profileimg"><img src="{{asset('frontend/images/productimg.png')}}" /></td>
                                 <td>101 Wine Press</td>
                                 <td>25 Oct, 2020 & 9:00am</td>
                                 <td>€ 100</td>
                                 <td>€ 200</td>
                                 <td>Pickup</td>
                                 <td>€ 10</td>
                                 <td>€ 50</td>
                                 <td>€ 50</td>
                                 <td class="actionbtn_icons"><a href="#"><img src="{{asset('frontend/images/eyeicon.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/edit-line.svg')}}" /></a><a href="#"><img src="{{asset('frontend/images/delete-bin-line.svg')}}" /></a></td>
                              </tr>
                              </tbody>
                           </table>
                           <div class="paginationdiv">
                              <ul class="pagination">
                                 <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                 </li>
                                 <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>
	  <script type="text/javascript">
         $(document).on('ready', function() {
         $('.center').slick({
         centerMode: true,
         centerPadding: '0px',
         slidesToShow: 7,
         autoplay: true,
         arrows: true,
         autoplaySpeed: 2000,
         responsive: [
         {
           breakpoint: 1441,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 6
           }
         },
         
         {
           breakpoint: 1281,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 5
           }
         },
         {
           breakpoint: 991,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 4
           }
         },
         
         {
           breakpoint: 575,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 2
           }
         },
            {
           breakpoint: 414,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 1
           }
         }
         
         ]
         });
         
         });
      </script>
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