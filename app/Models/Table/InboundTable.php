<?php

namespace App\Models\Table;

use App\Models\Entity\Inbound;

class InboundTable extends Inbound
{
    public function inventory() {
        return $this->belongsTo(InventoryTable::class);
    }
}
