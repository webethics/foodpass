@extends('admin.layouts.admin')
@section('content')
<link rel="stylesheet" href="{{ url('css/viewcoupon.css')}}" type="text/css" />
	<div class="row">
		<div class="col-12">
			<h1>Coupons </h1>
			
			<div class="separator mb-5"></div>
		</div>
	</div>
	<div class="row mb-4">
		<div class="col-12 mb-4">				
			<div class="card">
				<div class="card-body">
				<div class="table-responsive customers_full"  id="tag_container">
					 @include('admin.coupons.couponsPagination')
				</div>
				</div>
			</div>

		</div>
	</div>
	<div class="modal fade modal-right customerEditModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalRight" aria-hidden="true">
	</div>
	<div class="modal fade modal-right customerViewModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalRight" aria-hidden="true">
	</div>
	<div class="modal fade modal-right userCreateModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalRight" aria-hidden="true">
	</div>
	<div class="modal fade modal-top confirmBoxCompleteModal"  tabindex="-1" role="dialog"  aria-hidden="true"></div>
@section('userJs')
<script src="{{ url('frontend/js/coupon.js')}}" type="text/javascript"></script>
<!--<script src="{{ asset('js/module/customer.js')}}"></script>	-->
@stop
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
               <a href="javascript:void(0);" class="getcpnbtn">Get Coupon</a>
               <!--<a href="#getcpnbtn1" data-toggle="modal" data-target="#couponmodal2" class="getcpnbtn">Get Coupon</a>-->
            </div>
         </div>
      </div>
   </div>
@endsection