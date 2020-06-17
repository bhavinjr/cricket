<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Afghanistan',
                'code' => 'af',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Albania',
                'code' => 'al',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Algeria',
                'code' => 'dz',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Andorra',
                'code' => 'ad',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Angola',
                'code' => 'ao',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Anguilla',
                'code' => 'ai',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Antigua and Barbuda',
                'code' => 'ag',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Argentina',
                'code' => 'ar',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Armenia',
                'code' => 'am',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Aruba',
                'code' => 'aw',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Australia',
                'code' => 'au',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Austria',
                'code' => 'at',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Azerbaijan',
                'code' => 'az',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Bahamas',
                'code' => 'bs',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Bahrain',
                'code' => 'bh',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Bangladesh',
                'code' => 'bd',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Barbados',
                'code' => 'bb',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Belarus',
                'code' => 'by',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Belgium',
                'code' => 'be',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Belize',
                'code' => 'bz',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Benin',
                'code' => 'bj',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Bermuda',
                'code' => 'bm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Bhutan',
                'code' => 'bt',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Bolivia',
                'code' => 'bo',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Bosnia and Herzegovina',
                'code' => 'ba',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Botswana',
                'code' => 'bw',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Brazil',
                'code' => 'br',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'Brunei Darussalam',
                'code' => 'bn',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'Bulgaria',
                'code' => 'bg',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'Burkina Faso',
                'code' => 'bf',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'Burundi',
                'code' => 'bi',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'Cambodia',
                'code' => 'kh',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'Cameroon',
                'code' => 'cm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'Canada',
                'code' => 'ca',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'Cape Verde',
                'code' => 'cv',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'Cayman Islands',
                'code' => 'ky',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'Central African Republic',
                'code' => 'cf',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Chad',
                'code' => 'td',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'Chile',
                'code' => 'cl',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'China',
                'code' => 'cn',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'Christmas Island',
                'code' => 'cx',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            41 =>
            array(
                'id' => 42,
            'name' => 'Cocos (Keeling) Islands',
                'code' => 'cc',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'Colombia',
                'code' => 'co',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            43 =>
            array(
                'id' => 44,
                'name' => 'Comoros',
                'code' => 'km',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            44 =>
            array(
                'id' => 45,
                'name' => 'Congo',
                'code' => 'cg',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            45 =>
            array(
                'id' => 46,
                'name' => 'Cook Islands',
                'code' => 'ck',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            46 =>
            array(
                'id' => 47,
                'name' => 'Costa Rica',
                'code' => 'cr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            47 =>
            array(
                'id' => 48,
            'name' => 'Cote D\'Ivoire (Ivory Coast)',
                'code' => 'ci',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            48 =>
            array(
                'id' => 49,
            'name' => 'Croatia (Hrvatska)',
                'code' => 'hr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            49 =>
            array(
                'id' => 50,
                'name' => 'Cuba',
                'code' => 'cu',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            50 =>
            array(
                'id' => 51,
                'name' => 'Cyprus',
                'code' => 'cy',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            51 =>
            array(
                'id' => 52,
                'name' => 'Czech Republic',
                'code' => 'cz',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            52 =>
            array(
                'id' => 53,
                'name' => 'Democratic Republic of the Congo',
                'code' => 'cd',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            53 =>
            array(
                'id' => 54,
                'name' => 'Denmark',
                'code' => 'dk',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            54 =>
            array(
                'id' => 55,
                'name' => 'Djibouti',
                'code' => 'dj',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            55 =>
            array(
                'id' => 56,
                'name' => 'Dominica',
                'code' => 'dm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            56 =>
            array(
                'id' => 57,
                'name' => 'Dominican Republic',
                'code' => 'do',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            57 =>
            array(
                'id' => 58,
                'name' => 'Ecuador',
                'code' => 'ec',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            58 =>
            array(
                'id' => 59,
                'name' => 'Egypt',
                'code' => 'eg',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            59 =>
            array(
                'id' => 60,
                'name' => 'El Salvador',
                'code' => 'sv',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            60 =>
            array(
                'id' => 61,
                'name' => 'Equatorial Guinea',
                'code' => 'gq',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            61 =>
            array(
                'id' => 62,
                'name' => 'Eritrea',
                'code' => 'er',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            62 =>
            array(
                'id' => 63,
                'name' => 'Estonia',
                'code' => 'ee',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            63 =>
            array(
                'id' => 64,
                'name' => 'Ethiopia',
                'code' => 'et',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            64 =>
            array(
                'id' => 65,
            'name' => 'Falkland Islands (Malvinas)',
                'code' => 'fk',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            65 =>
            array(
                'id' => 66,
                'name' => 'Faroe Islands',
                'code' => 'fo',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            66 =>
            array(
                'id' => 67,
                'name' => 'Federated States of Micronesia',
                'code' => 'fm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            67 =>
            array(
                'id' => 68,
                'name' => 'Fiji',
                'code' => 'fj',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            68 =>
            array(
                'id' => 69,
                'name' => 'Finland',
                'code' => 'fi',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            69 =>
            array(
                'id' => 70,
                'name' => 'France',
                'code' => 'fr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            70 =>
            array(
                'id' => 71,
                'name' => 'French Guiana',
                'code' => 'gf',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            71 =>
            array(
                'id' => 72,
                'name' => 'French Polynesia',
                'code' => 'pf',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            72 =>
            array(
                'id' => 73,
                'name' => 'French Southern Territories',
                'code' => 'tf',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            73 =>
            array(
                'id' => 74,
                'name' => 'Gabon',
                'code' => 'ga',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            74 =>
            array(
                'id' => 75,
                'name' => 'Gambia',
                'code' => 'gm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            75 =>
            array(
                'id' => 76,
                'name' => 'Georgia',
                'code' => 'ge',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            76 =>
            array(
                'id' => 77,
                'name' => 'Germany',
                'code' => 'de',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            77 =>
            array(
                'id' => 78,
                'name' => 'Ghana',
                'code' => 'gh',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            78 =>
            array(
                'id' => 79,
                'name' => 'Gibraltar',
                'code' => 'gi',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            79 =>
            array(
                'id' => 80,
            'name' => 'Great Britain (UK)',
                'code' => 'gb',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            80 =>
            array(
                'id' => 81,
                'name' => 'Greece',
                'code' => 'gr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            81 =>
            array(
                'id' => 82,
                'name' => 'Greenland',
                'code' => 'gl',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            82 =>
            array(
                'id' => 83,
                'name' => 'Grenada',
                'code' => 'gd',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            83 =>
            array(
                'id' => 84,
                'name' => 'Guadeloupe',
                'code' => 'gp',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            84 =>
            array(
                'id' => 85,
                'name' => 'Guatemala',
                'code' => 'gt',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            85 =>
            array(
                'id' => 86,
                'name' => 'Guinea',
                'code' => 'gn',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            86 =>
            array(
                'id' => 87,
                'name' => 'Guinea-Bissau',
                'code' => 'gw',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            87 =>
            array(
                'id' => 88,
                'name' => 'Guyana',
                'code' => 'gy',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            88 =>
            array(
                'id' => 89,
                'name' => 'Haiti',
                'code' => 'ht',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            89 =>
            array(
                'id' => 90,
                'name' => 'Honduras',
                'code' => 'hn',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            90 =>
            array(
                'id' => 91,
                'name' => 'Hong Kong',
                'code' => 'hk',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            91 =>
            array(
                'id' => 92,
                'name' => 'Hungary',
                'code' => 'hu',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            92 =>
            array(
                'id' => 93,
                'name' => 'Iceland',
                'code' => 'is',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            93 =>
            array(
                'id' => 94,
                'name' => 'India',
                'code' => 'in',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            94 =>
            array(
                'id' => 95,
                'name' => 'Indonesia',
                'code' => 'id',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            95 =>
            array(
                'id' => 96,
                'name' => 'Iran',
                'code' => 'ir',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            96 =>
            array(
                'id' => 97,
                'name' => 'Iraq',
                'code' => 'iq',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            97 =>
            array(
                'id' => 98,
                'name' => 'Ireland',
                'code' => 'ie',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            98 =>
            array(
                'id' => 99,
                'name' => 'Israel',
                'code' => 'il',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            99 =>
            array(
                'id' => 100,
                'name' => 'Italy',
                'code' => 'it',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            100 =>
            array(
                'id' => 101,
                'name' => 'Jamaica',
                'code' => 'jm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            101 =>
            array(
                'id' => 102,
                'name' => 'Japan',
                'code' => 'jp',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            102 =>
            array(
                'id' => 103,
                'name' => 'Jordan',
                'code' => 'jo',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            103 =>
            array(
                'id' => 104,
                'name' => 'Kazakhstan',
                'code' => 'kz',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            104 =>
            array(
                'id' => 105,
                'name' => 'Kenya',
                'code' => 'ke',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            105 =>
            array(
                'id' => 106,
                'name' => 'Kiribati',
                'code' => 'ki',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            106 =>
            array(
                'id' => 107,
            'name' => 'Korea (North)',
                'code' => 'kp',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            107 =>
            array(
                'id' => 108,
            'name' => 'Korea (South)',
                'code' => 'kr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            108 =>
            array(
                'id' => 109,
                'name' => 'Kuwait',
                'code' => 'kw',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            109 =>
            array(
                'id' => 110,
                'name' => 'Kyrgyzstan',
                'code' => 'kg',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            110 =>
            array(
                'id' => 111,
                'name' => 'Laos',
                'code' => 'la',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            111 =>
            array(
                'id' => 112,
                'name' => 'Latvia',
                'code' => 'lv',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            112 =>
            array(
                'id' => 113,
                'name' => 'Lebanon',
                'code' => 'lb',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            113 =>
            array(
                'id' => 114,
                'name' => 'Lesotho',
                'code' => 'ls',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            114 =>
            array(
                'id' => 115,
                'name' => 'Liberia',
                'code' => 'lr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            115 =>
            array(
                'id' => 116,
                'name' => 'Libya',
                'code' => 'ly',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            116 =>
            array(
                'id' => 117,
                'name' => 'Liechtenstein',
                'code' => 'li',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            117 =>
            array(
                'id' => 118,
                'name' => 'Lithuania',
                'code' => 'lt',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            118 =>
            array(
                'id' => 119,
                'name' => 'Luxembourg',
                'code' => 'lu',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            119 =>
            array(
                'id' => 120,
                'name' => 'Macao',
                'code' => 'mo',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            120 =>
            array(
                'id' => 121,
                'name' => 'Macedonia',
                'code' => 'mk',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            121 =>
            array(
                'id' => 122,
                'name' => 'Madagascar',
                'code' => 'mg',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            122 =>
            array(
                'id' => 123,
                'name' => 'Malawi',
                'code' => 'mw',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            123 =>
            array(
                'id' => 124,
                'name' => 'Malaysia',
                'code' => 'my',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            124 =>
            array(
                'id' => 125,
                'name' => 'Maldives',
                'code' => 'mv',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            125 =>
            array(
                'id' => 126,
                'name' => 'Mali',
                'code' => 'ml',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            126 =>
            array(
                'id' => 127,
                'name' => 'Malta',
                'code' => 'mt',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            127 =>
            array(
                'id' => 128,
                'name' => 'Marshall Islands',
                'code' => 'mh',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            128 =>
            array(
                'id' => 129,
                'name' => 'Martinique',
                'code' => 'mq',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            129 =>
            array(
                'id' => 130,
                'name' => 'Mauritania',
                'code' => 'mr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            130 =>
            array(
                'id' => 131,
                'name' => 'Mauritius',
                'code' => 'mu',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            131 =>
            array(
                'id' => 132,
                'name' => 'Mayotte',
                'code' => 'yt',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            132 =>
            array(
                'id' => 133,
                'name' => 'Mexico',
                'code' => 'mx',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            133 =>
            array(
                'id' => 134,
                'name' => 'Moldova',
                'code' => 'md',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            134 =>
            array(
                'id' => 135,
                'name' => 'Monaco',
                'code' => 'mc',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            135 =>
            array(
                'id' => 136,
                'name' => 'Mongolia',
                'code' => 'mn',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            136 =>
            array(
                'id' => 137,
                'name' => 'Montserrat',
                'code' => 'ms',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            137 =>
            array(
                'id' => 138,
                'name' => 'Morocco',
                'code' => 'ma',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            138 =>
            array(
                'id' => 139,
                'name' => 'Mozambique',
                'code' => 'mz',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            139 =>
            array(
                'id' => 140,
                'name' => 'Myanmar',
                'code' => 'mm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            140 =>
            array(
                'id' => 141,
                'name' => 'Namibia',
                'code' => 'na',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            141 =>
            array(
                'id' => 142,
                'name' => 'Nauru',
                'code' => 'nr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            142 =>
            array(
                'id' => 143,
                'name' => 'Nepal',
                'code' => 'np',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            143 =>
            array(
                'id' => 144,
                'name' => 'Netherlands',
                'code' => 'nl',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            144 =>
            array(
                'id' => 145,
                'name' => 'Netherlands Antilles',
                'code' => 'an',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            145 =>
            array(
                'id' => 146,
                'name' => 'New Caledonia',
                'code' => 'nc',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            146 =>
            array(
                'id' => 147,
            'name' => 'New Zealand (Aotearoa)',
                'code' => 'nz',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            147 =>
            array(
                'id' => 148,
                'name' => 'Nicaragua',
                'code' => 'ni',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            148 =>
            array(
                'id' => 149,
                'name' => 'Niger',
                'code' => 'ne',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            149 =>
            array(
                'id' => 150,
                'name' => 'Nigeria',
                'code' => 'ng',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            150 =>
            array(
                'id' => 151,
                'name' => 'Niue',
                'code' => 'nu',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            151 =>
            array(
                'id' => 152,
                'name' => 'Norfolk Island',
                'code' => 'nf',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            152 =>
            array(
                'id' => 153,
                'name' => 'Northern Mariana Islands',
                'code' => 'mp',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            153 =>
            array(
                'id' => 154,
                'name' => 'Norway',
                'code' => 'no',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            154 =>
            array(
                'id' => 155,
                'name' => 'NULL',
                'code' => 'gg',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            155 =>
            array(
                'id' => 156,
                'name' => 'Oman',
                'code' => 'om',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            156 =>
            array(
                'id' => 157,
                'name' => 'Pakistan',
                'code' => 'pk',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            157 =>
            array(
                'id' => 158,
                'name' => 'Palau',
                'code' => 'pw',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            158 =>
            array(
                'id' => 159,
                'name' => 'Palestinian Territory',
                'code' => 'ps',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            159 =>
            array(
                'id' => 160,
                'name' => 'Panama',
                'code' => 'pa',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            160 =>
            array(
                'id' => 161,
                'name' => 'Papua New Guinea',
                'code' => 'pg',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            161 =>
            array(
                'id' => 162,
                'name' => 'Paraguay',
                'code' => 'py',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            162 =>
            array(
                'id' => 163,
                'name' => 'Peru',
                'code' => 'pe',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            163 =>
            array(
                'id' => 164,
                'name' => 'Philippines',
                'code' => 'ph',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            164 =>
            array(
                'id' => 165,
                'name' => 'Pitcairn',
                'code' => 'pn',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            165 =>
            array(
                'id' => 166,
                'name' => 'Poland',
                'code' => 'pl',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            166 =>
            array(
                'id' => 167,
                'name' => 'Portugal',
                'code' => 'pt',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            167 =>
            array(
                'id' => 168,
                'name' => 'Qatar',
                'code' => 'qa',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            168 =>
            array(
                'id' => 169,
                'name' => 'Reunion',
                'code' => 're',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            169 =>
            array(
                'id' => 170,
                'name' => 'Romania',
                'code' => 'ro',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            170 =>
            array(
                'id' => 171,
                'name' => 'Russian Federation',
                'code' => 'ru',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            171 =>
            array(
                'id' => 172,
                'name' => 'Rwanda',
                'code' => 'rw',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            172 =>
            array(
                'id' => 173,
                'name' => 'S. Georgia and S. Sandwich Islands',
                'code' => 'gs',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            173 =>
            array(
                'id' => 174,
                'name' => 'Saint Helena',
                'code' => 'sh',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            174 =>
            array(
                'id' => 175,
                'name' => 'Saint Kitts and Nevis',
                'code' => 'kn',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            175 =>
            array(
                'id' => 176,
                'name' => 'Saint Lucia',
                'code' => 'lc',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            176 =>
            array(
                'id' => 177,
                'name' => 'Saint Pierre and Miquelon',
                'code' => 'pm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            177 =>
            array(
                'id' => 178,
                'name' => 'Saint Vincent and the Grenadines',
                'code' => 'vc',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            178 =>
            array(
                'id' => 179,
                'name' => 'Samoa',
                'code' => 'ws',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            179 =>
            array(
                'id' => 180,
                'name' => 'San Marino',
                'code' => 'sm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            180 =>
            array(
                'id' => 181,
                'name' => 'Sao Tome and Principe',
                'code' => 'st',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            181 =>
            array(
                'id' => 182,
                'name' => 'Saudi Arabia',
                'code' => 'sa',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            182 =>
            array(
                'id' => 183,
                'name' => 'Senegal',
                'code' => 'sn',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            183 =>
            array(
                'id' => 184,
                'name' => 'Seychelles',
                'code' => 'sc',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            184 =>
            array(
                'id' => 185,
                'name' => 'Sierra Leone',
                'code' => 'sl',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            185 =>
            array(
                'id' => 186,
                'name' => 'Singapore',
                'code' => 'sg',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            186 =>
            array(
                'id' => 187,
                'name' => 'Slovakia',
                'code' => 'sk',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            187 =>
            array(
                'id' => 188,
                'name' => 'Slovenia',
                'code' => 'si',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            188 =>
            array(
                'id' => 189,
                'name' => 'Solomon Islands',
                'code' => 'sb',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            189 =>
            array(
                'id' => 190,
                'name' => 'Somalia',
                'code' => 'so',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            190 =>
            array(
                'id' => 191,
                'name' => 'South Africa',
                'code' => 'za',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            191 =>
            array(
                'id' => 192,
                'name' => 'Spain',
                'code' => 'es',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            192 =>
            array(
                'id' => 193,
                'name' => 'Sri Lanka',
                'code' => 'lk',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            193 =>
            array(
                'id' => 194,
                'name' => 'Sudan',
                'code' => 'sd',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            194 =>
            array(
                'id' => 195,
                'name' => 'Suriname',
                'code' => 'sr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            195 =>
            array(
                'id' => 196,
                'name' => 'Svalbard and Jan Mayen',
                'code' => 'sj',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            196 =>
            array(
                'id' => 197,
                'name' => 'Swaziland',
                'code' => 'sz',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            197 =>
            array(
                'id' => 198,
                'name' => 'Sweden',
                'code' => 'se',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            198 =>
            array(
                'id' => 199,
                'name' => 'Switzerland',
                'code' => 'ch',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            199 =>
            array(
                'id' => 200,
                'name' => 'Syria',
                'code' => 'sy',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            200 =>
            array(
                'id' => 201,
                'name' => 'Taiwan',
                'code' => 'tw',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            201 =>
            array(
                'id' => 202,
                'name' => 'Tajikistan',
                'code' => 'tj',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            202 =>
            array(
                'id' => 203,
                'name' => 'Tanzania',
                'code' => 'tz',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            203 =>
            array(
                'id' => 204,
                'name' => 'Thailand',
                'code' => 'th',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            204 =>
            array(
                'id' => 205,
                'name' => 'Togo',
                'code' => 'tg',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            205 =>
            array(
                'id' => 206,
                'name' => 'Tokelau',
                'code' => 'tk',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            206 =>
            array(
                'id' => 207,
                'name' => 'Tonga',
                'code' => 'to',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            207 =>
            array(
                'id' => 208,
                'name' => 'Trinidad and Tobago',
                'code' => 'tt',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            208 =>
            array(
                'id' => 209,
                'name' => 'Tunisia',
                'code' => 'tn',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            209 =>
            array(
                'id' => 210,
                'name' => 'Turkey',
                'code' => 'tr',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            210 =>
            array(
                'id' => 211,
                'name' => 'Turkmenistan',
                'code' => 'tm',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            211 =>
            array(
                'id' => 212,
                'name' => 'Turks and Caicos Islands',
                'code' => 'tc',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            212 =>
            array(
                'id' => 213,
                'name' => 'Tuvalu',
                'code' => 'tv',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            213 =>
            array(
                'id' => 214,
                'name' => 'Uganda',
                'code' => 'ug',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            214 =>
            array(
                'id' => 215,
                'name' => 'Ukraine',
                'code' => 'ua',
                'created_at' => '2020-06-13 16:41:35',
                'updated_at' => '2020-06-13 16:41:35',
            ),
            215 =>
            array(
                'id' => 216,
                'name' => 'United Arab Emirates',
                'code' => 'ae',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            216 =>
            array(
                'id' => 217,
                'name' => 'United States of America',
                'code' => 'us',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            217 =>
            array(
                'id' => 218,
                'name' => 'Uruguay',
                'code' => 'uy',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            218 =>
            array(
                'id' => 219,
                'name' => 'Uzbekistan',
                'code' => 'uz',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            219 =>
            array(
                'id' => 220,
                'name' => 'Vanuatu',
                'code' => 'vu',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            220 =>
            array(
                'id' => 221,
                'name' => 'Venezuela',
                'code' => 've',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            221 =>
            array(
                'id' => 222,
                'name' => 'Viet Nam',
                'code' => 'vn',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            222 =>
            array(
                'id' => 223,
            'name' => 'Virgin Islands (British)',
                'code' => 'vg',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            223 =>
            array(
                'id' => 224,
            'name' => 'Virgin Islands (U.S.)',
                'code' => 'vi',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            224 =>
            array(
                'id' => 225,
                'name' => 'Wallis and Futuna',
                'code' => 'wf',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            225 =>
            array(
                'id' => 226,
                'name' => 'Western Sahara',
                'code' => 'eh',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            226 =>
            array(
                'id' => 227,
                'name' => 'Yemen',
                'code' => 'ye',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            227 =>
            array(
                'id' => 228,
            'name' => 'Zaire (former)',
                'code' => 'zr',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            228 =>
            array(
                'id' => 229,
                'name' => 'Zambia',
                'code' => 'zm',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
            229 =>
            array(
                'id' => 230,
                'name' => 'Zimbabwe',
                'code' => 'zw',
                'created_at' => '2020-06-13 16:41:36',
                'updated_at' => '2020-06-13 16:41:36',
            ),
        ));
    }
}
