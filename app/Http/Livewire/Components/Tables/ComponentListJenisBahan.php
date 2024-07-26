<?php

namespace App\Http\Livewire\Components\Tables;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\JenisBahan\JenisBahanService;
use Livewire\WithPagination;

class ComponentListJenisBahan extends Component
{

    use WithPagination;

    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';

    public $name, $code;
    public $search;

    public function render(JenisBahanService $jenis_service)
    {
        $jenises = $jenis_service->dataTable(new Request([
            'entries' => 10,
            'sort_type' => 'desc',
            'search_key' => $this->search,
            'search_columns' => 'name,code'
        ]));

        $currentPage = $jenises->currentPage();
        return view('livewire.components.tables.component-list-jenis-bahan', compact('jenises', 'currentPage'));
    }

    public function openDeleteModal($id, JenisBahanService $material_service)
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

    public function delete(JenisBahanService $material_service)
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
