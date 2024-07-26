<?php

namespace App\Http\Livewire\Pages\KepalaGudang\BahanBaku;

use Livewire\Component;

class KepalaBahanBakuIndex extends Component
{
    public $page_title = 'Bahan Baku | Kepala Gudang';
    public $page_name = 'Bahan Baku';
    public function render()
    {
        return view('livewire.pages.kepala-gudang.bahan-baku.kepala-bahan-baku-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
