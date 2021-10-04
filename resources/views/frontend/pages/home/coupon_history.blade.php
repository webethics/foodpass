@extends('frontend.creaters.landing.landing')
@section('pageTitle','Booking')
@section('content')
		<div class="loader"></div>
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
               <div class="col rightcontentsec dashboardcontsec">
                  <section class="storesection innersection couponsection">
                     <h2>Coupon History</h2>
                     <div class="searchbar_div dashboardsearch_div">
                        
                     </div>
                     <div class="tablerow">
                        <div class="tablediv">
                           <table>
                              <thead>
                                 <tr>
                                    <th>Client Name</th>
                                    <th>Client Number</th>
                                    <th>Order Number</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                 </tr>
                              </thead>
                              <tbody id="search_result_booking">
							   @if(isset($coupons) && !empty($coupons) && !$coupons->isEmpty())
								   @foreach($coupons as $data)
                              @php
                                 $customer      = user_data_by_id($data->customer_id);
                                 $order_no      = $data->order_number;
                                 $status        = $data->confirm_status == 1 ? "Complete" : "Pending";
                              @endphp
         								<tr>
                                    <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                                    <td>{{ $customer->customer_id }}</td>
                                    <td>#{{$order_no}}</td>
                                    <td>{{$status}}</td>
                                    <td>{{$data->created_at}}</td>
                                 </tr>
								   @endforeach
							   @else
                           <tr><td>No result found.</td></tr>
							  @endif
                              </tbody>
                           </table>
                           @if($coupons->total() > $coupons->perPage())
                           <div class="paginationdiv">
						     @php
							 $ceil = ceil($coupons->total()/$coupons->perPage());
							 @endphp
                              <ul class="pagination">
                                 <li class="page-item">
                                    <a class="page-link" href="{!! $coupons->previousPageUrl() !!}" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                 </li>
								 <?php
									for($i = 1; $i <= $ceil; $i++){
										?>
										 <li class="page-item <?php if($coupons->currentPage() == $i) echo "active"; ?>"><a class="page-link" href="{!! $coupons->url($i) !!}">{{ $i }}</a></li>
										<?php
									}
									
								 ?>
                                 <li class="page-item">
                                    <a class="page-link" href="{!! $coupons->nextPageUrl() !!}" aria-label="Next">
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
@endsection