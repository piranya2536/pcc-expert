<?php

use Illuminate\Database\Seeder;

class MajorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('majors')->delete();
        
        \DB::table('majors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'major_code' => 'AG',
                'major_name_en' => 'Agriculture And Rural Development Sector',
                'major_name_th' => 'การเกษตรและการพัฒนาชนบท',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            1 => 
            array (
                'id' => 2,
                'major_code' => 'BU',
                'major_name_en' => 'Building Sector',
                'major_name_th' => 'อุตสาหกรรมก่อสร้าง',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            2 => 
            array (
                'id' => 3,
                'major_code' => 'ED',
                'major_name_en' => 'Education Sector',
                'major_name_th' => 'การศึกษา',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            3 => 
            array (
                'id' => 4,
                'major_code' => 'EG',
                'major_name_en' => 'Energy Sector',
                'major_name_th' => 'พลังงาน',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            4 => 
            array (
                'id' => 5,
                'major_code' => 'EV',
                'major_name_en' => 'Environment Sector',
                'major_name_th' => 'สิ่งแวดล้อม',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            5 => 
            array (
                'id' => 6,
                'major_code' => 'FI',
                'major_name_en' => 'Financial Sector',
                'major_name_th' => 'การเงิน',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            6 => 
            array (
                'id' => 7,
                'major_code' => 'HE',
                'major_name_en' => 'Health Sector',
                'major_name_th' => 'สาธารณสุข',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            7 => 
            array (
                'id' => 8,
                'major_code' => 'IN',
                'major_name_en' => 'Industry Sector',
                'major_name_th' => 'อุตสาหกรรม',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            8 => 
            array (
                'id' => 9,
                'major_code' => 'PO',
                'major_name_en' => 'Population Sector',
                'major_name_th' => 'ประชากร',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            9 => 
            array (
                'id' => 10,
                'major_code' => 'ICT',
                'major_name_en' => 'Information and Communication Technology Sector',
                'major_name_th' => 'เทคโนโลยีสารสนเทศและการสื่อสาร',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            10 => 
            array (
                'id' => 11,
                'major_code' => 'TO',
                'major_name_en' => 'Tourism Sector',
                'major_name_th' => 'การท่องเที่ยว',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            11 => 
            array (
                'id' => 12,
                'major_code' => 'TR',
                'major_name_en' => 'Transportation Sector',
                'major_name_th' => 'การคมนาคมขนส่ง',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            12 => 
            array (
                'id' => 13,
                'major_code' => 'UD',
                'major_name_en' => 'Urban Development Sector',
                'major_name_th' => 'การพัฒนาเมือง',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            13 => 
            array (
                'id' => 14,
                'major_code' => 'WS',
                'major_name_en' => 'Water Supply And Sanitation Sector',
                'major_name_th' => 'การประปาและสุขาภิบาล',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            14 => 
            array (
                'id' => 15,
                'major_code' => 'LW',
                'major_name_en' => 'Law Sector',
                'major_name_th' => 'กฎหมาย',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            15 => 
            array (
                'id' => 16,
                'major_code' => 'QS',
                'major_name_en' => 'Quality Standard Sector',
                'major_name_th' => 'มาตรฐานคุณภาพ',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            16 => 
            array (
                'id' => 17,
                'major_code' => 'MID',
                'major_name_en' => 'Management and Institutional Development Sector',
                'major_name_th' => 'การบริหารและการพัฒนาองค์กร',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            17 => 
            array (
                'id' => 18,
                'major_code' => 'PR',
                'major_name_en' => 'Public Relations Sector',
                'major_name_th' => 'การประชาสัมพันธ์',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            18 => 
            array (
                'id' => 19,
                'major_code' => 'RE',
                'major_name_en' => 'Research and Evaluation Sector',
                'major_name_th' => 'การวิจัยและการประเมินผล',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
            19 => 
            array (
                'id' => 20,
                'major_code' => 'MS',
                'major_name_en' => 'Miscellaneous Sector',
                'major_name_th' => 'เบ็ดเตล็ด',
                'created_at' => '2018-01-14 14:04:32',
                'updated_at' => '2018-01-14 14:04:32',
            ),
        ));
        
        
    }
}