<?php

namespace App\Http\Livewire\Pages\OperatorGudang\BahanBaku;

use Livewire\Component;

class OperatorBahanBakuIndex extends Component
{
    public $page_title = 'Bahan Baku | Operator Gudang';
    public $page_name = 'Bahan Baku';
    public function render()
    {
        return view('livewire.pages.operator-gudang.bahan-baku.operator-bahan-baku-index')->extends('layouts.admin')->section('content');
    }
}
