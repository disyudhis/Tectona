<?php

namespace App\Http\Livewire\Pages\OperatorGudang\ListRack;

use Livewire\Component;

class OperatorListRackDetail extends Component
{
    public $page_title = 'Detail Rak | Operator Gudang';
    public $page_name = 'Detail Rak';
    public $rack_id = null;

    public function mount($id = null)
    {
        if ($id) {
            $this->rack_id = $id;
        }
    }
    public function render()
    {
        return view('livewire.pages.operator-gudang.list-rack.operator-list-rack-detail')->extends('layouts.admin')->section('content');
    }
}
