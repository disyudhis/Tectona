<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Table\MaterialTable;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
                'name' => 'Kain Drill PM',
                'code' => 'DP',
            ],
            [
                'name' => 'Kain Baby Canvas',
                'code' => 'BC',
            ],
            [
                'name' => 'Permusa',
                'code' => 'PN',
            ],
            [
                'name' => 'Drill Americano',
                'code' => 'DA',
            ],
            [
                'name' => 'Pasada',
                'code' => 'PS',
            ],
            [
                'name' => 'Taipan Tropical',
                'code' => 'TT',
            ],
            [
                'name' => 'Scoth',
                'code' => 'SC',
            ],
            [
                'name' => 'Kain Florida',
                'code' => 'FR',
            ],
            [
                'name' => 'Kain Kamisuka',
                'code' => 'KS',
            ],
        ];

        foreach ($materials as $material) {
            MaterialTable::firstOrCreate([
                'id' => (string) Str::uuid(),
                'name' => $material['name'],
                'code' => $material['code'],
            ]);
        }
    }
}
