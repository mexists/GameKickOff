<?php

use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('stations')->delete();

        \DB::table('stations')->insert(array (
            0 =>
            array (
                'id' => 1,
                'number' => '2529401',
                'name' => 'Sg.Juasseh di Kemalah',
                'river_id' => 1,
                'river_level' => '17.65',
                'normal_level' => '27.00',
                'alert_level' => '30.60',
                'warning_level' => '31.30',
                'danger_level' => '32.00',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
        ));


    }
}
