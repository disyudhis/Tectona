<?php

namespace App\Services\RackSlot;

use App\Models\Table\RackSlotTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class RackSlotService extends AppService implements AppServiceInterface
{

    public function __construct(RackSlotTable $model)
    {
        parent::__construct($model);
    }

    public function getAll() {
        return RackSlotTable::all();
    }

    public function dataTable($filter)
    {
        return RackSlotTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return RackSlotTable::find($id);
    }

    public function create($data)
    {
        return RackSlotTable::create($data);
    }

    public function update($id, $data)
    {
        $row = RackSlotTable::find($id);
        $row->update($data);
        return $row;
    }

    public function delete($id)
    {
        $row = RackSlotTable::findOrFail($id);
        $row->delete();
        return $row;
    }

    public function countSlot($id)  {
        return RackSlotTable::where('rack_id', $id)->where('status', 'AVAILABLE')->count();
    }

    public function countAllSlot($id) {
        return RackSlotTable::where('rack_id', $id)->count();
    }

    public function getAllByRackId($id) {
        return RackSlotTable::where('rack_id', $id)->get();
    }

    public function getAvailableSlotByRackId($id)  {
        return RackSlotTable::where('rack_id', $id)->where('status', 'AVAILABLE')->get();
    }

    public function getSlotIdByCode($id) {
        return RackSlotTable::where('inventory_code', $id)->pluck('id')->first();
    }

}
