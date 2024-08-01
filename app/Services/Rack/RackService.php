<?php

namespace App\Services\Rack;

use App\Models\Table\RackTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class RackService extends AppService implements AppServiceInterface
{

    public function __construct(RackTable $model)
    {
        parent::__construct($model);
    }

    public function getAll() {
        return RackTable::all();
    }

    public function dataTable($filter)
    {
        return RackTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return RackTable::findOrFail($id);
    }

    public function create($data)
    {
        return RackTable::create($data);
    }

    public function update($id, $data)
    {
        $row = RackTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = RackTable::findOrFail($id);
        $row->delete();
        return $row;
    }

    public function getCode($id) {
        return RackTable::where('id', $id)->pluck('code')->first();
    }
}
