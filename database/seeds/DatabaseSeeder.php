<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AdminSeeder::class);

        $this->call(StationLogsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(RiversTableSeeder::class);
        $this->call(StationsTableSeeder::class);
        $this->call(PhonesTableSeeder::class);
        $this->call(StatesTableSeeder::class);

        Model::reguard();
    }
}
