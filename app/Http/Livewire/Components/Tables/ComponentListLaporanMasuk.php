<?php

namespace App\Http\Livewire\Components\Tables;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Services\Inbound\InboundService;

class ComponentListLaporanMasuk extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

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
