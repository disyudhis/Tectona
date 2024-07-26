<?php

namespace App\Services\Storage;

use App\Models\Table\StorageTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class StorageService extends AppService implements AppServiceInterface
{

    public function __construct(StorageTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return StorageTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return StorageTable::findOrFail($id);
    }

    public function create($data)
    {
        return StorageTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = StorageTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = StorageTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
