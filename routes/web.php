<?php

use App\Http\Livewire\Pages\KepalaGudang\BahanBaku\KepalaBahanBakuIndex;
use App\Http\Livewire\Pages\KepalaGudang\Dashboard\KepalaDashboardIndex;
use App\Http\Livewire\Pages\KepalaGudang\Laporan\KepalaLaporanIndex;
use App\Http\Livewire\Pages\KepalaGudang\Laporan\KepalaLaporanKeluarIndex;
use App\Http\Livewire\Pages\KepalaGudang\Laporan\KepalaLaporanMasukIndex;
use App\Http\Livewire\Pages\KepalaGudang\PengaturanAkun\KepalaPengaturanAkunIndex;
use App\Http\Livewire\Pages\OperatorGudang\BahanBaku\OperatorBahanBakuIndex;
use App\Http\Livewire\Pages\OperatorGudang\BahanBaku\OperatorBahanBakuManage;
use App\Http\Livewire\Pages\OperatorGudang\Dashboard\OperatorDashboardIndex;
use App\Http\Livewire\Pages\OperatorGudang\DetailSlot\OperatorSlotDetail;
use App\Http\Livewire\Pages\OperatorGudang\History\OperatorHistoryIndex;
use App\Http\Livewire\Pages\OperatorGudang\History\OperatorHistoryKeluarIndex;
use App\Http\Livewire\Pages\OperatorGudang\JenisBahan\OperatorJenisBahanIndex;
use App\Http\Livewire\Pages\OperatorGudang\JenisBahan\OperatorJenisBahanManage;
use App\Http\Livewire\Pages\OperatorGudang\ListRack\OperatorListRackDetail;
use App\Http\Livewire\Pages\OperatorGudang\ListRack\OperatorListRackIndex;
use App\Http\Livewire\Pages\OperatorGudang\ListRack\OperatorListRackManage;
use App\Http\Livewire\Pages\OperatorGudang\SatuanBahan\OperatorSatuanBahanIndex;
use App\Http\Livewire\Pages\OperatorGudang\TransaksiKeluar\OperatorTransaksiKeluarIndex;
use App\Http\Livewire\Pages\OperatorGudang\TransaksiMasuk\OperatorListTransaksiMasuk;
use App\Http\Livewire\Pages\OperatorGudang\TransaksiMasuk\OperatorTransaksiMasukIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\LoginViewIndex;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Pages\Admin\Dashboard\AdminDashboardIndex;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return redirect(route('landing-page'));
});

Auth::routes([
    'register' => false,
    'login' => false,
    'verify' => true,
]);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', LoginViewIndex::class)->name('landing-page');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'verified'], function () {
        Route::group(['middleware' => 'kg'], function () {
            Route::prefix('kepala-gudang')->group(function () {
                Route::get('/dashboard', KepalaDashboardIndex::class)->name('kg.dashboard.index');

                Route::prefix('bahan-baku')->group(function () {
                    Route::get('/', KepalaBahanBakuIndex::class)->name('kg.bahanbaku.index');
                });

                Route::prefix('laporan')->group(function () {
                    Route::get('/masuk', KepalaLaporanMasukIndex::class)->name('kg.laporan.masuk.index');
                    Route::get('/keluar', KepalaLaporanKeluarIndex::class)->name('kg.laporan.keluar.index');
                });

                Route::prefix('pengaturan-akun')->group(function () {
                    Route::get('/', KepalaPengaturanAkunIndex::class)->name('kg.pengaturan.index');
                });
            });
        });

        Route::group(['middleware' => 'og'], function () {
            Route::prefix('operator-gudang')->group(function () {
                Route::get('/dashboard', OperatorDashboardIndex::class)->name('og.dashboard.index');

                Route::prefix('bahan-baku')->group(function () {
                    Route::get('/', OperatorBahanBakuIndex::class)->name('og.bahanbaku.index');
                    Route::get('/add', OperatorBahanBakuManage::class)->name('og.bahanbaku.manage');
                });

                Route::prefix('jenis-bahan')->group(function () {
                    Route::get('/', OperatorJenisBahanIndex::class)->name('og.jenisbahan.index');
                    Route::get('/add', OperatorJenisBahanManage::class)->name('og.jenisbahan.manage');
                });

                Route::prefix('transaksi')->group(function () {
                    Route::get('/', OperatorListTransaksiMasuk::class)->name('og.listtransaksi.index');
                    Route::get('/masuk', OperatorTransaksiMasukIndex::class)->name('og.transaksi.masuk.index');
                    Route::get('/keluar', OperatorTransaksiKeluarIndex::class)->name('og.transaksi.keluar.index');
                });

                Route::prefix('list-rack')->group(function () {
                    Route::get('/', OperatorListRackIndex::class)->name('og.listrack.index');
                    Route::get('/add', OperatorListRackManage::class)->name('og.listrack.manage');
                    Route::get('/{id}', OperatorListRackDetail::class)->name('og.listrack.detail');
                    Route::get('/{id}/{id_slot}', OperatorSlotDetail::class)->name('og.listslot.detail');
                });

                Route::prefix('history')->group(function () {
                    Route::get('/masuk', OperatorHistoryIndex::class)->name('og.history.masuk.index');
                    Route::get('/keluar', OperatorHistoryKeluarIndex::class)->name('og.history.keluar.index');
                });
            });
        });

    });
});
