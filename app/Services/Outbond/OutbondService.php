<?php

namespace App\Services\Outbond;

use App\Models\Table\OutbondTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class OutbondService extends AppService implements AppServiceInterface
{

    public function __construct(OutbondTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return OutbondTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return OutbondTable::findOrFail($id);
    }

    public function create($data)
    {
        return OutbondTable::create($data);
    }

    public function update($id, $data)
    {
        $row = OutbondTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = OutbondTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
