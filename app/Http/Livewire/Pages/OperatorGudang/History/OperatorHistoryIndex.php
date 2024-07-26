<?php

namespace App\Http\Livewire\Pages\OperatorGudang\History;

use Livewire\Component;

class OperatorHistoryIndex extends Component
{
    public $page_title = 'Laporan Masuk | Operator Gudang';
    public $page_name = 'Laporan Masuk';
    
    public function render()
    {
        return view('livewire.pages.operator-gudang.history.operator-history-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
