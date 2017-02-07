<?php

use Illuminate\Database\Seeder;

class RiversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('rivers')->delete();

        \DB::table('rivers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Sg.Segamat',
                'district_id' => 194,
                'state_id' => 4,
                'country_id' => 127,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
        ));


    }
}
