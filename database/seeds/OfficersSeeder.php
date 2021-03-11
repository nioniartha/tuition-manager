<?php

use Illuminate\Database\Seeder;

class OfficersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Officers::class, 20)->create();
    }
}
