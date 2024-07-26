<?php

namespace App\Models\Table;

use App\Models\Entity\RackSlot;

class RackSlotTable extends RackSlot
{
    public function rack()  {
        $this->belongsTo(RackTable::class);
    }
}
