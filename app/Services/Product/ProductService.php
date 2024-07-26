<?php

namespace App\Services\Product;

use App\Models\Table\ProductTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class ProductService extends AppService implements AppServiceInterface
{

    public function __construct(ProductTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return ProductTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return ProductTable::findOrFail($id);
    }

    public function create($data)
    {
        return ProductTable::create($data);
    }

    public function update($id, $data)
    {
        $row = ProductTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = ProductTable::findOrFail($id);
        $row->delete();
        return $row;
    }

    public function getProductWithInventory()  {
        return ProductTable::with('inventories')->get();
    }
}
