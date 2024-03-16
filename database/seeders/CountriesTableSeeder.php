<?php

namespace Database\Seeders;

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
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
            'name' => 'Åland (Finland)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Albania',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Algeria',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
            'name' => 'American Samoa (US)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Andorra',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Angola',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
            'name' => 'Anguilla (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Antigua and Barbuda',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Argentina',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Armenia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Artsakh',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
            'name' => 'Aruba (Netherlands)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Australia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Austria',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Azerbaijan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Bahamas',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bahrain',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bangladesh',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Barbados',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Belarus',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Belgium',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Belize',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Benin',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
            'name' => 'Bermuda (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Bhutan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Bolivia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
            'name' => 'Bonaire (Netherlands)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Bosnia and Herzegovina',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Botswana',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Brazil',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
            'name' => 'British Virgin Islands (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Brunei',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Bulgaria',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Burkina Faso',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Burundi',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Cambodia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Cameroon',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Canada',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Cape Verde',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
            'name' => 'Cayman Islands (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Central African Republic',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Chad',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Chile',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'China',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
            'name' => 'Christmas Island (Australia)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
            'name' => 'Cocos (Keeling) Islands (Australia)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Colombia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Comoros',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Congo',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Cook Islands',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Costa Rica',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Croatia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Cuba',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
            'name' => 'Curaçao (Netherlands)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Cyprus',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Czech Republic',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Denmark',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Djibouti',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Dominica',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Dominican Republic',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'DR Congo',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'East Timor',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Ecuador',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Egypt',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'El Salvador',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Equatorial Guinea',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Eritrea',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Estonia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Eswatini',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Ethiopia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
            'name' => 'Falkland Islands (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
            'name' => 'Faroe Islands (Denmark)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Fiji',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Finland',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'France',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
            'name' => 'French Guiana (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
            'name' => 'French Polynesia (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Gabon',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Gambia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Georgia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Germany',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Ghana',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
            'name' => 'Gibraltar (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Greece',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
            'name' => 'Greenland (Denmark)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Grenada',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
            'name' => 'Guadeloupe (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
            'name' => 'Guam (US)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Guatemala',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
            'name' => 'Guernsey (Crown Dependency)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Guinea',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Guinea-Bissau',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Guyana',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Haiti',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Honduras',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Hong Kong',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Hungary',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Iceland',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'India',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Indonesia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Iran',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Iraq',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Ireland',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
            'name' => 'Isle of Man (Crown Dependency)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Israel',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Italy',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Ivory Coast',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Jamaica',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Japan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
            'name' => 'Jersey (Crown Dependency)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Jordan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Kazakhstan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Kenya',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Kiribati',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Kosovo',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Kuwait',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Kyrgyzstan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Laos',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Latvia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Lebanon',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Lesotho',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Liberia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Libya',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Liechtenstein',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Lithuania',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Luxembourg',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Macau',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Madagascar',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Malawi',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Malaysia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Maldives',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Mali',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Malta',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Marshall Islands',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
            'name' => 'Martinique (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Mauritania',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Mauritius',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
            'name' => 'Mayotte (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Mexico',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Micronesia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Moldova',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Monaco',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Mongolia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Montenegro',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
            'name' => 'Montserrat (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Morocco',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Mozambique',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Myanmar',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Namibia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Nauru',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Nepal',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Netherlands',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
            'name' => 'New Caledonia (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'New Zealand',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Nicaragua',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Niger',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Nigeria',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Niue',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
            'name' => 'Norfolk Island (Australia)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'North Korea',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'North Macedonia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Northern Cyprus',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
            'name' => 'Northern Mariana Islands (US)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Norway',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Oman',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Pakistan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Palau',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Palestine',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Panama',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Papua New Guinea',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Paraguay',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Peru',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Philippines',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
            'name' => 'Pitcairn Islands (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Poland',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Portugal',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
            'name' => 'Puerto Rico (US)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Qatar',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
            'name' => 'Réunion (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Romania',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Russia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Rwanda',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
            'name' => 'Saba (Netherlands)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
            'name' => 'Saint Barthélemy (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
            'name' => 'Saint Helena, Ascension and Tristan da Cunha (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Saint Kitts and Nevis',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Saint Lucia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
            'name' => 'Saint Martin (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
            'name' => 'Saint Pierre and Miquelon (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Saint Vincent and the Grenadines',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Samoa',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'San Marino',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'São Tomé and Príncipe',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Saudi Arabia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Senegal',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Serbia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Seychelles',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Sierra Leone',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Singapore',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
            'name' => 'Sint Eustatius (Netherlands)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
            'name' => 'Sint Maarten (Netherlands)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Slovakia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Slovenia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Solomon Islands',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Somalia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'South Africa',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'South Korea',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'South Sudan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Spain',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Sri Lanka',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Sudan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Suriname',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
            'name' => 'Svalbard and Jan Mayen (Norway)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Sweden',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Switzerland',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Syria',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Taiwan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Tajikistan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Tanzania',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Thailand',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Togo',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
            'name' => 'Tokelau (NZ)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Tonga',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Transnistria',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Trinidad and Tobago',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Tunisia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Turkey',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Turkmenistan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
            'name' => 'Turks and Caicos Islands (BOT)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Tuvalu',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
            'name' => 'U.S. Virgin Islands (US)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Uganda',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Ukraine',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'United Arab Emirates',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'United Kingdom',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'United States',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Uruguay',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Uzbekistan',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Vanuatu',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Vatican City',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Venezuela',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Vietnam',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
            'name' => 'Wallis and Futuna (France)',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Western Sahara',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Yemen',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Zambia',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Zimbabwe',
                'dollar_rate' => NULL,
                'currency_name' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}