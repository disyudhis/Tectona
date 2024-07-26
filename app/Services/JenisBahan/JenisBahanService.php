<?php

namespace App\Services\JenisBahan;

use App\Models\Table\JenisBahanTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class JenisBahanService extends AppService implements AppServiceInterface
{

    public function __construct(JenisBahanTable $model)
    {
        parent::__construct($model);
    }

    public function getAll()  {
        return JenisBahanTable::all();
    }
    public function dataTable($filter)
    {
        return JenisBahanTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return JenisBahanTable::findOrFail($id);
    }

    public function create($data)
    {
        return JenisBahanTable::create($data);
    }

    public function update($id, $data)
    {
        $row = JenisBahanTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = JenisBahanTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
