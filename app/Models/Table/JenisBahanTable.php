<?php

namespace App\Models\Table;

use App\Models\Entity\JenisBahan;

class JenisBahanTable extends JenisBahan
{
    public function products()
    {
        return $this->hasMany(ProductTable::class);
    }
}
