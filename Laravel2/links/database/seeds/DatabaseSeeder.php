<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Sermons;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(sermonsTableSeeder::class);
    }
}
