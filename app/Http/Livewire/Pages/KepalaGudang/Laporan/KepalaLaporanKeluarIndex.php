<?php

namespace App\Http\Livewire\Pages\KepalaGudang\Laporan;

use Livewire\Component;

class KepalaLaporanKeluarIndex extends Component
{
    public $page_title = 'Laporan Keluar | Kepala Gudang';
    public $page_name = 'Laporan Keluar';

    public function render()
    {
        return view('livewire.pages.kepala-gudang.laporan.kepala-laporan-keluar-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
