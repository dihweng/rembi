<div class="sidebar" data-color="blue" data-image="/creativetim/img/sidebar-4.jpg">
	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="{{route('account_dashboard')}}" class="simple-text">ACCOUNT</a>
		</div>

		<ul class="nav">
			<li class="@yield('dashboard_active')">
				<a href="{{route('account_dashboard')}}">
					<i class="pe-7s-graph"></i>
					<p>DASHBOARD</p>
				</a>
			</li>
			<li class="@yield('service_active')">
				<a href="{{route('register_service')}}">
					<i class="pe-7s-add-user"></i>
					<p>SERVICES</p>
				</a>
			</li>
			<li class="@yield('inventory_active')">
				<a href="{{route('register_inventory')}}">
					<i class="pe-7s-cash"></i>
					<p>INVENTORY</p>
				</a>
			</li>
		</ul>
	</div>
</div>
