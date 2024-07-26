<?php

namespace App\Http\Livewire\Components\Tables;

use App\Services\RackSlot\RackSlotService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\Rack\RackService;
use Livewire\WithPagination;

class ComponentListRack extends Component
{
    use WithPagination;
    public $search;
    public $alertMessage = null;

    protected $paginationTheme = 'bootstrap';

    public function render(RackService $rack_service, RackSlotService $slot_service)
    {
        $alert = false;
        $racks = $rack_service->dataTable(
            new Request([
                'entries' => 5,
                'sort_type' => 'desc',
                'search_key' => $this->search,
                'search_columns' => 'code',
            ]),
        );
        $slots = [];
        foreach ($racks as $rack) {
            $slots[$rack->id] = $slot_service->countSlot($rack->id);
            if ($slots[$rack->id] == 1) {
                $alert = true;
                if ($alert) {
                    $this->alertMessage = 'Beberapa rak hanya memiliki 1 slot tersisa dengan status available';
                }
            } elseif ($slots[$rack->id] <= 1) {
                $alert = true;
                if ($alert) {
                    $this->alertMessage = 'Rak ' . $rack->code . ' sudah tidak memiliki slot tersisa';
                }
            }
        }

        // if ($alert) {
        //     $this->alertMessage = 'Beberapa rak hanya memiliki 1 slot tersisa dengan status available';
        // } else {
        //     $this->alertMessage = '';
        // }

        $currentPage = $racks->currentPage();
        return view('livewire.components.tables.component-list-rack', compact('racks', 'currentPage', 'slots'));
    }
}
