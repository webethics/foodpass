@extends('frontend.creaters.landing.landing')
@section('pageTitle','Coupons')
@section('content')

<?php
   if(isset($_GET['coupon_filters']) && $_GET['coupon_filters'] != ""){
      $explode = explode(",",$_GET['coupon_filters']);
      
      $coupon_first = in_array("1", $explode) ? "checked" : '';
      $coupon_two = in_array("2", $explode) ? "checked" : '';
      $coupon_three = in_array("3", $explode) ? "checked" : '';
      $coupon_four = in_array("4", $explode) ? "checked" : '';
      $coupon_five = in_array("5", $explode) ? "checked" : '';
   
   }else{	
      $coupon_first = "";
      $coupon_two = "";
      $coupon_three = "";
      $coupon_four = "";
      $coupon_five = "";
   }
   ?>

         <div class="container innercontainer storecontainer">
            <div class="row">
			<div class="loader"></div>
               <div class="col leftsidebarsec desktop_sidebar">
                  <div class="sidebar_cont">
                     <h4>Filter By</h4>
                     <div class="sidebar_switches">
                        <ul id="switch1" class="swithes">
                           <li data-id="1"><span class="bgadded"></span><a  href= "{{ url('store') }}" class = "cursor">Stores</a></li>
                           <li data-id="2" class="ui-selected current"><span class="bgadded"></span><a href= "{{ url('coupons-store') }}" class = "cursor">Coupons</a></li>
                        </ul>
                     </div>
					 @if(isset($_GET['deliver_pick']) && !empty($_GET['deliver_pick']))
						 @if($_GET['deliver_pick'] == 1)
						 <div class="sidebar_switches">
							<ul id="switch2" class="swithes">
							   <li data-id="1" class="ui-selected current"><span class="bgadded"></span><a class="cursor">Delivery</a></li>
							   <li data-id="2"><span class="bgadded"></span><a class="cursor">Pick Up</a></li>
							</ul>
						 </div>
						 @else
						<div class="sidebar_switches">
							<ul id="switch2" class="swithes">
							   <li data-id="1"><span class="bgadded"></span><a class="cursor">Delivery</a></li>
							   <li data-id="2" class="ui-selected current"><span class="bgadded"></span><a class="cursor">Pick Up</a></li>
							</ul>
						 </div>
						 @endif
					 @else
					 <div class="sidebar_switches">
                        <ul id="switch2" class="swithes">
                           <li data-id="1" class="ui-selected current"><span class="bgadded"></span><a class="cursor">Delivery</a></li>
                           <li data-id="2"><span class="bgadded"></span><a class="cursor">Pick Up</a></li>
                        </ul>
                     </div>
					 @endif
                     
					 <input type= "hidden" name="store_coupon" id="store_coupon" value= "2">
					 <input type= "hidden" name="deliver_pick" id="deliver_pick" value= "">
					 <input type= "hidden" name="sorting_key"  id="sorting_key"  value= "">
					 <input type= "hidden" name="coupon_filter"  id="coupon_filter"  value= "">
					 <input type= "hidden" name="deliver_pick" id="deliver_pick" value= <?php if(isset($_GET['deliver_pick']))echo $_GET['deliver_pick'] ?>>
					 <input type= "hidden" name="deliver_cost" id="deliver_cost" value= <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'])echo $_GET['delivery_Cost'] ?>>
					 <input type= "hidden" name="order_amount" id="order_amount" value= "<?php if(isset($_GET['order_amount']) && $_GET['order_amount'] == 10) echo $_GET['order_amount'];?>">
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
                              <input type="checkbox" value="1" class="custom-control-input" id="customCheck4" name="coupon_filters" <?=$coupon_first;?>/>
                              <label class="custom-control-label" for="customCheck4"><span>Pre Order</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" value="2" class="custom-control-input" id="customCheck5" name="coupon_filters" <?=$coupon_two?>/>
                              <label class="custom-control-label" for="customCheck5"><span>Ontbijt & Lunch</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" value="3" class="custom-control-input" id="customCheck6" name="coupon_filters" <?=$coupon_three?> />
                              <label class="custom-control-label" for="customCheck6"><span>Dinner</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" value="4" class="custom-control-input" id="customCheck7" name="coupon_filters" <?=$coupon_four?> />
                              <label class="custom-control-label" for="customCheck7"><span>Late Night Snack</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" value="5" class="custom-control-input" id="customCheck8" name="coupon_filters"<?=$coupon_five?>  />
                              <label class="custom-control-label" for="customCheck8"><span>Special Deals</span></label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col leftsidebarsec mobile_sidebar">
                  <div class="mobile_sidebarcont" id="mobfiltercontent">
                     <div class="sidebar_cont">
                           <h4>Filter By</h4>
                           <div class="sidebar_switches">
                              <ul id="switch1" class="swithes">
                                 <li data-id="1"><span class="bgadded"></span><a  href= "{{ url('store') }}" class = "cursor">Stores</a></li>
                                 <li data-id="2" class="ui-selected current"><span class="bgadded"></span><a href= "{{ url('coupons-store') }}" class = "cursor">Coupons</a></li>
                              </ul>
                           </div>
                           @if(isset($_GET['deliver_pick']) && !empty($_GET['deliver_pick']))
                              @if($_GET['deliver_pick'] == 1)
                              <div class="sidebar_switches">
                                 <ul id="switch2" class="swithes">
                                    <li data-id="1" class="ui-selected current"><span class="bgadded"></span><a class="cursor">Delivery</a></li>
                                    <li data-id="2"><span class="bgadded"></span><a class="cursor">Pick Up</a></li>
                                 </ul>
                              </div>
                              @else
                              <div class="sidebar_switches">
                                 <ul id="switch2" class="swithes">
                                    <li data-id="1"><span class="bgadded"></span><a class="cursor">Delivery</a></li>
                                    <li data-id="2" class="ui-selected current"><span class="bgadded"></span><a class="cursor">Pick Up</a></li>
                                 </ul>
                              </div>
                              @endif
                           @else
                           <div class="sidebar_switches">
                                    <ul id="switch2" class="swithes">
                                       <li data-id="1" class="ui-selected current"><span class="bgadded"></span><a class="cursor">Delivery</a></li>
                                       <li data-id="2"><span class="bgadded"></span><a class="cursor">Pick Up</a></li>
                                    </ul>
                                 </div>
                           @endif
                                 
                           <input type= "hidden" name="store_coupon" id="store_coupon" value= "2">
                           <input type= "hidden" name="deliver_pick" id="deliver_pick" value= "">
                           <input type= "hidden" name="sorting_key"  id="sorting_key"  value= "">
                           <input type= "hidden" name="coupon_filter"  id="coupon_filter"  value= "">
                           <input type= "hidden" name="deliver_pick" id="deliver_pick" value= <?php if(isset($_GET['deliver_pick']))echo $_GET['deliver_pick'] ?>>
                           <input type= "hidden" name="deliver_cost" id="deliver_cost" value= <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'])echo $_GET['delivery_Cost'] ?>>
                           <input type= "hidden" name="order_amount" id="order_amount" value= "<?php if(isset($_GET['order_amount']) && $_GET['order_amount'] == 10) echo $_GET['order_amount'];?>">
                     </div>
                     <div class="sidebar_cont">
                        <h4>Min. Order Amount</h4>
                        <div class="sidebar_checkboxes">
                           <div class="checkblox_list">
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input order_amount" id="mobcustomCheck" name="order_amount"  name="order_amount" value="15" <?php if(isset($_GET['order_amount']) && $_GET['order_amount'] == 10 )echo "checked"?> >
                                 <label class="custom-control-label" for="mobcustomCheck"><span>€10.00 or less</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input order_amount" id="mobcustomCheck1" name="order_amount" value="15" <?php if(isset($_GET['order_amount']) && $_GET['order_amount'] == 15)echo "checked"?> >
                                 <label class="custom-control-label" for="mobcustomCheck1"><span>€15.00 or less</span></label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar_cont">
                        <h4>Delivery Cost</h4>
                        <div class="sidebar_checkboxes">
                           <div class="checkblox_list">
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input delivery_Cost" id="mobcustomCheck2" name="delivery_Cost" value="1.5" <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'] == 1.5)echo "checked"?> >
                                 <label class="custom-control-label" for="mobcustomCheck2"><span>€1.50 or less</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input delivery_Cost" id="mobcustomCheck3" name="delivery_Cost" value="1.5" <?php if(isset($_GET['delivery_Cost']) && $_GET['delivery_Cost'] == 2.5)echo "checked"?>>
                                 <label class="custom-control-label" for="mobcustomCheck3"><span>€2.50 or less</span></label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar_cont">
                        <h4>Coupon</h4>
                        <div class="sidebar_checkboxes">
                           <div class="checkblox_list">
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="1" class="custom-control-input" id="mobcustomCheck4" name="coupon_filters" <?=$coupon_first;?> >
                                 <label class="custom-control-label" for="mobcustomCheck4"><span>Pre Order</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="2" class="custom-control-input" id="mobcustomCheck5" name="coupon_filters" <?=$coupon_two;?>>
                                 <label class="custom-control-label" for="mobcustomCheck5"><span>Ontbijt & Lunch</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="3" class="custom-control-input" id="mobcustomCheck6" name="coupon_filters" <?=$coupon_three;?>>
                                 <label class="custom-control-label" for="mobcustomCheck6"><span>Dinner</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="4" class="custom-control-input" id="mobcustomCheck7" name="coupon_filters" <?=$coupon_four;?>>
                                 <label class="custom-control-label" for="mobcustomCheck7"><span>Late Night Snack</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" value="5" class="custom-control-input" id="mobcustomCheck8" name="coupon_filters" <?=$coupon_five;?>>
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
                           <a href="#"><img src="{{asset('/frontend/images/filtericon.png')}}" />Filter</a>
                        </li>
                        <li id="mobsearch">
                           <a href="#"><img src="{{asset('/frontend/images/socialicon.png')}}" />Search</a>
                        </li>
                        <div id="mobsearchcontent">
                           <form class="searchbarform">
                              <div class="form-group">
                                 <img src="{{asset('/frontend/images/socialicon.png')}}" /><input type="text" id="search_coupon" class="form-control" placeholder="Search by restaurant name" /> 
                              </div>
                           </form>
                        </div>
                     </ul>
                  </div>
               </div>
               <div class="col rightcontentsec">
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
                           <!--<div data-id="1" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div data-id="2" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Burger</h4>
                              </div>
                           </div>
                           <div data-id="3" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Pizza</h4>
                              </div>
                           </div>
                           <div data-id="4" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Sushi</h4>
                              </div>
                           </div>
                           <div data-id="5" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Chicken</h4>
                              </div>
                           </div>
                           <div data-id="6" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Afghan</h4>
                              </div>
                           </div>
						   <div data-id="7" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>American</h4>
                              </div>
                           </div>
						   <div data-id="8" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>100% Halal</h4>
                              </div>
                           </div>
						   <div data-id="9" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Argentinian</h4>
                              </div>
                           </div>
						   <div data-id="10" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Sandwiches</h4>
                              </div>
                           </div>
						   <div data-id="11" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Burgers</h4>
                              </div>
                           </div>
						   <div data-id="12" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Chinese</h4>
                              </div>
                           </div>
						   <div data-id="13" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Drinks</h4>
                              </div>
                           </div>
						   <div data-id="14" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Doner</h4>
                              </div>
                           </div>
						   <div data-id="15" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Egyptian</h4>
                              </div>
                           </div>
						   <div data-id="16" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Falafel</h4>
                              </div>
                           </div>
						   <div data-id="17" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>French</h4>
                              </div>
                           </div>
						   <div data-id="18" class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Pasta</h4>
                              </div>
                           </div>-->
                        </div>
                        <div class="morelink">
                           <!--<a href="#" data-toggle="modal" data-target="#kitchendal">
                           More kitchens
                           </a>-->
                           <!-- The Modal -->
                           <div class="modal kitchendal" id="kitchendal">
                              <div class="modal-dialog kitchendal_div">
                                 <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                       <h4 class="modal-title">All kitchens</h4>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                       <ul>
                                          <li>100% Halal</li>
                                          <li>Afghan</li>
                                          <li>American</li>
                                          <li> Argentinian</li>
                                          <li>Sandwiches </li>
                                          <li>Burgers</li>
                                          <li>Chinese</li>
                                          <li>Drinks</li>
                                          <li>Doner</li>
                                          <li>Egyptian</li>
                                          <li>Falafel</li>
                                          <li>French</li>
                                          <li>Gluten free</li>
                                          <li>Greek</li>
                                          <li>Indian</li>
                                          <li>Indonesian</li>
                                          <li>Italian</li>
                                          <li>Japanese</li>
                                          <li>Wraps
                                       </ul>
                                       <ul>
                                          <li>Veal</li>
                                          <li>Chicken</li>
                                          <li>Korean</li>
                                          <li>Lunch</li>
                                          <li>Moroccan</li>
                                          <li>Mexican</li>
                                          <li>Desserts</li>
                                          <li>Dutch</li>
                                          <li>Noodles</li>
                                          <li>Breakfast</li>
                                          <li>pancakes</li>
                                          <li>Pasta</li>
                                          <li>Fries</li>
                                          <li>Poké bowl</li>
                                          <li>Roti</li>
                                          <li>Beef</li>
                                          <li>Salads</li>
                                          <li>Schnitzel</li>
                                          <li>Seafood</li>
                                       </ul>
                                       <ul>
                                          <li>Shawarma</li>
                                          <li>Smoothies / juices</li>
                                          <li>Snacks</li>
                                          <li>Soups</li>
                                          <li>Spanish / Tapas</li>
                                          <li>spare ribs</li>
                                          <li>Stew</li>
                                          <li>Steaks</li>
                                          <li>Surinamese</li>
                                          <li>Sushi</li>
                                          <li>Cake</li>
                                          <li>Tacos</li>
                                          <li>Thai</li>
                                          <li>Turkish pizza</li>
                                          <li>Vegan</li>
                                          <li>Vegetarian</li>
                                          <li>Fish</li>
                                          <li>Wok</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <section class="storesection innersection">
                     <h2>
                        Coupons
                        <span class="sortselblk">
                           <i class="fa fa-spinner fa-spin" style="font-size:18px" id="processing_sort_icon"></i>Sort By
                           <div class="select-data sortselect">
							  <select class="selectpicker" id="coupon_sorting">
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
							  <input class="form-control" type="search" id="search_coupon" placeholder="Search" aria-label="Search">
                           </div>
                        </form>
                     </div>
                     <div class="select-kitchens">
                        <div class="select-data sortselect">
                           <select class="selectpicker kitchen_mobile_selector">
                              <option data-id="00000" value="00000" class="storesliderblk">All kitchens</option>
                              @foreach($Kitchens as $val)
                                 <option data-id="{{$val->id}}" value="{{$val->id}}" class="storesliderblk">{{$val->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="row" id = "coupon_listing">
							
							@if(isset($restaurant) && !empty($restaurant))
								@foreach($restaurant as $coupon)
								@php
									$photo =  coupon_image($coupon->id);
									$pickup_delivery = $coupon->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
									$expire_date = date("d M, Y",$coupon->coupon_end_time);
                           $expire_time = date("h:i a",$coupon->coupon_end_time);
                           $to_time = strtotime("now");
                           $minutes =  round(abs($coupon->coupon_end_time - $to_time) / 60,2);
                           $days = floor ($minutes / 1440);
                           $hours = floor (($minutes - $days * 1440) / 60);
                           $min = $minutes - ($days * 1440) - ($hours * 60);
                           $typeArr = array();
                           $typeArr = explode(',', $coupon->coupon_display);
                           $arrCheck = [1, 2];
								@endphp 
								<div class="col-md-4 featured_blk">
								<div class="featured_blkdiv">
								  <div class="featured_img">
                           <div class="image_tags">
                                 @if($coupon->coupon_pickup_delivery == 1)
                                    <span class="status_tag pickup">OPEN</span>
                                 @else($coupon->coupon_pickup_delivery == 2)
                                    <span class="status_tag delivery">DICHT</span>
                                 @endif
                                 @if(in_array("3", $typeArr))
                                    <span class="premium_tag"><img src="{{asset('frontend/images/premium.png')}}" /></span>
                                 @else
                                    <span class="status_tag empty"></span>
                                 @endif
                                 @if($coupon->coupon_pickup_delivery != '')
                                    <span class="discount_tag">{{$coupon->discount_1}}%</span>
                                 @else
                                    <span class="status_tag empty"></span>
                                 @endif
                                 @if (array_intersect($arrCheck, $typeArr))
                                    <span class="free_tag">FREE</span>
                                 @else
                                    <span class="status_tag empty"></span>
                                 @endif
                              </div>
									   <img src="{{$photo}}" class="img-fluid" />
								  </div>
								  <div class="featured_blkcontsec">
									 <span class="offer_tag">{{$coupon->discount_1}}%<br/><span class="lightweight">Off</span></span>
									 <h4>{{$coupon->product_name}}</h4>
									 <span class="date">Expires in: 
                              <span class="home-coupon-expire" style="display:block;">
                                 <b>
                                 @php if($days){
                                    echo $days.' days ';
                                 } if($hours){
                                    echo $hours.' hours '; 
                                 } if($min){
                                    echo floor($min).' minutes'; 
                                 } 
                                 @endphp
                                 </b>
                                 </span>
                           </span>
									 <div class="borderdiv">
										<span class="borderleft"></span>
										<span class="borderright"></span>
									 </div>
									 <div class="featured_blkcont">
										<h5>{{$coupon->details}}</h5>
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
								@else
								<div class="storeblk">No Records Found.</div>
							@endif
                        
                        <!--<div class="col-md-4 featured_blk">
                           <div class="featured_blkdiv">
                              <div class="featured_img">
                                 <img src="{{asset('/frontend/images/featuredimg.png')}}" class="img-fluid" />
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
                                    <a href="#" data-toggle="modal" data-target="#couponmodal" class="couponbutton">GET coupon</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 featured_blk">
                           <div class="featured_blkdiv">
                              <div class="featured_img">
                                 <img src="{{asset('/frontend/images/featuredimg.png')}}" class="img-fluid" />
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
                                    <a href="#" data-toggle="modal" data-target="#couponmodal" class="couponbutton">GET coupon</a>
                                 </div>
                              </div>
                           </div>
                        </div>-->
                     </div>
                  </section>
               </div>
            </div>
         </div>
	  
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
         
         });
      </script>
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
               <img src="{{asset('/frontend/images/elcarne.png')}}" />
               <h4>Elcarne <img src="{{asset('/frontend/images/information.svg')}}" class="infoicon" /></h4>
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
                        <img src="{{asset('/frontend/images/scanner.png')}}" />
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
              
              e.preventDefault(); // stops link from making page jump to the top
              e.stopPropagation(); // when you click the button, it stops the page from seeing it as clicking the body too
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
          
      });
      
      	  
   </script>
@endsection