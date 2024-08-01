<?php

namespace App\Services\MaterialColor;

use App\Models\Table\MaterialColorTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class MaterialColorService extends AppService implements AppServiceInterface
{

    public function __construct(MaterialColorTable $model)
    {
        parent::__construct($model);
    }

    public function getAll() {
        return MaterialColorTable::all();
    }

    public function dataTable($filter)
    {
        return MaterialColorTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return MaterialColorTable::findOrFail($id);
    }

    public function create($data)
    {
        return MaterialColorTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = MaterialColorTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = MaterialColorTable::findOrFail($id);
        $row->delete();
        return $row;
    }

    public function getNameByCode($code) {
        return MaterialColorTable::where('code', $code)->pluck('name')->first();
    }
}
