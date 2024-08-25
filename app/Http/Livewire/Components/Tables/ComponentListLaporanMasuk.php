<?php

namespace App\Http\Livewire\Components\Tables;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Services\Inbound\InboundService;
use App\Services\RackSlot\RackSlotService;

class ComponentListLaporanMasuk extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function mount(RackSlotService $slot_service) {
        $datas = $slot_service->findZeroRemainingSlot();
        foreach($datas as $data){
            $slot_service->update($data->id, [
                'status' => 'FULL'
            ]);
        }
    }
    public function render(InboundService $inbound_service)
    {
        $inbounds = $inbound_service->dataTable(new Request([
            'entries' => 5,
            'sort_type' => 'desc'
        ]));

        $currentPage = $inbounds->currentPage();
        return view('livewire.components.tables.component-list-laporan-masuk', compact('inbounds', 'currentPage'));
    }
}
