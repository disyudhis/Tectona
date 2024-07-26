<?php

namespace App\Http\Livewire\Components\Forms;

use App\Services\JenisBahan\JenisBahanService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ComponentManageJenisBahan extends Component
{
    use LivewireAlert;
    public $nama_bahan;
    public $kode_bahan;

    protected $rules = [
        'nama_bahan' => 'required',
        'kode_bahan' => 'required'
    ];

    public function render()
    {
        return view('livewire.components.forms.component-manage-jenis-bahan');
    }

    public function openModalSubmit()
    {
        $this->validate();
        $this->dispatchBrowserEvent('openModalSubmit');
    }

    public function closeModalSubmit() {
        $this->dispatchBrowserEvent('closeModalSubmit');
    }

    public function updated($property) {
        $this->validateOnly($property);
    }

    public function createBahan(JenisBahanService $jenis_bahan) {
        try {
            $jenis_bahan->create([
                'name' => $this->nama_bahan,
                'code' => $this->kode_bahan
            ]);
            $this->flash('success', 'Bahan berhasil ditambah', [], route('og.jenisbahan.index'));
        } catch (\Exception $e) {
            $this->closeModalSubmit();
            $this->alert('error', $e->getMessage());
        }
    }
}
