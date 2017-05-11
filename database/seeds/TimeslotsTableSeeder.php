<?php

use Illuminate\Database\Seeder;

class TimeslotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete timeslots table records
         DB::table('timeslots')->delete();
        
         //insert records
         DB::table('timeslots')->insert(array(
             array('day' => 'Monday Evening', 'from'=>'6:00 pm','to'=>'6:45 pm','where'=>'239 SH2 Bethlehem Hall Tauranga'),
             
             array('day' => 'Wednesday Evening', 'from'=>'6:00 pm','to'=>'6:45 pm','where'=>'239 SH2 Bethlehem Hall Tauranga'),
             
             array('day' => 'Wednesday Morning', 'from'=>'6:00 am','to'=>'7:30 am','where'=>'Aspire Health & Sports Tauranga'),
             
             array('day' => 'Friday Evening', 'from'=>'6:00 pm','to'=>'6:45 pm','where'=>'Aspire Health & Sports Tauranga'),
             
             array('day' => 'Saturday Morning', 'from'=>'7:30 am','to'=>'8:15 am','where'=>'Aspire Health & Sports Tauranga'),
          ));
       }
    }



