<?php

namespace App\Http\Livewire\Components\Forms;

use App\Services\Rack\RackService;
use App\Services\RackSlot\RackSlotService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ComponentManageListRack extends Component
{
    use LivewireAlert;
    public $kode, $slots = 4;
    protected $rules = [
        'kode' => 'required|unique:racks,code',
    ];
    public function render()
    {
        return view('livewire.components.forms.component-manage-list-rack');
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

    public function createRak(RackService $rack_service, RackSlotService $slot_service)
    {
        $defaultSlots = 4;

        try {
            // Buat rak baru
            $rack = $rack_service->create([
                'code' => $this->kode,
            ]);

            // Tentukan jumlah slot
            $slots = $this->slots ?? $defaultSlots;

            // Buat slot untuk rak tersebut
            for ($i = 1; $i <= $slots; $i++) {
                $slot_service->create([
                    'rack_id' => $rack->id,
                    'code' => $i,
                ]);
            }
            // Berikan pesan sukses dan redirect
            $this->flash('success', 'Rak berhasil ditambahkan', [], route('og.listrack.index'));
        } catch (\Exception $e) {
            // Tangani kesalahan dan tampilkan pesan error
            $this->alert('error', $e->getMessage());
        }
    }
}
