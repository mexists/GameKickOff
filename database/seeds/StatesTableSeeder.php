<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('states')->delete();

        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Kuala Lumpur',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Labuan',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Putrajaya',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Johor Darul Takzim',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Kedah Darul Aman',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Kelantan Darul Naim',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Melaka Bandar Bersejarah',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Negeri Sembilan Darul Khusus',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Pahang Darul Makmur',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Perak Darul Ridzuan',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Perlis Indera Kayangan',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Pulau Pinang Pulau Mutiara',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Sabah Negeri Di Bawah Bayu',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Sarawak Bumi Kenyalang',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Selangor Darul Ehsan',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Terengganu Darul Iman',
                'country_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
        ));


    }
}
