<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('cities')->delete();

        \DB::table('cities')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Bandar Tun Razak',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Batu',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Bukit Bintang',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Cheras',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Kepong',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Lembah Pantai',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Segambut',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Seputeh',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Setiawangsa',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Titiwangsa',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Wangsa Maju',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Ampang',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Bangsar',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Brickfields',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Bukit Aman',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Bukit Jalil',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Bukit Kiara',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Bukit Nanas',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Bukit Persekutuan',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Bukit Petaling',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Bukit Tunku',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Chow Kit',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Pusat Bandar Damansara',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Dang Wangi',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Kampung Datuk Keramat',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Kampung Haji Abdullah Hukum',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Kampung Kasipillay',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Kampung Sungai Penchala',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'Imbi',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'Jalan Tuanku Abdul Halim',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'Jinjang',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'Kampung Baru',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'Kampung Malaysia',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'Kuchai Lama',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'Kerinchi',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'Maluri',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'Medan Tuanku',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'Miharja',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'Mont Kiara',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'Pudu',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'Salak Selatan',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'Semarak',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'Setapak',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'Sentul',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'Sentul Raya',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'Sri Petaling',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            46 =>
            array (
                'id' => 47,
                'name' => 'Sungai Besi',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            47 =>
            array (
                'id' => 48,
                'name' => 'Taman Shamelin Perkasa',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            48 =>
            array (
                'id' => 49,
                'name' => 'Taman U-Thant',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            49 =>
            array (
                'id' => 50,
                'name' => 'Bandar Manjalara',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            50 =>
            array (
                'id' => 51,
                'name' => 'Bandar Sri Permaisuri',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            51 =>
            array (
                'id' => 52,
                'name' => 'Bandar Tasik Selatan',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            52 =>
            array (
                'id' => 53,
                'name' => 'Bukit Damansara',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            53 =>
            array (
                'id' => 54,
                'name' => 'Desa Petaling',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            54 =>
            array (
                'id' => 55,
                'name' => 'Happy Garden',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            55 =>
            array (
                'id' => 56,
                'name' => 'Puncak Jalil',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            56 =>
            array (
                'id' => 57,
                'name' => 'Sri Hartamas',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            57 =>
            array (
                'id' => 58,
                'name' => 'Taman Connaught',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            58 =>
            array (
                'id' => 59,
                'name' => 'Taman Desa',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            59 =>
            array (
                'id' => 60,
                'name' => 'Taman Len Seng',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            60 =>
            array (
                'id' => 61,
                'name' => 'Taman OUG',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            61 =>
            array (
                'id' => 62,
                'name' => 'Taman Melawati',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            62 =>
            array (
                'id' => 63,
                'name' => 'Taman Ibukota',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            63 =>
            array (
                'id' => 64,
                'name' => 'Taman Tun Dr. Ismail',
                'state_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            64 =>
            array (
                'id' => 65,
                'name' => 'Victoria',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            65 =>
            array (
                'id' => 66,
                'name' => 'Batu Manikar',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            66 =>
            array (
                'id' => 67,
                'name' => 'Bebuloh',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            67 =>
            array (
                'id' => 68,
                'name' => 'Layang-Layangan',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            68 =>
            array (
                'id' => 69,
                'name' => 'Rancha-Rancha',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            69 =>
            array (
                'id' => 70,
                'name' => 'Kiamsam',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            70 =>
            array (
                'id' => 71,
                'name' => 'Patau-Patau',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            71 =>
            array (
                'id' => 72,
                'name' => 'Kampung Gersik Saguking',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            72 =>
            array (
                'id' => 73,
                'name' => 'Kampung Batu Arang',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            73 =>
            array (
                'id' => 74,
                'name' => 'Kampung Lubok Temiang',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            74 =>
            array (
                'id' => 75,
                'name' => 'Kampung Nagalang',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            75 =>
            array (
                'id' => 76,
                'name' => 'Kampung Sungai Lada',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            76 =>
            array (
                'id' => 77,
                'name' => 'Kampung Kerupang',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            77 =>
            array (
                'id' => 78,
                'name' => 'Kampung Lajau',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            78 =>
            array (
                'id' => 79,
                'name' => 'Kampung Tanjung Kubong',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            79 =>
            array (
                'id' => 80,
                'name' => 'Kampung Pantai',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            80 =>
            array (
                'id' => 81,
                'name' => 'Kampung Membedai',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            81 =>
            array (
                'id' => 82,
                'name' => 'Kampung Tanjung Aru',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            82 =>
            array (
                'id' => 83,
                'name' => 'Kampung Durian Tunjong',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            83 =>
            array (
                'id' => 84,
                'name' => 'Kampung Sungai Pagar',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            84 =>
            array (
                'id' => 85,
                'name' => 'Kampung Ganggarak',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            85 =>
            array (
                'id' => 86,
                'name' => 'Kampung Bukit Kuda',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            86 =>
            array (
                'id' => 87,
                'name' => 'Kampung Bukit Kalam',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            87 =>
            array (
                'id' => 88,
                'name' => 'Kampung Sungai Bedaun',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            88 =>
            array (
                'id' => 89,
                'name' => 'Kampung Bebuloh',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            89 =>
            array (
                'id' => 90,
                'name' => 'Kampung Sungai Keling',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            90 =>
            array (
                'id' => 91,
                'name' => 'Kampung Merinding',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            91 =>
            array (
                'id' => 92,
                'name' => 'Pulau Burung',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            92 =>
            array (
                'id' => 93,
                'name' => 'Pulau Daat',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            93 =>
            array (
                'id' => 94,
                'name' => 'Pulau Kuraman',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            94 =>
            array (
                'id' => 95,
                'name' => 'Pulau Papan',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            95 =>
            array (
                'id' => 96,
                'name' => 'Pulau Rusukan Kecil',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            96 =>
            array (
                'id' => 97,
                'name' => 'Pulau Rusukan Besar',
                'state_id' => 2,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            97 =>
            array (
                'id' => 98,
                'name' => 'Presint 1',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            98 =>
            array (
                'id' => 99,
                'name' => 'Presint 2',
                'state_id' => 2016,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            99 =>
            array (
                'id' => 100,
                'name' => 'Presint 3',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            100 =>
            array (
                'id' => 101,
                'name' => 'Presint 4',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            101 =>
            array (
                'id' => 102,
                'name' => 'Presint 5',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            102 =>
            array (
                'id' => 103,
                'name' => 'Presint 6',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            103 =>
            array (
                'id' => 104,
                'name' => 'Presint 7',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            104 =>
            array (
                'id' => 105,
                'name' => 'Presint 8',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            105 =>
            array (
                'id' => 106,
                'name' => 'Presint 9',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            106 =>
            array (
                'id' => 107,
                'name' => 'Presint 10',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            107 =>
            array (
                'id' => 108,
                'name' => 'Presint 11',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            108 =>
            array (
                'id' => 109,
                'name' => 'Presint 12',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            109 =>
            array (
                'id' => 110,
                'name' => 'Presint 13',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            110 =>
            array (
                'id' => 111,
                'name' => 'Presint 14',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            111 =>
            array (
                'id' => 112,
                'name' => 'Presint 15',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            112 =>
            array (
                'id' => 113,
                'name' => 'Presint 16',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            113 =>
            array (
                'id' => 114,
                'name' => 'Presint 17',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            114 =>
            array (
                'id' => 115,
                'name' => 'Presint 18',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            115 =>
            array (
                'id' => 116,
                'name' => 'Presint 19',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            116 =>
            array (
                'id' => 117,
                'name' => 'Presint 20',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            117 =>
            array (
                'id' => 118,
                'name' => 'Presint Diplomatik',
                'state_id' => 3,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            118 =>
            array (
                'id' => 119,
                'name' => 'Ayer Bemban',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            119 =>
            array (
                'id' => 120,
                'name' => 'Ayer Hitam',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            120 =>
            array (
                'id' => 121,
                'name' => 'Air Papan',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            121 =>
            array (
                'id' => 122,
                'name' => 'Bakri',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            122 =>
            array (
                'id' => 123,
                'name' => 'Bandar Baru UDA',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            123 =>
            array (
                'id' => 124,
                'name' => 'Bandar Dato\' Onn',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            124 =>
            array (
                'id' => 125,
                'name' => 'Bandar Maharani',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            125 =>
            array (
                'id' => 126,
                'name' => 'Bandar Penawar',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            126 =>
            array (
                'id' => 127,
                'name' => 'Bandar Permas',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            127 =>
            array (
                'id' => 128,
                'name' => 'Bandar Tenggara',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            128 =>
            array (
                'id' => 129,
                'name' => 'Batu Enam',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            129 =>
            array (
                'id' => 130,
                'name' => 'Batu Pahat',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            130 =>
            array (
                'id' => 131,
                'name' => 'Bekok',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            131 =>
            array (
                'id' => 132,
                'name' => 'Benut',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            132 =>
            array (
                'id' => 133,
                'name' => 'Bukit Batu',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            133 =>
            array (
                'id' => 134,
                'name' => 'Bukit Gambir',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            134 =>
            array (
                'id' => 135,
                'name' => 'Bukit Kangkar',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            135 =>
            array (
                'id' => 136,
                'name' => 'Bukit Kepong',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            136 =>
            array (
                'id' => 137,
                'name' => 'Bukit Naning',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            137 =>
            array (
                'id' => 138,
                'name' => 'Bukit Pasir',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            138 =>
            array (
                'id' => 139,
                'name' => 'Bukit Serampang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            139 =>
            array (
                'id' => 140,
                'name' => 'Chaah',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            140 =>
            array (
                'id' => 141,
                'name' => 'Desaru',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            141 =>
            array (
                'id' => 142,
                'name' => 'Endau',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            142 =>
            array (
                'id' => 143,
                'name' => 'Gelang Patah',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            143 =>
            array (
                'id' => 144,
                'name' => 'Gemas Baharu',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            144 =>
            array (
                'id' => 145,
                'name' => 'Genuang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            145 =>
            array (
                'id' => 146,
                'name' => 'Iskandar Puteri',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            146 =>
            array (
                'id' => 147,
                'name' => 'Jemaluang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            147 =>
            array (
                'id' => 148,
                'name' => 'Jementah',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            148 =>
            array (
                'id' => 149,
                'name' => 'Johor Lama',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            149 =>
            array (
                'id' => 150,
                'name' => 'Kahang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            150 =>
            array (
                'id' => 151,
                'name' => 'Kampung Tengah',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            151 =>
            array (
                'id' => 152,
                'name' => 'Kangkar Pulai',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            152 =>
            array (
                'id' => 153,
                'name' => 'Kelapa Sawit',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            153 =>
            array (
                'id' => 154,
                'name' => 'Kempas',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            154 =>
            array (
                'id' => 155,
                'name' => 'Kluang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            155 =>
            array (
                'id' => 156,
                'name' => 'Kong Kong',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            156 =>
            array (
                'id' => 157,
                'name' => 'Kota Tinggi',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            157 =>
            array (
                'id' => 158,
                'name' => 'Kulai',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            158 =>
            array (
                'id' => 159,
                'name' => 'Kukup',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            159 =>
            array (
                'id' => 160,
                'name' => 'Kundang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            160 =>
            array (
                'id' => 161,
                'name' => 'Layang-Layang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            161 =>
            array (
                'id' => 162,
                'name' => 'Lok Heng',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            162 =>
            array (
                'id' => 163,
                'name' => 'Lombong',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            163 =>
            array (
                'id' => 164,
                'name' => 'Machap',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            164 =>
            array (
                'id' => 165,
                'name' => 'Masai',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            165 =>
            array (
                'id' => 166,
                'name' => 'Mengkibol',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            166 =>
            array (
                'id' => 167,
                'name' => 'Mersing',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            167 =>
            array (
                'id' => 168,
                'name' => 'Muar',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            168 =>
            array (
                'id' => 169,
                'name' => 'Pagoh',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            169 =>
            array (
                'id' => 170,
                'name' => 'Paloh',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            170 =>
            array (
                'id' => 171,
                'name' => 'Parit Bakar',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            171 =>
            array (
                'id' => 172,
                'name' => 'Parit Bunga',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            172 =>
            array (
                'id' => 173,
                'name' => 'Parit Jawa',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            173 =>
            array (
                'id' => 174,
                'name' => 'Parit Raja',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            174 =>
            array (
                'id' => 175,
                'name' => 'Parit Sulong',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            175 =>
            array (
                'id' => 176,
                'name' => 'Parit Yaani',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            176 =>
            array (
                'id' => 177,
                'name' => 'Panchor',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            177 =>
            array (
                'id' => 178,
                'name' => 'Pasir Gudang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            178 =>
            array (
                'id' => 179,
                'name' => 'Pasir Pelangi',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            179 =>
            array (
                'id' => 180,
                'name' => 'Pendas',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            180 =>
            array (
                'id' => 181,
                'name' => 'Pekan Air Panas',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            181 =>
            array (
                'id' => 182,
                'name' => 'Pekan Nenas',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            182 =>
            array (
                'id' => 183,
                'name' => 'Pengerang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            183 =>
            array (
                'id' => 184,
                'name' => 'Permas Jaya',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            184 =>
            array (
                'id' => 185,
                'name' => 'Plentong',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            185 =>
            array (
                'id' => 186,
                'name' => 'Pontian Besar',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            186 =>
            array (
                'id' => 187,
                'name' => 'Renggam',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            187 =>
            array (
                'id' => 188,
                'name' => 'Rengit',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            188 =>
            array (
                'id' => 189,
                'name' => 'Sagil',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            189 =>
            array (
                'id' => 190,
                'name' => 'Saleng',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            190 =>
            array (
                'id' => 191,
                'name' => 'Sedenak',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            191 =>
            array (
                'id' => 192,
                'name' => 'Sedili',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            192 =>
            array (
                'id' => 193,
                'name' => 'Seelong',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            193 =>
            array (
                'id' => 194,
                'name' => 'Segamat',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            194 =>
            array (
                'id' => 195,
                'name' => 'Semerah',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            195 =>
            array (
                'id' => 196,
                'name' => 'Senai',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            196 =>
            array (
                'id' => 197,
                'name' => 'Senggarang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            197 =>
            array (
                'id' => 198,
                'name' => 'Simpang Renggam',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            198 =>
            array (
                'id' => 199,
                'name' => 'Skudai',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            199 =>
            array (
                'id' => 200,
                'name' => 'Sri Gading',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            200 =>
            array (
                'id' => 201,
                'name' => 'Sri Medan',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            201 =>
            array (
                'id' => 202,
                'name' => 'Stulang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            202 =>
            array (
                'id' => 203,
                'name' => 'Sungai Balang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            203 =>
            array (
                'id' => 204,
                'name' => 'Sungai Mati',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            204 =>
            array (
                'id' => 205,
                'name' => 'Sungai Rengit',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            205 =>
            array (
                'id' => 206,
                'name' => 'Tampoi',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            206 =>
            array (
                'id' => 207,
                'name' => 'Tangkak',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            207 =>
            array (
                'id' => 208,
                'name' => 'Tanjung Agas',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            208 =>
            array (
                'id' => 209,
                'name' => 'Tanjung Balau',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            209 =>
            array (
                'id' => 210,
                'name' => 'Tanjung Kupang',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            210 =>
            array (
                'id' => 211,
                'name' => 'Tanjung Leman',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            211 =>
            array (
                'id' => 212,
                'name' => 'Tanjung Langsat',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            212 =>
            array (
                'id' => 213,
                'name' => 'Tanjung Pelepas',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            213 =>
            array (
                'id' => 214,
                'name' => 'Tanjung Pengelih',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            214 =>
            array (
                'id' => 215,
                'name' => 'Tebrau',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            215 =>
            array (
                'id' => 216,
                'name' => 'Teluk Mahkota',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            216 =>
            array (
                'id' => 217,
                'name' => 'Teluk Ramunia',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            217 =>
            array (
                'id' => 218,
                'name' => 'Teluk Sengat',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            218 =>
            array (
                'id' => 219,
                'name' => 'Tongkang Pechah',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            219 =>
            array (
                'id' => 220,
                'name' => 'Ulu Choh',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            220 =>
            array (
                'id' => 221,
                'name' => 'Ulu Tiram',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            221 =>
            array (
                'id' => 222,
                'name' => 'Yong Peng',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            222 =>
            array (
                'id' => 223,
                'name' => 'Bandar Putra Kulai',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            223 =>
            array (
                'id' => 224,
                'name' => 'Bandar Sri Alam',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            224 =>
            array (
                'id' => 225,
                'name' => 'Bukit Indah',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            225 =>
            array (
                'id' => 226,
                'name' => 'Desa Tebrau',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            226 =>
            array (
                'id' => 227,
                'name' => 'Mutiara Rini',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            227 =>
            array (
                'id' => 228,
                'name' => 'Indahpura',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            228 =>
            array (
                'id' => 229,
                'name' => 'Pura Kencana',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            229 =>
            array (
                'id' => 230,
                'name' => 'Setia Indah',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            230 =>
            array (
                'id' => 231,
                'name' => 'Setia Tropika',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            231 =>
            array (
                'id' => 232,
                'name' => 'Taman Daya',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            232 =>
            array (
                'id' => 233,
                'name' => 'Taman Johor Jaya',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            233 =>
            array (
                'id' => 234,
                'name' => 'Taman Melodies',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            234 =>
            array (
                'id' => 235,
                'name' => 'Taman Molek',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            235 =>
            array (
                'id' => 236,
                'name' => 'Taman Perling',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            236 =>
            array (
                'id' => 237,
                'name' => 'Taman Sentosa',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            237 =>
            array (
                'id' => 238,
                'name' => 'Taman Sri Lambak',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            238 =>
            array (
                'id' => 239,
                'name' => 'Taman Ungku Tun Aminah',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            239 =>
            array (
                'id' => 240,
                'name' => 'Taman Universiti',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            240 =>
            array (
                'id' => 241,
                'name' => 'Kota Masai',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            241 =>
            array (
                'id' => 242,
                'name' => 'Johor Bahru',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            242 =>
            array (
                'id' => 243,
                'name' => 'Tenggaroh',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            243 =>
            array (
                'id' => 244,
                'name' => 'Pontian Kechil',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            244 =>
            array (
                'id' => 245,
                'name' => 'Lima Kedai',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            245 =>
            array (
                'id' => 246,
                'name' => 'Labis',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            246 =>
            array (
                'id' => 247,
                'name' => 'Buloh Kasap',
                'state_id' => 4,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            247 =>
            array (
                'id' => 248,
                'name' => 'Alor Setar',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            248 =>
            array (
                'id' => 249,
                'name' => 'Sungai Petani',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            249 =>
            array (
                'id' => 250,
                'name' => 'Kulim',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            250 =>
            array (
                'id' => 251,
                'name' => 'Langkawi',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            251 =>
            array (
                'id' => 252,
                'name' => 'Pokok Sena',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            252 =>
            array (
                'id' => 253,
                'name' => 'Jitra',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            253 =>
            array (
                'id' => 254,
                'name' => 'Changlun',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            254 =>
            array (
                'id' => 255,
                'name' => 'Baling',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            255 =>
            array (
                'id' => 256,
                'name' => 'Kuala Ketil',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            256 =>
            array (
                'id' => 257,
                'name' => 'Gurun',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            257 =>
            array (
                'id' => 258,
                'name' => 'Serdang',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            258 =>
            array (
                'id' => 259,
                'name' => 'Kuala Nerang',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            259 =>
            array (
                'id' => 260,
                'name' => 'Pendang',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            260 =>
            array (
                'id' => 261,
                'name' => 'Sik',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            261 =>
            array (
                'id' => 262,
                'name' => 'Yan',
                'state_id' => 5,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            262 =>
            array (
                'id' => 263,
                'name' => 'Kota Bharu',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            263 =>
            array (
                'id' => 264,
                'name' => 'Bachok',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            264 =>
            array (
                'id' => 265,
                'name' => 'Gua Musang',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            265 =>
            array (
                'id' => 266,
                'name' => 'Jeli',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            266 =>
            array (
                'id' => 267,
                'name' => 'Kuala Krai',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            267 =>
            array (
                'id' => 268,
                'name' => 'Machang',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            268 =>
            array (
                'id' => 269,
                'name' => 'Pasir Mas',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            269 =>
            array (
                'id' => 270,
                'name' => 'Pasir Puteh',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            270 =>
            array (
                'id' => 271,
                'name' => 'Tanah Merah',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            271 =>
            array (
                'id' => 272,
                'name' => 'Tumpat',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            272 =>
            array (
                'id' => 273,
                'name' => 'Lojing',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            273 =>
            array (
                'id' => 274,
                'name' => 'Air Lanas',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            274 =>
            array (
                'id' => 275,
                'name' => 'Bukit Bunga',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            275 =>
            array (
                'id' => 276,
                'name' => 'Bukit Panau',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            276 =>
            array (
                'id' => 277,
                'name' => 'Bukit Tuku',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            277 =>
            array (
                'id' => 278,
                'name' => 'Bunut Payong',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            278 =>
            array (
                'id' => 279,
                'name' => 'Chempaka',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            279 =>
            array (
                'id' => 280,
                'name' => 'Chetok',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            280 =>
            array (
                'id' => 281,
                'name' => 'Chiku',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            281 =>
            array (
                'id' => 282,
                'name' => 'Dabong',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            282 =>
            array (
                'id' => 283,
                'name' => 'Demit',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            283 =>
            array (
                'id' => 284,
                'name' => 'Gaal',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            284 =>
            array (
                'id' => 285,
                'name' => 'Galas',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            285 =>
            array (
                'id' => 286,
                'name' => 'Gual Ipoh',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            286 =>
            array (
                'id' => 287,
                'name' => 'Gual Periok',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            287 =>
            array (
                'id' => 288,
                'name' => 'Guchil',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            288 =>
            array (
                'id' => 289,
                'name' => 'Jelawat',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            289 =>
            array (
                'id' => 290,
                'name' => 'Kadok',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            290 =>
            array (
                'id' => 291,
                'name' => 'Kelaboran',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            291 =>
            array (
                'id' => 292,
                'name' => 'Kemahang',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            292 =>
            array (
                'id' => 293,
                'name' => 'Kemuning',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            293 =>
            array (
                'id' => 294,
                'name' => 'Ketereh',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            294 =>
            array (
                'id' => 295,
                'name' => 'Kijang',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            295 =>
            array (
                'id' => 296,
                'name' => 'Kok Lanas',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            296 =>
            array (
                'id' => 297,
                'name' => 'Kota Darulnaim',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            297 =>
            array (
                'id' => 298,
                'name' => 'Kota Lama',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            298 =>
            array (
                'id' => 299,
                'name' => 'Kuala Balah',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            299 =>
            array (
                'id' => 300,
                'name' => 'Kubang Kerian',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            300 =>
            array (
                'id' => 301,
                'name' => 'Limbongan',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            301 =>
            array (
                'id' => 302,
                'name' => 'Manek Urai',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            302 =>
            array (
                'id' => 303,
                'name' => 'Melor',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            303 =>
            array (
                'id' => 304,
                'name' => 'Mengkebang',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            304 =>
            array (
                'id' => 305,
                'name' => 'Meranti',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            305 =>
            array (
                'id' => 306,
                'name' => 'Nenggiri',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            306 =>
            array (
                'id' => 307,
                'name' => 'Palekbang',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            307 =>
            array (
                'id' => 308,
                'name' => 'Paloh',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            308 =>
            array (
                'id' => 309,
                'name' => 'Panchor',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            309 =>
            array (
                'id' => 310,
                'name' => 'Pasir Pekan',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            310 =>
            array (
                'id' => 311,
                'name' => 'Pasir Tumboh',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            311 =>
            array (
                'id' => 312,
                'name' => 'Pengkalan Chepa',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            312 =>
            array (
                'id' => 313,
                'name' => 'Pengkalan Kubur',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            313 =>
            array (
                'id' => 314,
                'name' => 'Pengkalan Pasir',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            314 =>
            array (
                'id' => 315,
                'name' => 'Perupok',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            315 =>
            array (
                'id' => 316,
                'name' => 'Pulai Chondong',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            316 =>
            array (
                'id' => 317,
                'name' => 'Pulau Melaka',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            317 =>
            array (
                'id' => 318,
                'name' => 'Rantau Panjang',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            318 =>
            array (
                'id' => 319,
                'name' => 'Salor',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            319 =>
            array (
                'id' => 320,
                'name' => 'Selising',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            320 =>
            array (
                'id' => 321,
                'name' => 'Semerak',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            321 =>
            array (
                'id' => 322,
                'name' => 'Tanjong Mas',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            322 =>
            array (
                'id' => 323,
                'name' => 'Tawang',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            323 =>
            array (
                'id' => 324,
                'name' => 'Temangan',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            324 =>
            array (
                'id' => 325,
                'name' => 'Tendong',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            325 =>
            array (
                'id' => 326,
                'name' => 'Wakaf Bharu',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            326 =>
            array (
                'id' => 327,
                'name' => 'Wakaf Che Yeh',
                'state_id' => 6,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            327 =>
            array (
                'id' => 328,
                'name' => 'Ayer Keroh',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            328 =>
            array (
                'id' => 329,
                'name' => 'Asahan',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            329 =>
            array (
                'id' => 330,
                'name' => 'Batang Melaka',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            330 =>
            array (
                'id' => 331,
                'name' => 'Batu Berendam',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            331 =>
            array (
                'id' => 332,
                'name' => 'Bemban',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            332 =>
            array (
                'id' => 333,
                'name' => 'Bukit Beruang',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            333 =>
            array (
                'id' => 334,
                'name' => 'Bukit Katil',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            334 =>
            array (
                'id' => 335,
                'name' => 'Cheng',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            335 =>
            array (
                'id' => 336,
                'name' => 'Durian Tunggal',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            336 =>
            array (
                'id' => 337,
                'name' => 'Hang Tuah Jaya',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            337 =>
            array (
                'id' => 338,
                'name' => 'Klebang',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            338 =>
            array (
                'id' => 339,
                'name' => 'Krubong',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            339 =>
            array (
                'id' => 340,
                'name' => 'Kuala Sungai Baru',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            340 =>
            array (
                'id' => 341,
                'name' => 'Lendu',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            341 =>
            array (
                'id' => 342,
                'name' => 'Lubuk China',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            342 =>
            array (
                'id' => 343,
                'name' => 'Machap Baru',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            343 =>
            array (
                'id' => 344,
                'name' => 'Masjid Tanah',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            344 =>
            array (
                'id' => 345,
                'name' => 'Melaka Pindah',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            345 =>
            array (
                'id' => 346,
                'name' => 'Merlimau',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            346 =>
            array (
                'id' => 347,
                'name' => 'Naning',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            347 =>
            array (
                'id' => 348,
                'name' => 'Nyalas',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            348 =>
            array (
                'id' => 349,
                'name' => 'Pulau Sebang',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            349 =>
            array (
                'id' => 350,
                'name' => 'Ramuan China',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            350 =>
            array (
                'id' => 351,
                'name' => 'Selandar',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            351 =>
            array (
                'id' => 352,
                'name' => 'Serkam',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            352 =>
            array (
                'id' => 353,
                'name' => 'Simpang Ampat',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            353 =>
            array (
                'id' => 354,
                'name' => 'Sungai Rambai',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            354 =>
            array (
                'id' => 355,
                'name' => 'Sungai Udang',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            355 =>
            array (
                'id' => 356,
                'name' => 'Tampin',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            356 =>
            array (
                'id' => 357,
                'name' => 'Tanjung Bidara',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            357 =>
            array (
                'id' => 358,
                'name' => 'Tanjung Kling',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            358 =>
            array (
                'id' => 359,
                'name' => 'Tanjung Tuan',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            359 =>
            array (
                'id' => 360,
                'name' => 'Telok Mas',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            360 =>
            array (
                'id' => 361,
                'name' => 'Umbai',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            361 =>
            array (
                'id' => 362,
                'name' => 'Bandar Utama Cheng',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            362 =>
            array (
                'id' => 363,
                'name' => 'Malim Jaya',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            363 =>
            array (
                'id' => 364,
                'name' => 'Melaka Raya',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            364 =>
            array (
                'id' => 365,
                'name' => 'Bandar Jasin Bestari',
                'state_id' => 7,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            365 =>
            array (
                'id' => 366,
                'name' => 'Ayer Kuning',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            366 =>
            array (
                'id' => 367,
                'name' => 'Air Kuning Selatan',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            367 =>
            array (
                'id' => 368,
                'name' => 'Ampangan',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            368 =>
            array (
                'id' => 369,
                'name' => 'Bahau',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            369 =>
            array (
                'id' => 370,
                'name' => 'Bandar Sri Sendayan',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            370 =>
            array (
                'id' => 371,
                'name' => 'Bandar Baru Nilai',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            371 =>
            array (
                'id' => 372,
            'name' => 'Bandar Seri Jempol (Bandar Baru Serting)',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            372 =>
            array (
                'id' => 373,
                'name' => 'Bandar Springhill',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            373 =>
            array (
                'id' => 374,
                'name' => 'Batang Benar',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            374 =>
            array (
                'id' => 375,
                'name' => 'Batu Kikir',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            375 =>
            array (
                'id' => 376,
                'name' => 'Bukit Pelanduk',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            376 =>
            array (
                'id' => 377,
                'name' => 'Chembong',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            377 =>
            array (
                'id' => 378,
                'name' => 'Chengkau',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            378 =>
            array (
                'id' => 379,
                'name' => 'Chuah',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            379 =>
            array (
                'id' => 380,
                'name' => 'Dangi',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            380 =>
            array (
                'id' => 381,
                'name' => 'Gemas',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            381 =>
            array (
                'id' => 382,
                'name' => 'Gemencheh',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            382 =>
            array (
                'id' => 383,
                'name' => 'Johol',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            383 =>
            array (
                'id' => 384,
                'name' => 'Juasseh',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            384 =>
            array (
                'id' => 385,
                'name' => 'Kota',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            385 =>
            array (
                'id' => 386,
                'name' => 'Kuala Klawang',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            386 =>
            array (
                'id' => 387,
                'name' => 'Kuala Pilah',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            387 =>
            array (
                'id' => 388,
                'name' => 'Labu',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            388 =>
            array (
                'id' => 389,
                'name' => 'Lenggeng',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            389 =>
            array (
                'id' => 390,
                'name' => 'Linggi',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            390 =>
            array (
                'id' => 391,
                'name' => 'Lukut',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            391 =>
            array (
                'id' => 392,
                'name' => 'Mantin',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            392 =>
            array (
                'id' => 393,
                'name' => 'Mambau',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            393 =>
            array (
                'id' => 394,
                'name' => 'Melang',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            394 =>
            array (
                'id' => 395,
                'name' => 'Nilai',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            395 =>
            array (
                'id' => 396,
                'name' => 'Pajam',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            396 =>
            array (
                'id' => 397,
                'name' => 'Paroi',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            397 =>
            array (
                'id' => 398,
                'name' => 'Pantai',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            398 =>
            array (
                'id' => 399,
                'name' => 'Pasir Panjang',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            399 =>
            array (
                'id' => 400,
                'name' => 'Pedas',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            400 =>
            array (
                'id' => 401,
                'name' => 'Pelangai',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            401 =>
            array (
                'id' => 402,
                'name' => 'Pengkalan Kempas',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            402 =>
            array (
                'id' => 403,
                'name' => 'Pertang',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            403 =>
            array (
                'id' => 404,
                'name' => 'Port Dickson',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            404 =>
            array (
                'id' => 405,
                'name' => 'Rantau',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            405 =>
            array (
                'id' => 406,
                'name' => 'Rasah',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            406 =>
            array (
                'id' => 407,
                'name' => 'Rasah Jaya',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            407 =>
            array (
                'id' => 408,
                'name' => 'Rembau',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            408 =>
            array (
                'id' => 409,
                'name' => 'Rompin',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            409 =>
            array (
                'id' => 410,
                'name' => 'Senaling',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            410 =>
            array (
                'id' => 411,
                'name' => 'Senawang',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            411 =>
            array (
                'id' => 412,
                'name' => 'Sepang Road',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            412 =>
            array (
                'id' => 413,
                'name' => 'Seremban 2',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            413 =>
            array (
                'id' => 414,
                'name' => 'Seri Menanti',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            414 =>
            array (
                'id' => 415,
                'name' => 'Serting',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            415 =>
            array (
                'id' => 416,
                'name' => 'Sikamat',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            416 =>
            array (
                'id' => 417,
                'name' => 'Siliau',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            417 =>
            array (
                'id' => 418,
                'name' => 'Simpang Pertang',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            418 =>
            array (
                'id' => 419,
                'name' => 'Sungai Gadut',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            419 =>
            array (
                'id' => 420,
                'name' => 'Sungai Muntoh',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            420 =>
            array (
                'id' => 421,
                'name' => 'Tampin',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            421 =>
            array (
                'id' => 422,
                'name' => 'Tampin Tengah',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            422 =>
            array (
                'id' => 423,
                'name' => 'Tanah Merah',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            423 =>
            array (
                'id' => 424,
                'name' => 'Tanjung Ipoh',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            424 =>
            array (
                'id' => 425,
                'name' => 'Teluk Kemang',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            425 =>
            array (
                'id' => 426,
                'name' => 'Tiroi',
                'state_id' => 8,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            426 =>
            array (
                'id' => 427,
                'name' => 'Bandar Bera',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            427 =>
            array (
                'id' => 428,
                'name' => 'Bandar Muadzam Shah',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            428 =>
            array (
                'id' => 429,
            'name' => 'Bandar Tun Abdul Razak (Keratong)',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            429 =>
            array (
                'id' => 430,
            'name' => 'Bandar Tun Razak (Jengka)',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            430 =>
            array (
                'id' => 431,
                'name' => 'Batu Hitam',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            431 =>
            array (
                'id' => 432,
                'name' => 'Batu Talam',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            432 =>
            array (
                'id' => 433,
                'name' => 'Belimbing',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            433 =>
            array (
                'id' => 434,
                'name' => 'Benta',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            434 =>
            array (
                'id' => 435,
                'name' => 'Bentong',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            435 =>
            array (
                'id' => 436,
                'name' => 'Beserah',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            436 =>
            array (
                'id' => 437,
                'name' => 'Brinchang',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            437 =>
            array (
                'id' => 438,
                'name' => 'Bukit Ibam',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            438 =>
            array (
                'id' => 439,
                'name' => 'Bukit Tinggi',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            439 =>
            array (
                'id' => 440,
                'name' => 'Ceruk Paloh',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            440 =>
            array (
                'id' => 441,
                'name' => 'Chendor',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            441 =>
            array (
                'id' => 442,
                'name' => 'Chenor',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            442 =>
            array (
                'id' => 443,
                'name' => 'Cheroh',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            443 =>
            array (
                'id' => 444,
                'name' => 'Tasik Chini',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            444 =>
            array (
                'id' => 445,
                'name' => 'Cherating',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            445 =>
            array (
                'id' => 446,
                'name' => 'FELDA Mempaga',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            446 =>
            array (
                'id' => 447,
                'name' => 'FELDA New Zealand',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            447 =>
            array (
                'id' => 448,
                'name' => 'Bukit Fraser',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            448 =>
            array (
                'id' => 449,
                'name' => 'Gambang',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            449 =>
            array (
                'id' => 450,
                'name' => 'Gebeng',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            450 =>
            array (
                'id' => 451,
                'name' => 'Genting Highlands',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            451 =>
            array (
                'id' => 452,
                'name' => 'Genting Sempah',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            452 =>
            array (
                'id' => 453,
                'name' => 'Janda Baik',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            453 =>
            array (
                'id' => 454,
                'name' => 'Jerantut',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            454 =>
            array (
                'id' => 455,
                'name' => 'Karak',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            455 =>
            array (
                'id' => 456,
                'name' => 'Kemayan',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            456 =>
            array (
                'id' => 457,
                'name' => 'Krambit',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            457 =>
            array (
                'id' => 458,
                'name' => 'Kerdau',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            458 =>
            array (
                'id' => 459,
                'name' => 'Ketari',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            459 =>
            array (
                'id' => 460,
                'name' => 'Kampung Awah',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            460 =>
            array (
                'id' => 461,
                'name' => 'Kota Bahagia',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            461 =>
            array (
                'id' => 462,
                'name' => 'Kota Iskandar',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            462 =>
            array (
                'id' => 463,
                'name' => 'Kota Shahbandar',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            463 =>
            array (
                'id' => 464,
                'name' => 'Kuala Krau',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            464 =>
            array (
                'id' => 465,
                'name' => 'Kuala Lipis',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            465 =>
            array (
                'id' => 466,
                'name' => 'Kuala Pahang',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            466 =>
            array (
                'id' => 467,
                'name' => 'Kuala Rompin',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            467 =>
            array (
                'id' => 468,
                'name' => 'Kuala Tembeling',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            468 =>
            array (
                'id' => 469,
                'name' => 'Kuantan',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            469 =>
            array (
                'id' => 470,
                'name' => 'Lanchang',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            470 =>
            array (
                'id' => 471,
                'name' => 'Lentang',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            471 =>
            array (
                'id' => 472,
                'name' => 'Lubuk Paku',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            472 =>
            array (
                'id' => 473,
                'name' => 'Lurah Bilut',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            473 =>
            array (
                'id' => 474,
                'name' => 'Maran',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            474 =>
            array (
                'id' => 475,
                'name' => 'Melati',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            475 =>
            array (
                'id' => 476,
                'name' => 'Mengkarak',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            476 =>
            array (
                'id' => 477,
                'name' => 'Mengkuang',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            477 =>
            array (
                'id' => 478,
                'name' => 'Mentakab',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            478 =>
            array (
                'id' => 479,
                'name' => 'Merapoh',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            479 =>
            array (
                'id' => 480,
                'name' => 'Nenasi',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            480 =>
            array (
                'id' => 481,
                'name' => 'Paloh Hinai',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            481 =>
            array (
                'id' => 482,
                'name' => 'Pekan',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            482 =>
            array (
                'id' => 483,
                'name' => 'Penor',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            483 =>
            array (
                'id' => 484,
                'name' => 'Raub',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            484 =>
            array (
                'id' => 485,
                'name' => 'Ringlet',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            485 =>
            array (
                'id' => 486,
                'name' => 'RKT Salong',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            486 =>
            array (
                'id' => 487,
                'name' => 'Rompin',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            487 =>
            array (
                'id' => 488,
                'name' => 'Sebertak',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            488 =>
            array (
                'id' => 489,
                'name' => 'Sempalit',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            489 =>
            array (
                'id' => 490,
                'name' => 'Sungai Lembing',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            490 =>
            array (
                'id' => 491,
                'name' => 'Sungai Ruan',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            491 =>
            array (
                'id' => 492,
                'name' => 'Tanah Rata',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            492 =>
            array (
                'id' => 493,
                'name' => 'Tanjung Lumpur',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            493 =>
            array (
                'id' => 494,
                'name' => 'Tanjung Sepat',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            494 =>
            array (
                'id' => 495,
                'name' => 'Teluk Cempedak',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            495 =>
            array (
                'id' => 496,
                'name' => 'Temerloh',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            496 =>
            array (
                'id' => 497,
                'name' => 'Triang',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            497 =>
            array (
                'id' => 498,
                'name' => 'Tringkap',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            498 =>
            array (
                'id' => 499,
                'name' => 'Bandar Baru Chendor',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            499 =>
            array (
                'id' => 500,
                'name' => 'Bandar Damansara Kuantan',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
        ));
        \DB::table('cities')->insert(array (
            0 =>
            array (
                'id' => 501,
                'name' => 'Bandar Indera Mahkota',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            1 =>
            array (
                'id' => 502,
                'name' => 'Bandar MEC',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            2 =>
            array (
                'id' => 503,
                'name' => 'Bandar Putra',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            3 =>
            array (
                'id' => 504,
                'name' => 'Gohtong Jaya',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            4 =>
            array (
                'id' => 505,
                'name' => 'Seberang Temerloh',
                'state_id' => 9,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            5 =>
            array (
                'id' => 506,
                'name' => 'Ayer Tawar',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            6 =>
            array (
                'id' => 507,
                'name' => 'Bagan Datoh',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            7 =>
            array (
                'id' => 508,
                'name' => 'Bagan Serai',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            8 =>
            array (
                'id' => 509,
                'name' => 'Bagan Sungai Burong',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            9 =>
            array (
                'id' => 510,
                'name' => 'Banir',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            10 =>
            array (
                'id' => 511,
                'name' => 'Batak Rabit',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            11 =>
            array (
                'id' => 512,
                'name' => 'Batu Gajah',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            12 =>
            array (
                'id' => 513,
                'name' => 'Behrang',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            13 =>
            array (
                'id' => 514,
                'name' => 'Bercham',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            14 =>
            array (
                'id' => 515,
                'name' => 'Beruas',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            15 =>
            array (
                'id' => 516,
                'name' => 'Bidor',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            16 =>
            array (
                'id' => 517,
                'name' => 'Bikam',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            17 =>
            array (
                'id' => 518,
                'name' => 'Bota',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            18 =>
            array (
                'id' => 519,
                'name' => 'Bukit Gantang',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            19 =>
            array (
                'id' => 520,
                'name' => 'Bukit Merah',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            20 =>
            array (
                'id' => 521,
                'name' => 'Changkat Jering',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            21 =>
            array (
                'id' => 522,
                'name' => 'Changkat Keruing',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            22 =>
            array (
                'id' => 523,
                'name' => 'Chemor',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            23 =>
            array (
                'id' => 524,
                'name' => 'Chikus',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            24 =>
            array (
                'id' => 525,
                'name' => 'Damar Laut',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            25 =>
            array (
                'id' => 526,
                'name' => 'Gerik',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            26 =>
            array (
                'id' => 527,
                'name' => 'Gopeng',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            27 =>
            array (
                'id' => 528,
                'name' => 'Gua Tempurung',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            28 =>
            array (
                'id' => 529,
                'name' => 'Hutan Melintang',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            29 =>
            array (
                'id' => 530,
                'name' => 'Jelapang',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            30 =>
            array (
                'id' => 531,
                'name' => 'Jenderata',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            31 =>
            array (
                'id' => 532,
                'name' => 'Jerlun',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            32 =>
            array (
                'id' => 533,
                'name' => 'Kamunting',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            33 =>
            array (
                'id' => 534,
                'name' => 'Kampar',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            34 =>
            array (
                'id' => 535,
                'name' => 'Karai',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            35 =>
            array (
                'id' => 536,
                'name' => 'Kota Setia',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            36 =>
            array (
                'id' => 537,
                'name' => 'Kuala Kangsar',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            37 =>
            array (
                'id' => 538,
                'name' => 'Kuala Kurau',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            38 =>
            array (
                'id' => 539,
                'name' => 'Kuala Sepetang',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            39 =>
            array (
                'id' => 540,
                'name' => 'Langkap',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            40 =>
            array (
                'id' => 541,
                'name' => 'Lekir',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            41 =>
            array (
                'id' => 542,
                'name' => 'Lenggong',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            42 =>
            array (
                'id' => 543,
                'name' => 'Lumut',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            43 =>
            array (
                'id' => 544,
                'name' => 'Manjoi',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            44 =>
            array (
                'id' => 545,
                'name' => 'Malim Nawar',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            45 =>
            array (
                'id' => 546,
                'name' => 'Mambang Di Awan',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            46 =>
            array (
                'id' => 547,
                'name' => 'Manong',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            47 =>
            array (
                'id' => 548,
                'name' => 'Menglembu',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            48 =>
            array (
                'id' => 549,
                'name' => 'Meru',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            49 =>
            array (
                'id' => 550,
                'name' => 'Padang Rengas',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            50 =>
            array (
                'id' => 551,
                'name' => 'Pantai Remis',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            51 =>
            array (
                'id' => 552,
                'name' => 'Parit',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            52 =>
            array (
                'id' => 553,
                'name' => 'Parit Buntar',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            53 =>
            array (
                'id' => 554,
                'name' => 'Pasir Salak',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            54 =>
            array (
                'id' => 555,
                'name' => 'Pekan Gurney',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            55 =>
            array (
                'id' => 556,
            'name' => 'Pengkalan Hulu (Keroh)',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            56 =>
            array (
                'id' => 557,
                'name' => 'Bandar raya Proton',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            57 =>
            array (
                'id' => 558,
                'name' => 'Sayong',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            58 =>
            array (
                'id' => 559,
                'name' => 'Selama',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            59 =>
            array (
                'id' => 560,
                'name' => 'Seri Iskandar',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            60 =>
            array (
                'id' => 561,
                'name' => 'Seri Manjung',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            61 =>
            array (
                'id' => 562,
                'name' => 'Simpang Tiga',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            62 =>
            array (
                'id' => 563,
                'name' => 'Sitiawan',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            63 =>
            array (
                'id' => 564,
                'name' => 'Slim',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            64 =>
            array (
                'id' => 565,
                'name' => 'Slim River',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            65 =>
            array (
                'id' => 566,
                'name' => 'Sungai Siput',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            66 =>
            array (
                'id' => 567,
                'name' => 'Sungkai',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            67 =>
            array (
                'id' => 568,
                'name' => 'Taiping',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            68 =>
            array (
                'id' => 569,
                'name' => 'Tambun',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            69 =>
            array (
                'id' => 570,
                'name' => 'Tanjung Malim',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            70 =>
            array (
                'id' => 571,
                'name' => 'Tanjung Piandang',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            71 =>
            array (
                'id' => 572,
                'name' => 'Tanjung Rambutan',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            72 =>
            array (
                'id' => 573,
                'name' => 'Tanjung Tualang',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            73 =>
            array (
                'id' => 574,
                'name' => 'Tapah',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            74 =>
            array (
                'id' => 575,
                'name' => 'Tapah Road',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            75 =>
            array (
                'id' => 576,
                'name' => 'Teluk Batik',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            76 =>
            array (
                'id' => 577,
                'name' => 'Teluk Intan',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            77 =>
            array (
                'id' => 578,
                'name' => 'Teluk Rubiah',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            78 =>
            array (
                'id' => 579,
                'name' => 'Temoh',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            79 =>
            array (
                'id' => 580,
                'name' => 'Temoh Road',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            80 =>
            array (
                'id' => 581,
                'name' => 'Trolak',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            81 =>
            array (
                'id' => 582,
                'name' => 'Trong',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            82 =>
            array (
                'id' => 583,
                'name' => 'Tronoh',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            83 =>
            array (
                'id' => 584,
                'name' => 'Ipoh',
                'state_id' => 10,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            84 =>
            array (
                'id' => 585,
                'name' => 'Abi',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            85 =>
            array (
                'id' => 586,
                'name' => 'Beseri',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            86 =>
            array (
                'id' => 587,
                'name' => 'Chuping',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            87 =>
            array (
                'id' => 588,
                'name' => 'Jejawi',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            88 =>
            array (
                'id' => 589,
                'name' => 'Kayang',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            89 =>
            array (
                'id' => 590,
                'name' => 'Kechor',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            90 =>
            array (
                'id' => 591,
                'name' => 'Kuala Perlis',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            91 =>
            array (
                'id' => 592,
                'name' => 'Kurong Anai',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            92 =>
            array (
                'id' => 593,
                'name' => 'Kurong Batang',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            93 =>
            array (
                'id' => 594,
                'name' => 'Lubok Sireh',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            94 =>
            array (
                'id' => 595,
                'name' => 'Ngulang',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            95 =>
            array (
                'id' => 596,
                'name' => 'Oran',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            96 =>
            array (
                'id' => 597,
                'name' => 'Padang Pauh',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            97 =>
            array (
                'id' => 598,
                'name' => 'Paya',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            98 =>
            array (
                'id' => 599,
                'name' => 'Pedang Siding',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            99 =>
            array (
                'id' => 600,
                'name' => 'Sena',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            100 =>
            array (
                'id' => 601,
                'name' => 'Seriab',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            101 =>
            array (
                'id' => 602,
                'name' => 'Sungai Adam',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            102 =>
            array (
                'id' => 603,
                'name' => 'Sungai Baru',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            103 =>
            array (
                'id' => 604,
                'name' => 'Titi Tinggi',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            104 =>
            array (
                'id' => 605,
                'name' => 'Utan Aji',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            105 =>
            array (
                'id' => 606,
                'name' => 'Wang Bintong',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            106 =>
            array (
                'id' => 607,
                'name' => 'Arau',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            107 =>
            array (
                'id' => 608,
                'name' => 'Kaki Bukit',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            108 =>
            array (
                'id' => 609,
                'name' => 'Kangar',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            109 =>
            array (
                'id' => 610,
                'name' => 'Mata Ayer',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            110 =>
            array (
                'id' => 611,
                'name' => 'Padang Besar',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            111 =>
            array (
                'id' => 612,
                'name' => 'Sanglang',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            112 =>
            array (
                'id' => 613,
                'name' => 'Simpang Empat',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            113 =>
            array (
                'id' => 614,
                'name' => 'Wang Kelian',
                'state_id' => 11,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            114 =>
            array (
                'id' => 615,
                'name' => 'Air Itam',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            115 =>
            array (
                'id' => 616,
                'name' => 'Bagan Ajam',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            116 =>
            array (
                'id' => 617,
                'name' => 'Bagan Dalam',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            117 =>
            array (
                'id' => 618,
                'name' => 'Bagan Jermal',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            118 =>
            array (
                'id' => 619,
                'name' => 'Bagan Luar',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            119 =>
            array (
                'id' => 620,
                'name' => 'Balik Pulau',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            120 =>
            array (
                'id' => 621,
                'name' => 'Batu Ferringhi',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            121 =>
            array (
                'id' => 622,
                'name' => 'Batu Kawan',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            122 =>
            array (
                'id' => 623,
                'name' => 'Batu Maung',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            123 =>
            array (
                'id' => 624,
                'name' => 'Batu Uban',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            124 =>
            array (
                'id' => 625,
                'name' => 'Bayan Lepas',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            125 =>
            array (
                'id' => 626,
                'name' => 'Bukit Gelugor',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            126 =>
            array (
                'id' => 627,
                'name' => 'Bukit Jambul',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            127 =>
            array (
                'id' => 628,
                'name' => 'Bukit Mertajam',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            128 =>
            array (
                'id' => 629,
                'name' => 'Bukit Tambun',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            129 =>
            array (
                'id' => 630,
                'name' => 'Bukit Tengah',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            130 =>
            array (
                'id' => 631,
                'name' => 'Bukit Minyak',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            131 =>
            array (
                'id' => 632,
                'name' => 'Butterworth',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            132 =>
            array (
                'id' => 633,
                'name' => 'Ceruk Tok Kun',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            133 =>
            array (
                'id' => 634,
                'name' => 'Gelugor',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            134 =>
            array (
                'id' => 635,
                'name' => 'Jawi',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            135 =>
            array (
                'id' => 636,
                'name' => 'Juru',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            136 =>
            array (
                'id' => 637,
                'name' => 'Mak Mandin',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            137 =>
            array (
                'id' => 638,
                'name' => 'Machang Bubok',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            138 =>
            array (
                'id' => 639,
                'name' => 'Kepala Batas',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            139 =>
            array (
                'id' => 640,
                'name' => 'Nibong Tebal',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            140 =>
            array (
                'id' => 641,
                'name' => 'Pantai Acheh',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            141 =>
            array (
                'id' => 642,
                'name' => 'Paya Terubong',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            142 =>
            array (
                'id' => 643,
                'name' => 'Penaga',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            143 =>
            array (
                'id' => 644,
                'name' => 'Penanti',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            144 =>
            array (
                'id' => 645,
                'name' => 'Permatang Pauh',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            145 =>
            array (
                'id' => 646,
                'name' => 'Perai',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            146 =>
            array (
                'id' => 647,
                'name' => 'Pinang Tunggal',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            147 =>
            array (
                'id' => 648,
                'name' => 'Relau',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            148 =>
            array (
                'id' => 649,
                'name' => 'Seberang Jaya',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            149 =>
            array (
                'id' => 650,
                'name' => 'Simpang Ampat',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            150 =>
            array (
                'id' => 651,
                'name' => 'Sungai Ara',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            151 =>
            array (
                'id' => 652,
                'name' => 'Sungai Bakap',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            152 =>
            array (
                'id' => 653,
                'name' => 'Sungai Dua',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            153 =>
            array (
                'id' => 654,
                'name' => 'Sungai Jawi',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            154 =>
            array (
                'id' => 655,
                'name' => 'Sungai Nibong',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            155 =>
            array (
                'id' => 656,
                'name' => 'Tanjung Bungah',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            156 =>
            array (
                'id' => 657,
                'name' => 'Tanjung Tokong',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            157 =>
            array (
                'id' => 658,
                'name' => 'Tasek Gelugor',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            158 =>
            array (
                'id' => 659,
                'name' => 'Teluk Air Tawar',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            159 =>
            array (
                'id' => 660,
                'name' => 'Teluk Bahang',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            160 =>
            array (
                'id' => 661,
                'name' => 'Teluk Kumbar',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            161 =>
            array (
                'id' => 662,
                'name' => 'Valdor',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            162 =>
            array (
                'id' => 663,
                'name' => 'George Town',
                'state_id' => 12,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            163 =>
            array (
                'id' => 664,
                'name' => 'Kota Kinabalu',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            164 =>
            array (
                'id' => 665,
                'name' => 'Sandakan',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            165 =>
            array (
                'id' => 666,
                'name' => 'Tawau',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            166 =>
            array (
                'id' => 667,
                'name' => 'Beaufort',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            167 =>
            array (
                'id' => 668,
                'name' => 'Beluran',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            168 =>
            array (
                'id' => 669,
                'name' => 'Keningau',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            169 =>
            array (
                'id' => 670,
                'name' => 'Kinabatangan',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            170 =>
            array (
                'id' => 671,
                'name' => 'Kota Belud',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            171 =>
            array (
                'id' => 672,
                'name' => 'Kota Marudu',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            172 =>
            array (
                'id' => 673,
                'name' => 'Kuala Penyu',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            173 =>
            array (
                'id' => 674,
                'name' => 'Kudat',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            174 =>
            array (
                'id' => 675,
                'name' => 'Kunak',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            175 =>
            array (
                'id' => 676,
                'name' => 'Lahad Datu',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            176 =>
            array (
                'id' => 677,
                'name' => 'Nabawan',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            177 =>
            array (
                'id' => 678,
                'name' => 'Papar',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            178 =>
            array (
                'id' => 679,
                'name' => 'Pitas',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            179 =>
            array (
                'id' => 680,
                'name' => 'Putatan',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            180 =>
            array (
                'id' => 681,
                'name' => 'Penampang',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            181 =>
            array (
                'id' => 682,
                'name' => 'Ranau',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            182 =>
            array (
                'id' => 683,
                'name' => 'Semporna',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            183 =>
            array (
                'id' => 684,
                'name' => 'Sipitang',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            184 =>
            array (
                'id' => 685,
                'name' => 'Tambunan',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            185 =>
            array (
                'id' => 686,
                'name' => 'Tenom',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            186 =>
            array (
                'id' => 687,
                'name' => 'Tongod',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            187 =>
            array (
                'id' => 688,
                'name' => 'Tuaran',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            188 =>
            array (
                'id' => 689,
                'name' => 'Bingkor',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            189 =>
            array (
                'id' => 690,
                'name' => 'Bongawan',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            190 =>
            array (
                'id' => 691,
                'name' => 'Donggongon',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            191 =>
            array (
                'id' => 692,
                'name' => 'Inanam',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            192 =>
            array (
                'id' => 693,
                'name' => 'Kalabakan',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            193 =>
            array (
                'id' => 694,
                'name' => 'Kimanis',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            194 =>
            array (
                'id' => 695,
                'name' => 'Kinarut',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            195 =>
            array (
                'id' => 696,
                'name' => 'Kundasang',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            196 =>
            array (
                'id' => 697,
                'name' => 'Membakut',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            197 =>
            array (
                'id' => 698,
                'name' => 'Menggatal',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            198 =>
            array (
                'id' => 699,
                'name' => 'Pensiangan',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            199 =>
            array (
                'id' => 700,
                'name' => 'Sapulut',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            200 =>
            array (
                'id' => 701,
                'name' => 'Sepanggar',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            201 =>
            array (
                'id' => 702,
                'name' => 'Sindumin',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            202 =>
            array (
                'id' => 703,
                'name' => 'Sook',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            203 =>
            array (
                'id' => 704,
                'name' => 'Tamparuli',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            204 =>
            array (
                'id' => 705,
                'name' => 'Telipok',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            205 =>
            array (
                'id' => 706,
                'name' => 'Telupid',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            206 =>
            array (
                'id' => 707,
                'name' => 'Weston',
                'state_id' => 13,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            207 =>
            array (
                'id' => 708,
                'name' => 'Kuching',
                'state_id' => 14,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            208 =>
            array (
                'id' => 709,
                'name' => 'Miri',
                'state_id' => 14,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            209 =>
            array (
                'id' => 710,
                'name' => 'Petaling Jaya',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            210 =>
            array (
                'id' => 711,
                'name' => 'Subang Jaya',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            211 =>
            array (
                'id' => 712,
                'name' => 'Klang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            212 =>
            array (
                'id' => 713,
                'name' => 'Ampang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            213 =>
            array (
                'id' => 714,
                'name' => 'Assam Jawa',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            214 =>
            array (
                'id' => 715,
                'name' => 'Bagan Lalang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            215 =>
            array (
                'id' => 716,
                'name' => 'Bagan Nakhoda Omar',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            216 =>
            array (
                'id' => 717,
                'name' => 'Balakong',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            217 =>
            array (
                'id' => 718,
                'name' => 'Bandar Baru Bangi',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            218 =>
            array (
                'id' => 719,
                'name' => 'Bandar Baru Selayang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            219 =>
            array (
                'id' => 720,
                'name' => 'Bandar Sunway',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            220 =>
            array (
                'id' => 721,
                'name' => 'Banting',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            221 =>
            array (
                'id' => 722,
                'name' => 'Bestari Jaya',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            222 =>
            array (
                'id' => 723,
                'name' => 'Batang Kali',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            223 =>
            array (
                'id' => 724,
                'name' => 'Batu Arang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            224 =>
            array (
                'id' => 725,
                'name' => 'Batu Caves',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            225 =>
            array (
                'id' => 726,
                'name' => 'Beranang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            226 =>
            array (
                'id' => 727,
                'name' => 'Broga',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            227 =>
            array (
                'id' => 728,
                'name' => 'Bukit Lanjan',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            228 =>
            array (
                'id' => 729,
                'name' => 'Bukit Raja',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            229 =>
            array (
                'id' => 730,
                'name' => 'Bukit Rotan',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            230 =>
            array (
                'id' => 731,
                'name' => 'Bukit Tagar',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            231 =>
            array (
                'id' => 732,
                'name' => 'Cheras',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            232 =>
            array (
                'id' => 733,
                'name' => 'Cyberjaya',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            233 =>
            array (
                'id' => 734,
                'name' => 'Damansara',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            234 =>
            array (
                'id' => 735,
                'name' => 'Dengkil',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            235 =>
            array (
                'id' => 736,
                'name' => 'Ijok',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            236 =>
            array (
                'id' => 737,
                'name' => 'Jenjarom',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            237 =>
            array (
                'id' => 738,
                'name' => 'Jugra',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            238 =>
            array (
                'id' => 739,
                'name' => 'Kajang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            239 =>
            array (
                'id' => 740,
                'name' => 'Kapar',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            240 =>
            array (
                'id' => 741,
                'name' => 'Kalumpang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            241 =>
            array (
                'id' => 742,
                'name' => 'Kelana Jaya',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            242 =>
            array (
                'id' => 743,
                'name' => 'Kerling',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            243 =>
            array (
                'id' => 744,
                'name' => 'Kuala Kubu Bharu',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            244 =>
            array (
                'id' => 745,
                'name' => 'Kuala Selangor',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            245 =>
            array (
                'id' => 746,
                'name' => 'Kuala Sungai Buloh',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            246 =>
            array (
                'id' => 747,
                'name' => 'Kuang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            247 =>
            array (
                'id' => 748,
                'name' => 'Lagong',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            248 =>
            array (
                'id' => 749,
                'name' => 'Morib',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            249 =>
            array (
                'id' => 750,
                'name' => 'Meru',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            250 =>
            array (
                'id' => 751,
                'name' => 'Padang Jawa',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            251 =>
            array (
                'id' => 752,
                'name' => 'Pandamaran',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            252 =>
            array (
                'id' => 753,
                'name' => 'Paya Jaras',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            253 =>
            array (
                'id' => 754,
                'name' => 'Port Klang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            254 =>
            array (
                'id' => 755,
                'name' => 'Puchong',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            255 =>
            array (
                'id' => 756,
                'name' => 'Rasa',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            256 =>
            array (
                'id' => 757,
                'name' => 'Rawang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            257 =>
            array (
                'id' => 758,
                'name' => 'Sabak',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            258 =>
            array (
                'id' => 759,
                'name' => 'Salak Tinggi',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            259 =>
            array (
                'id' => 760,
                'name' => 'Sekinchan',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            260 =>
            array (
                'id' => 761,
                'name' => 'Selayang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            261 =>
            array (
                'id' => 762,
                'name' => 'Semenyih',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            262 =>
            array (
                'id' => 763,
                'name' => 'Serendah',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            263 =>
            array (
                'id' => 764,
                'name' => 'Seri Kembangan',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            264 =>
            array (
                'id' => 765,
                'name' => 'Sepang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            265 =>
            array (
                'id' => 766,
                'name' => 'Sijangkang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            266 =>
            array (
                'id' => 767,
                'name' => 'Subang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            267 =>
            array (
                'id' => 768,
                'name' => 'Sungai Ayer Tawar',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            268 =>
            array (
                'id' => 769,
                'name' => 'Sungai Buloh',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            269 =>
            array (
                'id' => 770,
                'name' => 'Sungai Besar',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            270 =>
            array (
                'id' => 771,
                'name' => 'Sungai Buaya',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            271 =>
            array (
                'id' => 772,
                'name' => 'Sungai Burong',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            272 =>
            array (
                'id' => 773,
                'name' => 'Sungai Choh',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            273 =>
            array (
                'id' => 774,
                'name' => 'Sungai Panjang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            274 =>
            array (
                'id' => 775,
                'name' => 'Sungai Pelek',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            275 =>
            array (
                'id' => 776,
                'name' => 'Sungai Pelong',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            276 =>
            array (
                'id' => 777,
                'name' => 'Sungai Tengi',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            277 =>
            array (
                'id' => 778,
                'name' => 'Tanjung Harapan',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            278 =>
            array (
                'id' => 779,
                'name' => 'Tanjung Karang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            279 =>
            array (
                'id' => 780,
                'name' => 'Tanjung Sepat',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            280 =>
            array (
                'id' => 781,
                'name' => 'Teluk Datok',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            281 =>
            array (
                'id' => 782,
                'name' => 'Teluk Gong',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            282 =>
            array (
                'id' => 783,
                'name' => 'Teluk Panglima Garang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            283 =>
            array (
                'id' => 784,
                'name' => 'Ulu Klang',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            284 =>
            array (
                'id' => 785,
                'name' => 'Ulu Yam',
                'state_id' => 15,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            285 =>
            array (
                'id' => 786,
                'name' => 'Kuala Terengganu ',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            286 =>
            array (
                'id' => 787,
                'name' => 'Ajil',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            287 =>
            array (
                'id' => 788,
                'name' => 'Bandar Al-Muktafi Billah Shah',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            288 =>
            array (
                'id' => 789,
                'name' => 'Bandar Ketengah Jaya',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            289 =>
            array (
                'id' => 790,
                'name' => 'Bandar Permaisuri',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            290 =>
            array (
                'id' => 791,
                'name' => 'Bandar Seri Bandi',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            291 =>
            array (
                'id' => 792,
                'name' => 'Batu Rakit',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            292 =>
            array (
                'id' => 793,
                'name' => 'Bukit Besi',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            293 =>
            array (
                'id' => 794,
                'name' => 'Chukai',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            294 =>
            array (
                'id' => 795,
                'name' => 'Gong Kedak',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            295 =>
            array (
                'id' => 796,
                'name' => 'Jabur',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            296 =>
            array (
                'id' => 797,
                'name' => 'Jerangau',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            297 =>
            array (
                'id' => 798,
                'name' => 'Jerteh',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            298 =>
            array (
                'id' => 799,
                'name' => 'Kemasik',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            299 =>
            array (
                'id' => 800,
                'name' => 'Kerteh',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            300 =>
            array (
                'id' => 801,
                'name' => 'Kijal',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            301 =>
            array (
                'id' => 802,
                'name' => 'Kuala Besut',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            302 =>
            array (
                'id' => 803,
                'name' => 'Kuala Berang',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            303 =>
            array (
                'id' => 804,
                'name' => 'Kuala Dungun',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            304 =>
            array (
                'id' => 805,
                'name' => 'Marang',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            305 =>
            array (
                'id' => 806,
                'name' => 'Merchang',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            306 =>
            array (
                'id' => 807,
                'name' => 'Paka',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            307 =>
            array (
                'id' => 808,
                'name' => 'Pasir Raja',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            308 =>
            array (
                'id' => 809,
                'name' => 'Rantau Abang',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            309 =>
            array (
                'id' => 810,
                'name' => 'Rasau Kerteh',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            310 =>
            array (
                'id' => 811,
                'name' => 'Seberang Takir',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            311 =>
            array (
                'id' => 812,
                'name' => 'Teluk Kalung',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            312 =>
            array (
                'id' => 813,
                'name' => 'Wakaf Tapai',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            313 =>
            array (
                'id' => 814,
                'name' => 'Putera Jaya',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            314 =>
            array (
                'id' => 815,
                'name' => 'Seri Langkap',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            315 =>
            array (
                'id' => 816,
                'name' => 'Gong Badak',
                'state_id' => 16,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
        ));


    }
}
