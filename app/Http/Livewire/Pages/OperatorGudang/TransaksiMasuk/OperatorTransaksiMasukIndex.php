<?php

namespace App\Http\Livewire\Pages\OperatorGudang\TransaksiMasuk;

use Livewire\Component;

class OperatorTransaksiMasukIndex extends Component
{
    public $page_title = 'Transaksi Masuk | Operator Gudang';
    public $page_name = 'Transaksi Masuk';
    public function render()
    {
        return view('livewire.pages.operator-gudang.transaksi-masuk.operator-transaksi-masuk-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
