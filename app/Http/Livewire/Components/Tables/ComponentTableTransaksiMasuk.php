<?php

namespace App\Http\Livewire\Components\Tables;

use Livewire\Livewire;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Services\User\UserService;
use App\Notifications\LowStockNotification;
use App\Services\Inventory\InventoryService;

class ComponentTableTransaksiMasuk extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render(InventoryService $inventory_service)
    {
        $inventories = $inventory_service->dataTable(
            new Request([
                'entries' => 5,
                'sort_type' => 'desc',
            ]),
        );

        $currentPage = $inventories->currentPage();
        return view('livewire.components.tables.component-table-transaksi-masuk', compact('inventories'));
    }
}
