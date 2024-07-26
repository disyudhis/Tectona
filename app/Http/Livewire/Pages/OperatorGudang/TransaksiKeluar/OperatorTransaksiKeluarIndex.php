<?php

namespace App\Http\Livewire\Pages\OperatorGudang\TransaksiKeluar;

use Livewire\Component;

class OperatorTransaksiKeluarIndex extends Component
{
    public $page_title = 'Transaksi Keluar | Operator Gudang';
    public $page_name = 'Transaksi Keluar';
    public function render()
    {
        return view('livewire.pages.operator-gudang.transaksi-keluar.operator-transaksi-keluar-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
