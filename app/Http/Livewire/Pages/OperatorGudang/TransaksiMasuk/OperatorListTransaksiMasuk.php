<?php

namespace App\Http\Livewire\Pages\OperatorGudang\TransaksiMasuk;

use Livewire\Component;

class OperatorListTransaksiMasuk extends Component
{
    public $page_title = 'Daftar Barang | Operator Gudang';
    public $page_name = 'Daftar Barang';
    public function render()
    {
        return view('livewire.pages.operator-gudang.transaksi-masuk.operator-list-transaksi-masuk')->extends('layouts.admin')->section('content');
    }
}
