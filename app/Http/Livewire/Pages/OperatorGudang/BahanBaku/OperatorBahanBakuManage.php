<?php

namespace App\Http\Livewire\Pages\OperatorGudang\BahanBaku;

use Livewire\Component;

class OperatorBahanBakuManage extends Component
{
    public $page_title = 'Tambah Bahan | Operator Gudang';
    public $page_name = 'Bahan Baku';
    public function render()
    {
        return view('livewire.pages.operator-gudang.bahan-baku.operator-bahan-baku-manage')
        ->extends('layouts.admin')
        ->section('content');
    }
}
