<?php

namespace App\Models\Table;

use App\Models\Entity\MaterialColor;

class MaterialColorTable extends MaterialColor
{
    public function products() {
        return $this->belongsTo(ProductTable::class);
    }
}
