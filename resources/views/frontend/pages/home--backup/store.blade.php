@extends('frontend.creaters.landing.landing')
@section('pageTitle','Store')
@section('content')
<main class="site-content">
         <div class="container innercontainer storecontainer mobstorecont">
            <div class="row">
               <div class="col leftsidebarsec desktop_sidebar">
                  <div class="sidebar_cont">
                     <h4>Filter By</h4>
                     <div class="sidebar_switches">
                        <ul id="switch1" class="swithes">
                           <li class="ui-selected current"><span class="bgadded"></span><a href="#">Stores</a></li>
                           <li><span class="bgadded"></span><a href="#">Coupons</a></li>
                        </ul>
                     </div>
                     <div class="sidebar_switches">
                        <ul id="switch2" class="swithes">
                           <li class="ui-selected current"><span class="bgadded"></span><a href="#">Delivery</a></li>
                           <li><span class="bgadded"></span><a href="#">Pick Up</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="sidebar_cont">
                     <h4>Min. Order Amount</h4>
                     <div class="sidebar_checkboxes">
                        <div class="checkblox_list">
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                              <label class="custom-control-label" for="customCheck"><span>< $10.00</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
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
                              <input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
                              <label class="custom-control-label" for="customCheck2"><span>< $1.50</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck3" name="example1">
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
                              <input type="checkbox" class="custom-control-input" id="customCheck4" name="example1">
                              <label class="custom-control-label" for="customCheck4"><span>Pre Order</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck5" name="example1">
                              <label class="custom-control-label" for="customCheck5"><span>Ontbijt & Lunch</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck6" name="example1">
                              <label class="custom-control-label" for="customCheck6"><span>Dinner</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck7" name="example1">
                              <label class="custom-control-label" for="customCheck7"><span>Late Night Snack</span></label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck8" name="example1">
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
                              <li class="ui-selected current"><span class="bgadded"></span><a href="#">Stores</a></li>
                              <li><span class="bgadded"></span><a href="#">Coupons</a></li>
                           </ul>
                        </div>
                        <div class="sidebar_switches">
                           <ul id="switch2" class="swithes">
                              <li class="ui-selected current"><span class="bgadded"></span><a href="#">Delivery</a></li>
                              <li><span class="bgadded"></span><a href="#">Pick Up</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar_cont">
                        <h4>Min. Order Amount</h4>
                        <div class="sidebar_checkboxes">
                           <div class="checkblox_list">
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input" id="mobcustomCheck" name="example1">
                                 <label class="custom-control-label" for="mobcustomCheck"><span>€10.00 or less</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input" id="mobcustomCheck1" name="example1">
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
                                 <input type="checkbox" class="custom-control-input" id="mobcustomCheck2" name="example1">
                                 <label class="custom-control-label" for="mobcustomCheck2"><span>€1.50 or less</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input" id="mobcustomCheck3" name="example1">
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
                                 <input type="checkbox" class="custom-control-input" id="mobcustomCheck4" name="example1">
                                 <label class="custom-control-label" for="mobcustomCheck4"><span>Pre Order</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input" id="mobcustomCheck5" name="example1">
                                 <label class="custom-control-label" for="mobcustomCheck5"><span>Ontbijt & Lunch</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input" id="mobcustomCheck6" name="example1">
                                 <label class="custom-control-label" for="mobcustomCheck6"><span>Dinner</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input" id="mobcustomCheck7" name="example1">
                                 <label class="custom-control-label" for="mobcustomCheck7"><span>Late Night Snack</span></label>
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                 <input type="checkbox" class="custom-control-input" id="mobcustomCheck8" name="example1">
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
                                 <img src="{{asset('frontend/images/socialicon.png')}}" /><input type="text" class="form-control" placeholder="Search by restaurant name" /> 
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
                           <div class="storesliderblk ui-selectable ui-selected">
                              <div class="storeslider_blkdiv">
                                 <h4>Show all</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Burger</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Pizza</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Sushi</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Chicken</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Sushi</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Chicken</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Burger</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Pizza</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Sushi</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Chicken</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Sushi</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Chicken</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Burger</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Pizza</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Sushi</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Chicken</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Fish</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Sushi</h4>
                              </div>
                           </div>
                           <div class="storesliderblk">
                              <div class="storeslider_blkdiv">
                                 <h4>Chicken</h4>
                              </div>
                           </div>
                        </div>
                        <div class="morelink">
                           <a href="#" data-toggle="modal" data-target="#kitchendal">
                           More kitchens
                           </a>
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
                        Stores
                        <span class="sortselblk">
                           Sort By
                           <div class="select-data sortselect">
                              <select class="selectpicker">
                                 <option>Name</option>
                                 <option>Name 1</option>
                                 <option>Name 2</option>
                              </select>
                           </div>
                        </span>
                     </h2>
                     <div class="searchbar_div">
                        <form class="form-inline">
                           <div class="searchbardiv">
                              <i class="fa fa-search"></i><input class="form-control" type="search" placeholder="Search" aria-label="Search">
                           </div>
                        </form>
                     </div>
                     <div class="select-kitchens">
                        <div class="select-data sortselect">
                           <select class="selectpicker">
                              <option>All kitchens</option>
                              <option>100% Halal</option>
                              <option>Afghan</option>
                              <option>American</option>
                              <option>Argentinian</option>
                              <option>Sandwiches</option>
                              <option>Burgers</option>
                              <option>Chinese</option>
                              <option>Drinks</option>
                              <option>Doner</option>
                              <option>Egyptian</option>
                           </select>
                        </div>
                     </div>
                     <div class="storeblk">
                        <div class="doticon">
                           <i class="fa fa-share-alt"></i>
                        </div>
                        <div class="row">
                           <div class="col-md-3 storeimage">
                              <div class="storeimage_widget">
                                 <img src="{{asset('frontend/images/store1.png')}}" />
                                 <span class="opentag">Open</span>
                              </div>
                           </div>
                           <div class="col-md-6 storeblkcont">
                              <h3>The Flying Artichoke Restaurant<img src="{{asset('frontend/images/information.svg')}}" /></h3>
                              <p>40 Mortensen Ave, 93905 Salinas, CA</p>
                              <span>$20.00 Minimum Order</span>
                           </div>
                           <div class="col-md-3 viewcouponbtn whitebtn">
                              <a href="#" data-toggle="collapse" data-target="#couponcollapse1" aria-expanded="false" aria-controls="couponcollapse1"><span class="viewcpnbtn">View Coupon<i class="fa fa-angle-down"></i></span><span class="hidecpnbtn">Hide Coupon<i class="fa fa-angle-up"></i></span></a>
                           </div>
                        </div>
                        <div class="collapse multi-collapse" id="couponcollapse1">
                           <div class="store_offerssec">
                              <div class="store_offers">
                                 <div class="row">
                                    <div class="col-md-9 store_offercont">
                                       <span class="offertag">
                                       20%<br/><span class="lightweight">OFF</span>
                                       </span>
                                       <div class="store_offertext">
                                          <p>10% discount on your meal!</p>
                                          <span>Exp. on 31 Dec 2020 at 23:59</span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 viewcouponbtn">
                                       <a href="#" data-toggle="modal" data-target="#couponmodal">Get Coupon</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="store_offers">
                                 <div class="row">
                                    <div class="col-md-9 store_offercont">
                                       <span class="offertag freecoupon">
                                       Free</span>
                                       </span>
                                       <div class="store_offertext">
                                          <p>10% discount on your meal!</p>
                                          <span>Exp. on 31 Dec 2020 at 23:59</span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 viewcouponbtn">
                                       <a href="#" data-toggle="modal" data-target="#couponmodal">Get Coupon</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="store_offers">
                                 <div class="row">
                                    <div class="col-md-9 store_offercont">
                                       <span class="offertag freecoupon">
                                       Free</span>
                                       <div class="store_offertext">
                                          <p>10% discount on your meal!</p>
                                          <span>Exp. on 31 Dec 2020 at 23:59</span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 viewcouponbtn">
                                       <a href="#" data-toggle="modal" data-target="#couponmodal">Get Coupon</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="storeblk">
                        <div class="doticon">
                           <i class="fa fa-share-alt"></i>
                        </div>
                        <div class="row">
                           <div class="col-md-3 storeimage">
                              <div class="storeimage_widget">
                                 <img src="{{asset('frontend/images/store1.png')}}" />
                                 <span class="opentag">Open</span>
                              </div>
                           </div>
                           <div class="col-md-6 storeblkcont">
                              <h3>The Flying Artichoke Restaurant<img src="{{asset('frontend/images/information.svg')}}" /></h3>
                              <p>40 Mortensen Ave, 93905 Salinas, CA</p>
                              <span>$20.00 Minimum Order</span>
                           </div>
                           <div class="col-md-3 viewcouponbtn">
                              <a href="#" data-toggle="collapse" data-target="#couponcollapse2" aria-expanded="false" aria-controls="couponcollapse2"><span class="viewcpnbtn">View Coupon<i class="fa fa-angle-down"></i></span><span class="hidecpnbtn">Hide Coupon<i class="fa fa-angle-up"></i></span></a>
                           </div>
                        </div>
                        <div class="collapse multi-collapse" id="couponcollapse2">
                           <div class="store_offerssec">
                              <div class="store_offers">
                                 <div class="row">
                                    <div class="col-md-9 store_offercont">
                                       <span class="offertag">
                                       20%<br/><span class="lightweight">OFF</span>
                                       </span>
                                       <div class="store_offertext">
                                          <p>10% discount on your meal!</p>
                                          <span>Exp. on 31 Dec 2020 at 23:59</span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 viewcouponbtn">
                                       <a href="#" data-toggle="modal" data-target="#couponmodal">Get Coupon</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="store_offers">
                                 <div class="row">
                                    <div class="col-md-9 store_offercont">
                                       <span class="offertag freecoupon">
                                       Free</span>
                                       </span>
                                       <div class="store_offertext">
                                          <p>10% discount on your meal!</p>
                                          <span>Exp. on 31 Dec 2020 at 23:59</span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 viewcouponbtn">
                                       <a href="#" data-toggle="modal" data-target="#couponmodal">Get Coupon</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="store_offers">
                                 <div class="row">
                                    <div class="col-md-9 store_offercont">
                                       <span class="offertag freecoupon">
                                       Free</span>
                                       <div class="store_offertext">
                                          <p>10% discount on your meal!</p>
                                          <span>Exp. on 31 Dec 2020 at 23:59</span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 viewcouponbtn">
                                       <a href="#" data-toggle="modal" data-target="#couponmodal">Get Coupon</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="storeblk">
                        <div class="doticon">
                           <i class="fa fa-share-alt"></i>
                        </div>
                        <div class="row">
                           <div class="col-md-3 storeimage">
                              <div class="storeimage_widget">
                                 <img src="{{asset('frontend/images/store1.png')}}" />
                                 <span class="opentag closetag">Closed</span>
                              </div>
                           </div>
                           <div class="col-md-6 storeblkcont">
                              <h3>The Flying Artichoke Restaurant <img src="{{asset('frontend/images/information.svg')}}" /></h3>
                              <p>40 Mortensen Ave, 93905 Salinas, CA</p>
                              <span>$20.00 Minimum Order</span>
                           </div>
                           <div class="col-md-3 viewcouponbtn">
                              <a href="#" data-toggle="collapse" data-target="#couponcollapse3" aria-expanded="false" aria-controls="couponcollapse3"><span class="viewcpnbtn">View Coupon<i class="fa fa-angle-down"></i></span><span class="hidecpnbtn">Hide Coupon<i class="fa fa-angle-up"></i></span></a>
                           </div>
                        </div>
                        <div class="collapse multi-collapse" id="couponcollapse3">
                           <div class="store_offerssec">
                              <div class="store_offers">
                                 <div class="row">
                                    <div class="col-md-9 store_offercont">
                                       <span class="offertag">
                                       20%<br/><span class="lightweight">OFF</span>
                                       </span>
                                       <div class="store_offertext">
                                          <p>10% discount on your meal!</p>
                                          <span>Exp. on 31 Dec 2020 at 23:59</span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 viewcouponbtn">
                                       <a href="#" data-toggle="modal" data-target="#couponmodal">Get Coupon</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="store_offers">
                                 <div class="row">
                                    <div class="col-md-9 store_offercont">
                                       <span class="offertag freecoupon">
                                       Free</span>
                                       </span>
                                       <div class="store_offertext">
                                          <p>10% discount on your meal!</p>
                                          <span>Exp. on 31 Dec 2020 at 23:59</span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 viewcouponbtn">
                                       <a href="#" data-toggle="modal" data-target="#couponmodal">Get Coupon</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="store_offers">
                                 <div class="row">
                                    <div class="col-md-9 store_offercont">
                                       <span class="offertag freecoupon">
                                       Free</span>
                                       <div class="store_offertext">
                                          <p>10% discount on your meal!</p>
                                          <span>Exp. on 31 Dec 2020 at 23:59</span>
                                       </div>
                                    </div>
                                    <div class="col-md-3 viewcouponbtn">
                                       <a href="#" data-toggle="modal" data-target="#couponmodal">Get Coupon</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               </section>
            </div>
         </div>
         </div>
      </main>
	  <script src="{{ url('/frontend/js/jquery-2.2.0.min.js')}}" type="text/javascript"></script>
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