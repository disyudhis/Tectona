<?php

namespace App\Http\Livewire\Components\Tables;

use App\Services\Inventory\InventoryService;
use App\Services\Material\MaterialService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\Product\ProductService;
use Livewire\WithPagination;

class ComponentListBahanBaku extends Component
{
    use WithPagination;
    use LivewireAlert;
    public $search;
    public $name, $code;
    protected $paginationTheme = 'bootstrap';

    public function render(MaterialService $inventory_service)
    {
        $inventories = $inventory_service->dataTable(
            new Request([
                'entries'        => 5,
                'search_key'     => $this->search,
                'search_columns' => 'name,code',
                'sort_type'      => 'desc',
            ]),
        );

        $currentPage = $inventories->currentPage();
        return view('livewire.components.tables.component-list-bahan-baku', compact('inventories', 'currentPage'));
    }

    public function openDeleteModal($id, MaterialService $material_service)
    {
        $this->delete_id = $id;
        $material        = $material_service->getById($id);
        $this->name      = $material->name;
        $this->code      = $material->code;
        $this->showDeleteConfirmation();
    }

    public function showDeleteConfirmation()
    {
        $this->dispatchBrowserEvent('showDeleteModal');
    }

    public function closeDeleteConfirmation()
    {
        $this->dispatchBrowserEvent('closeDeleteModal');
    }

    public function delete(MaterialService $material_service)
    {
        try {
            $material_service->delete($this->delete_id);
            $this->closeDeleteConfirmation();
            $this->alert('success', 'Bahan berhasil dihapus');
        } catch (\Exception $e) {
            $this->alert('error', 'Bahan gagal dihapus');
        }
    }
}
