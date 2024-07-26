<?php

namespace App\Http\Livewire\Components\Details;

use App\Services\Rack\RackService;
use App\Services\RackSlot\RackSlotService;
use Livewire\Component;

class ComponentListRackDetail extends Component
{
    public $rack_id;
    public $available_slot;
    public $total_slot;
    public function mount($id, RackSlotService $slot_service)  {
        $this->rack_id = $id;
        $this->available_slot = $slot_service->countSlot($this->rack_id);
        $this->total_slot = $slot_service->countAllSlot($this->rack_id);
    }
    public function render(RackService $rack_service, RackSlotService $slot_service)
    {
        $rack = $rack_service->getById($this->rack_id);
        $slots = $slot_service->getAllByRackId($this->rack_id);
        return view('livewire.components.details.component-list-rack-detail', compact('rack', 'slots'));
    }
}
