<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use App\Models\Patient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //i CHANGE THE VALUES TO MANIPULATE BETTER
        Doctor::factory(5)->create();
        Patient::factory(50)->create();
        
    }
}
