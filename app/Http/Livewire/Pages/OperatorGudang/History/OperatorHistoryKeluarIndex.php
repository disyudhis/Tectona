<?php

namespace App\Http\Livewire\Pages\OperatorGudang\History;

use Livewire\Component;

class OperatorHistoryKeluarIndex extends Component
{
    public $page_title = 'Laporan Keluar | Operator Gudang';
    public $page_name = 'Laporan Keluar';
    public function render()
    {
        return view('livewire.pages.operator-gudang.history.operator-history-keluar-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
