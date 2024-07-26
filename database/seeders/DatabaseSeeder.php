<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Prefix id table on seeding
     * 00000001 User
     * 00000002 NotificationTable
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        // $this->call(NotificationSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(MaterialColorSeeder::class);
        $this->call(JenisBahanSeeder::class);
        $this->call(RackSeeder::class);
    }
}
