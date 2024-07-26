<?php

namespace App\Models\Table;

use App\Models\Entity\Outbond;

class OutbondTable extends Outbond
{
    public function inventory() {
        return $this->belongsTo(InventoryTable::class);
    }
}
