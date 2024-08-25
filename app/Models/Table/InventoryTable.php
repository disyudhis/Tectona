<?php

namespace App\Models\Table;

use App\Models\Entity\Inventory;

class InventoryTable extends Inventory
{
    public function product() {
        return $this->belongsTo(ProductTable::class);
    }

    public function inbounds() {
        return $this->hasMany(InboundTable::class);
    }

    public function slot(){
        return $this->belongsTo(RackSlotTable::class, 'slot_id', 'id');
    }
}
