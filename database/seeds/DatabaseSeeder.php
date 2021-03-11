<?php

use Illuminate\Database\Seeder;
use App\Officers;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OfficersSeeder::class);
    }
}
