<?php

namespace App\Services\Inventory;

use App\Models\Table\InventoryTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class InventoryService extends AppService implements AppServiceInterface
{
    public function __construct(InventoryTable $model)
    {
        parent::__construct($model);
    }

    public function getAll()
    {
        return InventoryTable::all();
    }
    public function dataTable($filter)
    {
        return InventoryTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return InventoryTable::findOrFail($id);
    }

    public function create($data)
    {
        return InventoryTable::create($data);
    }

    public function update($id, $data)
    {
        $row = InventoryTable::find($id);
        $row->update($data);
        return $row;
    }

    public function delete($id)
    {
        $row = InventoryTable::find($id);
        $row->delete();
        return $row;
    }

    public function countStockById($id)
    {
        return InventoryTable::where('id', $id)->pluck('quantity')->first();
    }

    public function getByCode($id) {
        return InventoryTable::where('code', $id)->first();
    }

    public function getAllAvailable()  {
        return InventoryTable::where('status', 'AVAILABLE')->get();
    }
}
