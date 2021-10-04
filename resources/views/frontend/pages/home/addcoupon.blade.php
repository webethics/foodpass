@extends('frontend.creaters.landing.landing')
@section('pageTitle','Addcoupon')
@section('content')
<link rel="stylesheet" href="{{ url('frontend/css/coupon.css')}}" type="text/css" />
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
                     <h2>Make a coupon </h2>
                     <div class="addcouponsec">
                        <div class="container p-0">
                           <div class="row">
                              <div class="col-md-4 addcpn_image">
                                 <h4>Select product</h4>
                                 <div class="uploadimage_blk">
									<a href="javascript:void(0)" data-toggle="modal" data-target=".upload_photo_modal" class="show_image"  >
										<div class="circle">
										   <img class="profile-pic" src="{{asset('frontend/images/default_user.jpg')}}">
										</div>
										<div class="p-image">
										   <div class="upload-button">
											   
												  <img src="{{asset('frontend/images/picture.svg')}}" />
												  <span class="selpdtlabel">Select Product</span>
											  
										   </div>
										   <input class="file-upload" type="file" accept="image/*"/>
										   
										</div>
									 </a>
                                 </div>
                              </div>
                              <div class="col-md-8 addcpm_form">
                                 <form class="forumform addcouponform" action = "{{ route('user.savecoupon') }}" method="post" enctype="multipart/form-data" id="add_coupon_form">
								 {{ csrf_field() }}
								 
                                    <div class="row">
                                       <div class="col-md-6 form-group">
                                          <label>Product Name</label>
                                          <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" value="" id="product_name">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label>Expire time and date</label>
                                          <div class="row expirerow">
                                             <div class="col-md-6 expireinput">
                                                <input id="datepicker1" name="coupon_start_time" class="form-control" placeholder="From" />
                                             </div>
                                             <div class="col-md-6 expireinput">
                                                <input id="datepicker2" name="coupon_end_time" class="form-control" placeholder="Until" /> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col-md-6 form-group deliverY-block">
                                          <label>Range(KM)</label>
                                          <input type="text" name="delivery_range" id="delivery_range" class="form-control" placeholder="Range" value="">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label>Pickup/Delivery</label>
                                          <div class="div-pickup-delivery">
                                             <input class="pickup_delivery" type="radio" id="toggle-on" name="coupon_pickup_delivery" value=1>
                                             <label class="pickup_delivery toggle-pickup" for="toggle-on">Pickup</label>
                                             <input class="pickup_delivery" type="radio" id="toggle-off" name="coupon_pickup_delivery" value=2>
                                             <label class="pickup_delivery toggle-delivery" for="toggle-off">Delivery</label>
                                          </div>
                                          <!--div class="select-data sortselect">
                                             <select class="selectpicker" name="coupon_pickup_delivery" id="coupon_pickup_delivery">
                                                <option>Select Pickup/Delivery</option>
                                                <option value = "1">Pickup</option>
                                                <option value = "2">Delivery</option>
                                             </select>
                                          </div-->
                                       </div>
                                    </div>
                                    <div class="row bordered_row">
                                       <div class="col-md-12 form-group">
                                          <div class="cpntype_div">
                                             <div class="row" style="margin:0">
                                                <div class="col-md-6 form-group" style="padding-left:0;">
                                                   <label class="current_price">Current Price</label>
                                                   <input type="text" name="coupon_price" id="coupon_price" class="form-control" placeholder="Current Price" value="">
                                                </div>
                                                <div class="col-md-6 form-group" style="padding-left:0;">
                                                   <label class="discount_code">Discount Code</label>
                                                   <input type="text" name="discount_code" id="discount_code" class="form-control" placeholder="Discount Code" value="">
                                                </div>
                                             </div>
                                             <div class="cpntype_hdr">
                                                <label>Select Coupon type</label>
                                                <div class="cpntype_btns">
												   <input type = "hidden" id="coupon_type" name="coupon_type" />
												   <input type = "hidden" id="free_coupon_type" name="free_coupon_type" />
                                                   <span class = "coupon_type cursor" data-id="1">€</span>
                                                   <span class = "coupon_type cursor" data-id="2">%</span>
                                                   <span class = "coupon_type_free cursor" data-id="3">Free</span>
                                                </div>
                                             </div>
                                             <div class="cpntype_input" id="euro_precent" style="display:none;">
                                                <label class="coupon_discount_label">Hoeveel € korting wil je geven?</label>
                                                <div class="cpntype_formgroup">
                                                   <input type="text" name="discount_1" id="discount_1" class="form-control" placeholder="Discount" value="" />
                                                   <input type="text"  name="new_price_1" id="new_price_1" class="form-control" placeholder="New Price" value="" readonly />
                                                </div>
                                                <!--<div class="cpntype_formgroup">
                                                   <input type="text" name="discount_2" id="discount_2" class="form-control" placeholder="Discount €" value="" />
                                                   <input type="text" name="new_price_2" id="new_price_2" class="form-control" placeholder="New Price" value="" />
                                                </div>-->
                                             </div>
                                  <div class="cpntype_input" id="free_product" style="display:none;">
                                     <label class="coupon_discount_label">Naam product (Bijv. Gratis Cola of Gratis bezorging)</label>
												<div class="cpntype_formgroup">
                                                   <input type="text" name="free_product" id="free_product_input" class="form-control" placeholder="Product Name" value="" />
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12 form-group">
                                          <label>Details</label>
										  <input type = "hidden" name="coupon_image" value = "" id="coupon_image"> 
                                          <textarea class="form-control" rows="3" id="details" name="details"></textarea>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12 submitbtn">
                                          <button type="submit" onclick="submiBtnClick(event);" class="btn text-uppercase">Save Coupon</button>
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
		 
		 <!--Cropper MOdal Start-->
		  <!--Image cropper model-->
	
						
<div class="modal fade upload_photo_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg subs-modal profile_photo_modal">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Upload Photo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<div id="upload-demo"></div>
				<h6>Choose image to crop:</h6>
				<!--input type="file" id="image_file"--> 
				<input type="file" id="upload_profile_file" name="upload_profile_file" class="upload_input" accept="image/*" onchange="validate(this.value)">
				<label for="upload_profile_file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>Choose a file…</span></label>
				<p class="upload_profile_file_error error"></p>
				<button class="btn upload-image mt-0" disabled="disabled" style="margin-top:2%">Upload Image</button>
				<div class="alert alert-success" id="upload-success" style="display: none;margin-top:10px;"></div>
			</div>
		</div>
	</div>
</div>
		 <!--Cropper MOdal END-->
		 
		 <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
		 <script src="{{ url('frontend/js/croppie.js')}}" type="text/javascript"></script>
		  <script src="{{ url('frontend/js/coupon.js')}}" type="text/javascript"></script>
      <script>
         $('#datepicker1').datetimepicker({
			 datepicker: { 
				 disableDates:  function (date) {
					 const currentDate = new Date().setHours(0,0,0,0);
					return date.setHours(0,0,0,0) >= currentDate ? true : false;
				}
			},footer: true,format: 'dd-mm-yyyy HH:MM'});
			
         $('#datepicker2').datetimepicker({ datepicker: { 
				 disableDates:  function (date) {
					 const currentDate = new Date().setHours(0,0,0,0);
					return date.setHours(0,0,0,0) >= currentDate ? true : false;
				}
			},footer: true,format: 'dd-mm-yyyy HH:MM'});
      </script>
   </body>
@endsection