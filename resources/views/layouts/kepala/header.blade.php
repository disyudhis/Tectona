<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
    <!--begin::Header Nav-->
    <ul class="menu-nav">
        <li class="menu-item menu-item-open menu-item-submenu menu-item-rel {{ Route::currentRouteNamed('kg.bahanbaku.*') ? 'menu-item-open menu-item-here' : '' }}" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">Bahan Baku</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">
                    <li class="menu-item {{ Route::currentRouteNamed('kg.bahanbaku.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('kg.bahanbaku.index') }}" class="menu-link">
                            <span class="menu-text">Daftar Bahan Baku</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="menu-item menu-item-open menu-item-submenu menu-item-rel {{ Route::currentRouteNamed('kg.laporan.*') ? 'menu-item-open menu-item-here' : '' }}" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">Laporan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">
                    <li class="menu-item {{ Route::currentRouteNamed('kg.laporan.masuk.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('kg.laporan.masuk.index') }}" class="menu-link">
                            <span class="menu-text">Daftar Laporan Masuk</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::currentRouteNamed('kg.laporan.keluar.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('kg.laporan.keluar.index') }}" class="menu-link">
                            <span class="menu-text">Daftar Laporan Keluar</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- <li class="menu-item menu-item-open menu-item-submenu menu-item-rel {{ Route::currentRouteNamed('kg.pengaturan.*') ? 'menu-item-open menu-item-here' : '' }}" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">Pengaturan Akun</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">
                    <li class="menu-item {{ Route::currentRouteNamed('kg.pengaturan.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('kg.pengaturan.index') }}" class="menu-link">
                            <span class="menu-text">Tambah Akun</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li> --}}
    </ul>
    <!--end::Header Nav-->
</div>
