<?php

namespace App\Http\Livewire\Pages\OperatorGudang\DetailSlot;

use Livewire\Component;

class OperatorSlotDetail extends Component
{
    public $page_title = 'Detail Slot | Operator Gudang';
    public $page_name = 'Detail Slot';

    public $rack_id = null;
    public $slot_id = null;

    public function mount($id = null, $id_slot = null) {
        if($id){
            $this->rack_id = $id;
            if($id_slot){
                $this->slot_id = $id_slot;
            }
        }
    }
    public function render()
    {
        return view('livewire.pages.operator-gudang.detail-slot.operator-slot-detail')->extends('layouts.admin')->section('content');
    }
}
