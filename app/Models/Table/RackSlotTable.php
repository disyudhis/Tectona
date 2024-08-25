<?php

namespace App\Models\Table;

use App\Models\Entity\RackSlot;

class RackSlotTable extends RackSlot
{
    public function rack()  {
       return $this->belongsTo(RackTable::class);
    }

    public function inventories(){
        return $this->hasMany(InventoryTable::class, 'slot_id', 'id');
    }
}
