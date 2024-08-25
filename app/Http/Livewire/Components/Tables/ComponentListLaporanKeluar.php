<?php

namespace App\Http\Livewire\Components\Tables;

use App\Services\Inventory\InventoryService;
use App\Services\RackSlot\RackSlotService;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Services\Outbond\OutbondService;

class ComponentListLaporanKeluar extends Component
{
    use WithPagination;
    public $stok;

    protected $paginationTheme = 'bootstrap';

    public function mount(RackSlotService $slot_service){
        $datas = $slot_service->getAll();
        foreach($datas as $data){
            if($data->remaining == 0){
                $slot_service->update($data->id, [
                    'status' => 'FULL'
                ]);
            }else {
                $slot_service->update($data->id, [
                    'status' => 'AVAILABLE'
                ]);
            }
        }
    }
    public function render(OutbondService $outbond_service, InventoryService $inventory_service)
    {
        $outbonds = $outbond_service->dataTable(new Request([
            'entries' => 5,
            'sort_type' => 'desc'
        ]));

        foreach ($outbonds as $outbond) {
            $this->stok = $inventory_service->getByCode($outbond->inventory_code);
        }
        $currentPage = $outbonds->currentPage();
        return view('livewire.components.tables.component-list-laporan-keluar', compact('outbonds', 'currentPage'));
    }
}
