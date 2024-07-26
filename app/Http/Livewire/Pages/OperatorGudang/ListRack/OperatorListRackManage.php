<?php

namespace App\Http\Livewire\Pages\OperatorGudang\ListRack;

use Livewire\Component;

class OperatorListRackManage extends Component
{
    public $page_title = 'List Rack | Operator Gudang';
    public $page_name = 'List Rack';
    public function render()
    {
        return view('livewire.pages.operator-gudang.list-rack.operator-list-rack-manage')->extends('layouts.admin')->section('content');
    }
}
