<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
    <!--begin::Header Nav-->
    <ul class="menu-nav">
        <li class="menu-item menu-item-open menu-item-submenu menu-item-rel {{ Route::currentRouteNamed('og.bahanbaku.*') ? 'menu-item-open menu-item-here' : '' }}" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">Bahan Baku</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">
                    <li class="menu-item {{ Route::currentRouteNamed('og.bahanbaku.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('og.bahanbaku.index') }}" class="menu-link">
                            <span class="menu-text">Daftar Bahan Baku</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="menu-item menu-item-open menu-item-submenu menu-item-rel {{ Route::currentRouteNamed('og.jenisbahan.*') ? 'menu-item-open menu-item-here' : '' }}" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">Jenis Bahan Baku</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">
                    <li class="menu-item {{ Route::currentRouteNamed('og.jenisbahan.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('og.jenisbahan.index') }}" class="menu-link">
                            <span class="menu-text">Daftar Jenis Bahan Baku</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="menu-item menu-item-open menu-item-submenu menu-item-rel {{ Route::currentRouteNamed('og.transaksi.*') ? 'menu-item-open menu-item-here' : '' }}" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">Transaksi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">
                    <li class="menu-item {{ Route::currentRouteNamed('og.listtransaksi.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('og.listtransaksi.index') }}" class="menu-link">
                            <span class="menu-text">Daftar Barang</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::currentRouteNamed('og.transaksi.masuk.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('og.transaksi.masuk.index') }}" class="menu-link">
                            <span class="menu-text">Transaksi Masuk</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::currentRouteNamed('og.transaksi.keluar.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('og.transaksi.keluar.index') }}" class="menu-link">
                            <span class="menu-text">Transaksi Keluar</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="menu-item menu-item-open menu-item-submenu menu-item-rel {{ Route::currentRouteNamed('og.listrack.*') ? 'menu-item-open menu-item-here' : '' }}" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">List Rack</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">
                    <li class="menu-item {{ Route::currentRouteNamed('og.listrack.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('og.listrack.index') }}" class="menu-link">
                            <span class="menu-text">Daftar Rack</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="menu-item menu-item-open menu-item-submenu menu-item-rel {{ Route::currentRouteNamed('og.history.*') ? 'menu-item-open menu-item-here' : '' }}" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">Laporan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">
                    <li class="menu-item {{ Route::currentRouteNamed('og.history.masuk.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('og.history.masuk.index') }}" class="menu-link">
                            <span class="menu-text">Laporan Masuk</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                    <li class="menu-item {{ Route::currentRouteNamed('og.history.keluar.index') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="{{ route('og.history.keluar.index') }}" class="menu-link">
                            <span class="menu-text">Laporan Keluar</span>
                            <span class="menu-desc"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <!--end::Header Nav-->
</div>
