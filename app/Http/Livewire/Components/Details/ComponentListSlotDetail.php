<?php

namespace App\Http\Livewire\Components\Details;

use App\Services\Inbound\InboundService;
use App\Services\Inventory\InventoryService;
use App\Services\JenisBahan\JenisBahanService;
use App\Services\Material\MaterialService;
use App\Services\MaterialColor\MaterialColorService;
use App\Services\Rack\RackService;
use App\Services\RackSlot\RackSlotService;
use Livewire\Component;

class ComponentListSlotDetail extends Component
{
    public $rack_id;
    public $slot_id;
    public $slot_code;
    public $rack_code;
    public function mount($id, $id_slot, RackSlotService $slot_service, RackService $rack_service)
    {
        $this->rack_id = $id;
        $this->slot_id = $id_slot;
        $this->slot_code = $slot_service->getSlotCodeById($this->slot_id);
        $this->rack_code = $rack_service->getCode($this->rack_id);
    }
    public function render(InventoryService $inventory_service, RackSlotService $slot_service, InboundService $inbound_service, MaterialService $material_service, JenisBahanService $jenis_service, MaterialColorService $color_service)
    {
        $inventories = $inventory_service->getAllInventoryBySlotId($this->slot_id);

        $data = [
            'inventories' => $inventories,
        ];
        return view('livewire.components.details.component-list-slot-detail', $data);
    }
}
