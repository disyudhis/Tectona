<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Table\JenisBahanTable;

class JenisBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenises = [
            ['name' => 'Kemeja dan Celana', 'code' => 'KC'],
            ['name' => 'Kemeja', 'code' => 'K'],
            ['name' => 'Celana', 'code' => 'C']
        ];

        foreach($jenises as $jenis){
            JenisBahanTable::firstOrCreate([
                'id' => (string) Str::uuid(),
                'name' => $jenis['name'],
                'code' => $jenis['code']
            ]);
        }
    }
}
