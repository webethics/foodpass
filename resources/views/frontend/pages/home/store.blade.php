@extends('frontend.creaters.landing.landing')
@section('pageTitle','Store')
@section('content')
         <div class="container innercontainer storecontainer mobstorecont">
		 <div class="loader"></div>
            <div class="row">
               <div class="col leftsidebarsec desktop_sidebar">
                  <div class="sidebar_cont">
                     <h4>Filter By <!--<button class="Apply_filter">Apply</button></h4>-->
                     <div class="sidebar_switches">
                        <ul id="switch1" class="swithes">
                           <li data-id="1" class="ui-selected current"><span class="bgadded"></span><a href= "{{ url('store') }}" class = "cursor">Stores</a></li>
                           <li data-id="2"><span class="bgadded"></span><a href="{{ url('coupons-store') }}" class = "cursor">Coupons</a></li>
                        </ul>
                     </div>
                     <div class="sidebar_switches">
                        <ul id="switch2" class="swithes">
                           <li data-id="1" class="ui-selected current"><span class="bgadded"></span><a class="cursor">Delivery</a></li>
                           <li data-id="2"><span class="bgadded"></span><a class="cursor">Pick Up</a></li>
                        </ul>
                     </div>
					 <input type= "hidden" name="store_coupon" id="store_coupon" value= "1">
					 <input type= "hidden" name="deliver_pick" id="deliver_pick" value= "">
					 <input type= "hidden" name="sorting_key" id="sorting_key" value= "">
					 <input type= "hidden" name="coupon_filter"  id="coupon_filter"  value= "">
					 <input type= "hidden" name="deliver_cost" id="deliver_cost" value= <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'])echo $_GET['delivery_Cost'] ?>>
					 <input type= "hidden" name="order_amount" id="order_amount" value= "<?php if(isset($_GET['order_amount']) && $_GET['order_amount'] == 10) echo $_GET['order_amount'];?>">
                <input type= "hidden" name="store_min_amount" id="store_min_amount" value= "<?php if(isset($_GET['store_min_amount']) && $_GET['store_min_amount'] == 10) echo $_GET['store_min_amount'];?>">
                  </div>
                  <div class="sidebar_cont">
                     <h4>Min. Order Amount</h4>
                     <div class="sidebar_checkboxes">
                        <div class="checkblox_list">
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input order_amount" id="customCheck" name="order_amount" value="10" <?php if(isset($_GET['order_amount']) && $_GET['order_amount'] == 10)echo "checked"?>>
                              <label class="custom-control-label" for="customCheck"><span>< $10.00</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input order_amount" id="customCheck1" name="order_amount" value="15" <?php if(isset($_GET['order_amount']) && $_GET['order_amount'] == 15)echo "checked"?>>
                              <label class="custom-control-label" for="customCheck1"><span>< $15.00</span></label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar_cont">
                     <h4>Delivery Cost</h4>
                     <div class="sidebar_checkboxes">
                        <div class="checkblox_list">
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input delivery_Cost" id="customCheck2" name="delivery_Cost" value="1.5" <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'] == 1.5)echo "checked"?>>
                              <label class="custom-control-label" for="customCheck2"><span>< $1.50</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input delivery_Cost" id="customCheck3" name="delivery_Cost" value="2.5" <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'] == 2.5)echo "checked"?>>
                              <label class="custom-control-label" for="customCheck3"><span>< $2.50</span></label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar_cont">
                     <h4>Coupon</h4>
                     <div class="sidebar_checkboxes">
                        <div class="checkblox_list">
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" value="1" class="custom-control-input" id="customCheck4" name="coupon_filters">
                              <label class="custom-control-label" for="customCheck4"><span>Pre Order</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" value="2" class="custom-control-input" id="customCheck5" name="coupon_filters">
                              <label class="custom-control-label" for="customCheck5"><span>Ontbijt & Lunch</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" value="3" class="custom-control-input" id="customCheck6" name="coupon_filters">
                              <label class="custom-control-label" for="customCheck6"><span>Dinner</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" value="4" class="custom-control-input" id="customCheck7" name="coupon_filters">
                              <label class="custom-control-label" for="customCheck7"><span>Late Night Snack</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" value="5" class="custom-control-input" id="customCheck8" name="coupon_filters">
                              <label class="custom-control-label" for="customCheck8"><span>Special Deals</span></label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col leftsidebarsec mobile_sidebar">
                  <div class="mobile_sidebarcont" id="mobfiltercontent">
                     <div class="sidebar_cont">
                        <h4>Filter By <img src="{{asset('frontend/images/cancel.svg')}}" class="closebtn" /></h4>
                        <div class="sidebar_switches">
                           <ul id="switch1" class="swithes">
                              <li data-id="1" class="ui-selected current"><span class="bgadded"></span><a href= "{{ url('store') }}" class = "cursor">Stores</a></li>
                              <li data-id="2"><span class="bgadded"></span><a href="{{ url('coupons-store') }}" class = "cursor">Coupons</a></li>
                           </ul>
                        </div>
                        <div class="sidebar_switches">
                           <ul id="switch2" class="swithes">
                              <li data-id="1" class="ui-selected current"><span class="bgadded"></span><a class="cursor">Delivery</a></li>
                              <li data-id="2"><span class="bgadded"></span><a class="cursor">Pick Up</a></li>
                           </ul>
                        </div>
                        <input type= "hidden" name="store_coupon" id="store_coupon" value= "1">
                        <input type= "hidden" name="deliver_pick" id="deliver_pick" value= "">
                        <input type= "hidden" name="sorting_key" id="sorting_key" value= "">
                        <input type= "hidden" name="coupon_filter"  id="coupon_filter"  value= "">
                        <input type= "hidden" name="deliver_cost" id="deliver_cost" value= <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'])echo $_GET['delivery_Cost'] ?>>
                        <input type= "hidden" name="order_amount" id="order_amount" value= "<?php if(isset($_GET['order_amount']) && $_GET['order_amount'] == 10) echo $_GET['order_amount'];?>">
                     </div>
                     <div class="sidebar_cont">
                        <h4>Min. Order Amount</h4>
                        <div class="sidebar_checkboxes">
                           <div class="checkblox_list">
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input order_amount" id="mobcustomCheck" name="order_amount" value="10"  <?php if(isset($_GET  ['order_amount']) && $_GET['order_amount'] == 10)echo "checked"?>>
                                 <label class="custom-control-label" for="mobcustomCheck"><span>< €10.00</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input order_amount" id="mobcustomCheck1" name="order_amount" value="15" <?php if(isset($_GET['order_amount']) && $_GET['order_amount'] == 15)echo "checked"?>>
                                 <label class="custom-control-label" for="mobcustomCheck1"><span>< €15.00</span></label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar_cont">
                        <h4>Delivery Cost</h4>
                        <div class="sidebar_checkboxes">
                           <div class="checkblox_list">
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input delivery_Cost" id="mobcustomCheck2" name="delivery_Cost" value="1.5" <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'] == 1.5)echo "checked"?>>
                                 <label class="custom-control-label" for="mobcustomCheck2"><span>< €1.50</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input delivery_Cost" id="mobcustomCheck3" name="delivery_Cost" value="2.5" <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'] == 2.5)echo "checked"?>>
                                 <label class="custom-control-label" for="mobcustomCheck3"><span>< €2.50</span></label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar_cont">
                        <h4>Coupon</h4>
                        <div class="sidebar_checkboxes">
                           <div class="checkblox_list">
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="1" class="custom-control-input" id="mobcustomCheck4" name="coupon_filters">
                                 <label class="custom-control-label" for="mobcustomCheck4"><span>Pre Order</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="2" class="custom-control-input" id="mobcustomCheck5" name="coupon_filters">
                                 <label class="custom-control-label" for="mobcustomCheck5"><span>Ontbijt & Lunch</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="3" class="custom-control-input" id="mobcustomCheck6" name="coupon_filters">
                                 <label class="custom-control-label" for="mobcustomCheck6"><span>Dinner</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="4" class="custom-control-input" id="mobcustomCheck7" name="coupon_filters">
                                 <label class="custom-control-label" for="mobcustomCheck7"><span>Late Night Snack</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="5" class="custom-control-input" id="mobcustomCheck8" name="coupon_filters">
                                 <label class="custom-control-label" for="mobcustomCheck8"><span>Special Deals</span></label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar_search text-right mb-2">
                        <button class="btn" type="submit">Search</button>
                     </div>
                  </div>
                  <div class="mobilemenu_list">
                     <ul>
                        <li id="mobfilter">
                           <a href="#"><img src="{{asset('frontend/images/filtericon.png')}}" />Filter</a>
                        </li>
                        <li id="mobsearch">
                           <a href="#"><img src="{{asset('frontend/images/socialicon.png')}}" />Search</a>
                        </li>
                        <div id="mobsearchcontent">
                           <form class="searchbarform">
                              <div class="form-group">
                                 <img src="{{asset('frontend/images/socialicon.png')}}" />
                                 <input id="store_search" type="search" class="form-control" placeholder="Search by restaurant name" aria-label="Search"/> 
                              </div>
                           </form>
                        </div>
                     </ul>
                  </div>
               </div>
               <div class="col rightcontentsec">
			      <input type = "hidden" name="kitchen" id="kitchen" value="">
                  <section class="storeslider_sec innersection">
                     <div class="container">
                        <div class="storeslider center slider mt-5" id="switch3">
                     <div data-id="00000" class="storesliderblk">
                        <div class="storeslider_blkdiv">
                           <h4>Show all</h4>
                        </div>
                     </div>
                     
                     @foreach($Kitchens as $val)
                        <div data-id="{{$val->id}}" class="storesliderblk">
                           <div class="storeslider_blkdiv">
                              <h4>{{$val->name}}</h4>
                           </div>
                        </div>
                     @endforeach
                     
                        </div>
                     </div>
                  </section>
                  <section class="storesection innersection">
                     <h2>
                        Stores
                        <span class="sortselblk">
                           <i class="fa fa-spinner fa-spin" style="font-size:18px" id="processing_sort_icon"></i>Sort By
                           <div class="select-data sortselect">
                              <select class="selectpicker" id="store_sorting">
                                 <option value="1">Name</option>
                                 <option value="2">Delivery costs</option>
                                 <option value="3">Order Amount</option>
                                 <option value="4">Distance</option>
                              </select>
                           </div>
                        </span>
                     </h2>
                     <div class="searchbar_div">
                        <form class="form-inline">
                           <div class="searchbardiv">
                              <i class="fa fa-search" id="search_icon"></i>
							  <i class="fa fa-spinner fa-spin" style="font-size:18px" id="processing_icon"></i>
							  <input class="form-control" id="store_search" type="search" placeholder="Search" aria-label="Search">
                           </div>
                        </form>
                     </div>

                     
                     <div class="select-kitchens">
                        <div class="select-data sortselect">
                           <select class="selectpicker kitchen_mobile_selector" id="more_kitchen_selectpicker">
                              <option data-id="00000" value="00000" class="storesliderblk_selectpicker">All kitchens</option>
                              @foreach($Kitchens as $val)
                                 <option data-id="{{$val->id}}" value="{{$val->id}}" class="storesliderblk_selectpicker">{{$val->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
					 
					 <div id="store_listing">
					 @php
						$count = 0;
					 @endphp
					 @if(isset($restaurant) && !empty($restaurant))
					 
						@foreach($restaurant as $val)
						   @php
						    $count++;
							$status = App\Models\StoreTimings::checktodaystatus($val->id);
							$profile_photo =  profile_photo($val->id);
							$get_Coupons   = App\Models\Coupons::getcouopon($val->id);

                     $kitchens = get_store_kitchen($val->id);
						  @endphp
						  
						  <div class="storeblk">
								<div class="doticon">
								   <!--<i class="fa fa-share-alt"></i>-->
								</div>
								<div class="row">
									
								   <div class="col-md-3 storeimage">
									  <div class="storeimage_widget">
										 <img src="{{$profile_photo}}" />
										 @if($status == 1)
											<span class="opentag">Open</span>
										 @else
											 <span class="opentag closetag">Closed</span>
										@endif
									  </div>
								   </div>
								   <div class="col-md-6 storeblkcont">
									@if(Auth::user())
										<a href = "/info/{{$val->id}}">
											<h3>{{$val->restaurant_name}}<img data-toggle="tooltip" title="Address: {{$val->address}} Phone:{{$val->mobile_number}}  Website:{{$val->website}}   " src="{{asset('frontend/images/information.svg')}}" /></h3>
										</a>
									@else
										<a href="#" data-toggle="modal" data-target="#formmodal">
											<h3>{{$val->restaurant_name}}
												<img data-toggle="tooltip" title="Address: {{$val->address}} Phone:{{$val->mobile_number}}  Website:{{$val->website}}   " src="{{asset('frontend/images/information.svg')}}" />
											</h3>
										</a>
									@endif
										
									  
									  
									  
                             <p>{{$kitchens}}</p>
                             	<!--@if(isset($val->store_min_amount))
											<span class="coupn_min_order">${{$val->store_min_amount}} Minimum Order</span>
										@else
											<span class="coupn_min_order">${{$val->order_amount}} Minimum Order</span>
										@endif -->
									  @if($get_Coupons['coupon_count'] > 0 )
                             		  	  <span class="copon_count">{{ $get_Coupons['coupon_count'] }} coupons available</span>
									  @else
										  <span class="copon_count">Momenteel geen beschikbare coupons.</span>
									  @endif
                             
                              <span class="copon_count" style="display:none">{{ $get_Coupons['coupon_count'] }} coupons available</span>
								   </div>
								   @if(isset($get_Coupons['coupon']) && !empty($get_Coupons['coupon']) && $get_Coupons['coupon_count'] > 0)
								   <div class="col-md-3 viewcouponbtn whitebtn">
									  <a href="#" data-toggle="collapse" data-target="#couponcollapse{{$val->id}}" aria-expanded="false" aria-controls="couponcollapse{{$val->id}}"><span class="viewcpnbtn">View Coupon<i class="fa fa-angle-down"></i></span><span class="hidecpnbtn">Hide Coupon<i class="fa fa-angle-up"></i></span></a>
								   </div>
								   @endif
								   
								</div>
								<div class="collapse multi-collapse" id="couponcollapse{{$val->id}}">
								
								 @if(isset($get_Coupons['coupon']) && !empty($get_Coupons['coupon']) && $get_Coupons['coupon_count'] > 0)
									@foreach($get_Coupons['coupon'] as $coupon)
									@php
										$photo =  coupon_image($coupon->id);
										$pickup_delivery = $coupon->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
										$expire_date = date("d M, Y",$coupon->coupon_end_time);
                              $expire_time = date("h:i a",$coupon->coupon_end_time);
                              $typeArr = array();
                              $typeArr = explode(',', $coupon->coupon_display);
                              $arrCheck = [1, 2];
									@endphp
								   <div class="store_offerssec">
									  <div class="store_offers">
										 <div class="row">
											<div class="col-md-9 store_offercont">
                                    @if($coupon->free_coupon_type != '')
                                       <span class="offertag free_offer">
                                           FREE
                                       </span>
                                    @endif
                                    @if($coupon->discount_1 != '')
                                       <span class="offertag">
                                          {{$coupon->discount_1}}%<br/><span class="lightweight">OFF</span>
                                       </span>
                                    @endif
											   <div class="store_offertext">
												  <p>{{$coupon->product_name}}
                                       @if(in_array("3", $typeArr))
                                          <span class="premium_tag"><img src="{{asset('frontend/images/premium.png')}}" /></span>
                                       @endif
                                      </p>
												  <span>Exp. on {{$expire_date}} at {{$expire_time}}</span>
											   </div>
											</div>
											<div class="col-md-3 viewcouponbtn">
											   @if(Auth::user())
													<a href="#"  class = "view_coupon" data-id="{{$coupon->id}}">GET coupon</a>
												@else
													<a href="#" data-toggle="modal" data-target="#formmodal">GET coupon</a>
												@endif
											</div>
										 </div>
									  </div>
									</div>
								   @endforeach
								   @endif
								</div>
							 </div>
						@endforeach
					@endif
					@if($count == 0)
						<div class="storeblk">No Records Found</div>
					@endif	
					</div>
               </div>
               </section>
            </div>
         </div>
         </div>
	  <!--<script src="{{ url('/frontend/js/jquery-2.2.0.min.js')}}" type="text/javascript"></script>-->
	  <script src="{{ url('frontend/js/coupon.js')}}" type="text/javascript"></script>
	  <script src="{{ url('frontend/js/selectable.js')}}" type="text/javascript"></script>
     <script src="{{ url('frontend/js/custom.js')}}"></script>
 <script type="text/javascript">
         $(document).on('ready', function() {
         $('.storeslider').slick({
         slidesToShow: 7,
         infinite: false,
         autoplay: false,
         arrows: true,
         autoplaySpeed: 2000,
         responsive: [
         {
           breakpoint: 1441,
           settings: {
             arrows: true,
             slidesToShow: 6
           }
         },
         
         {
           breakpoint: 1281,
           settings: {
             arrows: true,
             slidesToShow: 5
           }
         },
         {
           breakpoint: 991,
           settings: {
             arrows: true,
             slidesToShow: 4
           }
         },
         
         {
           breakpoint: 575,
           settings: {
             arrows: true,
             slidesToShow: 2
           }
         },
            {
           breakpoint: 414,
           settings: {
             arrows: true,
             slidesToShow: 1
           }
         }
         
         ]
         });
         $("div#switch3").css('overflow', 'unset');
         });
         
      </script>
      <!--<script>
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
         
         
         </script>-->
      <script>
         $('.swithes li').on('click', function() {
             $(this).addClass('current').siblings().removeClass('current');
         });
         	  
      </script>
      <script>
         const selectable = new Selectable({  
            filter: ".storesliderblk",
            appendTo: ".storeslider_sec .slider",
            toggle: true
         });
		 
      </script>
      <!-- The Modal -->
      <div class="modal getcpn_modal" id="couponmodal">
      <div class="modal-dialog">
         <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- Modal body -->
            <div class="modal-body">
               <img id="coupon_view_image" src="{{asset('frontend/images/elcarne.png')}}" />
               <h4 id="coupon_view_name">Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
               <h5>Buy 2 Burgers, get 1 free!</h5>
               <p id="coupon_view_details">Bestel twee burgers en ontvang de derde gratis!</p>
               <p id="coupon_view_expire">Expires on 31/10/2020 at 23:59</p>
               <a href="#" class="getcpnbtn" id="couponorder">Get Coupon</a>
               <!--<a href="#getcpnbtn1" data-toggle="modal" data-target="#couponmodal2" class="getcpnbtn">Get Coupon</a>-->
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
      <script>
         $(document).ready(function(){
             
             $('#mobsearch').click( function(e) {
                 
                 e.preventDefault(); // stops link from making page jump to the top
                 e.stopPropagation(); // when you click the button, it stops the page from seeing it as clicking the body too
                 $('#mobsearchcontent').toggle('fade');
                 
             });
         	    $('#mobfilter').click( function(e) {
                 
                 //e.preventDefault(); // stops link from making page jump to the top
                // e.stopPropagation(); // when you click the button, it stops the page from seeing it as clicking the body too
                 $('#mobfiltercontent').toggle('fade');
                 
             });
             
             $('#mobsearchcontent').click( function(e) {
                 
                 e.stopPropagation(); // when you click within the content area, it stops the page from seeing it as clicking the body too
                 
             });
         	    $('#mobfiltercontent').click( function(e) {
                 
                 e.stopPropagation(); // when you click within the content area, it stops the page from seeing it as clicking the body too
                 
             });
             
             $('body').click( function() {
                
                 $('#mobsearchcontent').hide('fade');
                 
             });
         	   $('.closebtn').click( function() {
                
                 $('#mobfiltercontent').hide('');
                 
             });

            var screenWidth = screen.width;
            if(screenWidth >=768 ){
              $('select.selectpicker.kitchen_mobile_selector option[data-id="00000"]').text('Meer keukens');
            }

            /*$('section.storesection .col-md-3.viewcouponbtn.whitebtn a ').on('click', function(){
               var min_order = $(this).parents().eq(2).find('span.coupn_min_order').is(':visible');
               if(min_order){
                  $(this).parents().eq(1).find('span.copon_count').css('visibility', 'visible');
                  $(this).parents().eq(1).find('span.copon_count').show();
                  $(this).parents().eq(1).find('span.coupn_min_order').css('visibility', 'hidden');
                  $(this).parents().eq(1).find('span.coupn_min_order').hide();
               }else{
                  $(this).parents().eq(1).find('span.copon_count').css('visibility', 'hidden');
                  $(this).parents().eq(1).find('span.copon_count').hide();
                  $(this).parents().eq(1).find('span.coupn_min_order').css('visibility', 'visible');
                  $(this).parents().eq(1).find('span.coupn_min_order').show();
               }
            }); */
             
         });
         
         	  
      </script>
@endsection