<?php

namespace App\Http\Livewire\Pages\OperatorGudang\JenisBahan;

use Livewire\Component;

class OperatorJenisBahanIndex extends Component
{
    public $page_title = 'Jenis Bahan | Operator Gudang';
    public $page_name = 'Jenis Bahan';
    
    public function render()
    {
        return view('livewire.pages.operator-gudang.jenis-bahan.operator-jenis-bahan-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
