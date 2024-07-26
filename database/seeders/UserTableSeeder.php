<?php

namespace Database\Seeders;

use App\Models\Entity\User;
use App\Models\Table\UserTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserTable::firstOrCreate([
            "id" => "00000001-0000-0000-0000-000000000001",
           'email' => 'og@gmail.com'
        ], [
            'name' => 'Operator Gudang',
            'password' => Hash::make('password'),
            'role' => 'OPERATOR GUDANG',
        ]);
        UserTable::firstOrCreate([
            "id" => "00000001-0000-0000-0000-000000000002",
           'email' => 'kg@gmail.com'
        ], [
            'name' => 'Kepala Gudang',
            'password' => Hash::make('password'),
            'role' => 'KEPALA GUDANG',
        ]);
    }
}
