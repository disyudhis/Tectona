<?php

namespace App\Models\Table;

use App\Models\Entity\Product;

class ProductTable extends Product
{
    public function material(){
        return $this->belongsTo(MaterialTable::class);
    }

    public function color() {
        return $this->belongsTo(MaterialColorTable::class);
    }

    public function jenis() {
        return $this->belongsTo(JenisBahanTable::class);
    }

    public function rack() {
        return $this->belongsTo(RackTable::class);
    }

    public function slot() {
        return $this->belongsTo(RackSlotTable::class);
    }

    public function inventories() {
        return $this->hasMany(InventoryTable::class);

    }
}
