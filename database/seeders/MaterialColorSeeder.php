<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Table\MaterialColorTable;

class MaterialColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [['name' => 'Hitam', 'code' => 'HT'], ['name' => 'Coklat Susu', 'code' => 'CS'], ['name' => 'Putih', 'code' => 'PT'], ['name' => 'Abu Rokok', 'code' => 'AR'], ['name' => 'Abu Tanah', 'code' => 'AT'], ['name' => 'Army', 'code' => 'AM'], ['name' => 'Merah Cabe', 'code' => 'MC'], ['name' => 'Biru Muda', 'code' => 'BM'], ['name' => 'Navy', 'code' => 'NV'], ['name' => 'Orange', 'code' => 'OR'], ['name' => 'Maroon', 'code' => 'MR']];
        foreach($colors as $color) {
            MaterialColorTable::firstOrCreate([
                'id' => (string) Str::uuid(),
                'name' => $color['name'],
                'code' => $color['code']
            ]);
        }
    }
}
