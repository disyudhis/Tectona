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
        $code = $slot_service->getOnlyCode($this->slot_id);
        $inventories = $inventory_service->getByCode($code);
        $inventory_id = $inventories->id;
        $transaksi_masuk = $inbound_service->getTransaksiByInventoryId($inventory_id);
        $kode_bahan = $this->findByCode($code, $material_service, $jenis_service, $color_service);
        $data = [
            'code' => $code,
            'inventories' => $inventories,
            'transaksi_masuk' => $transaksi_masuk,
            'kode_bahan' => $kode_bahan
        ];
        return view('livewire.components.details.component-list-slot-detail', $data);
    }

    public function findByCode($code, $material_service, $jenis_service, $color_service)
    {
        $parts = explode('-', $code);
        $jenis_code = $parts[0];
        $material_code = $parts[1];
        $warna_code = $parts[2];

        $material_name = $material_service->getNameByCode($material_code);
        $jenis_name = $jenis_service->getNameByCode($jenis_code);
        $color_name = $color_service->getNameByCode($warna_code);

        $data = [
            'material' => $material_name,
            'jenis' => $jenis_name,
            'color' => $color_name,
        ];
        return $data;
    }
}
