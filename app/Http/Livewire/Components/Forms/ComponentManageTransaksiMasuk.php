<?php

namespace App\Http\Livewire\Components\Forms;

use Livewire\Component;
use App\Services\Product\ProductService;
use App\Services\Inventory\InventoryService;

class ComponentManageTransaksiMasuk extends Component
{
    public function render()
    {
        return view('livewire.components.forms.component-manage-transaksi-masuk');
    }

    public function createProduct(ProductService $product_service, InventoryService $inventory_service)
    {
        $data = [
            'material_id' => $this->selected_bahan,
            'color_id' => $this->selected_warna,
            'jenis_id' => $this->selected_jenis,
        ];
        try {
            $product = $product_service->create($data);
            try {
                $code = $this->generateCode();
                $inventory = [
                    'product_id' => $product->id,
                    'code' => $code,
                    'status' => 'AVAILABLE',
                    'quantity' => $this->qty,
                ];
                $inventory_service->create($inventory);
                $this->flash('success', 'Produk berhasil ditambahkan', [], route('og.bahanbaku.index'));
            } catch (\Exception $e) {
                return 'error';
            }
        } catch (\Exception $e) {
            $this->alert('error', 'Data gagal ditambahkan');
        }
    }

    public function generateCode()
    {
        return $this->jenis_code . '-' . $this->bahan_code . '-' . $this->warna_code;
    }
}
