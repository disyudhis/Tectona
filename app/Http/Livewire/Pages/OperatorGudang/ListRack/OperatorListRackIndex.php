<?php

namespace App\Http\Livewire\Pages\OperatorGudang\ListRack;

use Livewire\Component;

class OperatorListRackIndex extends Component
{
    public $page_title = 'List Rack | Operator Gudang';
    public $page_name = 'List Rack';
    
    public function render()
    {
        return view('livewire.pages.operator-gudang.list-rack.operator-list-rack-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
