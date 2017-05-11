<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        
         $this->call(TimeslotsTableSeeder::class);
        
        /* this message shown in terminal after running db:seed command */
        $this->command->info("Timeslots table seeded");
    }
}
