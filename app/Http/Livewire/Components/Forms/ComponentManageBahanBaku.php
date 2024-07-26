<?php

namespace App\Http\Livewire\Components\Forms;

use Livewire\Component;
use App\Models\Table\RackTable;
use App\Services\Rack\RackService;
use Illuminate\Support\Facades\DB;
use App\Models\Table\MaterialTable;
use App\Models\Table\JenisBahanTable;
use App\Models\Table\MaterialColorTable;
use App\Services\Product\ProductService;
use App\Services\Material\MaterialService;
use App\Services\RackSlot\RackSlotService;
use App\Services\Inventory\InventoryService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Services\JenisBahan\JenisBahanService;
use App\Services\MaterialColor\MaterialColorService;

class ComponentManageBahanBaku extends Component
{
    use LivewireAlert;
    public $selected_bahan;
    public $selected_jenis;

    protected $rules = [
        'selected_bahan' => 'required',
        'selected_jenis' => 'required',
    ];

    public function render()
    {
        return view('livewire.components.forms.component-manage-bahan-baku');
    }

    public function updated($property)
    {
        $this->validateOnly($property);
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

    public function createMaterial(MaterialService $material_service)
    {
        try {
            $material_service->create([
                'name' => $this->selected_bahan,
                'code' => $this->selected_jenis,
            ]);

            $this->flash('success', 'Bahan baku berhasil dibuat', [], route('og.bahanbaku.index'));
        } catch (\Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }
}
