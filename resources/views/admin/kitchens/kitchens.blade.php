@extends('admin.layouts.admin')
@section('content')
	<div class="row">
		<div class="col-12">
			<h1>Kitchens</h1>
			<span class="fl_right balance"><a id="create_kitchen" class="btn btn-primary" href="javascript:void(0)">Add Menu</a></span>
			<div class="separator mb-5"></div>
		</div>
	</div>
	<div class="row mb-4">
		<div class="col-12 mb-4">				
			<div class="card">
				<div class="card-body">
				<div class="table-responsive customers_full"  id="tag_container">
					 @include('admin.kitchens.kitchenspagination')
				</div>
				</div>
			</div>

		</div>
	</div>
	<div class="modal fade modal-right kitchenEditModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalRight" aria-hidden="true">
	</div>
	<div class="modal fade modal-right customerViewModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalRight" aria-hidden="true">
	</div>
	<div class="modal fade modal-right kitchenCreateModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalRight" aria-hidden="true">
	</div>
	<div class="modal fade modal-top confirmBoxCompleteModal"  tabindex="-1" role="dialog"  aria-hidden="true"></div>
@section('userJs')
<script src="{{ asset('js/module/customer.js')}}"></script>
@stop
@endsection