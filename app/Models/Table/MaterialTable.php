<?php

namespace App\Models\Table;

use App\Models\Entity\Material;

class MaterialTable extends Material
{
    public function products()
    {
        return $this->hasMany(ProductTable::class);
    }
}
