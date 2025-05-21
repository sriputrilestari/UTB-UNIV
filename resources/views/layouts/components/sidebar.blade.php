<div class="left-side-bar">
    <div style="display: flex; flex-direction: column; align-items: center; padding: 20px;">
        <a href="index.html">
            <img src="{{asset ('admin/vendors/images/UTB_LOGOO.png')}}" alt="Logo UTB" style="height: 100px;">
        </a>
		</div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
					<li class="">
						<a href="{{route('home')}}" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-home"></span><span class="mtext">Branda</span>
						</a>
					</li>
					<li class="">
						<a href="{{ route('artikels.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-newspaper-o"></span><span class="mtext">Artikels</span>
						</a>
					</li>
					<li class="">
						<a href="{{ route('dosen.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-group"></span><span class="mtext">Dosen</span>
						</a>
					</li>
					<li class="">
						<a href="{{ route('fakultas.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-mortar-board"></span><span class="mtext">Fakultas</span>
						</a>
					</li>
					<li class="">
						<a href="{{ route('fasilitas.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-university"></span><span class="mtext">Fasilitas</span>
						</a>
					</li>
					<li class="">
						<a href="{{ route('ukm.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-book"></span><span class="mtext">Ukm</span>
						</a>
					</li>
					<li class="">
						<a href="{{ route('prestasi.index') }}" class="dropdown-toggle no-arrow">
							<span class="micon fa fa-lightbulb-o"></span><span class="mtext">Prestasi</span>
						</a>
					</li>
                </ul>
            </div>
        </div>
    </div>

