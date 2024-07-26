<?php

namespace App\Models\Table;

use App\Models\Entity\Rack;

class RackTable extends Rack
{
    public function slots() {
        return $this->hasMany(RackSlotTable::class);
    }

    public function products() {
        return $this->hasMany(ProductTable::class);
    }
}
