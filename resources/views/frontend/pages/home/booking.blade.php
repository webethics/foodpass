@extends('frontend.creaters.landing.landing')
@section('pageTitle','Booking')
@section('content')
		<div class="loader"></div>
         <div class="container-fluid innercontainer">
            <div class="row">
               <div class="col leftsidebarsec dashboardsidebar mt-0">
                  <div class="sidebar_cont profilesidebar">
                     <ul class="accordion profilelist" id="accordion">
                        <li class="nav-link dropdown-toggle couponlink active">
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
                        <li class="nav-link dropdown-toggle couponlink">
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
                        <li class="nav-link dropdown-toggle afiliatelink">
                              <a href="{{url('affiliate')}}">
                                 <div class="link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.3" height="22.3" viewBox="0 0 22.3 22.3">
                                       <defs>
                                          <style>.afiliatelink .a{stroke:#000;}</style>
                                       </defs>
                                       <g transform="translate(0.15 0.15)">
                                          <path class="a" d="M20.066,9.066a1.937,1.937,0,0,0-1.823,1.289H16.765A5.774,5.774,0,0,0,15.53,7.381l1.017-1.017a1.932,1.932,0,1,0-.912-.911L14.619,6.47a5.774,5.774,0,0,0-2.974-1.235V3.756a1.934,1.934,0,1,0-1.289,0V5.235A5.774,5.774,0,0,0,7.381,6.47L6.365,5.453a1.935,1.935,0,1,0-.912.911L6.47,7.381a5.774,5.774,0,0,0-1.235,2.974H3.756a1.934,1.934,0,1,0,0,1.289H5.235A5.774,5.774,0,0,0,6.47,14.619L5.453,15.636a1.932,1.932,0,1,0,.912.911L7.381,15.53a5.774,5.774,0,0,0,2.974,1.235v1.479a1.934,1.934,0,1,0,1.289,0V16.765a5.773,5.773,0,0,0,2.974-1.235l1.016,1.016a1.935,1.935,0,1,0,.912-.911L15.53,14.619a5.773,5.773,0,0,0,1.235-2.974h1.479a1.933,1.933,0,1,0,1.823-2.578Zm-3.142-4.9a.645.645,0,1,1,0,.911A.645.645,0,0,1,16.925,4.164Zm-11.85.911a.645.645,0,1,1,0-.911A.645.645,0,0,1,5.075,5.075ZM1.934,11.645A.645.645,0,1,1,2.578,11,.645.645,0,0,1,1.934,11.645Zm3.142,6.192a.645.645,0,1,1,0-.911A.645.645,0,0,1,5.075,17.836Zm11.85-.911a.645.645,0,1,1,0,.911A.645.645,0,0,1,16.925,16.925ZM11,1.289a.645.645,0,1,1-.645.645A.645.645,0,0,1,11,1.289Zm0,19.422a.645.645,0,1,1,.645-.645A.645.645,0,0,1,11,20.711Zm0-5.2a4.49,4.49,0,0,1-2.791-.969,3.224,3.224,0,0,1,5.581,0A4.489,4.489,0,0,1,11,15.512ZM9.711,10.355A1.289,1.289,0,1,1,11,11.645,1.291,1.291,0,0,1,9.711,10.355ZM14.7,13.575a4.484,4.484,0,0,0-1.781-1.5,2.578,2.578,0,1,0-3.844,0,4.484,4.484,0,0,0-1.78,1.5,4.512,4.512,0,1,1,7.406,0Zm5.364-1.93A.645.645,0,1,1,20.711,11,.645.645,0,0,1,20.066,11.645Z"/>
                                       </g>
                                    </svg>
                                    Afiliate
                                 </div>
                              </a>
                           </li>
                     </ul>
                  </div>
               </div>
               <div class="col rightcontentsec dashboardcontsec booking_page">
                  <section class="storesection innersection couponsection booking_page">
                     <h2>Bookings</h2>
                     <div class="searchbar_div dashboardsearch_div">
                        <form class="form-inline">
                           <div class="searchbardiv">
                              <i class="fa fa-search" id="search_icon"></i>
							  <i class="fa fa-spinner fa-spin" style="font-size:18px" id="processing_icon"></i>
							  <input class="form-control" id="booking_search" type="search" placeholder="Search on client or order" aria-label="Search">
                           </div>
						   <input type = "hidden" id = "time_sort" value="">
						   <input type = "hidden" id = "login_user_id" value="{{Auth::user()->id}}">
                        </form>
                        <div class="select-data sortselect">
                           <select class="selectpicker" id="select_date">
                              <option value = "1" selected>Today</option>
                              <option value = "2">Yesterday</option>
                              <option value = "3">This week</option>
                              <option value = "4">This month</option>
                              <option value = "5">All time</option>
                           </select>
                        </div>
                     </div>
                     <div class="tab booking_page">
                        <button class="tablinks active" onclick="openTab(event, 'Beschikbaar')">Online</button>
                        <button class="tablinks" onclick="openTab(event, 'Verlopen')">Verzilverd</button>
                     </div>
                     @php 
                        $currentTime = strtotime('now');
                     @endphp
                     <div class="tablerow tabcontent"  id="Beschikbaar" >
                        <div class="tablediv">
                           <table>
                              <thead>
                                 <tr>
                                    <th>Client Name</th>
                                    <th>Client Number</th>
                                    <th>Order Number</th>
                                    <th>Coupon Name</th>
                                    <th>Purchased At</th>
                                    <th>Completed At</th>
                                    <th>Status</th>
                                    <th class="actionheading">Action</th>
                                 </tr>
                              </thead>
                              <tbody id="search_result_booking" >   
                             
							  @if(isset($booking) && !empty($booking))
								@foreach($booking as $data)
                           @if(isset($data->mycoupons->product_name) && $data->mycoupons->product_name != "" && $data->mycoupons->coupon_end_time >= $currentTime )
      								<tr>
                                 <td>{{$data->customer->first_name}}</td>
                                 <td>{{$data->customer->customer_id}}</td>
                                 <td>#{{$data->order_number}}</td>
                                 <td>{{$data->mycoupons->product_name}}</td>
                                 <td>{{date("d M Y, H:i:sA", strtotime($data->created_at))}}</td>
                                 @if($data->confirm_status != 0)
                                    <td>{{date("d M Y, H:i:sA", strtotime($data->updated_at))}}</td>
                                 @else
                                 <td>-</td>
                                 @endif
                                 @if($data->is_show == '1')
                                    <td>Show</td>
                                 @else
                                   <td>No Show</td>
                                 @endif
                                 <td class="actionbtns">
                                    <a href="#" class="scanbtn" data-target="#qr_code" data-toggle="modal">Scan QR</a> 
                                    <a href="#" class="manualbtn" data-target="#show_noshow" data-toggle="modal" data-id="{{$data->id}}">Manual</a> 
      										
      									</td>
                              </tr>
                           @else
                           <tr>
                               <td colspan="7"  class="storeblk" style="width:100%">No result found.</td>
                           </tr> 
                           @endif
								@endforeach
                       @else
                        
							  @endif
                                 
                                 <!--<tr>
                                    <td>Perry Scope</td>
                                    <td>562356</td>
                                    <td>#9658455</td>
                                    <td>Eva's Cantina & Grill</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Isabelle Ringing</td>
                                    <td>854263</td>
                                    <td>#6325412</td>
                                    <td>Burger deal october</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Jack Aranda</td>
                                    <td>325698</td>
                                    <td>#2541365</td>
                                    <td>101 Wine Press</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Karen Onnabit</td>
                                    <td>258741</td>
                                    <td>#2532598</td>
                                    <td>Burger deal october</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Simon Sais</td>
                                    <td>325698</td>
                                    <td>#2541365</td>
                                    <td>The Flying Artichoke Restaurant</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                 </tr>
                                 <tr>
                                    <td>Lynne Gwistic</td>
                                    <td>745632</td>
                                    <td>#2135987</td>
                                    <td>Burger deal october</td>
                                    <td class="actionbtns"><a href="#" class="scanbtn">Scan QR</a> <a href="#" class="manualbtn">Manual</a></td>
                                    @if(empty($booking['data'])) 
                                       <div class="storeblk" style="width:100%">No result found.</div>
                                 @endif 
                                 </tr>-->
                              </tbody>
                           </table>
                           @if($booking->total() > $booking->perPage())
                           <div class="paginationdiv">
						     @php
							 $ceil = ceil($booking->total()/$booking->perPage());
							 @endphp
                              <ul class="pagination">
                                 <li class="page-item">
                                    <a class="page-link" href="{!! $booking->previousPageUrl() !!}" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                 </li>
								 <?php
									for($i = 1; $i <= $ceil; $i++){
										?>
										 <li class="page-item <?php if($booking->currentPage() == $i) echo "active"; ?>"><a class="page-link" href="{!! $booking->url($i) !!}">{{ $i }}</a></li>
										<?php
									}
									
								 ?>
                                 <li class="page-item">
                                    <a class="page-link" href="{!! $booking->nextPageUrl() !!}" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
						   @endif
                        </div>
                     </div>
                     <div class="tablerow tabcontent" style="display:none;" id="Verlopen" >
                        <div class="tablediv">
                           <table>
                              <thead>
                                 <tr>
                                    <th>Client Name</th>
                                    <th>Client Number</th>
                                    <th>Order Number</th>
                                    <th>Coupon Name</th>
                                    <th>Purchased At</th>
                                    <th>Completed At</th>
                                    <th>Status</th>
                                    <th class="actionheading">Action</th>
                                 </tr>
                              </thead>
                              <tbody id="search_result_booking_expired" >    

                           
							  @if(isset($booking) && !empty($booking))
								@foreach($booking as $data)
                           @if(isset($data->mycoupons->product_name) && $data->mycoupons->product_name != "" && $data->mycoupons->coupon_end_time < $currentTime)
      								<tr>
                                 <td>{{$data->customer->first_name}}</td>
                                 <td>{{$data->customer->customer_id}}</td>
                                 <td>#{{$data->order_number}}</td>
                                 <td>{{$data->mycoupons->product_name}}</td>
                                 <td>{{date("d M Y, H:i:sA", strtotime($data->created_at))}}</td>
                                 @if($data->confirm_status != 0)
                                    <td>{{date("d M Y, H:i:sA", strtotime($data->updated_at))}}</td>
                                 @else
                                 <td>-</td>
                                 @endif
                                 @if($data->is_show == '1')
                                    <td>Show</td>
                                 @else
                                   <td>No Show</td>
                                 @endif
                                 <td class="actionbtns">
                                    <a href="#" class="scanbtn" data-target="#qr_code" data-toggle="modal">Scan QR</a> 
                                    <a href="#" class="manualbtn" data-target="#show_noshow" data-toggle="modal" data-id="{{$data->id}}">Manual</a> 
      										<!--a href="/updatebookingstatus/{{$data->id}}" class="manualbtn">Manual</a-->
      									</td>
                              </tr>
                           @else
                           <tr>
                               <td colspan="7" class="storeblk" style="width:100%">No result found.</td>
                           </tr> 
                           @endif
								@endforeach
                       @else
                        
							  @endif
                              </tbody>
                           </table>
                           @if($booking->total() > $booking->perPage())
                           <div class="paginationdiv">
						     @php
							 $ceil = ceil($booking->total()/$booking->perPage());
							 @endphp
                              <ul class="pagination">
                                 <li class="page-item">
                                    <a class="page-link" href="{!! $booking->previousPageUrl() !!}" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                 </li>
								 <?php
									for($i = 1; $i <= $ceil; $i++){
										?>
										 <li class="page-item <?php if($booking->currentPage() == $i) echo "active"; ?>"><a class="page-link" href="{!! $booking->url($i) !!}">{{ $i }}</a></li>
										<?php
									}
									
								 ?>
                                 <li class="page-item">
                                    <a class="page-link" href="{!! $booking->nextPageUrl() !!}" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
						   @endif
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
		 
<div class="modal getcpn_modal getcpn_modal2" id="qr_code">
	<div class="modal-dialog">
		<div class="modal-content">
		   <button type="button" class="close" data-dismiss="modal">&times;</button>
		   <!-- Modal body -->
		   <div class="modal-body">
			  <img src="{{asset('frontend/images/elcarne.png')}}" />
			  <h5>This function is temporary inactive</h5>
		   </div>
		</div>
	</div>
</div>

<div class="modal getcpn_modal show" id="show_noshow" style="padding-right: 16px; display: none;">
      <div class="modal-dialog">
         <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <!-- Modal body -->
            <div class="modal-body">
                   <a href="#" class="show manualbtn pop_up_buttns">Show</a>
                   <a href="#" class="no_show manualbtn pop_up_buttns">No Show</a>
            </div>
         </div>
      </div>
   </div>

		 <script src="{{ url('frontend/js/booking.js')}}" type="text/javascript"></script>
		 <script>
           function openTab(evt, status) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
               tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
               tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(status).style.display = "flex";
            evt.currentTarget.className += " active";
         }
       </script>
		 
@endsection