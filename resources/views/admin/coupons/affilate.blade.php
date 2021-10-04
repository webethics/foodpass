@extends('admin.layouts.admin')
@section('content')
	<div class="row">
		<div class="col-12">
			<h1>Affilate </h1>
			
			<div class="separator mb-5"></div>
		</div>
	</div>
	<div class="row mb-4">
		<div class="col-12 mb-4">				
			<div class="card">
				<div class="card-body">
				<div class="table-responsive customers_full"  id="tag_container">
					 @include('admin.coupons.affilatePagination')
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
<!--<script src="{{ asset('js/module/customer.js')}}"></script>	-->
@stop
@endsection