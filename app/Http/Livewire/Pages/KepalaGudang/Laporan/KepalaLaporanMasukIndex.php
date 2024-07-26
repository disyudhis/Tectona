<?php

namespace App\Http\Livewire\Pages\KepalaGudang\Laporan;

use Livewire\Component;

class KepalaLaporanMasukIndex extends Component
{
    public $page_title = 'Laporan Masuk | Kepala Gudang';
    public $page_name = 'Laporan Masuk';
    public function render()
    {
        return view('livewire.pages.kepala-gudang.laporan.kepala-laporan-masuk-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
