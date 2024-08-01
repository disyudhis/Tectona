<?php

namespace App\Services\Inbound;

use App\Models\Table\InboundTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class InboundService extends AppService implements AppServiceInterface
{

    public function __construct(InboundTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return InboundTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return InboundTable::findOrFail($id);
    }

    public function create($data)
    {
        return InboundTable::create($data);
    }

    public function update($id, $data)
    {
        $row = InboundTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = InboundTable::findOrFail($id);
        $row->delete();
        return $row;
    }

    public function getTransaksiByInventoryId($id)  {
        return InboundTable::where('inventory_id', $id)->first();
    }
}
