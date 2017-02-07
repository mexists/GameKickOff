<?php

use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('phones')->delete();
        
        \DB::table('phones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'number' => '+60196896594',
                'otp' => 'N3NNRw',
                'country_id' => 1,
                'phone_status_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
        ));
        
        
    }
}
