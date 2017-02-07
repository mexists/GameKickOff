<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('countries')->delete();

        \DB::table('countries')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Afghanistan',
                'code' => '93',
                'iso' => 'AF/AFG',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Albania',
                'code' => '355',
                'iso' => 'AL/ALB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Algeria',
                'code' => '213',
                'iso' => 'DZ/DZA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'American Samoa',
                'code' => '1-684',
                'iso' => 'AS/ASM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Andorra',
                'code' => '376',
                'iso' => 'AD/AND',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Angola',
                'code' => '244',
                'iso' => 'AO/AGO',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Anguilla',
                'code' => '1-264',
                'iso' => 'AI/AIA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Antarctica',
                'code' => '672',
                'iso' => 'AQ/ATA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Antigua and Barbuda',
                'code' => '1-268',
                'iso' => 'AG/ATG',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Argentina',
                'code' => '54',
                'iso' => 'AR/ARG',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Armenia',
                'code' => '374',
                'iso' => 'AM/ARM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Aruba',
                'code' => '297',
                'iso' => 'AW/ABW',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Australia',
                'code' => '61',
                'iso' => 'AU/AUS',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Austria',
                'code' => '43',
                'iso' => 'AT/AUT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Azerbaijan',
                'code' => '994',
                'iso' => 'AZ/AZE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Bahamas',
                'code' => '1-242',
                'iso' => 'BS/BHS',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Bahrain',
                'code' => '973',
                'iso' => 'BH/BHR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Bangladesh',
                'code' => '880',
                'iso' => 'BD/BGD',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Barbados',
                'code' => '1-246',
                'iso' => 'BB/BRB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Belarus',
                'code' => '375',
                'iso' => 'BY/BLR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Belgium',
                'code' => '32',
                'iso' => 'BE/BEL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Belize',
                'code' => '501',
                'iso' => 'BZ/BLZ',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Benin',
                'code' => '229',
                'iso' => 'BJ/BEN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Bermuda',
                'code' => '1-441',
                'iso' => 'BM/BMU',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Bhutan',
                'code' => '975',
                'iso' => 'BT/BTN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Bolivia',
                'code' => '591',
                'iso' => 'BO/BOL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Bosnia and Herzegovina',
                'code' => '387',
                'iso' => 'BA/BIH',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Botswana',
                'code' => '267',
                'iso' => 'BW/BWA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'Brazil',
                'code' => '55',
                'iso' => 'BR/BRA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'British Indian Ocean Territory',
                'code' => '246',
                'iso' => 'IO/IOT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'British Virgin Islands',
                'code' => '1-284',
                'iso' => 'VG/VGB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'Brunei',
                'code' => '673',
                'iso' => 'BN/BRN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'Bulgaria',
                'code' => '359',
                'iso' => 'BG/BGR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'Burkina Faso',
                'code' => '226',
                'iso' => 'BF/BFA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'Burundi',
                'code' => '257',
                'iso' => 'BI/BDI',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'Cambodia',
                'code' => '855',
                'iso' => 'KH/KHM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'Cameroon',
                'code' => '237',
                'iso' => 'CM/CMR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'Canada',
                'code' => '1',
                'iso' => 'CA/CAN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'Cape Verde',
                'code' => '238',
                'iso' => 'CV/CPV',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'Cayman Islands',
                'code' => '1-345',
                'iso' => 'KY/CYM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'Central African Republic',
                'code' => '236',
                'iso' => 'CF/CAF',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'Chad',
                'code' => '235',
                'iso' => 'TD/TCD',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'Chile',
                'code' => '56',
                'iso' => 'CL/CHL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'China',
                'code' => '86',
                'iso' => 'CN/CHN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'Christmas Island',
                'code' => '61',
                'iso' => 'CX/CXR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'Cocos Islands',
                'code' => '61',
                'iso' => 'CC/CCK',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            46 =>
            array (
                'id' => 47,
                'name' => 'Colombia',
                'code' => '57',
                'iso' => 'CO/COL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            47 =>
            array (
                'id' => 48,
                'name' => 'Comoros',
                'code' => '269',
                'iso' => 'KM/COM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            48 =>
            array (
                'id' => 49,
                'name' => 'Cook Islands',
                'code' => '682',
                'iso' => 'CK/COK',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            49 =>
            array (
                'id' => 50,
                'name' => 'Costa Rica',
                'code' => '506',
                'iso' => 'CR/CRI',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            50 =>
            array (
                'id' => 51,
                'name' => 'Croatia',
                'code' => '385',
                'iso' => 'HR/HRV',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            51 =>
            array (
                'id' => 52,
                'name' => 'Cuba',
                'code' => '53',
                'iso' => 'CU/CUB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            52 =>
            array (
                'id' => 53,
                'name' => 'Curacao',
                'code' => '599',
                'iso' => 'CW/CUW',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            53 =>
            array (
                'id' => 54,
                'name' => 'Cyprus',
                'code' => '357',
                'iso' => 'CY/CYP',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            54 =>
            array (
                'id' => 55,
                'name' => 'Czech Republic',
                'code' => '420',
                'iso' => 'CZ/CZE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            55 =>
            array (
                'id' => 56,
                'name' => 'Democratic Republic of the Congo',
                'code' => '243',
                'iso' => 'CD/COD',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            56 =>
            array (
                'id' => 57,
                'name' => 'Denmark',
                'code' => '45',
                'iso' => 'DK/DNK',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            57 =>
            array (
                'id' => 58,
                'name' => 'Djibouti',
                'code' => '253',
                'iso' => 'DJ/DJI',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            58 =>
            array (
                'id' => 59,
                'name' => 'Dominica',
                'code' => '1-767',
                'iso' => 'DM/DMA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            59 =>
            array (
                'id' => 60,
                'name' => 'Dominican Republic',
                'code' => '1-809, 1-829, 1-849',
                'iso' => 'DO/DOM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            60 =>
            array (
                'id' => 61,
                'name' => 'East Timor',
                'code' => '670',
                'iso' => 'TL/TLS',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            61 =>
            array (
                'id' => 62,
                'name' => 'Ecuador',
                'code' => '593',
                'iso' => 'EC/ECU',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            62 =>
            array (
                'id' => 63,
                'name' => 'Egypt',
                'code' => '20',
                'iso' => 'EG/EGY',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            63 =>
            array (
                'id' => 64,
                'name' => 'El Salvador',
                'code' => '503',
                'iso' => 'SV/SLV',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            64 =>
            array (
                'id' => 65,
                'name' => 'Equatorial Guinea',
                'code' => '240',
                'iso' => 'GQ/GNQ',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            65 =>
            array (
                'id' => 66,
                'name' => 'Eritrea',
                'code' => '291',
                'iso' => 'ER/ERI',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            66 =>
            array (
                'id' => 67,
                'name' => 'Estonia',
                'code' => '372',
                'iso' => 'EE/EST',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            67 =>
            array (
                'id' => 68,
                'name' => 'Ethiopia',
                'code' => '251',
                'iso' => 'ET/ETH',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            68 =>
            array (
                'id' => 69,
                'name' => 'Falkland Islands',
                'code' => '500',
                'iso' => 'FK/FLK',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            69 =>
            array (
                'id' => 70,
                'name' => 'Faroe Islands',
                'code' => '298',
                'iso' => 'FO/FRO',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            70 =>
            array (
                'id' => 71,
                'name' => 'Fiji',
                'code' => '679',
                'iso' => 'FJ/FJI',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            71 =>
            array (
                'id' => 72,
                'name' => 'Finland',
                'code' => '358',
                'iso' => 'FI/FIN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            72 =>
            array (
                'id' => 73,
                'name' => 'France',
                'code' => '33',
                'iso' => 'FR/FRA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            73 =>
            array (
                'id' => 74,
                'name' => 'French Polynesia',
                'code' => '689',
                'iso' => 'PF/PYF',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            74 =>
            array (
                'id' => 75,
                'name' => 'Gabon',
                'code' => '241',
                'iso' => 'GA/GAB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            75 =>
            array (
                'id' => 76,
                'name' => 'Gambia',
                'code' => '220',
                'iso' => 'GM/GMB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            76 =>
            array (
                'id' => 77,
                'name' => 'Georgia',
                'code' => '995',
                'iso' => 'GE/GEO',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            77 =>
            array (
                'id' => 78,
                'name' => 'Germany',
                'code' => '49',
                'iso' => 'DE/DEU',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            78 =>
            array (
                'id' => 79,
                'name' => 'Ghana',
                'code' => '233',
                'iso' => 'GH/GHA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            79 =>
            array (
                'id' => 80,
                'name' => 'Gibraltar',
                'code' => '350',
                'iso' => 'GI/GIB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            80 =>
            array (
                'id' => 81,
                'name' => 'Greece',
                'code' => '30',
                'iso' => 'GR/GRC',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            81 =>
            array (
                'id' => 82,
                'name' => 'Greenland',
                'code' => '299',
                'iso' => 'GL/GRL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            82 =>
            array (
                'id' => 83,
                'name' => 'Grenada',
                'code' => '1-473',
                'iso' => 'GD/GRD',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            83 =>
            array (
                'id' => 84,
                'name' => 'Guam',
                'code' => '1-671',
                'iso' => 'GU/GUM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            84 =>
            array (
                'id' => 85,
                'name' => 'Guatemala',
                'code' => '502',
                'iso' => 'GT/GTM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            85 =>
            array (
                'id' => 86,
                'name' => 'Guernsey',
                'code' => '44-1481',
                'iso' => 'GG/GGY',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            86 =>
            array (
                'id' => 87,
                'name' => 'Guinea',
                'code' => '224',
                'iso' => 'GN/GIN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            87 =>
            array (
                'id' => 88,
                'name' => 'Guinea-Bissau',
                'code' => '245',
                'iso' => 'GW/GNB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            88 =>
            array (
                'id' => 89,
                'name' => 'Guyana',
                'code' => '592',
                'iso' => 'GY/GUY',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            89 =>
            array (
                'id' => 90,
                'name' => 'Haiti',
                'code' => '509',
                'iso' => 'HT/HTI',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            90 =>
            array (
                'id' => 91,
                'name' => 'Honduras',
                'code' => '504',
                'iso' => 'HN/HND',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            91 =>
            array (
                'id' => 92,
                'name' => 'Hong Kong',
                'code' => '852',
                'iso' => 'HK/HKG',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            92 =>
            array (
                'id' => 93,
                'name' => 'Hungary',
                'code' => '36',
                'iso' => 'HU/HUN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            93 =>
            array (
                'id' => 94,
                'name' => 'Iceland',
                'code' => '354',
                'iso' => 'IS/ISL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            94 =>
            array (
                'id' => 95,
                'name' => 'India',
                'code' => '91',
                'iso' => 'IN/IND',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            95 =>
            array (
                'id' => 96,
                'name' => 'Indonesia',
                'code' => '62',
                'iso' => 'ID/IDN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            96 =>
            array (
                'id' => 97,
                'name' => 'Iran',
                'code' => '98',
                'iso' => 'IR/IRN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            97 =>
            array (
                'id' => 98,
                'name' => 'Iraq',
                'code' => '964',
                'iso' => 'IQ/IRQ',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            98 =>
            array (
                'id' => 99,
                'name' => 'Ireland',
                'code' => '353',
                'iso' => 'IE/IRL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            99 =>
            array (
                'id' => 100,
                'name' => 'Isle of Man',
                'code' => '44-1624',
                'iso' => 'IM/IMN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            100 =>
            array (
                'id' => 101,
                'name' => 'Israel',
                'code' => '972',
                'iso' => 'IL/ISR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            101 =>
            array (
                'id' => 102,
                'name' => 'Italy',
                'code' => '39',
                'iso' => 'IT/ITA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            102 =>
            array (
                'id' => 103,
                'name' => 'Ivory Coast',
                'code' => '225',
                'iso' => 'CI/CIV',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            103 =>
            array (
                'id' => 104,
                'name' => 'Jamaica',
                'code' => '1-876',
                'iso' => 'JM/JAM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            104 =>
            array (
                'id' => 105,
                'name' => 'Japan',
                'code' => '81',
                'iso' => 'JP/JPN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            105 =>
            array (
                'id' => 106,
                'name' => 'Jersey',
                'code' => '44-1534',
                'iso' => 'JE/JEY',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            106 =>
            array (
                'id' => 107,
                'name' => 'Jordan',
                'code' => '962',
                'iso' => 'JO/JOR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            107 =>
            array (
                'id' => 108,
                'name' => 'Kazakhstan',
                'code' => '7',
                'iso' => 'KZ/KAZ',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            108 =>
            array (
                'id' => 109,
                'name' => 'Kenya',
                'code' => '254',
                'iso' => 'KE/KEN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            109 =>
            array (
                'id' => 110,
                'name' => 'Kiribati',
                'code' => '686',
                'iso' => 'KI/KIR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            110 =>
            array (
                'id' => 111,
                'name' => 'Kosovo',
                'code' => '383',
                'iso' => 'XK/XKX',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            111 =>
            array (
                'id' => 112,
                'name' => 'Kuwait',
                'code' => '965',
                'iso' => 'KW/KWT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            112 =>
            array (
                'id' => 113,
                'name' => 'Kyrgyzstan',
                'code' => '996',
                'iso' => 'KG/KGZ',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            113 =>
            array (
                'id' => 114,
                'name' => 'Laos',
                'code' => '856',
                'iso' => 'LA/LAO',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            114 =>
            array (
                'id' => 115,
                'name' => 'Latvia',
                'code' => '371',
                'iso' => 'LV/LVA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            115 =>
            array (
                'id' => 116,
                'name' => 'Lebanon',
                'code' => '961',
                'iso' => 'LB/LBN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            116 =>
            array (
                'id' => 117,
                'name' => 'Lesotho',
                'code' => '266',
                'iso' => 'LS/LSO',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            117 =>
            array (
                'id' => 118,
                'name' => 'Liberia',
                'code' => '231',
                'iso' => 'LR/LBR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            118 =>
            array (
                'id' => 119,
                'name' => 'Libya',
                'code' => '218',
                'iso' => 'LY/LBY',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            119 =>
            array (
                'id' => 120,
                'name' => 'Liechtenstein',
                'code' => '423',
                'iso' => 'LI/LIE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            120 =>
            array (
                'id' => 121,
                'name' => 'Lithuania',
                'code' => '370',
                'iso' => 'LT/LTU',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            121 =>
            array (
                'id' => 122,
                'name' => 'Luxembourg',
                'code' => '352',
                'iso' => 'LU/LUX',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            122 =>
            array (
                'id' => 123,
                'name' => 'Macau',
                'code' => '853',
                'iso' => 'MO/MAC',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            123 =>
            array (
                'id' => 124,
                'name' => 'Macedonia',
                'code' => '389',
                'iso' => 'MK/MKD',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            124 =>
            array (
                'id' => 125,
                'name' => 'Madagascar',
                'code' => '261',
                'iso' => 'MG/MDG',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            125 =>
            array (
                'id' => 126,
                'name' => 'Malawi',
                'code' => '265',
                'iso' => 'MW/MWI',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            126 =>
            array (
                'id' => 127,
                'name' => 'Malaysia',
                'code' => '60',
                'iso' => 'MY/MYS',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            127 =>
            array (
                'id' => 128,
                'name' => 'Maldives',
                'code' => '960',
                'iso' => 'MV/MDV',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            128 =>
            array (
                'id' => 129,
                'name' => 'Mali',
                'code' => '223',
                'iso' => 'ML/MLI',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            129 =>
            array (
                'id' => 130,
                'name' => 'Malta',
                'code' => '356',
                'iso' => 'MT/MLT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            130 =>
            array (
                'id' => 131,
                'name' => 'Marshall Islands',
                'code' => '692',
                'iso' => 'MH/MHL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            131 =>
            array (
                'id' => 132,
                'name' => 'Mauritania',
                'code' => '222',
                'iso' => 'MR/MRT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            132 =>
            array (
                'id' => 133,
                'name' => 'Mauritius',
                'code' => '230',
                'iso' => 'MU/MUS',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            133 =>
            array (
                'id' => 134,
                'name' => 'Mayotte',
                'code' => '262',
                'iso' => 'YT/MYT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            134 =>
            array (
                'id' => 135,
                'name' => 'Mexico',
                'code' => '52',
                'iso' => 'MX/MEX',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            135 =>
            array (
                'id' => 136,
                'name' => 'Micronesia',
                'code' => '691',
                'iso' => 'FM/FSM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            136 =>
            array (
                'id' => 137,
                'name' => 'Moldova',
                'code' => '373',
                'iso' => 'MD/MDA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            137 =>
            array (
                'id' => 138,
                'name' => 'Monaco',
                'code' => '377',
                'iso' => 'MC/MCO',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            138 =>
            array (
                'id' => 139,
                'name' => 'Mongolia',
                'code' => '976',
                'iso' => 'MN/MNG',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            139 =>
            array (
                'id' => 140,
                'name' => 'Montenegro',
                'code' => '382',
                'iso' => 'ME/MNE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            140 =>
            array (
                'id' => 141,
                'name' => 'Montserrat',
                'code' => '1-664',
                'iso' => 'MS/MSR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            141 =>
            array (
                'id' => 142,
                'name' => 'Morocco',
                'code' => '212',
                'iso' => 'MA/MAR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            142 =>
            array (
                'id' => 143,
                'name' => 'Mozambique',
                'code' => '258',
                'iso' => 'MZ/MOZ',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            143 =>
            array (
                'id' => 144,
                'name' => 'Myanmar',
                'code' => '95',
                'iso' => 'MM/MMR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            144 =>
            array (
                'id' => 145,
                'name' => 'Namibia',
                'code' => '264',
                'iso' => 'NA/NAM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            145 =>
            array (
                'id' => 146,
                'name' => 'Nauru',
                'code' => '674',
                'iso' => 'NR/NRU',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            146 =>
            array (
                'id' => 147,
                'name' => 'Nepal',
                'code' => '977',
                'iso' => 'NP/NPL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            147 =>
            array (
                'id' => 148,
                'name' => 'Netherlands',
                'code' => '31',
                'iso' => 'NL/NLD',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            148 =>
            array (
                'id' => 149,
                'name' => 'Netherlands Antilles',
                'code' => '599',
                'iso' => 'AN/ANT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            149 =>
            array (
                'id' => 150,
                'name' => 'New Caledonia',
                'code' => '687',
                'iso' => 'NC/NCL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            150 =>
            array (
                'id' => 151,
                'name' => 'New Zealand',
                'code' => '64',
                'iso' => 'NZ/NZL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            151 =>
            array (
                'id' => 152,
                'name' => 'Nicaragua',
                'code' => '505',
                'iso' => 'NI/NIC',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            152 =>
            array (
                'id' => 153,
                'name' => 'Niger',
                'code' => '227',
                'iso' => 'NE/NER',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            153 =>
            array (
                'id' => 154,
                'name' => 'Nigeria',
                'code' => '234',
                'iso' => 'NG/NGA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            154 =>
            array (
                'id' => 155,
                'name' => 'Niue',
                'code' => '683',
                'iso' => 'NU/NIU',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            155 =>
            array (
                'id' => 156,
                'name' => 'North Korea',
                'code' => '850',
                'iso' => 'KP/PRK',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            156 =>
            array (
                'id' => 157,
                'name' => 'Northern Mariana Islands',
                'code' => '1-670',
                'iso' => 'MP/MNP',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            157 =>
            array (
                'id' => 158,
                'name' => 'Norway',
                'code' => '47',
                'iso' => 'NO/NOR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            158 =>
            array (
                'id' => 159,
                'name' => 'Oman',
                'code' => '968',
                'iso' => 'OM/OMN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            159 =>
            array (
                'id' => 160,
                'name' => 'Pakistan',
                'code' => '92',
                'iso' => 'PK/PAK',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            160 =>
            array (
                'id' => 161,
                'name' => 'Palau',
                'code' => '680',
                'iso' => 'PW/PLW',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            161 =>
            array (
                'id' => 162,
                'name' => 'Palestine',
                'code' => '970',
                'iso' => 'PS/PSE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            162 =>
            array (
                'id' => 163,
                'name' => 'Panama',
                'code' => '507',
                'iso' => 'PA/PAN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            163 =>
            array (
                'id' => 164,
                'name' => 'Papua New Guinea',
                'code' => '675',
                'iso' => 'PG/PNG',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            164 =>
            array (
                'id' => 165,
                'name' => 'Paraguay',
                'code' => '595',
                'iso' => 'PY/PRY',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            165 =>
            array (
                'id' => 166,
                'name' => 'Peru',
                'code' => '51',
                'iso' => 'PE/PER',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            166 =>
            array (
                'id' => 167,
                'name' => 'Philippines',
                'code' => '63',
                'iso' => 'PH/PHL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            167 =>
            array (
                'id' => 168,
                'name' => 'Pitcairn',
                'code' => '64',
                'iso' => 'PN/PCN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            168 =>
            array (
                'id' => 169,
                'name' => 'Poland',
                'code' => '48',
                'iso' => 'PL/POL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            169 =>
            array (
                'id' => 170,
                'name' => 'Portugal',
                'code' => '351',
                'iso' => 'PT/PRT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            170 =>
            array (
                'id' => 171,
                'name' => 'Puerto Rico',
                'code' => '1-787, 1-939',
                'iso' => 'PR/PRI',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            171 =>
            array (
                'id' => 172,
                'name' => 'Qatar',
                'code' => '974',
                'iso' => 'QA/QAT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            172 =>
            array (
                'id' => 173,
                'name' => 'Republic of the Congo',
                'code' => '242',
                'iso' => 'CG/COG',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            173 =>
            array (
                'id' => 174,
                'name' => 'Reunion',
                'code' => '262',
                'iso' => 'RE/REU',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            174 =>
            array (
                'id' => 175,
                'name' => 'Romania',
                'code' => '40',
                'iso' => 'RO/ROU',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            175 =>
            array (
                'id' => 176,
                'name' => 'Russia',
                'code' => '7',
                'iso' => 'RU/RUS',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            176 =>
            array (
                'id' => 177,
                'name' => 'Rwanda',
                'code' => '250',
                'iso' => 'RW/RWA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            177 =>
            array (
                'id' => 178,
                'name' => 'Saint Barthelemy',
                'code' => '590',
                'iso' => 'BL/BLM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            178 =>
            array (
                'id' => 179,
                'name' => 'Saint Helena',
                'code' => '290',
                'iso' => 'SH/SHN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            179 =>
            array (
                'id' => 180,
                'name' => 'Saint Kitts and Nevis',
                'code' => '1-869',
                'iso' => 'KN/KNA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            180 =>
            array (
                'id' => 181,
                'name' => 'Saint Lucia',
                'code' => '1-758',
                'iso' => 'LC/LCA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            181 =>
            array (
                'id' => 182,
                'name' => 'Saint Martin',
                'code' => '590',
                'iso' => 'MF/MAF',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            182 =>
            array (
                'id' => 183,
                'name' => 'Saint Pierre and Miquelon',
                'code' => '508',
                'iso' => 'PM/SPM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            183 =>
            array (
                'id' => 184,
                'name' => 'Saint Vincent and the Grenadines',
                'code' => '1-784',
                'iso' => 'VC/VCT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            184 =>
            array (
                'id' => 185,
                'name' => 'Samoa',
                'code' => '685',
                'iso' => 'WS/WSM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            185 =>
            array (
                'id' => 186,
                'name' => 'San Marino',
                'code' => '378',
                'iso' => 'SM/SMR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            186 =>
            array (
                'id' => 187,
                'name' => 'Sao Tome and Principe',
                'code' => '239',
                'iso' => 'ST/STP',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            187 =>
            array (
                'id' => 188,
                'name' => 'Saudi Arabia',
                'code' => '966',
                'iso' => 'SA/SAU',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            188 =>
            array (
                'id' => 189,
                'name' => 'Senegal',
                'code' => '221',
                'iso' => 'SN/SEN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            189 =>
            array (
                'id' => 190,
                'name' => 'Serbia',
                'code' => '381',
                'iso' => 'RS/SRB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            190 =>
            array (
                'id' => 191,
                'name' => 'Seychelles',
                'code' => '248',
                'iso' => 'SC/SYC',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            191 =>
            array (
                'id' => 192,
                'name' => 'Sierra Leone',
                'code' => '232',
                'iso' => 'SL/SLE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            192 =>
            array (
                'id' => 193,
                'name' => 'Singapore',
                'code' => '65',
                'iso' => 'SG/SGP',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            193 =>
            array (
                'id' => 194,
                'name' => 'Sint Maarten',
                'code' => '1-721',
                'iso' => 'SX/SXM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            194 =>
            array (
                'id' => 195,
                'name' => 'Slovakia',
                'code' => '421',
                'iso' => 'SK/SVK',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            195 =>
            array (
                'id' => 196,
                'name' => 'Slovenia',
                'code' => '386',
                'iso' => 'SI/SVN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            196 =>
            array (
                'id' => 197,
                'name' => 'Solomon Islands',
                'code' => '677',
                'iso' => 'SB/SLB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            197 =>
            array (
                'id' => 198,
                'name' => 'Somalia',
                'code' => '252',
                'iso' => 'SO/SOM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            198 =>
            array (
                'id' => 199,
                'name' => 'South Africa',
                'code' => '27',
                'iso' => 'ZA/ZAF',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            199 =>
            array (
                'id' => 200,
                'name' => 'South Korea',
                'code' => '82',
                'iso' => 'KR/KOR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            200 =>
            array (
                'id' => 201,
                'name' => 'South Sudan',
                'code' => '211',
                'iso' => 'SS/SSD',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            201 =>
            array (
                'id' => 202,
                'name' => 'Spain',
                'code' => '34',
                'iso' => 'ES/ESP',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            202 =>
            array (
                'id' => 203,
                'name' => 'Sri Lanka',
                'code' => '94',
                'iso' => 'LK/LKA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            203 =>
            array (
                'id' => 204,
                'name' => 'Sudan',
                'code' => '249',
                'iso' => 'SD/SDN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            204 =>
            array (
                'id' => 205,
                'name' => 'Suriname',
                'code' => '597',
                'iso' => 'SR/SUR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            205 =>
            array (
                'id' => 206,
                'name' => 'Svalbard and Jan Mayen',
                'code' => '47',
                'iso' => 'SJ/SJM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            206 =>
            array (
                'id' => 207,
                'name' => 'Swaziland',
                'code' => '268',
                'iso' => 'SZ/SWZ',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            207 =>
            array (
                'id' => 208,
                'name' => 'Sweden',
                'code' => '46',
                'iso' => 'SE/SWE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            208 =>
            array (
                'id' => 209,
                'name' => 'Switzerland',
                'code' => '41',
                'iso' => 'CH/CHE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            209 =>
            array (
                'id' => 210,
                'name' => 'Syria',
                'code' => '963',
                'iso' => 'SY/SYR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            210 =>
            array (
                'id' => 211,
                'name' => 'Taiwan',
                'code' => '886',
                'iso' => 'TW/TWN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            211 =>
            array (
                'id' => 212,
                'name' => 'Tajikistan',
                'code' => '992',
                'iso' => 'TJ/TJK',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            212 =>
            array (
                'id' => 213,
                'name' => 'Tanzania',
                'code' => '255',
                'iso' => 'TZ/TZA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            213 =>
            array (
                'id' => 214,
                'name' => 'Thailand',
                'code' => '66',
                'iso' => 'TH/THA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            214 =>
            array (
                'id' => 215,
                'name' => 'Togo',
                'code' => '228',
                'iso' => 'TG/TGO',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            215 =>
            array (
                'id' => 216,
                'name' => 'Tokelau',
                'code' => '690',
                'iso' => 'TK/TKL',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            216 =>
            array (
                'id' => 217,
                'name' => 'Tonga',
                'code' => '676',
                'iso' => 'TO/TON',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            217 =>
            array (
                'id' => 218,
                'name' => 'Trinidad and Tobago',
                'code' => '1-868',
                'iso' => 'TT/TTO',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            218 =>
            array (
                'id' => 219,
                'name' => 'Tunisia',
                'code' => '216',
                'iso' => 'TN/TUN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            219 =>
            array (
                'id' => 220,
                'name' => 'Turkey',
                'code' => '90',
                'iso' => 'TR/TUR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            220 =>
            array (
                'id' => 221,
                'name' => 'Turkmenistan',
                'code' => '993',
                'iso' => 'TM/TKM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            221 =>
            array (
                'id' => 222,
                'name' => 'Turks and Caicos Islands',
                'code' => '1-649',
                'iso' => 'TC/TCA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            222 =>
            array (
                'id' => 223,
                'name' => 'Tuvalu',
                'code' => '688',
                'iso' => 'TV/TUV',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            223 =>
            array (
                'id' => 224,
                'name' => 'U.S. Virgin Islands',
                'code' => '1-340',
                'iso' => 'VI/VIR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            224 =>
            array (
                'id' => 225,
                'name' => 'Uganda',
                'code' => '256',
                'iso' => 'UG/UGA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            225 =>
            array (
                'id' => 226,
                'name' => 'Ukraine',
                'code' => '380',
                'iso' => 'UA/UKR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            226 =>
            array (
                'id' => 227,
                'name' => 'United Arab Emirates',
                'code' => '971',
                'iso' => 'AE/ARE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            227 =>
            array (
                'id' => 228,
                'name' => 'United Kingdom',
                'code' => '44',
                'iso' => 'GB/GBR',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            228 =>
            array (
                'id' => 229,
                'name' => 'United States',
                'code' => '1',
                'iso' => 'US/USA',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            229 =>
            array (
                'id' => 230,
                'name' => 'Uruguay',
                'code' => '598',
                'iso' => 'UY/URY',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            230 =>
            array (
                'id' => 231,
                'name' => 'Uzbekistan',
                'code' => '998',
                'iso' => 'UZ/UZB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            231 =>
            array (
                'id' => 232,
                'name' => 'Vanuatu',
                'code' => '678',
                'iso' => 'VU/VUT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            232 =>
            array (
                'id' => 233,
                'name' => 'Vatican',
                'code' => '379',
                'iso' => 'VA/VAT',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            233 =>
            array (
                'id' => 234,
                'name' => 'Venezuela',
                'code' => '58',
                'iso' => 'VE/VEN',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            234 =>
            array (
                'id' => 235,
                'name' => 'Vietnam',
                'code' => '84',
                'iso' => 'VN/VNM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            235 =>
            array (
                'id' => 236,
                'name' => 'Wallis and Futuna',
                'code' => '681',
                'iso' => 'WF/WLF',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            236 =>
            array (
                'id' => 237,
                'name' => 'Western Sahara',
                'code' => '212',
                'iso' => 'EH/ESH',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            237 =>
            array (
                'id' => 238,
                'name' => 'Yemen',
                'code' => '967',
                'iso' => 'YE/YEM',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            238 =>
            array (
                'id' => 239,
                'name' => 'Zambia',
                'code' => '260',
                'iso' => 'ZM/ZMB',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
            239 =>
            array (
                'id' => 240,
                'name' => 'Zimbabwe',
                'code' => '263',
                'iso' => 'ZW/ZWE',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ),
        ));


    }
}
