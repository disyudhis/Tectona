<?php

namespace App\Http\Livewire\Pages\OperatorGudang\SatuanBahan;

use Livewire\Component;

class OperatorSatuanBahanIndex extends Component
{
    public function render()
    {
        return view('livewire.pages.operator-gudang.satuan-bahan.operator-satuan-bahan-index')->extends('layouts.admin')->section('content');
    }
}
