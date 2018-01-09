<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_code' => '10',
                'province_name' => 'กรุงเทพมหานคร   ',
                'province_name_en' => 'Bangkok',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'province_code' => '11',
                'province_name' => 'สมุทรปราการ   ',
                'province_name_en' => 'Samut Prakan',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'province_code' => '12',
                'province_name' => 'นนทบุรี   ',
                'province_name_en' => 'Nonthaburi',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'province_code' => '13',
                'province_name' => 'ปทุมธานี   ',
                'province_name_en' => 'Pathum Thani',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'province_code' => '14',
                'province_name' => 'พระนครศรีอยุธยา   ',
                'province_name_en' => 'Phra Nakhon Si Ayutthaya',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'province_code' => '15',
                'province_name' => 'อ่างทอง   ',
                'province_name_en' => 'Ang Thong',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'province_code' => '16',
                'province_name' => 'ลพบุรี   ',
                'province_name_en' => 'Loburi',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'province_code' => '17',
                'province_name' => 'สิงห์บุรี   ',
                'province_name_en' => 'Sing Buri',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'province_code' => '18',
                'province_name' => 'ชัยนาท   ',
                'province_name_en' => 'Chai Nat',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'province_code' => '19',
                'province_name' => 'สระบุรี',
                'province_name_en' => 'Saraburi',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'province_code' => '20',
                'province_name' => 'ชลบุรี   ',
                'province_name_en' => 'Chon Buri',
                'geo_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'province_code' => '21',
                'province_name' => 'ระยอง   ',
                'province_name_en' => 'Rayong',
                'geo_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'province_code' => '22',
                'province_name' => 'จันทบุรี   ',
                'province_name_en' => 'Chanthaburi',
                'geo_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'province_code' => '23',
                'province_name' => 'ตราด   ',
                'province_name_en' => 'Trat',
                'geo_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'province_code' => '24',
                'province_name' => 'ฉะเชิงเทรา   ',
                'province_name_en' => 'Chachoengsao',
                'geo_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'province_code' => '25',
                'province_name' => 'ปราจีนบุรี   ',
                'province_name_en' => 'Prachin Buri',
                'geo_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'province_code' => '26',
                'province_name' => 'นครนายก   ',
                'province_name_en' => 'Nakhon Nayok',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'province_code' => '27',
                'province_name' => 'สระแก้ว   ',
                'province_name_en' => 'Sa Kaeo',
                'geo_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'province_code' => '30',
                'province_name' => 'นครราชสีมา   ',
                'province_name_en' => 'Nakhon Ratchasima',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'province_code' => '31',
                'province_name' => 'บุรีรัมย์   ',
                'province_name_en' => 'Buri Ram',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'province_code' => '32',
                'province_name' => 'สุรินทร์   ',
                'province_name_en' => 'Surin',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'province_code' => '33',
                'province_name' => 'ศรีสะเกษ   ',
                'province_name_en' => 'Si Sa Ket',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'province_code' => '34',
                'province_name' => 'อุบลราชธานี   ',
                'province_name_en' => 'Ubon Ratchathani',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'province_code' => '35',
                'province_name' => 'ยโสธร   ',
                'province_name_en' => 'Yasothon',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'province_code' => '36',
                'province_name' => 'ชัยภูมิ   ',
                'province_name_en' => 'Chaiyaphum',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'province_code' => '37',
                'province_name' => 'อำนาจเจริญ   ',
                'province_name_en' => 'Amnat Charoen',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'province_code' => '39',
                'province_name' => 'หนองบัวลำภู   ',
                'province_name_en' => 'Nong Bua Lam Phu',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'province_code' => '40',
                'province_name' => 'ขอนแก่น   ',
                'province_name_en' => 'Khon Kaen',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'province_code' => '41',
                'province_name' => 'อุดรธานี   ',
                'province_name_en' => 'Udon Thani',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'province_code' => '42',
                'province_name' => 'เลย   ',
                'province_name_en' => 'Loei',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'province_code' => '43',
                'province_name' => 'หนองคาย   ',
                'province_name_en' => 'Nong Khai',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'province_code' => '44',
                'province_name' => 'มหาสารคาม   ',
                'province_name_en' => 'Maha Sarakham',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'province_code' => '45',
                'province_name' => 'ร้อยเอ็ด   ',
                'province_name_en' => 'Roi Et',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'province_code' => '46',
                'province_name' => 'กาฬสินธุ์   ',
                'province_name_en' => 'Kalasin',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'province_code' => '47',
                'province_name' => 'สกลนคร   ',
                'province_name_en' => 'Sakon Nakhon',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'province_code' => '48',
                'province_name' => 'นครพนม   ',
                'province_name_en' => 'Nakhon Phanom',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'province_code' => '49',
                'province_name' => 'มุกดาหาร   ',
                'province_name_en' => 'Mukdahan',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'province_code' => '50',
                'province_name' => 'เชียงใหม่   ',
                'province_name_en' => 'Chiang Mai',
                'geo_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'province_code' => '51',
                'province_name' => 'ลำพูน   ',
                'province_name_en' => 'Lamphun',
                'geo_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'province_code' => '52',
                'province_name' => 'ลำปาง   ',
                'province_name_en' => 'Lampang',
                'geo_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'province_code' => '53',
                'province_name' => 'อุตรดิตถ์   ',
                'province_name_en' => 'Uttaradit',
                'geo_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'province_code' => '54',
                'province_name' => 'แพร่   ',
                'province_name_en' => 'Phrae',
                'geo_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'province_code' => '55',
                'province_name' => 'น่าน   ',
                'province_name_en' => 'Nan',
                'geo_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'province_code' => '56',
                'province_name' => 'พะเยา   ',
                'province_name_en' => 'Phayao',
                'geo_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'province_code' => '57',
                'province_name' => 'เชียงราย   ',
                'province_name_en' => 'Chiang Rai',
                'geo_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'province_code' => '58',
                'province_name' => 'แม่ฮ่องสอน   ',
                'province_name_en' => 'Mae Hong Son',
                'geo_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'province_code' => '60',
                'province_name' => 'นครสวรรค์   ',
                'province_name_en' => 'Nakhon Sawan',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'province_code' => '61',
                'province_name' => 'อุทัยธานี   ',
                'province_name_en' => 'Uthai Thani',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'province_code' => '62',
                'province_name' => 'กำแพงเพชร   ',
                'province_name_en' => 'Kamphaeng Phet',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'province_code' => '63',
                'province_name' => 'ตาก   ',
                'province_name_en' => 'Tak',
                'geo_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'province_code' => '64',
                'province_name' => 'สุโขทัย   ',
                'province_name_en' => 'Sukhothai',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'province_code' => '65',
                'province_name' => 'พิษณุโลก   ',
                'province_name_en' => 'Phitsanulok',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'province_code' => '66',
                'province_name' => 'พิจิตร   ',
                'province_name_en' => 'Phichit',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'province_code' => '67',
                'province_name' => 'เพชรบูรณ์   ',
                'province_name_en' => 'Phetchabun',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'province_code' => '70',
                'province_name' => 'ราชบุรี   ',
                'province_name_en' => 'Ratchaburi',
                'geo_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'province_code' => '71',
                'province_name' => 'กาญจนบุรี   ',
                'province_name_en' => 'Kanchanaburi',
                'geo_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'province_code' => '72',
                'province_name' => 'สุพรรณบุรี   ',
                'province_name_en' => 'Suphan Buri',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'province_code' => '73',
                'province_name' => 'นครปฐม   ',
                'province_name_en' => 'Nakhon Pathom',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'province_code' => '74',
                'province_name' => 'สมุทรสาคร   ',
                'province_name_en' => 'Samut Sakhon',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'province_code' => '75',
                'province_name' => 'สมุทรสงคราม   ',
                'province_name_en' => 'Samut Songkhram',
                'geo_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'province_code' => '76',
                'province_name' => 'เพชรบุรี   ',
                'province_name_en' => 'Phetchaburi',
                'geo_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'province_code' => '77',
                'province_name' => 'ประจวบคีรีขันธ์   ',
                'province_name_en' => 'Prachuap Khiri Khan',
                'geo_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'province_code' => '80',
                'province_name' => 'นครศรีธรรมราช   ',
                'province_name_en' => 'Nakhon Si Thammarat',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'province_code' => '81',
                'province_name' => 'กระบี่   ',
                'province_name_en' => 'Krabi',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'province_code' => '82',
                'province_name' => 'พังงา   ',
                'province_name_en' => 'Phangnga',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'province_code' => '83',
                'province_name' => 'ภูเก็ต   ',
                'province_name_en' => 'Phuket',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'province_code' => '84',
                'province_name' => 'สุราษฎร์ธานี   ',
                'province_name_en' => 'Surat Thani',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'province_code' => '85',
                'province_name' => 'ระนอง   ',
                'province_name_en' => 'Ranong',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'province_code' => '86',
                'province_name' => 'ชุมพร   ',
                'province_name_en' => 'Chumphon',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'province_code' => '90',
                'province_name' => 'สงขลา   ',
                'province_name_en' => 'Songkhla',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'province_code' => '91',
                'province_name' => 'สตูล   ',
                'province_name_en' => 'Satun',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'province_code' => '92',
                'province_name' => 'ตรัง   ',
                'province_name_en' => 'Trang',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'province_code' => '93',
                'province_name' => 'พัทลุง   ',
                'province_name_en' => 'Phatthalung',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'province_code' => '94',
                'province_name' => 'ปัตตานี   ',
                'province_name_en' => 'Pattani',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'province_code' => '95',
                'province_name' => 'ยะลา   ',
                'province_name_en' => 'Yala',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'province_code' => '96',
                'province_name' => 'นราธิวาส   ',
                'province_name_en' => 'Narathiwat',
                'geo_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'province_code' => '97',
                'province_name' => 'บึงกาฬ',
                'province_name_en' => 'buogkan',
                'geo_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}