<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>UTB-Universitas Teknologi Bandung</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('admin/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset ('admin/vendors/images/UTB-logo.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset ('admin/vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset ('admin/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset ('admin/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset ('admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset ('admin/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset ('admin/vendors/styles/style.css')}}">

    @yield('style')

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="{{asset ('admin/vendors/images/deskapp-logo.svg')}}" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="{{asset ('admin/vendors/images/photo1.jpg')}}" alt="">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						 <a href="href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--SIDEBAR -->
@include('layouts.components.sidebar')
	
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
        @yield('content')
	</div>
	<!-- js -->
	<script src="{{asset ('admin/vendors/scripts/core.js')}}"></script>
	<script src="{{asset ('admin/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset ('admin/vendors/scripts/process.js')}}"></script>
	<script src="{{asset ('admin/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset ('admin/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset ('admin/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset ('admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset ('admin/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset ('admin/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset ('admin/vendors/scripts/dashboard.js')}}"></script>

    @stack('scripts')
</body>
</html>