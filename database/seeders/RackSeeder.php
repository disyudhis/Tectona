<?php

namespace Database\Seeders;

use App\Models\Entity\Rack;
use App\Models\Table\RackSlotTable;
use Illuminate\Support\Str;
use App\Models\Table\RackTable;
use Illuminate\Database\Seeder;

class RackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($j = 1; $j <= 10; $j++) {
            $rack = Rack::firstOrCreate([
                'code' => $j
            ]);

            for ($i = 1; $i <= 4; $i++) {
                RackSlotTable::firstOrCreate([
                    'rack_id' => $rack->id,
                    'code' => $i
                ]);
            }
        }
    }
}
