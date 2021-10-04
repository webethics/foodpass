<div class="menu">
	<div class="main-menu">
		<div class="scroll">
		
		
		 @php    
			$roleArray = Config::get('constant.role_id');
			$dashboardactive='';  $custactive='';	 $configactive='';  	$roleactive='';$cmsactive='';$couponsactive='';
			
			$emailactive ='';$site_sactive ='';$accactive  ='';$orders = '';$affilate = '';$kitchens = '';
		 @endphp
		 
		 @if(collect(request()->segments())->last()=='account')
		 @php
	      $accactive ='active'
	     @endphp
		 @endif

		 @if(collect(request()->segments())->last()=='kitchens')
		 @php
	      $kitchens ='active'
	     @endphp
		 @endif
		
		  @if(collect(request()->segments())->last()=='settings')
		 @php
	      $configactive ='active'
	     @endphp
		 @endif
		 {{-- @if(collect(request()->segments())->last()=='dashboard')
		 @php
	      $dashboardactive ='active'
	     @endphp
		 @endif--}}
		  
		 @if(collect(request()->segments())->last()=='customers' || collect(request()->segments())->last()=='dashboard')
			@php
				$custactive ='active'
			@endphp
		 @endif
		 
		 @if(collect(request()->segments())->last()=='coupons')
			@php
				$couponsactive ='active'
			@endphp
		 @endif
		 
		 @if(collect(request()->segments())->last()=='affilate')
			@php
				$affilate ='active'
			@endphp
		 @endif
		 
		 @if(collect(request()->segments())->last()=='orders')
			@php
				$orders ='active'
			@endphp
		 @endif
		  
		  @if(collect(request()->segments())->last()=='emails')
		 @php
	      $emailactive ='active'
	     @endphp
		 @endif
		 @if(collect(request()->segments())->last()=='roles')
		 @php
	      $roleactive ='active'
	     @endphp
		 @endif
		 
		@if(collect(request()->segments())->last()=='cms-pages')
		 @php
	      $cmsactive ='active'
	     @endphp
		 @endif
		 
			<ul class="list-unstyled">
			
					{{--@if(check_role_access('dashboard_listing'))
					<!--<li class="{{$dashboardactive}}">
						<a href="{{url('/admin/dashboard')}}">
							<i class="simple-icon-home"></i>
							<span>Dashbaord</span>
						</a>
					</li>-->
					@endif--}}
					@if(current_user_role_id() != 1)
					<li class="{{$accactive}}">
						<a href="{{url('/admin/account')}}">
							<i class="iconsminds-user"></i> 
							<span>Account</span>
						</a>
					</li>
					@endif
					@if(check_role_access('customer_listing'))
						<li class="{{$custactive}}">
							<a href="{{url('/admin/customers')}}">
								<i class="simple-icon-user"></i>
								<span>Customers</span>
							</a>
						</li>
					@endif

					<li class="{{$kitchens}}">
							<a href="{{url('/admin/kitchens')}}">
								<i class="simple-icon-fire"></i>
								<span>kitchens</span>
							</a>
						</li>
					
						<li class="{{$couponsactive}}">
							<a href="{{url('/admin/coupons')}}">
								<i class="simple-icon-wallet"></i>
								<span>Coupons</span>
							</a>
						</li>
						
						<li class="{{$orders}}">
							<a href="{{url('/admin/orders')}}">
								<i class="simple-icon-handbag"></i>
								<span>orders</span>
							</a>
						</li>
						
						<li class="{{$affilate}}">
							<a href="{{url('/admin/affilate')}}">
								<i class="simple-icon-badge"></i>
								<span>Affilate</span>
							</a>
						</li>
					
					@if(check_role_access('email_listing'))
					<li class="{{$emailactive}}">
						<a href="{{url('/admin/emails')}}">
							<i class="iconsminds-mail"></i>
							<span>Email</span>
						</a>
					</li>
					@endif
					@if(check_role_access('config_listing'))
					<li class="{{$configactive}}">
						<a href="{{url('/admin/settings')}}">
							<i class="simple-icon-settings"></i>
							<span>Config</span>
						</a>
					</li>
					@endif
					@if(check_role_access('roles_listing'))
					<li class="{{$roleactive}}">
						<a href="{{url('/admin/roles')}}">
							<i class="simple-icon-organization"></i>
							<span>Roles</span>
						</a>
					</li>
					@endif
					{{--@if(check_role_access('cms_pages_listing'))--}}
					<li class="{{$cmsactive}}">
						<a href="{{url('/admin/cms-pages')}}">
							<i class="simple-icon-docs"></i>
							<span>CMS Pages</span>
						</a>
					</li>
					{{--@endif--}}
					

			</ul>
		</div>
	</div>    
</div>