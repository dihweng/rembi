<div class="sidebar" data-color="blue" data-image="/creativetim/img/sidebar-4.jpg">
	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="{{route('frontdesk_dashboard')}}" class="simple-text">FRONT DESK</a>
		</div>

		<ul class="nav">
			<li class="@yield('dashboard_active')">
				<a href="{{route('frontdesk_dashboard')}}">
					<i class="pe-7s-graph"></i>
					<p>DASHBOARD</p>
				</a>
			</li>
			<li class="@yield('reg_patient_active')">
				<a href="{{route('register_patient')}}">
					<i class="pe-7s-add-user"></i>
					<p>REGISTER PATIENT</p>
				</a>
			</li>
			<li class="@yield('reg_family_active')">
				<a href="{{route('register_family')}}">
					<i class="pe-7s-users"></i>
					<p>REGISTER FAMILY</p>
				</a>
			</li>
			<li class="@yield('reg_corporate_active')">
				<a href="{{route('register_corporate')}}">
					<i class="pe-7s-cash"></i>
					<p>REGISTER CORPORATE</p>
				</a>
			</li>
		</ul>
	</div>
</div>
