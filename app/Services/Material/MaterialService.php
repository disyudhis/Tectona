<?php

namespace App\Services\Material;

use App\Models\Table\MaterialTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class MaterialService extends AppService implements AppServiceInterface
{

    public function __construct(MaterialTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return MaterialTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getAll() {
        return MaterialTable::all();
    }

    public function getById($id)
    {
        return MaterialTable::find($id);
    }

    public function create($data)
    {
        return MaterialTable::create($data);
    }

    public function update($id, $data)
    {
        $row = MaterialTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = MaterialTable::find($id);
        $row->delete();
        return $row;
    }

    public function getNameByCode($code) {
        return MaterialTable::where('code', $code)->pluck('name')->first();
    }
}
