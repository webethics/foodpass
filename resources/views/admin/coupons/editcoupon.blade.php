@extends('admin.layouts.admin')
@section('content')
<link rel="stylesheet" href="{{ url('css/multiselect.css')}}" type="text/css" />
<style>
.ms-options > ul, .ms-options > ul > li {
    list-style: none;
    margin: 0;
    padding: 0;
}
</style>
<div class="row">
<div class="col-12">
	<h1>Edit Coupon</h1>
	<div class="separator mb-5"></div>
</div>
</div>
       <!-- Main content -->
				<div class="card">
				<div class="card-body">
				<div class="table-responsive"  id="tag_container">
				<div class="col-lg-12">
					<div class="box box-primary">
						<div class="box-body">
						  
							@include('flash-message')		
					        
							{{ Form::open(array('url' => 'admin/update-coupons/'.$coupons->id, 'method' => 'post','class'=>'profile form-horizontal')) }}
							
							<?php
								if(isset($coupons->coupon_filters) && !empty($coupons->coupon_filters)){
									$coupon_filters = explode(",",$coupons->coupon_filters);
								}else{
									$coupon_filters = array();
								}
								
								if(isset($coupons->coupon_display) && !empty($coupons->coupon_display)){
									$coupon_display = explode(",",$coupons->coupon_display);
								}else{
									$coupon_display = array();
								}
							?>

							<div class="form-group col-md-12">
								<div class="row">
									<div class="col-md-8 row col-xs-12">
										<div class="col-md-12 col-xs-12 field mb-4">
										{{ Form::label('Coupon Filters') }}
										<select name="coupon_filters[]" multiple id="coupon_filters" class="form-control">
										  <option value="1" <?php if(in_array("1", $coupon_filters)) echo "selected"; ?>>Pre Order</option>
										  <option value="2" <?php if(in_array("2", $coupon_filters)) echo "selected"; ?>>Ontbijt & Lunch</option>
										  <option value="3" <?php if(in_array("3", $coupon_filters)) echo "selected"; ?>>Dinner</option>
										  <option value="4" <?php if(in_array("4", $coupon_filters)) echo "selected"; ?>>Late Night Snack</option>
										  <option value="5" <?php if(in_array("5", $coupon_filters)) echo "selected"; ?>>Special Deals</option>
										</select>
										</div>
										<div class="clearfix"></div>
										<div class="col-md-12 col-xs-12 field mb-4">
											{{ Form::label('Coupon Display') }}
											<select name="coupon_display[]" multiple  id="coupon_display" class="form-control">	
											  <option value="1" <?php if(in_array("1", $coupon_display)) echo "selected"; ?>>Coupons A</option>
											  <option value="2" <?php if(in_array("2", $coupon_display)) echo "selected"; ?>>Coupons B</option>
											  <option value="3" <?php if(in_array("3", $coupon_display)) echo "selected"; ?>>Coupons C</option>
											</select>
											<span class="error"> {{ $errors->first('coupon_display')  }} </span>
										</div>
										<div class="clearfix"></div>
										
										<div class="col-md-12 col-xs-12 field mb-4">
										{{ Form::label('Status') }}
										<select name="is_varified" class="form-control">	
										  <option value="1" <?php if($coupons->is_varified == 1) echo "selected"; ?>>Enable</option>
										  <option value="0" <?php if($coupons->is_varified == 0) echo "selected"; ?>>Disable</option>
										</select>
										<span class="error"> {{ $errors->first('title')  }} </span>
										</div>
										<div class="clearfix"></div>
									</div>

								</div>
							</div>


							<div class="form-group col-md-12">
								 <div class="sign-up-btn ">
									
									 <input name="login" onclick="submitcoupon(event);" class="loginmodal-submit btn btn-primary" id="profile_update" value="Update" type="submit">
									 <a href="{{url('admin/coupons')}}" name="back" class="loginmodal-submit btn btn-primary" id="profile_back" value="Back" type="submit">Back</a>
								</div>
							</div>
								  {{ Form::close() }}
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>

	<script src="{{ asset('js/multiselect.js')}}"></script>	

	<script>
	$('#coupon_filters').multiselect({
		columns: 1,
		placeholder: 'Select Coupon Filters',
		search: true,
		selectAll: true
	});
	
	$('#coupon_display').multiselect({
		columns: 1,
		placeholder: 'Select Coupon Display',
		search: true,
		selectAll: true
	});
	
	
	function submitcoupon(e){
		var error_free = true;
		var coupon_filters = $.trim($("#coupon_filters").val());
		if(!coupon_filters){
			toastr.error("Error", "Coupon filters is required.");
			error_free=false;
		}
		
		if(error_free){
			var coupon_display = $.trim($("#coupon_display").val());
			if(!coupon_display){
				toastr.error("Error", "Coupon Display is required.");
				error_free=false;
			}
		}
		
		
		
		if (!error_free){
			e.preventDefault(); 
		}
	}
	</script>
  
    @stop
