<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="{{asset ('admin/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
				<img src="{{asset ('admin/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-dashboard"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Tabel</span>
						</a>
						<ul class="submenu">
							<li><a href="{{ route ('artikels.index')}}">Artikel</a></li>
							<li><a href="{{ route ('dosen.index')}}">Dosen</a></li>
							<li><a href="{{ route ('fakultas.index')}}">Fakultas</a></li>
							<li><a href="{{ route ('ukm.index')}}">Ukm</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>

	