<?php

namespace App\Http\Livewire\Components\Tables;

use Livewire\Component;
use App\Models\Entity\RackSlot;
use App\Models\Table\RackTable;
use App\Services\Rack\RackService;
use App\Models\Table\MaterialTable;
use App\Services\Inbound\InboundService;
use App\Services\Product\ProductService;
use App\Services\Material\MaterialService;
use App\Services\RackSlot\RackSlotService;
use App\Services\Inventory\InventoryService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Services\JenisBahan\JenisBahanService;
use App\Services\MaterialColor\MaterialColorService;

class ComponentListTransaksiMasuk extends Component
{
    use LivewireAlert;

    public $selected_bahan,
        $selected_jenis,
        $selected_warna,
        $qty = 1,
        $selected_rak,
        $selected_slot,
        $selected_intensity,
        $remaining;
    public $bahan_name, $jenis_name, $warna_name, $rack_code, $slot;
    public $bahan_code, $jenis_code, $warna_code;
    public $slots;

    protected $rules = [
        'selected_bahan' => 'required',
        'selected_jenis' => 'required',
        'selected_warna' => 'required',
        'qty' => ['required', 'numeric', 'min:1'],
        'selected_rak' => 'required',
        'selected_slot' => 'required',
    ];
    public function mount(RackSlotService $slot_service) {
        $datas = $slot_service->findZeroRemainingSlot();
        foreach($datas as $data){
            $slot_service->update($data->id, [
                'status' => 'FULL'
            ]);
        }
    }

    public function render(MaterialService $material_service, JenisBahanService $jenis_service, MaterialColorService $color_service, RackService $rak_service, RackSlotService $slot_service)
    {
        $bahan_baku = $material_service->getAll();
        if ($this->selected_bahan) {
            $bahan = $material_service->getById($this->selected_bahan);
            $this->bahan_name = $bahan->name;
            $this->bahan_code = $bahan->code;
        }
        $jenis_bahan = $jenis_service->getAll();
        if ($this->selected_jenis) {
            $jenis = $jenis_service->getById($this->selected_jenis);
            $this->jenis_name = $jenis->name;
            $this->jenis_code = $jenis->code;
        }
        $warna_bahan = $color_service->getAll();
        if ($this->selected_warna) {
            $warna = $color_service->getById($this->selected_warna);
            $this->warna_name = $warna->name;
            $this->warna_code = $warna->code;
        }
        $racks = $rak_service->getAll();
        if ($this->selected_rak) {
            $this->slots = $slot_service->getAvailableSlotByRackId($this->selected_rak);
            $rak = $rak_service->getById($this->selected_rak);
            $this->rack_code = $rak->code;
        }
        if ($this->selected_slot) {
            $slot = $slot_service->getById($this->selected_slot);
            $this->slot = $slot->code;
        }
        $this->remaining = $slot_service->getById($this->selected_slot);
        return view('livewire.components.tables.component-list-transaksi-masuk', compact('bahan_baku', 'jenis_bahan', 'warna_bahan', 'racks'));
    }
    public function openModalSubmit()
    {
        $this->validate();
        $this->dispatchBrowserEvent('openModalSubmit');
    }

    public function closeModalSubmit()
    {
        $this->dispatchBrowserEvent('closeModalSubmit');
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }
    public function createInventory(ProductService $product_service, InventoryService $inventory_service, RackSlotService $slot_service, InboundService $inbound_service)
    {
        try {
            $remainingSlot = RackSlot::find($this->selected_slot)->remaining;

            if ($this->qty > $remainingSlot) {
                throw new \Exception("The quantity ($this->qty) cannot exceed the remaining slot quantity ($remainingSlot).");
            }
            $product = $product_service->create([
                'material_id' => $this->selected_bahan,
                'color_id' => $this->selected_warna,
                'jenis_id' => $this->selected_jenis,
            ]);

            $inventory = $inventory_service->create([
                'product_id' => $product->id,
                'code' => $this->generateCode(),
                'quantity' => $this->qty,
                'slot_id' => $this->selected_slot,
                'intensity' => $this->selected_intensity,
            ]);
            $slot_service->update($this->selected_slot, [
                'remaining' => $this->remaining->remaining - $this->qty,
            ]);

            $inbound_service->create([
                'inventory_id' => $inventory->id,
                'quantity' => $inventory->quantity,
            ]);
            $this->flash('success', 'Inventory berhasil dimasukkan', [], route('og.history.masuk.index'));
        } catch (\Exception $e) {
            $this->closeModalSubmit();
            $this->alert('error', $e->getMessage());
        }
    }

    public function generateCode()
    {
        return $this->jenis_code . '-' . $this->bahan_code . '-' . $this->warna_code . '-' . $this->rack_code . '-' . $this->slot . '-' . $this->selected_intensity;
    }
}
