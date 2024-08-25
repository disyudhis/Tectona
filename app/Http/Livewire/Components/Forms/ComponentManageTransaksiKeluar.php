<?php

namespace App\Http\Livewire\Components\Forms;

use App\Notifications\LowStockNotification;
use App\Rules\ValidQuantity;
use App\Services\Inventory\InventoryService;
use App\Services\Outbond\OutbondService;
use App\Services\RackSlot\RackSlotService;
use App\Services\User\UserService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ComponentManageTransaksiKeluar extends Component
{
    use LivewireAlert;

    public $selected_stok,
        $quantity = 1;
    public $stok;
    public $stok_code;
    public $inventory_code;

    protected $rules = [
        'selected_stok' => 'required',
        'quantity'      => 'required|numeric|min:1',
    ];

    public function render(InventoryService $inventory_service)
    {
        $inventories = $inventory_service->getAllAvailable();
        if ($this->selected_stok) {
            $stok                 = $inventory_service->getById($this->selected_stok);
            $this->stok_code      = $stok->slot_id;
            $this->inventory_code = $stok->code;
            $this->stok           = $inventory_service->countStockById($this->selected_stok);
        }
        return view('livewire.components.forms.component-manage-transaksi-keluar', compact('inventories'));
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

    public function updatedQuantity()
    {
        $this->validate([
            'quantity' => ['required', 'numeric', 'min:1', new ValidQuantity($this->selected_stok)],
        ]);
    }

    public function createOutbonds(OutbondService $outbond_service, InventoryService $inventory_service, RackSlotService $slot_service, UserService $user_service)
    {
        try {
            $outbond_service->create([
                'inventory_code' => $this->inventory_code,
                'quantity'       => $this->quantity,
            ]);
            $currentStok = $inventory_service->countStockById($this->selected_stok);
            $currentSlot = $slot_service->getById($this->stok_code);
            $inventory   = $inventory_service->getByCode($this->inventory_code);
            $newStok     = $currentStok - $this->quantity;
            if ($newStok == 0 || $newStok == null) {
                $inventory_service->update($this->selected_stok, [
                    'status' => 'DELETED',
                ]);
                $slot_service->update($currentSlot->id, [
                    'remaining' => $currentSlot->remaining + $this->quantity,
                ]);
            } else {
                $inventory_service->update($this->selected_stok, [
                    'quantity' => $newStok,
                ]);
                $slot_service->update($currentSlot->id, [
                    'remaining' => $currentSlot->remaining + $this->quantity,
                ]);
                if ($newStok <= 5) {
                    $users = $user_service->getAll();
                    foreach ($users as $user) {
                        $user->notify(new LowStockNotification($inventory));
                    }
                }
            }
            $this->flash('success', 'Transaksi keluar berhasil', [], route('og.history.keluar.index'));
        } catch (\Exception $e) {
            $this->closeModalSubmit();
            $this->alert('error', $e->getMessage());
        }
    }
}
