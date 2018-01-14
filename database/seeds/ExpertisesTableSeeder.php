<?php

use Illuminate\Database\Seeder;

class ExpertisesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('expertises')->delete();
        
        \DB::table('expertises')->insert(array (
            0 => 
            array (
                'id' => 1,
                'major_code' => 'AG',
                'expertise_code' => 'A100',
                'expertise_name_th' => 'เกษตรและพัฒนาชนบท',
                'expertise_name_en' => 'Agriculture And Rural Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            1 => 
            array (
                'id' => 2,
                'major_code' => 'AG',
                'expertise_code' => 'A101',
                'expertise_name_th' => 'การวางแผนพัฒนาเกษตร',
                'expertise_name_en' => 'Agricultural Development Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            2 => 
            array (
                'id' => 3,
                'major_code' => 'AG',
                'expertise_code' => 'A102',
                'expertise_name_th' => 'การวางแผนพัฒนาชนบท',
                'expertise_name_en' => 'Rural Development Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            3 => 
            array (
                'id' => 4,
                'major_code' => 'AG',
                'expertise_code' => 'A103',
                'expertise_name_th' => 'การสำรวจและสถิติทางการเกษตร',
                'expertise_name_en' => 'Agricultural Censuses And Statistics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            4 => 
            array (
                'id' => 5,
                'major_code' => 'AG',
                'expertise_code' => 'A104',
                'expertise_name_th' => 'การผลิตภาคเกษตรโดยทั่วไป',
                'expertise_name_en' => 'General Agricultural Production',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            5 => 
            array (
                'id' => 6,
                'major_code' => 'AG',
                'expertise_code' => 'A105',
                'expertise_name_th' => 'การฝึกอบรมด้านการเกษตร',
                'expertise_name_en' => 'Agricultural Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            6 => 
            array (
                'id' => 7,
                'major_code' => 'AG',
                'expertise_code' => 'A200',
                'expertise_name_th' => 'ความชำนาญการด้านภูมิอากาศทั่วไปและภูมิภาค',
                'expertise_name_en' => 'Climate/Regional Specialization',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            7 => 
            array (
                'id' => 8,
                'major_code' => 'AG',
                'expertise_code' => 'A300',
                'expertise_name_th' => 'การประเมินการใช้ทรัพยากรที่ดิน',
                'expertise_name_en' => 'Land Resources Appraisal/Use',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            8 => 
            array (
                'id' => 9,
                'major_code' => 'AG',
                'expertise_code' => 'A301',
                'expertise_name_th' => 'การสำรวจและการประเมินการระบายน้ำ',
                'expertise_name_en' => 'Drainage Surveys And Evaluation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            9 => 
            array (
                'id' => 10,
                'major_code' => 'AG',
                'expertise_code' => 'A301A',
                'expertise_name_th' => 'ความสามารถในการระบายน้ำของที่ดิน',
                'expertise_name_en' => 'Land Drainability',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            10 => 
            array (
                'id' => 11,
                'major_code' => 'AG',
                'expertise_code' => 'A301B',
                'expertise_name_th' => 'ความต้องการในการระบายน้ำ',
                'expertise_name_en' => 'Drainage Requirements',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            11 => 
            array (
                'id' => 12,
                'major_code' => 'AG',
                'expertise_code' => 'A302',
                'expertise_name_th' => 'การจำแนกประเภทที่ดิน',
                'expertise_name_en' => 'Land Classification',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            12 => 
            array (
                'id' => 13,
                'major_code' => 'AG',
                'expertise_code' => 'A303',
                'expertise_name_th' => 'การศึกษาการใช้ที่ดินและสมรรถนะของดิน',
                'expertise_name_en' => 'Land Use/Capability Studies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            13 => 
            array (
                'id' => 14,
                'major_code' => 'AG',
                'expertise_code' => 'A304',
                'expertise_name_th' => 'ความเหมาะสมของที่ดินเพื่อการชลประทาน',
                'expertise_name_en' => 'Land Suitability For Irrigation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            14 => 
            array (
                'id' => 15,
                'major_code' => 'AG',
                'expertise_code' => 'A304A',
                'expertise_name_th' => 'ลักษณะเฉพาะที่พบในสนาม',
                'expertise_name_en' => 'Field Characteristics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            15 => 
            array (
                'id' => 16,
                'major_code' => 'AG',
                'expertise_code' => 'A304B',
                'expertise_name_th' => 'ลักษณะเฉพาะที่พบในห้องปฏิบัติการ',
                'expertise_name_en' => 'Laboratory Characteristics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            16 => 
            array (
                'id' => 17,
                'major_code' => 'AG',
                'expertise_code' => 'A305',
                'expertise_name_th' => 'การวางแผนใช้ที่ดิน',
                'expertise_name_en' => 'Land Use Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            17 => 
            array (
                'id' => 18,
                'major_code' => 'AG',
                'expertise_code' => 'A305A',
                'expertise_name_th' => 'ระดับภูมิภาค',
                'expertise_name_en' => 'Regional',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            18 => 
            array (
                'id' => 19,
                'major_code' => 'AG',
                'expertise_code' => 'A305B',
                'expertise_name_th' => 'ระดับไร่นา',
                'expertise_name_en' => 'Farm-Scale',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            19 => 
            array (
                'id' => 20,
                'major_code' => 'AG',
                'expertise_code' => 'A306',
                'expertise_name_th' => 'กฎหมายการถือครองที่ดิน',
                'expertise_name_en' => 'Land Legislation/ Tenure',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            20 => 
            array (
                'id' => 21,
                'major_code' => 'AG',
                'expertise_code' => 'A307',
                'expertise_name_th' => 'การปฏิรูปที่ดินและปรับรูปที่ดิน',
                'expertise_name_en' => 'Land Reform And Farm Consolidation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            21 => 
            array (
                'id' => 22,
                'major_code' => 'AG',
                'expertise_code' => 'A308',
                'expertise_name_th' => 'การศึกษาด้านการจัดที่ทำกินการฟื้นฟูการอนุรักษ์การปรับรูปที่ดิน',
                'expertise_name_en' => 'Land Reclamation/Rehabilitation/Conservation/Consolidation Studies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            22 => 
            array (
                'id' => 23,
                'major_code' => 'AG',
                'expertise_code' => 'A309',
                'expertise_name_th' => 'การจัดการทุ่งหญ้าธรรมชาติ',
                'expertise_name_en' => 'Range Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            23 => 
            array (
                'id' => 24,
                'major_code' => 'AG',
                'expertise_code' => 'A310',
                'expertise_name_th' => 'การบริหารจัดการสัตว์ป่า',
                'expertise_name_en' => 'Wildlife Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            24 => 
            array (
                'id' => 25,
                'major_code' => 'AG',
                'expertise_code' => 'A311',
                'expertise_name_th' => 'การบริหารจัดการไร่นา',
                'expertise_name_en' => 'Farm Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            25 => 
            array (
                'id' => 26,
                'major_code' => 'AG',
                'expertise_code' => 'A400',
                'expertise_name_th' => 'การประเมินการใช้ทรัพยากรน้ำ',
                'expertise_name_en' => 'Water Resources Appraisal/Use',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            26 => 
            array (
                'id' => 27,
                'major_code' => 'AG',
                'expertise_code' => 'A401',
                'expertise_name_th' => 'การประเมินทรัพยากรน้ำ',
                'expertise_name_en' => 'Water Resources Appraisal',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            27 => 
            array (
                'id' => 28,
                'major_code' => 'AG',
                'expertise_code' => 'A401A',
                'expertise_name_th' => 'น้ำผิวดิน',
                'expertise_name_en' => 'Surface Water',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            28 => 
            array (
                'id' => 29,
                'major_code' => 'AG',
                'expertise_code' => 'A401B',
                'expertise_name_th' => 'น้ำใต้ดิน',
                'expertise_name_en' => 'Ground Water',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            29 => 
            array (
                'id' => 30,
                'major_code' => 'AG',
                'expertise_code' => 'A402',
                'expertise_name_th' => 'การวัดน้ำ',
                'expertise_name_en' => 'Water Measurement',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            30 => 
            array (
                'id' => 31,
                'major_code' => 'AG',
                'expertise_code' => 'A403',
                'expertise_name_th' => 'คุณภาพน้ำคุณสมบัติของน้ำ',
                'expertise_name_en' => 'Water Quality/Characteristics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            31 => 
            array (
                'id' => 32,
                'major_code' => 'AG',
                'expertise_code' => 'A404',
                'expertise_name_th' => 'ความเหมาะสมของน้ำเพื่อการชลประทาน',
                'expertise_name_en' => 'Water Suitabillity For Irrigation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            32 => 
            array (
                'id' => 33,
                'major_code' => 'AG',
                'expertise_code' => 'A405',
                'expertise_name_th' => 'ความต้องการน้ำเพื่อการชลประทาน',
                'expertise_name_en' => 'Water Requirements For Irrigation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            33 => 
            array (
                'id' => 34,
                'major_code' => 'AG',
                'expertise_code' => 'A406',
                'expertise_name_th' => 'การวางแผนการใช้น้ำ',
                'expertise_name_en' => 'Water Use Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            34 => 
            array (
                'id' => 35,
                'major_code' => 'AG',
                'expertise_code' => 'A407',
                'expertise_name_th' => 'การบริหารจัดการพื้นที่ต้นน้ำลำธาร',
                'expertise_name_en' => 'Watershed Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            35 => 
            array (
                'id' => 36,
                'major_code' => 'AG',
                'expertise_code' => 'A408',
                'expertise_name_th' => 'การบำรุงรักษาระบบชลประทาน',
                'expertise_name_en' => 'Operation And Maintenance Of Irrigation Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            36 => 
            array (
                'id' => 37,
                'major_code' => 'AG',
                'expertise_code' => 'A500',
                'expertise_name_th' => 'โครงสร้างพื้นฐานทางกายภาพ',
                'expertise_name_en' => 'Physical Infrastructure',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            37 => 
            array (
                'id' => 38,
                'major_code' => 'AG',
                'expertise_code' => 'A501',
                'expertise_name_th' => 'ระบบชลประทานแบบอาศัยแรงโน้มถ่วง',
                'expertise_name_en' => 'Gravity Irrigation Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            38 => 
            array (
                'id' => 39,
                'major_code' => 'AG',
                'expertise_code' => 'A501A',
                'expertise_name_th' => 'เขื่อนเก็บกัก',
            'expertise_name_en' => 'Dam (Storage)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            39 => 
            array (
                'id' => 40,
                'major_code' => 'AG',
                'expertise_code' => 'A501B',
                'expertise_name_th' => 'เขื่อนผันน้ำ',
                'expertise_name_en' => 'Diversion',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            40 => 
            array (
                'id' => 41,
                'major_code' => 'AG',
                'expertise_code' => 'A502',
                'expertise_name_th' => 'ระบบชลประทานแบบสูบน้ำ',
                'expertise_name_en' => 'Pump Irrigation Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            41 => 
            array (
                'id' => 42,
                'major_code' => 'AG',
                'expertise_code' => 'A502A',
                'expertise_name_th' => 'แม่น้ำทะเลสาบ',
                'expertise_name_en' => 'River/Lake',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            42 => 
            array (
                'id' => 43,
                'major_code' => 'AG',
                'expertise_code' => 'A502B',
                'expertise_name_th' => 'ผนัง',
                'expertise_name_en' => 'Wall',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            43 => 
            array (
                'id' => 44,
                'major_code' => 'AG',
                'expertise_code' => 'A503',
                'expertise_name_th' => 'โครงข่ายระบบชลประทานระบายน้ำ',
                'expertise_name_en' => 'Irrigation/Drainage Networks',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            44 => 
            array (
                'id' => 45,
                'major_code' => 'AG',
                'expertise_code' => 'A504',
                'expertise_name_th' => 'ระบบชลประทานแบบวิธีพ่นน้ำ',
                'expertise_name_en' => 'Sprinkler Irrigation Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            45 => 
            array (
                'id' => 46,
                'major_code' => 'AG',
                'expertise_code' => 'A505',
                'expertise_name_th' => 'ระบบชลประทานแบบน้ำหยด',
                'expertise_name_en' => 'Drip Irrigation Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            46 => 
            array (
                'id' => 47,
                'major_code' => 'AG',
                'expertise_code' => 'A506',
                'expertise_name_th' => 'การจัดการน้ำชลประทาน',
                'expertise_name_en' => 'Irrigation Water Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            47 => 
            array (
                'id' => 48,
                'major_code' => 'AG',
                'expertise_code' => 'A507',
                'expertise_name_th' => 'ชลประทานในไร่นา',
                'expertise_name_en' => 'Irrigation Field Practices',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            48 => 
            array (
                'id' => 49,
                'major_code' => 'AG',
                'expertise_code' => 'A508',
                'expertise_name_th' => 'การป้องกันน้ำท่วมการควบคุมลำน้ำ',
                'expertise_name_en' => 'Flood/River Control Works',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            49 => 
            array (
                'id' => 50,
                'major_code' => 'AG',
                'expertise_code' => 'A509',
                'expertise_name_th' => 'การป้องกันการกัดเซาะการอนุรักษ์ดิน',
                'expertise_name_en' => 'Erosion Control/Soil Conservation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            50 => 
            array (
                'id' => 51,
                'major_code' => 'AG',
                'expertise_code' => 'A510',
                'expertise_name_th' => 'การจัดที่ทำกินการฟื้นฟูที่ดิน',
                'expertise_name_en' => 'Land Reclamation/Rehabilitation Works',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            51 => 
            array (
                'id' => 52,
                'major_code' => 'AG',
                'expertise_code' => 'A511',
                'expertise_name_th' => 'การพัฒนาน้ำใต้ดิน',
                'expertise_name_en' => 'Groundwater Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            52 => 
            array (
                'id' => 53,
                'major_code' => 'AG',
                'expertise_code' => 'A512',
                'expertise_name_th' => 'การขุดบ่อการสูบน้ำบาดาล',
                'expertise_name_en' => 'Well Drilling/Pumping',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            53 => 
            array (
                'id' => 54,
                'major_code' => 'AG',
                'expertise_code' => 'A513',
                'expertise_name_th' => 'การระบายน้ำคลอง',
                'expertise_name_en' => 'Land Drainage/Canals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            54 => 
            array (
                'id' => 55,
                'major_code' => 'AG',
                'expertise_code' => 'A514',
                'expertise_name_th' => 'โครงข่ายการส่งน้ำด้วยท่อ',
                'expertise_name_en' => 'Piped Water Distribution Networks',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            55 => 
            array (
                'id' => 56,
                'major_code' => 'AG',
                'expertise_code' => 'A515',
                'expertise_name_th' => 'บ้านชนบทและการปรับปรุงบ้าน',
                'expertise_name_en' => 'Rural Housing And Home Improvements',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            56 => 
            array (
                'id' => 57,
                'major_code' => 'AG',
                'expertise_code' => 'A516',
                'expertise_name_th' => 'ศูนย์ชุมชนในชนบท',
                'expertise_name_en' => 'Rural Community Centers',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            57 => 
            array (
                'id' => 58,
                'major_code' => 'AG',
                'expertise_code' => 'A517',
                'expertise_name_th' => 'ตลาดและโกดังในชนบท',
                'expertise_name_en' => 'Rural Markets And Godowns',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            58 => 
            array (
                'id' => 59,
                'major_code' => 'AG',
                'expertise_code' => 'A518',
                'expertise_name_th' => 'การเก็บรักษาธัญพืชและการอบแห้ง',
                'expertise_name_en' => 'Grain Storage And Drying',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            59 => 
            array (
                'id' => 60,
                'major_code' => 'AG',
                'expertise_code' => 'A519',
                'expertise_name_th' => 'ห้องเย็น',
                'expertise_name_en' => 'Cold Storage',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            60 => 
            array (
                'id' => 61,
                'major_code' => 'AG',
                'expertise_code' => 'A520',
                'expertise_name_th' => 'โรงฆ่าสัตว์',
                'expertise_name_en' => 'Slaughter Houses',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            61 => 
            array (
                'id' => 62,
                'major_code' => 'AG',
                'expertise_code' => 'A521',
                'expertise_name_th' => 'สิ่งอำนวยความสะดวกสำหรับอุตสาหกรรมเกษตร',
                'expertise_name_en' => 'Agro-Industry Processing Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            62 => 
            array (
                'id' => 63,
                'major_code' => 'AG',
                'expertise_code' => 'A522',
                'expertise_name_th' => 'สิ่งอำนวยความสะดวกสำหรับอุตสาหกรรมอาหารสัตว์ประเภทโค',
                'expertise_name_en' => 'Cattle Feed Industry Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            63 => 
            array (
                'id' => 64,
                'major_code' => 'AG',
                'expertise_code' => 'A523',
                'expertise_name_th' => 'สิ่งปลูกสร้างในฟาร์มเลี้ยงสัตว์และสิ่งปลูกสร้างอื่นๆ',
                'expertise_name_en' => 'Farm Buildings And Other Structures',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            64 => 
            array (
                'id' => 65,
                'major_code' => 'AG',
                'expertise_code' => 'A600',
                'expertise_name_th' => 'โครงสร้างพื้นฐานทางสังคม',
                'expertise_name_en' => 'Social Infrastructure',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            65 => 
            array (
                'id' => 66,
                'major_code' => 'AG',
                'expertise_code' => 'A601',
                'expertise_name_th' => 'นิคมจัดสรรที่ดิน',
                'expertise_name_en' => 'Land Settlement',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            66 => 
            array (
                'id' => 67,
                'major_code' => 'AG',
                'expertise_code' => 'A602',
                'expertise_name_th' => 'การพัฒนาชุมชนการมีส่วนร่วมของชุมชน',
                'expertise_name_en' => 'Community Development/Participation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            67 => 
            array (
                'id' => 68,
                'major_code' => 'AG',
                'expertise_code' => 'A603',
                'expertise_name_th' => 'ปัจจัยทางสังคมวัฒนธรรมในชนบท',
                'expertise_name_en' => 'Rural Socio-Cultural Factors',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            68 => 
            array (
                'id' => 69,
                'major_code' => 'AG',
                'expertise_code' => 'A604',
                'expertise_name_th' => 'องค์กรชนบทเกษตรกร',
                'expertise_name_en' => 'Rural/Farmer Organizations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            69 => 
            array (
                'id' => 70,
                'major_code' => 'AG',
                'expertise_code' => 'A605',
                'expertise_name_th' => 'การส่งเสริมด้านสังคม',
                'expertise_name_en' => 'Social Extension',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            70 => 
            array (
                'id' => 71,
                'major_code' => 'AG',
                'expertise_code' => 'A607',
                'expertise_name_th' => 'โภชนาการ',
                'expertise_name_en' => 'Nutrition',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            71 => 
            array (
                'id' => 72,
                'major_code' => 'AG',
                'expertise_code' => 'A607A',
                'expertise_name_th' => 'การผลิตอาหาร',
                'expertise_name_en' => 'Food Production',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            72 => 
            array (
                'id' => 73,
                'major_code' => 'AG',
                'expertise_code' => 'A607B',
                'expertise_name_th' => 'เทคโนโลยีวิศวกรรมการแปรรูปอาหาร',
                'expertise_name_en' => 'Food Processing Technology/Engineering',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            73 => 
            array (
                'id' => 74,
                'major_code' => 'AG',
                'expertise_code' => 'A607C',
                'expertise_name_th' => 'การควบคุมคุณภาพ',
                'expertise_name_en' => 'Quality Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            74 => 
            array (
                'id' => 75,
                'major_code' => 'AG',
                'expertise_code' => 'A607D',
                'expertise_name_th' => 'บรรจุภัณฑ์',
                'expertise_name_en' => 'Packaging',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            75 => 
            array (
                'id' => 76,
                'major_code' => 'AG',
                'expertise_code' => 'A607E',
                'expertise_name_th' => 'การเก็บรักษาและจำหน่าย',
                'expertise_name_en' => 'Storage/Distribution',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            76 => 
            array (
                'id' => 77,
                'major_code' => 'AG',
                'expertise_code' => 'A607F',
                'expertise_name_th' => 'การกำหนดราคา',
                'expertise_name_en' => 'Pricing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            77 => 
            array (
                'id' => 78,
                'major_code' => 'AG',
                'expertise_code' => 'A607G',
                'expertise_name_th' => 'การศึกษาด้านโภชนาการ',
                'expertise_name_en' => 'Nutrition Education',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            78 => 
            array (
                'id' => 79,
                'major_code' => 'AG',
                'expertise_code' => 'A607H',
                'expertise_name_th' => 'สวนครัว',
                'expertise_name_en' => 'Home Gardens',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            79 => 
            array (
                'id' => 80,
                'major_code' => 'AG',
                'expertise_code' => 'A607I',
                'expertise_name_th' => 'ไร่นาตัวอย่างไร่นาทดลองฯลฯ',
                'expertise_name_en' => 'Pilot Farms, Test Farms, Etc.',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            80 => 
            array (
                'id' => 81,
                'major_code' => 'AG',
                'expertise_code' => 'A700',
                'expertise_name_th' => 'สินเชื่อและสถาบันต่างๆ',
                'expertise_name_en' => 'Credit And Institutions',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            81 => 
            array (
                'id' => 82,
                'major_code' => 'AG',
                'expertise_code' => 'A701',
                'expertise_name_th' => 'สินเชื่อทางการเกษตรโดยทั่วไป',
                'expertise_name_en' => 'Agricultural Credit In General',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            82 => 
            array (
                'id' => 83,
                'major_code' => 'AG',
                'expertise_code' => 'A702',
                'expertise_name_th' => 'สินเชื่อนอกภาคเกษตร',
                'expertise_name_en' => 'Non-Farm Credit',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            83 => 
            array (
                'id' => 84,
                'major_code' => 'AG',
                'expertise_code' => 'A703',
                'expertise_name_th' => 'ธนาคารเพื่อการพัฒนา',
                'expertise_name_en' => 'Development Banking',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            84 => 
            array (
                'id' => 85,
                'major_code' => 'AG',
                'expertise_code' => 'A704',
                'expertise_name_th' => 'ธนาคารพาณิชย์',
                'expertise_name_en' => 'Commercial Banking',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            85 => 
            array (
                'id' => 86,
                'major_code' => 'AG',
                'expertise_code' => 'A705',
                'expertise_name_th' => 'สินเชื่อสหกรณ์',
                'expertise_name_en' => 'Cooperative Credit',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            86 => 
            array (
                'id' => 87,
                'major_code' => 'AG',
                'expertise_code' => 'A706',
                'expertise_name_th' => 'การระดมทรัพยากรสถาบันออมทรัพย์',
                'expertise_name_en' => 'Resource Mobilization/Saving Institutions',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            87 => 
            array (
                'id' => 88,
                'major_code' => 'AG',
                'expertise_code' => 'A707',
                'expertise_name_th' => 'สถาบันองค์กรและการจัดการ',
                'expertise_name_en' => 'Institutions-Organization And Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            88 => 
            array (
                'id' => 89,
                'major_code' => 'AG',
                'expertise_code' => 'A708',
                'expertise_name_th' => 'องค์กรพัฒนา',
                'expertise_name_en' => 'Development Corporations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            89 => 
            array (
                'id' => 90,
                'major_code' => 'AG',
                'expertise_code' => 'A709',
                'expertise_name_th' => 'องค์กรระบบการตลาด',
                'expertise_name_en' => 'Marketing Organizations/Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            90 => 
            array (
                'id' => 91,
                'major_code' => 'AG',
                'expertise_code' => 'A710',
                'expertise_name_th' => 'องค์กรเพื่อการจัดหาและให้บริการ',
                'expertise_name_en' => 'Supplies/Services Organizations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            91 => 
            array (
                'id' => 92,
                'major_code' => 'AG',
                'expertise_code' => 'A711',
                'expertise_name_th' => 'องค์กรสหกรณ์',
                'expertise_name_en' => 'Cooperative Organizations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            92 => 
            array (
                'id' => 93,
                'major_code' => 'AG',
                'expertise_code' => 'A712',
                'expertise_name_th' => 'การประกันพืชผลปศุสัตว์',
                'expertise_name_en' => 'Crop/Livestock Insurance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            93 => 
            array (
                'id' => 94,
                'major_code' => 'AG',
                'expertise_code' => 'A713',
                'expertise_name_th' => 'การบริการส่งเสริมองค์กรและการจัดการ',
                'expertise_name_en' => 'Extension Services - Organization and Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            94 => 
            array (
                'id' => 95,
                'major_code' => 'AG',
                'expertise_code' => 'A800',
                'expertise_name_th' => 'การผลิตนอกภาคเกษตรในชนบท',
                'expertise_name_en' => 'Rural Non-Farm Production',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            95 => 
            array (
                'id' => 96,
                'major_code' => 'AG',
                'expertise_code' => 'A801',
                'expertise_name_th' => 'วิสาหกิจขนาดกลางและขนาดย่อม',
                'expertise_name_en' => 'Medium & Small-Scale Enterprises',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            96 => 
            array (
                'id' => 97,
                'major_code' => 'AG',
                'expertise_code' => 'A801A',
                'expertise_name_th' => 'หัตถกรรม',
                'expertise_name_en' => 'Handicrafts',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            97 => 
            array (
                'id' => 98,
                'major_code' => 'AG',
                'expertise_code' => 'A801B',
                'expertise_name_th' => 'ช่างโลหะ',
                'expertise_name_en' => 'Blacksmiths',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            98 => 
            array (
                'id' => 99,
                'major_code' => 'AG',
                'expertise_code' => 'A801C',
                'expertise_name_th' => 'ช่างไม้',
                'expertise_name_en' => 'Carpenters',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            99 => 
            array (
                'id' => 100,
                'major_code' => 'AG',
                'expertise_code' => 'A801D',
                'expertise_name_th' => 'การทำเหมือง',
                'expertise_name_en' => 'Mining',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            100 => 
            array (
                'id' => 101,
                'major_code' => 'AG',
                'expertise_code' => 'A801E',
                'expertise_name_th' => 'การบริการส่วนบุคคล',
                'expertise_name_en' => 'Personal Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            101 => 
            array (
                'id' => 102,
                'major_code' => 'AG',
                'expertise_code' => 'A801F',
                'expertise_name_th' => 'โภชนาการ',
                'expertise_name_en' => 'Nutrition',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            102 => 
            array (
                'id' => 103,
                'major_code' => 'AG',
                'expertise_code' => 'A801G',
                'expertise_name_th' => 'การบริการขนส่ง',
                'expertise_name_en' => 'Transport Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            103 => 
            array (
                'id' => 104,
                'major_code' => 'AG',
                'expertise_code' => 'A801H',
                'expertise_name_th' => 'การบริการซ่อมแซม',
                'expertise_name_en' => 'Repair Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            104 => 
            array (
                'id' => 105,
                'major_code' => 'AG',
                'expertise_code' => 'A801I',
                'expertise_name_th' => 'นิคมอุตสาหกรรมขนาดย่อม',
                'expertise_name_en' => 'Mini Industrial Estates',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            105 => 
            array (
                'id' => 106,
                'major_code' => 'AG',
                'expertise_code' => 'A802',
                'expertise_name_th' => 'การบริหารวิสาหกิจขนาดย่อม',
                'expertise_name_en' => 'Management Of Small Enterprises',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            106 => 
            array (
                'id' => 107,
                'major_code' => 'AG',
                'expertise_code' => 'A803',
                'expertise_name_th' => 'การส่งเสริมกิจกรรมนอกภาคเกษตร',
                'expertise_name_en' => 'Non-Farm Extension',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            107 => 
            array (
                'id' => 108,
                'major_code' => 'AG',
                'expertise_code' => 'A900',
                'expertise_name_th' => 'เครื่องจักรกลการเกษตร',
                'expertise_name_en' => 'Farm Machanisation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            108 => 
            array (
                'id' => 109,
                'major_code' => 'AG',
                'expertise_code' => 'A901',
                'expertise_name_th' => 'การปรับหน้าดินและการเคลื่อนย้ายดิน',
                'expertise_name_en' => 'Land-Forming And Earth-Moving',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            109 => 
            array (
                'id' => 110,
                'major_code' => 'AG',
                'expertise_code' => 'A902',
                'expertise_name_th' => 'การแผ้วถางที่ดิน',
                'expertise_name_en' => 'Clearing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            110 => 
            array (
                'id' => 111,
                'major_code' => 'AG',
                'expertise_code' => 'A903',
                'expertise_name_th' => 'การเพาะปลูก',
                'expertise_name_en' => 'Cultivation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            111 => 
            array (
                'id' => 112,
                'major_code' => 'AG',
                'expertise_code' => 'A904',
                'expertise_name_th' => 'การป้องกันพืชผล',
                'expertise_name_en' => 'Crop Protection',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            112 => 
            array (
                'id' => 113,
                'major_code' => 'AG',
                'expertise_code' => 'A905',
                'expertise_name_th' => 'การเก็บเกี่ยว',
                'expertise_name_en' => 'Harvesting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            113 => 
            array (
                'id' => 114,
                'major_code' => 'AG',
                'expertise_code' => 'A906',
                'expertise_name_th' => 'การแปรรูป',
                'expertise_name_en' => 'Processing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            114 => 
            array (
                'id' => 115,
                'major_code' => 'AG',
                'expertise_code' => 'A907',
                'expertise_name_th' => 'การจัดการลำเลียงขนถ่ายวัสดุ',
                'expertise_name_en' => 'Materials Handling',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            115 => 
            array (
                'id' => 116,
                'major_code' => 'AG',
                'expertise_code' => 'A908',
                'expertise_name_th' => 'อุปกรณ์การเกษตรผู้ถือครองรายย่อย',
                'expertise_name_en' => 'Farm Implement - Smallholders',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            116 => 
            array (
                'id' => 117,
                'major_code' => 'AG',
                'expertise_code' => 'A909',
                'expertise_name_th' => 'โรงซ่อมบำรุงรักษา',
                'expertise_name_en' => 'Repair/Maintenance Workshops',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            117 => 
            array (
                'id' => 118,
                'major_code' => 'AG',
                'expertise_code' => 'A1000',
                'expertise_name_th' => 'เมล็ดพันธุ์พืช',
                'expertise_name_en' => 'Seeds',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            118 => 
            array (
                'id' => 119,
                'major_code' => 'AG',
                'expertise_code' => 'A1100',
                'expertise_name_th' => 'การควบคุมศัตรูพืชโรควัชพืช',
                'expertise_name_en' => 'Pest/Disease/Weed Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            119 => 
            array (
                'id' => 120,
                'major_code' => 'AG',
                'expertise_code' => 'A1200',
                'expertise_name_th' => 'การบริการด้านปศุสัตว์',
                'expertise_name_en' => 'Livestock Service',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            120 => 
            array (
                'id' => 121,
                'major_code' => 'AG',
                'expertise_code' => 'A1300',
                'expertise_name_th' => 'ป่าไม้',
                'expertise_name_en' => 'Forestry',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            121 => 
            array (
                'id' => 122,
                'major_code' => 'AG',
                'expertise_code' => 'A1400',
                'expertise_name_th' => 'การประมง',
                'expertise_name_en' => 'Fisherics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            122 => 
            array (
                'id' => 123,
                'major_code' => 'AG',
                'expertise_code' => 'A1500',
                'expertise_name_th' => 'การผลิตของผู้ถือครองรายย่อยเกษตรน้ำฝน',
                'expertise_name_en' => 'Production Smallholder Rainfed',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            123 => 
            array (
                'id' => 124,
                'major_code' => 'AG',
                'expertise_code' => 'A1600',
                'expertise_name_th' => 'การผลิตของผู้ถือครองรายย่อยเกษตรชลประทาน',
                'expertise_name_en' => 'Production Smallholder Irrigated',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            124 => 
            array (
                'id' => 125,
                'major_code' => 'AG',
                'expertise_code' => 'A1700',
                'expertise_name_th' => 'การผลิตเชิงพาณิชย์เกษตรน้ำฝน',
                'expertise_name_en' => 'Production Commercial Rainfed',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            125 => 
            array (
                'id' => 126,
                'major_code' => 'AG',
                'expertise_code' => 'A1800',
                'expertise_name_th' => 'การผลิตเชิงพาณิชย์เกษตรชลประทาน',
                'expertise_name_en' => 'Production Commercial Irrigated',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            126 => 
            array (
                'id' => 127,
                'major_code' => 'AG',
                'expertise_code' => 'A1900',
                'expertise_name_th' => 'การจัดการและการเก็บรักษาท่าเรือและสถานีขนถ่าย',
                'expertise_name_en' => 'Handling and Storage Port & Terminal',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            127 => 
            array (
                'id' => 128,
                'major_code' => 'AG',
                'expertise_code' => 'A2000',
                'expertise_name_th' => 'การจัดการและการเก็บรักษาณสถานที่ผลิตและการขนย้าย',
                'expertise_name_en' => 'Handling and Storage On-Farm & Intermediate',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            128 => 
            array (
                'id' => 129,
                'major_code' => 'AG',
                'expertise_code' => 'A2100',
                'expertise_name_th' => 'การตลาดและการขนส่งเพื่อการส่งออก',
                'expertise_name_en' => 'Marketing and Transport Export',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            129 => 
            array (
                'id' => 130,
                'major_code' => 'AG',
                'expertise_code' => 'A2200',
                'expertise_name_th' => 'การตลาดและการขนส่งการขายส่งและการขายปลีก',
                'expertise_name_en' => 'Marketng and Transport Whole-sale & Retail',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            130 => 
            array (
                'id' => 131,
                'major_code' => 'AG',
                'expertise_code' => 'A2300',
                'expertise_name_th' => 'การแปรรูปและหรืออุตสาหกรรมเกษตร',
                'expertise_name_en' => 'Processing and/or Agro-Industry',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            131 => 
            array (
                'id' => 132,
                'major_code' => 'AG',
                'expertise_code' => 'A2400',
                'expertise_name_th' => 'การส่งเสริมการเกษตรและพัฒนาชนบท',
                'expertise_name_en' => 'Extension Agriculture And Rural Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            132 => 
            array (
                'id' => 133,
                'major_code' => 'BU',
                'expertise_code' => 'B100',
                'expertise_name_th' => 'อุตสาหกรรมก่อสร้าง',
                'expertise_name_en' => 'Buildings',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            133 => 
            array (
                'id' => 134,
                'major_code' => 'BU',
                'expertise_code' => 'B101',
                'expertise_name_th' => 'การเสริมสร้างองค์กร',
                'expertise_name_en' => 'Institution Building',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            134 => 
            array (
                'id' => 135,
                'major_code' => 'BU',
                'expertise_code' => 'B102',
                'expertise_name_th' => 'สมาคมการค้าของผู้รับเหมาก่อสร้าง',
                'expertise_name_en' => 'Contractors\' Trade Associations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            135 => 
            array (
                'id' => 136,
                'major_code' => 'BU',
                'expertise_code' => 'B103',
                'expertise_name_th' => 'ประเด็นเรื่องแรงงานองค์กรด้านแรงงาน',
                'expertise_name_en' => 'Labor Issues, Labor Organizations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            136 => 
            array (
                'id' => 137,
                'major_code' => 'BU',
                'expertise_code' => 'B200',
                'expertise_name_th' => 'การบริหารการก่อสร้าง',
                'expertise_name_en' => 'Construction Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            137 => 
            array (
                'id' => 138,
                'major_code' => 'BU',
                'expertise_code' => 'B201',
                'expertise_name_th' => 'งานทำเองการพัฒนาความสามารถของแผนก',
                'expertise_name_en' => 'Force Account, Department Capacity Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            138 => 
            array (
                'id' => 139,
                'major_code' => 'BU',
                'expertise_code' => 'B202',
                'expertise_name_th' => 'การพัฒนาความสามารถในการก่อสร้างขององค์กรชุมชน',
                'expertise_name_en' => 'Development Of Construction Capacity of Community Organizations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            139 => 
            array (
                'id' => 140,
                'major_code' => 'BU',
                'expertise_code' => 'B203',
                'expertise_name_th' => 'การบริหารวิสาหกิจบริษัท',
                'expertise_name_en' => 'Coporate/Firm Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            140 => 
            array (
                'id' => 141,
                'major_code' => 'BU',
                'expertise_code' => 'B203A',
                'expertise_name_th' => 'ด้านเทคนิค',
                'expertise_name_en' => 'Technical',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            141 => 
            array (
                'id' => 142,
                'major_code' => 'BU',
                'expertise_code' => 'B203B',
                'expertise_name_th' => 'ด้านพาณิชย์',
                'expertise_name_en' => 'Commercial',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            142 => 
            array (
                'id' => 143,
                'major_code' => 'BU',
                'expertise_code' => 'B204',
                'expertise_name_th' => 'การบริหารสถานที่ก่อสร้างการดำเนินงานก่อสร้าง',
                'expertise_name_en' => 'Site Management, Work Execution',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            143 => 
            array (
                'id' => 144,
                'major_code' => 'BU',
                'expertise_code' => 'B204A',
                'expertise_name_th' => 'อาคาร',
                'expertise_name_en' => 'Buildings',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            144 => 
            array (
                'id' => 145,
                'major_code' => 'BU',
                'expertise_code' => 'B204B',
                'expertise_name_th' => 'งานโยธา',
                'expertise_name_en' => 'Civil Works',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            145 => 
            array (
                'id' => 146,
                'major_code' => 'BU',
                'expertise_code' => 'B204C',
                'expertise_name_th' => 'งานพิเศษโรงงานอุตสาหกรรมฯลฯ',
            'expertise_name_en' => 'Special Works (Industrial Plants, etc.)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            146 => 
            array (
                'id' => 147,
                'major_code' => 'BU',
                'expertise_code' => 'B205',
                'expertise_name_th' => 'วิศวกรรมก่อสร้าง',
                'expertise_name_en' => 'Construction Engineering',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            147 => 
            array (
                'id' => 148,
                'major_code' => 'BU',
                'expertise_code' => 'B206',
                'expertise_name_th' => 'การฝึกอบรมผู้รับเหมา',
                'expertise_name_en' => 'Contractor Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            148 => 
            array (
                'id' => 149,
                'major_code' => 'BU',
                'expertise_code' => 'B207',
                'expertise_name_th' => 'การบริหารการย้ายสำนักงาน',
                'expertise_name_en' => 'Management Of Office Relocation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            149 => 
            array (
                'id' => 150,
                'major_code' => 'BU',
                'expertise_code' => 'B300',
                'expertise_name_th' => 'เทคโนโลยีเครื่องมืออุปกรณ์วัสดุและการฝึกอบรบ',
                'expertise_name_en' => 'Technology, Equipment, Materials and Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            150 => 
            array (
                'id' => 151,
                'major_code' => 'BU',
                'expertise_code' => 'B301',
                'expertise_name_th' => 'การพัฒนาเทคโนโลยีการก่อสร้างที่เหมาะสม',
                'expertise_name_en' => 'Development Of Appropriate Construction Technology',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            151 => 
            array (
                'id' => 152,
                'major_code' => 'BU',
                'expertise_code' => 'B302',
                'expertise_name_th' => 'เครื่องมืออุปกรณ์',
                'expertise_name_en' => 'Equipment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            152 => 
            array (
                'id' => 153,
                'major_code' => 'BU',
                'expertise_code' => 'B303',
                'expertise_name_th' => 'วัสดุ',
                'expertise_name_en' => 'Materials',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            153 => 
            array (
                'id' => 154,
                'major_code' => 'BU',
                'expertise_code' => 'B304',
                'expertise_name_th' => 'การฝึกอบรบ',
                'expertise_name_en' => 'Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            154 => 
            array (
                'id' => 155,
                'major_code' => 'BU',
                'expertise_code' => 'B400',
                'expertise_name_th' => 'การเงินการประกันและการค้ำประกัน',
                'expertise_name_en' => 'Finance, Insurance And Bonding',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            155 => 
            array (
                'id' => 156,
                'major_code' => 'ED',
                'expertise_code' => 'C100',
                'expertise_name_th' => 'การศึกษา',
                'expertise_name_en' => 'Education',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            156 => 
            array (
                'id' => 157,
                'major_code' => 'ED',
                'expertise_code' => 'C101',
                'expertise_name_th' => 'เศรษฐศาสตร์การศึกษาและการเงินรวมถึงอัตราผลตอบแทนและการวิเคราะห์ต้นทุนผลประโยชน์และความคุ้มทุน',
                'expertise_name_en' => 'Education Economics And Financing (Including Rate or Return, Cost Benefit and Co',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                157 => 
                array (
                    'id' => 158,
                    'major_code' => 'ED',
                    'expertise_code' => 'C102',
                    'expertise_name_th' => 'การศึกษาการบริหารแบบมหภาค',
                    'expertise_name_en' => 'Education Macro-Administration',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                158 => 
                array (
                    'id' => 159,
                    'major_code' => 'ED',
                    'expertise_code' => 'C103',
                    'expertise_name_th' => 'สำมะโนประชากรการจัดการศึกษา',
                    'expertise_name_en' => 'Demography/School Mapping',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                159 => 
                array (
                    'id' => 160,
                    'major_code' => 'ED',
                    'expertise_code' => 'C104',
                    'expertise_name_th' => 'การศึกษาการพัฒนาในชนบท',
                    'expertise_name_en' => 'Rural Education/Development',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                160 => 
                array (
                    'id' => 161,
                    'major_code' => 'ED',
                    'expertise_code' => 'C105',
                    'expertise_name_th' => 'สถิติทางการศึกษา',
                    'expertise_name_en' => 'Education Statistics',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                161 => 
                array (
                    'id' => 162,
                    'major_code' => 'ED',
                    'expertise_code' => 'C106',
                    'expertise_name_th' => 'การฝึกอบรมการอ่าน',
                    'expertise_name_en' => 'Literacy Training',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                162 => 
                array (
                    'id' => 163,
                    'major_code' => 'ED',
                    'expertise_code' => 'C107',
                    'expertise_name_th' => 'ระบบการศึกษา',
                    'expertise_name_en' => 'Education Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                163 => 
                array (
                    'id' => 164,
                    'major_code' => 'ED',
                    'expertise_code' => 'C108',
                    'expertise_name_th' => 'รัฐประศาสนศาสตร์และการบริหารราชการพลเรือน',
                    'expertise_name_en' => 'Public & Civil Service Administration',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                164 => 
                array (
                    'id' => 165,
                    'major_code' => 'ED',
                    'expertise_code' => 'C200',
                    'expertise_name_th' => 'การวางแผนโรงเรียนไมโคร',
                'expertise_name_en' => 'School Planning (Micro)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                165 => 
                array (
                    'id' => 166,
                    'major_code' => 'ED',
                    'expertise_code' => 'C201',
                    'expertise_name_th' => 'องค์กรการบริหารโรงเรียน',
                    'expertise_name_en' => 'School Organization/Administration',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                166 => 
                array (
                    'id' => 167,
                    'major_code' => 'ED',
                    'expertise_code' => 'C202',
                    'expertise_name_th' => 'การวางแผนสิ่งอำนวยความสะดวกไม่ใช่การออกแบบอาคาร',
                'expertise_name_en' => 'Facilities Planning (Not Design Of Buildings)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                167 => 
                array (
                    'id' => 168,
                    'major_code' => 'ED',
                    'expertise_code' => 'C300',
                    'expertise_name_th' => 'การวางแผนโรงเรียนไมโครการพัฒนาหลักสูตรและหรือการพัฒนาความต้องการอุปกรณ์การสอน',
                'expertise_name_en' => 'School Planning (Micro): Curricurum Development and/or Development of Instructio',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                168 => 
                array (
                    'id' => 169,
                    'major_code' => 'ED',
                    'expertise_code' => 'C301',
                    'expertise_name_th' => 'วิทยาศาสตร์ระดับมหาวิทยาลัย',
                    'expertise_name_en' => 'Sciences - University Level',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                169 => 
                array (
                    'id' => 170,
                    'major_code' => 'ED',
                    'expertise_code' => 'C302',
                    'expertise_name_th' => 'วิทยาศาสตร์ระดับโรงเรียนมัธยมศึกษา',
                    'expertise_name_en' => 'Sciences - Secondary School Level',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                170 => 
                array (
                    'id' => 171,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303',
                    'expertise_name_th' => 'ระดับมหาวิทยาลัยเทคนิคอุตสาหกรรมอาชีวะ',
                    'expertise_name_en' => 'Technical/Industrial/Vocational University Level',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                171 => 
                array (
                    'id' => 172,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303A',
                    'expertise_name_th' => 'วิศวกรรมโยธาทั่วไป',
                    'expertise_name_en' => 'Civil Engineering: General',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                172 => 
                array (
                    'id' => 173,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303B',
                    'expertise_name_th' => 'วิศวกรรมโยธาปฐพีกลศาสตร์',
                    'expertise_name_en' => 'Civil Engineering: Soil Machanics',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                173 => 
                array (
                    'id' => 174,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303C',
                    'expertise_name_th' => 'วิศวกรรมโยธาโครงสร้าง',
                    'expertise_name_en' => 'Civil Engineering: Structures',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                174 => 
                array (
                    'id' => 175,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303D',
                    'expertise_name_th' => 'วิศวกรรมโยธาการสำรวจและการเขียนแบบ',
                    'expertise_name_en' => 'Civil Engineering: Surveying And Drafting',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                175 => 
                array (
                    'id' => 176,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303E',
                    'expertise_name_th' => 'วิศวกรรมเครื่องกลทั่วไป',
                    'expertise_name_en' => 'Mechanical Engineering: General',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                176 => 
                array (
                    'id' => 177,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303F',
                    'expertise_name_th' => 'วิศวกรรมเครื่องกลเทอร์โมไดนามิกส์',
                    'expertise_name_en' => 'Mechanical Engineering: Thermo-Dynamics',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                177 => 
                array (
                    'id' => 178,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303G',
                    'expertise_name_th' => 'วิศวกรรมเครื่องกลกลศาสตร์ของการไหล',
                    'expertise_name_en' => 'Mechanical Engineering: Fluid Mechanics',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                178 => 
                array (
                    'id' => 179,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303H',
                    'expertise_name_th' => 'วิศวกรรมเครื่องกลวัสดุและมาตรวิทยา',
                    'expertise_name_en' => 'Mechanical Engineering: Materials and Metrology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                179 => 
                array (
                    'id' => 180,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303I',
                    'expertise_name_th' => 'วิศวกรรมไฟฟ้าทั่วไป',
                    'expertise_name_en' => 'Electrical Engineering: Gerneral',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                180 => 
                array (
                    'id' => 181,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303J',
                    'expertise_name_th' => 'วิศวกรรมไฟฟ้าเครื่องจักรกลไฟฟ้าและระบบจ่ายไฟ',
                    'expertise_name_en' => '',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                181 => 
                array (
                    'id' => 182,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303K',
                    'expertise_name_th' => 'วิศวกรรมไฟฟ้าเทคโนโลยีไฟฟ้า',
                    'expertise_name_en' => 'Electrical Engineering: Electrical Technology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                182 => 
                array (
                    'id' => 183,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303L',
                    'expertise_name_th' => 'วิศวกรรมไฟฟ้าอิเล็กทรอนิกส์สื่อสารและเทคนิคดิจิตอล',
                    'expertise_name_en' => 'Electrical Engineering: Electronics, Communications and Digital Techniques',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                183 => 
                array (
                    'id' => 184,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303M',
                    'expertise_name_th' => 'วิศวกรรมเคมี',
                    'expertise_name_en' => 'Chemical Engineering',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                184 => 
                array (
                    'id' => 185,
                    'major_code' => 'ED',
                    'expertise_code' => 'C303N',
                    'expertise_name_th' => 'การบัญชีและการบริหารธุรกิจ',
                    'expertise_name_en' => 'Accounting & Business Administration',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                185 => 
                array (
                    'id' => 186,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304',
                    'expertise_name_th' => 'ระดับกึ่งวิชาชีพเทคนิคอุตสาหกรรมอาชีวะมัธยมศึกษาและหลังจากจบมัธยมศึกษา',
                    'expertise_name_en' => 'Technical/Industrial Vocational-Secondary and Post-Secondary Sub-Professional Le',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                186 => 
                array (
                    'id' => 187,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304A',
                    'expertise_name_th' => 'การค้าด้านงานโยธาอาคารทั่วไ',
                    'expertise_name_en' => 'Civil/Building Trades: General',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                187 => 
                array (
                    'id' => 188,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304B',
                    'expertise_name_th' => 'การค้าด้านงานโยธาอาคารงานไม้งานไม้แต่งและงานเขียนแบบ',
                    'expertise_name_en' => 'Civil/Building Trades: Carpentry, Joinery and Drafting',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                188 => 
                array (
                    'id' => 189,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304C',
                    'expertise_name_th' => 'การค้าด้านงานโยธาอาคารงานโครงสร้างงานอิฐงานท่อประปา',
                    'expertise_name_en' => 'Civil/Building Trades: Structures, Masonry and Plumbing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                189 => 
                array (
                    'id' => 190,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304D',
                    'expertise_name_th' => 'ฐพีกลศาสตร์และการสำรวจ',
                    'expertise_name_en' => 'Soil Mechanics And Surveying',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                190 => 
                array (
                    'id' => 191,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304E',
                    'expertise_name_th' => 'การค้าด้านงานเครื่องกลทั่วไป',
                    'expertise_name_en' => 'Mechanical Trades: General',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                191 => 
                array (
                    'id' => 192,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304F',
                    'expertise_name_th' => 'การค้าด้านงานเครื่องกลงานโลหะและงานซ่อม',
                    'expertise_name_en' => 'Mechanical Trades: Metalworks And Workshops Practice',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                192 => 
                array (
                    'id' => 193,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304G',
                    'expertise_name_th' => 'การค้าด้านงานเครื่องกลเครื่องยนต์ความร้อนรวมถึงช่างซ่อมยานยนต์รถยนต์เทอร์โมไดนามิกส์และไฮโดรลิก',
                    'expertise_name_en' => '',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                193 => 
                array (
                    'id' => 194,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304H',
                    'expertise_name_th' => 'การค้าด้านงานเครื่องกลความแข็งแรงของวัสดุการทดสอบและมาตรวิทยา',
                    'expertise_name_en' => 'Mechanical Trades: Strength Of Materials, Testing and Metrology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                194 => 
                array (
                    'id' => 195,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304I',
                    'expertise_name_th' => 'การค้าด้านงานไฟฟ้าทั่วไป',
                    'expertise_name_en' => 'Electrical Trades: General',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                195 => 
                array (
                    'id' => 196,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304J',
                    'expertise_name_th' => 'การค้าด้านงานไฟฟ้าการผลิตการส่งการจ่ายและการใช้พลังงานไฟฟ้า',
                    'expertise_name_en' => '',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                196 => 
                array (
                    'id' => 197,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304K',
                    'expertise_name_th' => 'การค้าด้านงานไฟฟ้าอิเล็กทรอนิกส์โทรศัพท์เทคนิคดิจิตอลวิทยุและเทคโนโลยีโทรทัศน์',
                    'expertise_name_en' => '',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                197 => 
                array (
                    'id' => 198,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304L',
                    'expertise_name_th' => 'ธุรกิจรับจัดอาหารกิจการโรงแรม',
                'expertise_name_en' => 'Catering (Hotel Trades)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                198 => 
                array (
                    'id' => 199,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304M',
                    'expertise_name_th' => 'การพิมพ์',
                    'expertise_name_en' => 'Printing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                199 => 
                array (
                    'id' => 200,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304N',
                    'expertise_name_th' => 'การค้าสิ่งทอ',
                    'expertise_name_en' => 'Textile Trades',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                200 => 
                array (
                    'id' => 201,
                    'major_code' => 'ED',
                    'expertise_code' => 'C304O',
                    'expertise_name_th' => 'การศึกษาธุรกิจและเครื่องมืออุปกรณ์สำนักงาน',
                    'expertise_name_en' => 'Business Studies And Office Machines',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                201 => 
                array (
                    'id' => 202,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305',
                    'expertise_name_th' => 'การเกษตรระดับมหาวิทยาลัย',
                    'expertise_name_en' => 'Agricultural - University Level',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                202 => 
                array (
                    'id' => 203,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305A',
                    'expertise_name_th' => 'เกษตรกรรมทั่วไปรวมถึงพืชไร่โรคพืชปฐพีศาสตร์การขยายพันธุ์พืชและเครื่องจักรกลการเกษตร',
                'expertise_name_en' => 'General Agriculture (Including Agronomy, Plant Pathology, Soil Science, Plant Breeding, and Farm Mechanics)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                203 => 
                array (
                    'id' => 204,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305B',
                    'expertise_name_th' => 'พืชสวน',
                    'expertise_name_en' => 'Horticulture',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                204 => 
                array (
                    'id' => 205,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305C',
                    'expertise_name_th' => 'วิศวกรรมชลประทาน',
                    'expertise_name_en' => 'Irrigation Engineering',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                205 => 
                array (
                    'id' => 206,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305D',
                    'expertise_name_th' => 'การอนุรักษ์ดิน',
                    'expertise_name_en' => 'Soil Conservation',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                206 => 
                array (
                    'id' => 207,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305E',
                    'expertise_name_th' => 'เครื่องจักรกลการเกษตร',
                    'expertise_name_en' => 'Agricultural Mechanization',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                207 => 
                array (
                    'id' => 208,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305F',
                    'expertise_name_th' => 'เศรษฐศาสตร์การเกษตร',
                    'expertise_name_en' => 'Agricultural Economics',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                208 => 
                array (
                    'id' => 209,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305G',
                    'expertise_name_th' => 'การผลิตปศุสัตว์',
                    'expertise_name_en' => 'Livestock Production',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                209 => 
                array (
                    'id' => 210,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305H',
                    'expertise_name_th' => 'ยาบำบัดโรคสัตว์',
                    'expertise_name_en' => 'Veterinary Medicine',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                210 => 
                array (
                    'id' => 211,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305I',
                    'expertise_name_th' => '่ป่าไม้',
                    'expertise_name_en' => 'Forestry',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                211 => 
                array (
                    'id' => 212,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305J',
                    'expertise_name_th' => 'ประมง',
                    'expertise_name_en' => 'Fisheries',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                212 => 
                array (
                    'id' => 213,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305K',
                    'expertise_name_th' => 'สินเชื่อทางการเกษตร',
                    'expertise_name_en' => 'Agricultural Credit',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                213 => 
                array (
                    'id' => 214,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305L',
                    'expertise_name_th' => 'สหกรณ์การเกษตร',
                    'expertise_name_en' => 'Agricultural Cooperatives',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                214 => 
                array (
                    'id' => 215,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305M',
                    'expertise_name_th' => 'การศึกษาด้านการเกษตร',
                    'expertise_name_en' => 'Agricultural Education',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                215 => 
                array (
                    'id' => 216,
                    'major_code' => 'ED',
                    'expertise_code' => 'C305N',
                    'expertise_name_th' => 'การบริหารการเกษตรรวมถึงการบริหารโครงการและการบริหารไร่นา',
                'expertise_name_en' => 'Agricultural Management (Including Project Management and Farm Management)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                216 => 
                array (
                    'id' => 217,
                    'major_code' => 'ED',
                    'expertise_code' => 'C306',
                    'expertise_name_th' => 'การเกษตรระดับโรงเรียนมัธยมศึกษา',
                    'expertise_name_en' => 'Agricultural - Secondary School Level',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                217 => 
                array (
                    'id' => 218,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307',
                    'expertise_name_th' => 'การเกษตรการฝึกอบรมเจ้าหน้าที่ส่งเสริมเกษตรชนบท',
                    'expertise_name_en' => 'Agricultural - Rural Extension Personnel Training',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                218 => 
                array (
                    'id' => 219,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307A',
                    'expertise_name_th' => 'ไม้ยืนต้น',
                    'expertise_name_en' => 'Tree Crops',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                219 => 
                array (
                    'id' => 220,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307B',
                    'expertise_name_th' => 'พืชเกษตรน้ำฝน',
                    'expertise_name_en' => 'Rainfed Crops',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                220 => 
                array (
                    'id' => 221,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307C',
                    'expertise_name_th' => 'พืชชลประทาน',
                    'expertise_name_en' => 'Irrigated Crops',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                221 => 
                array (
                    'id' => 222,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307D',
                    'expertise_name_th' => 'การเลี้ยงสัตว์ในทุ่งหญ้าธรรมชาติ',
                    'expertise_name_en' => 'Range Livestock',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                222 => 
                array (
                    'id' => 223,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307E',
                    'expertise_name_th' => 'ปศุสัตว์แบบมีระบบ',
                    'expertise_name_en' => 'Intensive Livestock',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                223 => 
                array (
                    'id' => 224,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307F',
                    'expertise_name_th' => 'ปศุสัตว์ผลิตภัณฑ์นม',
                    'expertise_name_en' => 'Dairy Products Livestock',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                224 => 
                array (
                    'id' => 225,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307G',
                    'expertise_name_th' => 'การวางแผนการจัดการไร่นา',
                    'expertise_name_en' => 'Farm Planning/Management',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                225 => 
                array (
                    'id' => 226,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307H',
                    'expertise_name_th' => 'อาชีวศึกษา',
                    'expertise_name_en' => 'Vocational Training',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                226 => 
                array (
                    'id' => 227,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307I',
                    'expertise_name_th' => 'ป่าไม้เขตร้อน',
                    'expertise_name_en' => 'Tropical Forestry',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                227 => 
                array (
                    'id' => 228,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307J',
                    'expertise_name_th' => 'การปลูกป่า',
                    'expertise_name_en' => 'Plantation Forestry',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                228 => 
                array (
                    'id' => 229,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307K',
                    'expertise_name_th' => 'ประมงน้ำเค็ม',
                    'expertise_name_en' => 'Marine Fisheries',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                229 => 
                array (
                    'id' => 230,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307L',
                    'expertise_name_th' => 'ประมงน้ำจืด',
                    'expertise_name_en' => 'Riverine Fisheries',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                230 => 
                array (
                    'id' => 231,
                    'major_code' => 'ED',
                    'expertise_code' => 'C307M',
                    'expertise_name_th' => 'การเพาะเลี้ยงสัตว์น้ำในบ่อ',
                    'expertise_name_en' => 'Pond Culture Fisheries',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                231 => 
                array (
                    'id' => 232,
                    'major_code' => 'ED',
                    'expertise_code' => 'C308',
                    'expertise_name_th' => 'การศึกษาของผู้พิการ',
                    'expertise_name_en' => 'Education Of The Handicapped',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                232 => 
                array (
                    'id' => 233,
                    'major_code' => 'ED',
                    'expertise_code' => 'C309',
                    'expertise_name_th' => 'ประถมศึกษา',
                    'expertise_name_en' => 'Primary Education',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                233 => 
                array (
                    'id' => 234,
                    'major_code' => 'ED',
                    'expertise_code' => 'C310',
                    'expertise_name_th' => 'มัธยมศึกษา',
                    'expertise_name_en' => 'Secondary Education',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                234 => 
                array (
                    'id' => 235,
                    'major_code' => 'ED',
                    'expertise_code' => 'C311',
                    'expertise_name_th' => 'การศึกษาด้านการบัญชี',
                    'expertise_name_en' => 'Accounting Education',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                235 => 
                array (
                    'id' => 236,
                    'major_code' => 'ED',
                    'expertise_code' => 'C312',
                    'expertise_name_th' => 'การศึกษาผู้ใหญ่นอกโรงเรียน',
                    'expertise_name_en' => 'Non-Formal Adult Education',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                236 => 
                array (
                    'id' => 237,
                    'major_code' => 'ED',
                    'expertise_code' => 'C313',
                    'expertise_name_th' => 'การให้คำปรึกษาและการแนะแนว',
                    'expertise_name_en' => 'Guidance And Counselling',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                237 => 
                array (
                    'id' => 238,
                    'major_code' => 'ED',
                    'expertise_code' => 'C400',
                    'expertise_name_th' => 'การฝึกหัดครู',
                    'expertise_name_en' => 'Teacher Training',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                238 => 
                array (
                    'id' => 239,
                    'major_code' => 'ED',
                    'expertise_code' => 'C401',
                    'expertise_name_th' => 'การฝึกหัดครูอาชีวศึกษาเทคนิค',
                    'expertise_name_en' => 'Technical/Vocational Teachers\' Training',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                239 => 
                array (
                    'id' => 240,
                    'major_code' => 'ED',
                    'expertise_code' => 'C402',
                    'expertise_name_th' => 'การศึกษาครูประถมศึกษา',
                    'expertise_name_en' => 'Primary Teacher Education',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                240 => 
                array (
                    'id' => 241,
                    'major_code' => 'ED',
                    'expertise_code' => 'C403',
                    'expertise_name_th' => 'การศึกษาครูมัธยมศึกษา',
                    'expertise_name_en' => 'Secondary Teacher Education',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                241 => 
                array (
                    'id' => 242,
                    'major_code' => 'ED',
                    'expertise_code' => 'C404',
                    'expertise_name_th' => 'การฝึกอบรมผู้บริหารการศึกษาผู้ควบคุมนักวางแผนฯลฯ',
                    'expertise_name_en' => 'Training Of Educational Administrators, Supervisors, Planners, etc.',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                242 => 
                array (
                    'id' => 243,
                    'major_code' => 'ED',
                    'expertise_code' => 'C500',
                    'expertise_name_th' => 'วัสดุอุปกรณ์การศึกษาสื่อและเทคนิค',
                    'expertise_name_en' => 'Education Materials, Media And Techniques',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                243 => 
                array (
                    'id' => 244,
                    'major_code' => 'ED',
                    'expertise_code' => 'C501',
                    'expertise_name_th' => 'การผลิตหนังสือเรียน',
                    'expertise_name_en' => 'Textbook Production',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                244 => 
                array (
                    'id' => 245,
                    'major_code' => 'ED',
                    'expertise_code' => 'C502',
                    'expertise_name_th' => 'การผลิตสื่อการเรียนการสอน',
                    'expertise_name_en' => 'Teaching/Learning Materials Production',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                245 => 
                array (
                    'id' => 246,
                    'major_code' => 'ED',
                    'expertise_code' => 'C503',
                    'expertise_name_th' => 'การเรียนทางไกล',
                    'expertise_name_en' => 'Distance Learning',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                246 => 
                array (
                    'id' => 247,
                    'major_code' => 'ED',
                    'expertise_code' => 'C504',
                    'expertise_name_th' => 'โสตทัศนูปกรณ์',
                    'expertise_name_en' => 'Audio-Visual Aids',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                247 => 
                array (
                    'id' => 248,
                    'major_code' => 'ED',
                    'expertise_code' => 'C505',
                    'expertise_name_th' => 'วิทยุและโทรทัศน์เพื่อการศึกษา',
                    'expertise_name_en' => 'Educational Radio And Television',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                248 => 
                array (
                    'id' => 249,
                    'major_code' => 'ED',
                    'expertise_code' => 'C506',
                    'expertise_name_th' => 'การศึกษาทางไปรษณีย์',
                    'expertise_name_en' => 'Correspondence Learning',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                249 => 
                array (
                    'id' => 250,
                    'major_code' => 'ED',
                    'expertise_code' => 'C600',
                    'expertise_name_th' => 'แผนแม่บทมหาวิทยาลัย',
                    'expertise_name_en' => 'University Master Planning',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                250 => 
                array (
                    'id' => 251,
                    'major_code' => 'EG',
                    'expertise_code' => 'D100',
                    'expertise_name_th' => 'พลังงาน',
                    'expertise_name_en' => 'Energy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                251 => 
                array (
                    'id' => 252,
                    'major_code' => 'EG',
                    'expertise_code' => 'D101',
                    'expertise_name_th' => 'การพยากรณ์ความต้องการพลังงาน',
                    'expertise_name_en' => 'Energy Demand Forecasting',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                252 => 
                array (
                    'id' => 253,
                    'major_code' => 'EG',
                    'expertise_code' => 'D102',
                    'expertise_name_th' => 'เศรษฐศาสตร์พลังงาน',
                    'expertise_name_en' => 'Energy Economics',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                253 => 
                array (
                    'id' => 254,
                    'major_code' => 'EG',
                    'expertise_code' => 'D103',
                    'expertise_name_th' => 'การวางแผนด้านพลังงาน',
                    'expertise_name_en' => 'Energy Planning',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                254 => 
                array (
                    'id' => 255,
                    'major_code' => 'EG',
                    'expertise_code' => 'D104',
                    'expertise_name_th' => 'การกำหนดราคาพลังงาน โครงสร้างอัตราค่าพลังงาน',
                    'expertise_name_en' => 'Energy Pricing, Tariff Structuring',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                255 => 
                array (
                    'id' => 256,
                    'major_code' => 'EG',
                    'expertise_code' => 'D105',
                    'expertise_name_th' => 'การฝึกอบรมที่เกี่ยวกับพลังงาน',
                    'expertise_name_en' => 'Energy Related Training',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                256 => 
                array (
                    'id' => 257,
                    'major_code' => 'EG',
                    'expertise_code' => 'D106',
                    'expertise_name_th' => 'การอนุรักษ์พลังงาน',
                    'expertise_name_en' => 'Energy Conservation',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                257 => 
                array (
                    'id' => 258,
                    'major_code' => 'EG',
                    'expertise_code' => 'D106A',
                    'expertise_name_th' => 'บ้านพักอาศัย',
                    'expertise_name_en' => 'Households',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                258 => 
                array (
                    'id' => 259,
                    'major_code' => 'EG',
                    'expertise_code' => 'D106B',
                    'expertise_name_th' => 'อุตสาหกรรม',
                    'expertise_name_en' => 'Industrial',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                259 => 
                array (
                    'id' => 260,
                    'major_code' => 'EG',
                    'expertise_code' => 'D106C',
                    'expertise_name_th' => 'การขนส่ง',
                    'expertise_name_en' => 'Transport',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                260 => 
                array (
                    'id' => 261,
                    'major_code' => 'EG',
                    'expertise_code' => 'D106D',
                    'expertise_name_th' => 'อาคาร',
                    'expertise_name_en' => 'Building',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                261 => 
                array (
                    'id' => 262,
                    'major_code' => 'EG',
                    'expertise_code' => 'D106E',
                    'expertise_name_th' => 'การส่งไฟฟ้า',
                    'expertise_name_en' => 'Power Transmission',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                262 => 
                array (
                    'id' => 263,
                    'major_code' => 'EG',
                    'expertise_code' => 'D200',
                    'expertise_name_th' => 'ไฟฟ้ากำลัง',
                    'expertise_name_en' => 'Electric Power',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                263 => 
                array (
                    'id' => 264,
                    'major_code' => 'EG',
                    'expertise_code' => 'D201',
                    'expertise_name_th' => 'การวิเคราะห์และวางแผนระบบไฟฟ้า',
                    'expertise_name_en' => 'Power System Analysis And Planning',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                264 => 
                array (
                    'id' => 265,
                    'major_code' => 'EG',
                    'expertise_code' => 'D202',
                    'expertise_name_th' => 'การทำงานของระบบไฟฟ้า',
                    'expertise_name_en' => 'Power System Operation',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                265 => 
                array (
                    'id' => 266,
                    'major_code' => 'EG',
                    'expertise_code' => 'D203',
                    'expertise_name_th' => 'ระบบไฟฟ้าที่ควบคุมด้วยระบบอัตโนมัติไดนามิกคอนโทรลการทำแบบจำลองฯลฯ',
                'expertise_name_en' => 'Power System Automation (Control Dynamic, Simulation, etc.)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                266 => 
                array (
                    'id' => 267,
                    'major_code' => 'EG',
                    'expertise_code' => 'D204',
                    'expertise_name_th' => 'การผลิตไฟฟ้าไฟฟ้าพลังน้ำ',
                    'expertise_name_en' => 'Power Generation - Hydroeletric',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                267 => 
                array (
                    'id' => 268,
                    'major_code' => 'EG',
                    'expertise_code' => 'D204A',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Electro- Mechanical Equipment',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                268 => 
                array (
                    'id' => 269,
                    'major_code' => 'EG',
                    'expertise_code' => 'D204B',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Dam & Civil Works',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                269 => 
                array (
                    'id' => 270,
                    'major_code' => 'EG',
                    'expertise_code' => 'D204C',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Transformer & Switchyard',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                270 => 
                array (
                    'id' => 271,
                    'major_code' => 'EG',
                    'expertise_code' => 'D204D',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Instrument & Control',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                271 => 
                array (
                    'id' => 272,
                    'major_code' => 'EG',
                    'expertise_code' => 'D205',
                    'expertise_name_th' => 'การผลิตไฟฟ้าพลังความร้อนตามแบบ',
                    'expertise_name_en' => 'Power Generation - Conventional Thermal',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                272 => 
                array (
                    'id' => 273,
                    'major_code' => 'EG',
                    'expertise_code' => 'D205A',
                    'expertise_name_th' => 'โรงไฟฟ้าพลังไอน้ำ',
                    'expertise_name_en' => 'Steam Plants',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                273 => 
                array (
                    'id' => 274,
                    'major_code' => 'EG',
                    'expertise_code' => 'D205B',
                    'expertise_name_th' => 'โรงไฟฟ้าสันดาปภายในกังหันก๊าซ',
                'expertise_name_en' => 'Internal Combustion Plants (Gas Turbines)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                274 => 
                array (
                    'id' => 275,
                    'major_code' => 'EG',
                    'expertise_code' => 'D205C',
                    'expertise_name_th' => 'โรงไฟฟ้าพลังดีเซล',
                    'expertise_name_en' => 'Diesel Plants',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                275 => 
                array (
                    'id' => 276,
                    'major_code' => 'EG',
                    'expertise_code' => 'D206',
                    'expertise_name_th' => 'การผลิตไฟฟ้าพลังนิวเคลียร์',
                    'expertise_name_en' => 'Power Generation - Nuclear',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                276 => 
                array (
                    'id' => 277,
                    'major_code' => 'EG',
                    'expertise_code' => 'D206A',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Reactor & Main Components',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                277 => 
                array (
                    'id' => 278,
                    'major_code' => 'EG',
                    'expertise_code' => 'D206B',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Balance of Plant',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                278 => 
                array (
                    'id' => 279,
                    'major_code' => 'EG',
                    'expertise_code' => 'D207',
                    'expertise_name_th' => 'การผลิตไฟฟ้าอื่นๆ',
                    'expertise_name_en' => 'Power Generation - Other',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                279 => 
                array (
                    'id' => 280,
                    'major_code' => 'EG',
                    'expertise_code' => 'D207A',
                    'expertise_name_th' => 'โรงไฟฟ้าพลังความร้อนร่วม',
                    'expertise_name_en' => 'Combined-Cycle Plants',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                280 => 
                array (
                    'id' => 281,
                    'major_code' => 'EG',
                    'expertise_code' => 'D207B',
                    'expertise_name_th' => 'การเปลี่ยนระบบการผลิตของโรงไฟฟ้า',
                    'expertise_name_en' => 'Power Plant Conversion',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                281 => 
                array (
                    'id' => 282,
                    'major_code' => 'EG',
                    'expertise_code' => 'D207C',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Cogeneration',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                282 => 
                array (
                    'id' => 283,
                    'major_code' => 'EG',
                    'expertise_code' => 'D208',
                    'expertise_name_th' => 'ระบบส่งไฟฟ้า',
                    'expertise_name_en' => 'Power Transmission Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                283 => 
                array (
                    'id' => 284,
                    'major_code' => 'EG',
                    'expertise_code' => 'D208A',
                    'expertise_name_th' => 'แรงดันสูงพิเศษอีเอชวีสูงกว่า',
                'expertise_name_en' => 'Extra High Voltage (Over 220 Kv.)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                284 => 
                array (
                    'id' => 285,
                    'major_code' => 'EG',
                    'expertise_code' => 'D208B',
                    'expertise_name_th' => 'แรงดันต่ำและปานกลาง',
                    'expertise_name_en' => 'Low And Medium Voltage',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                285 => 
                array (
                    'id' => 286,
                    'major_code' => 'EG',
                    'expertise_code' => 'D208C',
                    'expertise_name_th' => 'สถานีย่อยแรงดันสูงพิเศษอีเอชวี',
                    'expertise_name_en' => 'Extra High Voltage Substations',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                286 => 
                array (
                    'id' => 287,
                    'major_code' => 'EG',
                    'expertise_code' => 'D208D',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Low And Medium Voltage Substantions',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                287 => 
                array (
                    'id' => 288,
                    'major_code' => 'EG',
                    'expertise_code' => 'D208E',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'HVDC Transmission',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                288 => 
                array (
                    'id' => 289,
                    'major_code' => 'EG',
                    'expertise_code' => 'D209',
                    'expertise_name_th' => 'ระบบจ่ายไฟฟ้า',
                    'expertise_name_en' => 'Power Distribution Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                289 => 
                array (
                    'id' => 290,
                    'major_code' => 'EG',
                    'expertise_code' => 'D209A',
                    'expertise_name_th' => 'null',
                'expertise_name_en' => 'Civil (Tunnel,Duct,Bank,etc.)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                290 => 
                array (
                    'id' => 291,
                    'major_code' => 'EG',
                    'expertise_code' => 'D209B',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Electrical',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                291 => 
                array (
                    'id' => 292,
                    'major_code' => 'EG',
                    'expertise_code' => 'D210',
                    'expertise_name_th' => 'การให้ความร้อนในเขตพื้นที่ชุมชนและการผลิตความร้อนร่วม',
                    'expertise_name_en' => 'District Heating And Co-Generation',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                292 => 
                array (
                    'id' => 293,
                    'major_code' => 'EG',
                    'expertise_code' => 'D211',
                    'expertise_name_th' => 'ระบบไฟฟ้าอุตสาหกรรม',
                    'expertise_name_en' => 'Industrial Power Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                293 => 
                array (
                    'id' => 294,
                    'major_code' => 'EG',
                    'expertise_code' => 'D212',
                    'expertise_name_th' => 'อัตราค่าไฟฟ้าการกำหนดราคาและการบริหารโหลด',
                    'expertise_name_en' => 'Tariffs/Pricing And Load Management',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                294 => 
                array (
                    'id' => 295,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213',
                    'expertise_name_th' => 'การบริหารการไฟฟ้าหรือหน่วยงานไฟฟ้า',
                    'expertise_name_en' => 'Electric Utilities Management',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                295 => 
                array (
                    'id' => 296,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213A',
                    'expertise_name_th' => 'องค์กรสถาบัน',
                    'expertise_name_en' => 'Organizational/Institutional',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                296 => 
                array (
                    'id' => 297,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213B',
                    'expertise_name_th' => 'ระบบบัญชี',
                    'expertise_name_en' => 'Accounting Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                297 => 
                array (
                    'id' => 298,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213C',
                    'expertise_name_th' => 'ระบบตรวจสอบ',
                    'expertise_name_en' => 'Auditing Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                298 => 
                array (
                    'id' => 299,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213D',
                    'expertise_name_th' => 'ระบบรายงาน',
                    'expertise_name_en' => 'Reporting Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                299 => 
                array (
                    'id' => 300,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213E',
                    'expertise_name_th' => 'ระบบสถิติ',
                    'expertise_name_en' => 'Statistical Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                300 => 
                array (
                    'id' => 301,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213F',
                    'expertise_name_th' => 'ระบบที่ใช้คอมพิวเตอร์ช่วยในการทำงาน',
                    'expertise_name_en' => 'Computerized Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                301 => 
                array (
                    'id' => 302,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213G',
                    'expertise_name_th' => 'ระบบประเมินการทำงานฝ่ายบริหาร',
                    'expertise_name_en' => 'Management Performance Evaluation System',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                302 => 
                array (
                    'id' => 303,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213H',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Power Transmission System',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                303 => 
                array (
                    'id' => 304,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213I',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Power Distribution System',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                304 => 
                array (
                    'id' => 305,
                    'major_code' => 'EG',
                    'expertise_code' => 'D213J',
                    'expertise_name_th' => 'การวางแผนธุรกิจ',
                    'expertise_name_en' => 'Business Planning',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                305 => 
                array (
                    'id' => 306,
                    'major_code' => 'EG',
                    'expertise_code' => 'D214',
                    'expertise_name_th' => 'ไฟฟ้าในชนบท',
                    'expertise_name_en' => 'Rural Electrification',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                306 => 
                array (
                    'id' => 307,
                    'major_code' => 'EG',
                    'expertise_code' => 'D215',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Power Industry Management',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                307 => 
                array (
                    'id' => 308,
                    'major_code' => 'EG',
                    'expertise_code' => 'D215A',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Organization/Institutional',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                308 => 
                array (
                    'id' => 309,
                    'major_code' => 'EG',
                    'expertise_code' => 'D215B',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Accountion System',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                309 => 
                array (
                    'id' => 310,
                    'major_code' => 'EG',
                    'expertise_code' => 'D215C',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Auditing System',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                310 => 
                array (
                    'id' => 311,
                    'major_code' => 'EG',
                    'expertise_code' => 'D215D',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Reporting System',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                311 => 
                array (
                    'id' => 312,
                    'major_code' => 'EG',
                    'expertise_code' => 'D215E',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Statistical System',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                312 => 
                array (
                    'id' => 313,
                    'major_code' => 'EG',
                    'expertise_code' => 'D215F',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Computerized Suste,',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                313 => 
                array (
                    'id' => 314,
                    'major_code' => 'EG',
                    'expertise_code' => 'D215G',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Management Performance Evaluation System',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                314 => 
                array (
                    'id' => 315,
                    'major_code' => 'EG',
                    'expertise_code' => 'D216',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Rural Electrification',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                315 => 
                array (
                    'id' => 316,
                    'major_code' => 'EG',
                    'expertise_code' => 'D300',
                    'expertise_name_th' => 'น้ำมันและก๊าซ',
                    'expertise_name_en' => 'Oil And Gas',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                316 => 
                array (
                    'id' => 317,
                    'major_code' => 'EG',
                    'expertise_code' => 'D301',
                    'expertise_name_th' => 'ปิโตรเลียม',
                    'expertise_name_en' => 'Petroleum',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                317 => 
                array (
                    'id' => 318,
                    'major_code' => 'EG',
                    'expertise_code' => 'D302',
                    'expertise_name_th' => 'ธรณีฟิสิกส์รวมทั้งการสำรวจธรณีฟิสิกส์',
                'expertise_name_en' => 'Geophysics (Including Geophysical Surveys)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                318 => 
                array (
                    'id' => 319,
                    'major_code' => 'EG',
                    'expertise_code' => 'D303',
                    'expertise_name_th' => 'วิศวกรรมการขุดเจาะ',
                    'expertise_name_en' => 'Drilling Engineering',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                319 => 
                array (
                    'id' => 320,
                    'major_code' => 'EG',
                    'expertise_code' => 'D303A',
                    'expertise_name_th' => 'บนฝั่ง',
                    'expertise_name_en' => 'Onshore',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                320 => 
                array (
                    'id' => 321,
                    'major_code' => 'EG',
                    'expertise_code' => 'D303B',
                    'expertise_name_th' => 'นอกฝั่ง',
                    'expertise_name_en' => 'Offshore',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                321 => 
                array (
                    'id' => 322,
                    'major_code' => 'EG',
                    'expertise_code' => 'D304',
                    'expertise_name_th' => 'วิศวกรรมการผลิต',
                    'expertise_name_en' => 'Production Engineering',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                322 => 
                array (
                    'id' => 323,
                    'major_code' => 'EG',
                    'expertise_code' => 'D304A',
                    'expertise_name_th' => 'บนฝั่ง',
                    'expertise_name_en' => 'Onshore',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                323 => 
                array (
                    'id' => 324,
                    'major_code' => 'EG',
                    'expertise_code' => 'D304B',
                    'expertise_name_th' => 'นอกฝั่ง',
                    'expertise_name_en' => 'Offshore',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                324 => 
                array (
                    'id' => 325,
                    'major_code' => 'EG',
                    'expertise_code' => 'D305',
                    'expertise_name_th' => 'วิศวกรรมแหล่งกักเก็บพลังงาน',
                    'expertise_name_en' => 'Reservoir Engineering',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                325 => 
                array (
                    'id' => 326,
                    'major_code' => 'EG',
                    'expertise_code' => 'D306',
                    'expertise_name_th' => 'การเพิ่มประสิทธิภาพในการนำทรัพยากรมาใช้ประโยชน์',
                    'expertise_name_en' => 'Enhanced Recovery',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                326 => 
                array (
                    'id' => 327,
                    'major_code' => 'EG',
                    'expertise_code' => 'D307',
                    'expertise_name_th' => 'การผลิตน้ำมันและก๊าซ',
                    'expertise_name_en' => 'Oil And Gas Production',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                327 => 
                array (
                    'id' => 328,
                    'major_code' => 'EG',
                    'expertise_code' => 'D307A',
                    'expertise_name_th' => 'บนฝั่งตามแบบ',
                    'expertise_name_en' => 'Conventional Onshore',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                328 => 
                array (
                    'id' => 329,
                    'major_code' => 'EG',
                    'expertise_code' => 'D307B',
                    'expertise_name_th' => 'นอกฝั่งตามแบบ',
                    'expertise_name_en' => 'Conventional Offshore',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                329 => 
                array (
                    'id' => 330,
                    'major_code' => 'EG',
                    'expertise_code' => 'D307C',
                    'expertise_name_th' => 'นอกแบบหรือต่างจากแบบทั่วไป',
                    'expertise_name_en' => 'Unconventional',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                330 => 
                array (
                    'id' => 331,
                    'major_code' => 'EG',
                    'expertise_code' => 'D308',
                    'expertise_name_th' => 'ท่อการส่ง',
                    'expertise_name_en' => 'Pipelines/Transmission',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                331 => 
                array (
                    'id' => 332,
                    'major_code' => 'EG',
                    'expertise_code' => 'D308A',
                    'expertise_name_th' => 'น้ำมันดิบ',
                    'expertise_name_en' => 'Crude Oil',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                332 => 
                array (
                    'id' => 333,
                    'major_code' => 'EG',
                    'expertise_code' => 'D308B',
                    'expertise_name_th' => 'น้ำมันสำเร็จรูปที่ผ่านการกลั่นแล้ว',
                    'expertise_name_en' => 'Refined Petroleum Products',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                333 => 
                array (
                    'id' => 334,
                    'major_code' => 'EG',
                    'expertise_code' => 'D308C',
                    'expertise_name_th' => 'ก๊าซธรรมชาติ',
                    'expertise_name_en' => 'Natural Gas',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                334 => 
                array (
                    'id' => 335,
                    'major_code' => 'EG',
                    'expertise_code' => 'D308D',
                    'expertise_name_th' => 'ก๊าซปิโตรเลียมเหลวหรือแอลพีจี',
                    'expertise_name_en' => 'LPG',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                335 => 
                array (
                    'id' => 336,
                    'major_code' => 'EG',
                    'expertise_code' => 'D308E',
                    'expertise_name_th' => 'ปิโตรเคมี',
                    'expertise_name_en' => 'Petrochemicals',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                336 => 
                array (
                    'id' => 337,
                    'major_code' => 'EG',
                    'expertise_code' => 'D309',
                    'expertise_name_th' => 'โรงกลั่นปิโตรเลียม',
                    'expertise_name_en' => 'Petroleum Refineries',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                337 => 
                array (
                    'id' => 338,
                    'major_code' => 'EG',
                    'expertise_code' => 'D309A',
                    'expertise_name_th' => 'การออกแบบกระบวนการกลั่น',
                    'expertise_name_en' => 'Process Design',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                338 => 
                array (
                    'id' => 339,
                    'major_code' => 'EG',
                    'expertise_code' => 'D309B',
                    'expertise_name_th' => 'การก่อสร้างโรงกลั่น',
                    'expertise_name_en' => 'Refinery Construction',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                339 => 
                array (
                    'id' => 340,
                    'major_code' => 'EG',
                    'expertise_code' => 'D309C',
                    'expertise_name_th' => 'การกลั่น',
                    'expertise_name_en' => 'Refinery Operation',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                340 => 
                array (
                    'id' => 341,
                    'major_code' => 'EG',
                    'expertise_code' => 'D309D',
                    'expertise_name_th' => 'การตลาดและการจำหน่าย',
                    'expertise_name_en' => 'Marketing And Distribution',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                341 => 
                array (
                    'id' => 342,
                    'major_code' => 'EG',
                    'expertise_code' => 'D310',
                    'expertise_name_th' => 'คลังเก็บปิโตรเลียมสถานีขนส่งหรือท่าขนส่ง',
                    'expertise_name_en' => 'Petroleum Storage/Terminals',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                342 => 
                array (
                    'id' => 343,
                    'major_code' => 'EG',
                    'expertise_code' => 'D310A',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Jetty',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                343 => 
                array (
                    'id' => 344,
                    'major_code' => 'EG',
                    'expertise_code' => 'D310B',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Storage Facilities',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                344 => 
                array (
                    'id' => 345,
                    'major_code' => 'EG',
                    'expertise_code' => 'D310C',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Telemetering',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                345 => 
                array (
                    'id' => 346,
                    'major_code' => 'EG',
                    'expertise_code' => 'D311',
                    'expertise_name_th' => 'สิ่งอำนวยความสะดวกการขุดเจาะนอกฝั่ง',
                    'expertise_name_en' => 'Off-Shore Facilities',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                346 => 
                array (
                    'id' => 347,
                    'major_code' => 'EG',
                    'expertise_code' => 'D311A',
                    'expertise_name_th' => 'การออกแบบแท่นขุดเจาะ',
                    'expertise_name_en' => 'Platform Design',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                347 => 
                array (
                    'id' => 348,
                    'major_code' => 'EG',
                    'expertise_code' => 'D311B',
                    'expertise_name_th' => 'การศึกษาฐานราก',
                    'expertise_name_en' => 'Foundation Studies',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                348 => 
                array (
                    'id' => 349,
                    'major_code' => 'EG',
                    'expertise_code' => 'D311C',
                    'expertise_name_th' => 'การปฏิบัติงาน',
                    'expertise_name_en' => 'Operation',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                349 => 
                array (
                    'id' => 350,
                    'major_code' => 'EG',
                    'expertise_code' => 'D311D',
                    'expertise_name_th' => 'บริการสนับสนุน',
                    'expertise_name_en' => 'Support Services',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                350 => 
                array (
                    'id' => 351,
                    'major_code' => 'EG',
                    'expertise_code' => 'D311E',
                    'expertise_name_th' => 'ท่อใต้ทะเล',
                    'expertise_name_en' => 'Submarine Pipelines',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                351 => 
                array (
                    'id' => 352,
                    'major_code' => 'EG',
                    'expertise_code' => 'D312',
                    'expertise_name_th' => 'กระบวนการการผลิตก๊าซ',
                    'expertise_name_en' => 'Gas Treatment/Processing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                352 => 
                array (
                    'id' => 353,
                    'major_code' => 'EG',
                    'expertise_code' => 'D313',
                    'expertise_name_th' => 'การจ่ายก๊าซ',
                    'expertise_name_en' => 'Gas Distribution',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                353 => 
                array (
                    'id' => 354,
                    'major_code' => 'EG',
                    'expertise_code' => 'D313A',
                    'expertise_name_th' => 'ระบบบ้านพักอาศัย',
                    'expertise_name_en' => 'Domestic Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                354 => 
                array (
                    'id' => 355,
                    'major_code' => 'EG',
                    'expertise_code' => 'D313B',
                    'expertise_name_th' => 'ระบบอุตสาหกรรม',
                    'expertise_name_en' => 'Industrial Systems',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                355 => 
                array (
                    'id' => 356,
                    'major_code' => 'EG',
                    'expertise_code' => 'D313C',
                    'expertise_name_th' => 'การแปรสภาพให้เป็นก๊าซเชื้อเพลิง',
                    'expertise_name_en' => 'Conversion To Gas Fuel',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                356 => 
                array (
                    'id' => 357,
                    'major_code' => 'EG',
                    'expertise_code' => 'D314',
                    'expertise_name_th' => 'ก๊าซธรรมชาติเหลว',
                'expertise_name_en' => 'Liquified Natural Gas (LNG)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                357 => 
                array (
                    'id' => 358,
                    'major_code' => 'EG',
                    'expertise_code' => 'D314A',
                    'expertise_name_th' => 'การแปรสภาพให้เป็นของเหลว',
                    'expertise_name_en' => 'Liquifaction',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                358 => 
                array (
                    'id' => 359,
                    'major_code' => 'EG',
                    'expertise_code' => 'D314B',
                    'expertise_name_th' => 'คลังเก็บ',
                    'expertise_name_en' => 'Storage',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                359 => 
                array (
                    'id' => 360,
                    'major_code' => 'EG',
                    'expertise_code' => 'D314C',
                    'expertise_name_th' => 'การขนส่งโดยท่อและสถานีขนถ่าย',
                    'expertise_name_en' => 'Pipeline Transport And Terminals',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                360 => 
                array (
                    'id' => 361,
                    'major_code' => 'EG',
                    'expertise_code' => 'D314D',
                    'expertise_name_th' => 'การขนส่งโดยเรือบรรทุก',
                    'expertise_name_en' => 'Tanker Transport',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                361 => 
                array (
                    'id' => 362,
                    'major_code' => 'EG',
                    'expertise_code' => 'D315',
                    'expertise_name_th' => 'เครื่องมืออุปกรณ์',
                    'expertise_name_en' => 'Equipment',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                362 => 
                array (
                    'id' => 363,
                    'major_code' => 'EG',
                    'expertise_code' => 'D315A',
                    'expertise_name_th' => 'การเจาะสำรวจ',
                    'expertise_name_en' => 'Exploration',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                363 => 
                array (
                    'id' => 364,
                    'major_code' => 'EG',
                    'expertise_code' => 'D315B',
                    'expertise_name_th' => 'การผลิต',
                    'expertise_name_en' => 'Production',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                364 => 
                array (
                    'id' => 365,
                    'major_code' => 'EG',
                    'expertise_code' => 'D315C',
                    'expertise_name_th' => 'การขนส่ง',
                    'expertise_name_en' => 'Transportation',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                365 => 
                array (
                    'id' => 366,
                    'major_code' => 'EG',
                    'expertise_code' => 'D315D',
                    'expertise_name_th' => 'การกลั่น',
                    'expertise_name_en' => 'Refining',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                366 => 
                array (
                    'id' => 367,
                    'major_code' => 'EG',
                    'expertise_code' => 'D315E',
                    'expertise_name_th' => 'การจ่ายก๊าซ',
                    'expertise_name_en' => 'Distribution',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                367 => 
                array (
                    'id' => 368,
                    'major_code' => 'EG',
                    'expertise_code' => 'D316',
                    'expertise_name_th' => 'บริการด้านกฎหมาย',
                    'expertise_name_en' => 'Legal Services',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                368 => 
                array (
                    'id' => 369,
                    'major_code' => 'EG',
                    'expertise_code' => 'D317',
                    'expertise_name_th' => 'การเจรจาสัมปทาน',
                    'expertise_name_en' => 'Concession Negotiations',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                369 => 
                array (
                    'id' => 370,
                    'major_code' => 'EG',
                    'expertise_code' => 'D318',
                    'expertise_name_th' => 'การเจาะสำรวจปิโตรเลียม',
                    'expertise_name_en' => 'Petroleum Exploration',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                370 => 
                array (
                    'id' => 371,
                    'major_code' => 'EG',
                    'expertise_code' => 'D319',
                    'expertise_name_th' => 'ก๊าซชีวภาพ',
                    'expertise_name_en' => 'Biogas',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                371 => 
                array (
                    'id' => 372,
                    'major_code' => 'EG',
                    'expertise_code' => 'D400',
                    'expertise_name_th' => 'ถ่านหินลิกไนต์แอนตราไซต์',
                    'expertise_name_en' => 'Coal/Lignite/Anthracite',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                372 => 
                array (
                    'id' => 373,
                    'major_code' => 'EG',
                    'expertise_code' => 'D401',
                    'expertise_name_th' => 'ธรณีวิทยาถ่านหินการสำรวจและการประเมินปริมาณสำรอง',
                    'expertise_name_en' => 'Coal Geology, Exploration And Reserve Evaluations',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                373 => 
                array (
                    'id' => 374,
                    'major_code' => 'EG',
                    'expertise_code' => 'D402',
                    'expertise_name_th' => 'การทำเหมืองเปิด',
                    'expertise_name_en' => 'Open-Pit Mining',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                374 => 
                array (
                    'id' => 375,
                    'major_code' => 'EG',
                    'expertise_code' => 'D403',
                    'expertise_name_th' => 'การทำเหมืองใต้ดินและโรงงานเตรียมถ่านหิน',
                    'expertise_name_en' => 'Underground Mining And Preparation Plants',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                375 => 
                array (
                    'id' => 376,
                    'major_code' => 'EG',
                    'expertise_code' => 'D404',
                    'expertise_name_th' => 'การลำเลียงขนถ่ายและขนส่งถ่านหิน',
                    'expertise_name_en' => 'Coal Handling And Transport',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                376 => 
                array (
                    'id' => 377,
                    'major_code' => 'EG',
                    'expertise_code' => 'D405',
                    'expertise_name_th' => 'กระบวนการผลิตถ่านหิน',
                    'expertise_name_en' => 'Coal Processing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                377 => 
                array (
                    'id' => 378,
                    'major_code' => 'EG',
                    'expertise_code' => 'D405A',
                    'expertise_name_th' => 'การผลิตถ่านโค้ก',
                    'expertise_name_en' => 'Coke Manufacturing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                378 => 
                array (
                    'id' => 379,
                    'major_code' => 'EG',
                    'expertise_code' => 'D405B',
                    'expertise_name_th' => 'กระบวนการผลิตยางน้ำมันจากถ่านหิน',
                    'expertise_name_en' => 'Coal Tar Processing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                379 => 
                array (
                    'id' => 380,
                    'major_code' => 'EG',
                    'expertise_code' => 'D405C',
                    'expertise_name_th' => 'การผลิตก๊าซจากถ่านหิน',
                    'expertise_name_en' => 'Coal Gasification',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                380 => 
                array (
                    'id' => 381,
                    'major_code' => 'EG',
                    'expertise_code' => 'D405D',
                    'expertise_name_th' => 'เชื้อเพลิงเหลวสังเคราะห์',
                    'expertise_name_en' => 'Synthetic Liquid Fuels',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                381 => 
                array (
                    'id' => 382,
                    'major_code' => 'EG',
                    'expertise_code' => 'D406',
                    'expertise_name_th' => 'เคมีถ่านหิน',
                    'expertise_name_en' => 'Coal Chemistry',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                382 => 
                array (
                    'id' => 383,
                    'major_code' => 'EG',
                    'expertise_code' => 'D407',
                    'expertise_name_th' => 'การตลาดสำหรับถ่านหิน',
                    'expertise_name_en' => 'Coal Marketing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                383 => 
                array (
                    'id' => 384,
                    'major_code' => 'EG',
                    'expertise_code' => 'D500',
                    'expertise_name_th' => 'พลังงานอื่นๆและพลังงานทดแทน',
                    'expertise_name_en' => 'Miscellaneous And Renewable Energy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                384 => 
                array (
                    'id' => 385,
                    'major_code' => 'EG',
                    'expertise_code' => 'D501',
                    'expertise_name_th' => 'พลังงานความร้อนใต้พิภพ',
                    'expertise_name_en' => 'Geothermal Energy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                385 => 
                array (
                    'id' => 386,
                    'major_code' => 'EG',
                    'expertise_code' => 'D501A',
                    'expertise_name_th' => 'การขุดเจาะและการสำรวจพลังความร้อนใต้พิภพ',
                    'expertise_name_en' => 'Geothermal Drilling And Prospecting',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                386 => 
                array (
                    'id' => 387,
                    'major_code' => 'EG',
                    'expertise_code' => 'D501B',
                    'expertise_name_th' => 'แหล่งกักเก็บและการสะสมพลังงานความร้อนใต้พิภพ',
                    'expertise_name_en' => 'Geothermal Reservoirs And Gathering',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                387 => 
                array (
                    'id' => 388,
                    'major_code' => 'EG',
                    'expertise_code' => 'D501C',
                    'expertise_name_th' => 'อุทกวิทยาพลังงานความร้อนใต้พิภพ',
                    'expertise_name_en' => 'Geothermal Hydrology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                388 => 
                array (
                    'id' => 389,
                    'major_code' => 'EG',
                    'expertise_code' => 'D502',
                    'expertise_name_th' => 'พลังงานแสงอาทิตย์',
                    'expertise_name_en' => 'Solar Energy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                389 => 
                array (
                    'id' => 390,
                    'major_code' => 'EG',
                    'expertise_code' => 'D503',
                    'expertise_name_th' => 'พลังงานชีวมวล',
                    'expertise_name_en' => 'Bio-Mass Energy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                390 => 
                array (
                    'id' => 391,
                    'major_code' => 'EG',
                    'expertise_code' => 'D504',
                    'expertise_name_th' => 'พลังงานลม',
                    'expertise_name_en' => 'Wind Energy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                391 => 
                array (
                    'id' => 392,
                    'major_code' => 'EG',
                    'expertise_code' => 'D505',
                    'expertise_name_th' => 'พลังน้ำขึ้นน้ำลง',
                    'expertise_name_en' => 'Tidal Energy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                392 => 
                array (
                    'id' => 393,
                    'major_code' => 'EG',
                    'expertise_code' => 'D506',
                    'expertise_name_th' => 'กระบวนการสกัดน้ำมันดิบจากหินน้ำมัน',
                    'expertise_name_en' => 'Oil Shale Processing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                393 => 
                array (
                    'id' => 394,
                    'major_code' => 'EG',
                    'expertise_code' => 'D507',
                    'expertise_name_th' => 'กระบวนการสกัดน้ำมันดิบจากทรายน้ำมัน',
                    'expertise_name_en' => 'Tar Sands Processing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                394 => 
                array (
                    'id' => 395,
                    'major_code' => 'EG',
                    'expertise_code' => 'D508',
                    'expertise_name_th' => 'เชื้อเพลิงที่เป็นไม้และพืชผัก',
                    'expertise_name_en' => 'Wood And Vegetable Fuels',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                395 => 
                array (
                    'id' => 396,
                    'major_code' => 'EG',
                    'expertise_code' => 'D509',
                    'expertise_name_th' => 'พลังงานดีเซล',
                    'expertise_name_en' => 'Bio-Diesel Energy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                396 => 
                array (
                    'id' => 397,
                    'major_code' => 'EG',
                    'expertise_code' => 'D510',
                    'expertise_name_th' => 'หินบะซอลต์',
                    'expertise_name_en' => 'Basalt',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                397 => 
                array (
                    'id' => 398,
                    'major_code' => 'EV',
                    'expertise_code' => 'E100',
                    'expertise_name_th' => 'สิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmental',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                398 => 
                array (
                    'id' => 399,
                    'major_code' => 'EV',
                    'expertise_code' => 'E101',
                    'expertise_name_th' => 'นโยบายสิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmental Policies',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                399 => 
                array (
                    'id' => 400,
                    'major_code' => 'EV',
                    'expertise_code' => 'E101A',
                    'expertise_name_th' => 'กฎหมายสิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmental Legislation',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                400 => 
                array (
                    'id' => 401,
                    'major_code' => 'EV',
                    'expertise_code' => 'E101B',
                    'expertise_name_th' => 'การเสริมสร้างสถาบันด้านสิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmental Institution Building',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                401 => 
                array (
                    'id' => 402,
                    'major_code' => 'EV',
                    'expertise_code' => 'E101C',
                    'expertise_name_th' => 'มาตรฐานสิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmental Standards',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                402 => 
                array (
                    'id' => 403,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102',
                    'expertise_name_th' => 'การสำรวจสิ่งแวดล้อมและการประเมินผลกระทบสิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmental Surveys And Environmental Impact Appraisal',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                403 => 
                array (
                    'id' => 404,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102A',
                    'expertise_name_th' => 'ภูมิประเทศและธรณีวิทยา',
                    'expertise_name_en' => 'Topography And Geology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                404 => 
                array (
                    'id' => 405,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102B',
                    'expertise_name_th' => 'บรรยากาศ',
                    'expertise_name_en' => 'Atmosphere',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                405 => 
                array (
                    'id' => 406,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102C',
                    'expertise_name_th' => 'น้ำผิวดินและน้ำใต้ดิน',
                    'expertise_name_en' => 'Surface And Underground Water',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                406 => 
                array (
                    'id' => 407,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102D',
                    'expertise_name_th' => 'ทะเล',
                    'expertise_name_en' => 'Sea',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                407 => 
                array (
                    'id' => 408,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102E',
                    'expertise_name_th' => 'นิเวศวิทยา',
                    'expertise_name_en' => 'Ecology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                408 => 
                array (
                    'id' => 409,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102F',
                    'expertise_name_th' => 'ภูมิทัศน์',
                    'expertise_name_en' => 'Landscape',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                409 => 
                array (
                    'id' => 410,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102G',
                    'expertise_name_th' => 'เสียง',
                    'expertise_name_en' => 'Noise',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                410 => 
                array (
                    'id' => 411,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102H',
                    'expertise_name_th' => 'ประชากร',
                    'expertise_name_en' => 'Inhabitants',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                411 => 
                array (
                    'id' => 412,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102I',
                    'expertise_name_th' => 'เศรษฐศาสตร์',
                    'expertise_name_en' => 'Economy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                412 => 
                array (
                    'id' => 413,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102J',
                    'expertise_name_th' => 'การประเมินผลกระทบสิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmental Impact Assessment',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                413 => 
                array (
                    'id' => 414,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102K',
                    'expertise_name_th' => 'การตรวจรู้จากระยะไกล',
                    'expertise_name_en' => 'Remote Sensing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                414 => 
                array (
                    'id' => 415,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102L',
                    'expertise_name_th' => 'การทำแผนที่แสดงพื้นที่ที่มีระบบนิเวศวิทยาที่เปราะบาง',
                    'expertise_name_en' => 'Mapping Of Ecologically Sensitive Areas',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                415 => 
                array (
                    'id' => 416,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102M',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Archaeology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                416 => 
                array (
                    'id' => 417,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102N',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Land Use',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                417 => 
                array (
                    'id' => 418,
                    'major_code' => 'EV',
                    'expertise_code' => 'E102O',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Vibration',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                418 => 
                array (
                    'id' => 419,
                    'major_code' => 'EV',
                    'expertise_code' => 'E103',
                    'expertise_name_th' => 'การฝึกอบรมด้านสิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmemtal Training',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                419 => 
                array (
                    'id' => 420,
                    'major_code' => 'EV',
                    'expertise_code' => 'E200',
                    'expertise_name_th' => 'มาตรการป้องกันสิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmental Protection Measures',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                420 => 
                array (
                    'id' => 421,
                    'major_code' => 'EV',
                    'expertise_code' => 'E201',
                    'expertise_name_th' => 'มลภาวะทางอากาศ',
                    'expertise_name_en' => 'Air Pollution',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                421 => 
                array (
                    'id' => 422,
                    'major_code' => 'EV',
                    'expertise_code' => 'E202',
                    'expertise_name_th' => 'มลภาวะทางน้ำ',
                    'expertise_name_en' => 'Water Pollution',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                422 => 
                array (
                    'id' => 423,
                    'major_code' => 'EV',
                    'expertise_code' => 'E203',
                    'expertise_name_th' => 'มลภาวะทางดิน',
                    'expertise_name_en' => 'Soil Pollution',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                423 => 
                array (
                    'id' => 424,
                    'major_code' => 'EV',
                    'expertise_code' => 'E204',
                    'expertise_name_th' => 'การกำจัดขยะ',
                    'expertise_name_en' => 'Solid Waste Disposal',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                424 => 
                array (
                    'id' => 425,
                    'major_code' => 'EV',
                    'expertise_code' => 'E205',
                    'expertise_name_th' => 'การกำจัดขยะพิษสารอันตราย',
                    'expertise_name_en' => 'Toxic/Hazardous Waste Disposal',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                425 => 
                array (
                    'id' => 426,
                    'major_code' => 'EV',
                    'expertise_code' => 'E206',
                    'expertise_name_th' => 'เสียง',
                    'expertise_name_en' => 'Noise',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                426 => 
                array (
                    'id' => 427,
                    'major_code' => 'EV',
                    'expertise_code' => 'E207',
                    'expertise_name_th' => 'อาชีวอนามัยและความปลอดภัย',
                    'expertise_name_en' => 'Occupational Health And Sefety',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                427 => 
                array (
                    'id' => 428,
                    'major_code' => 'EV',
                    'expertise_code' => 'E208',
                    'expertise_name_th' => 'มลภาวะทางอุตสาหกรรม',
                    'expertise_name_en' => 'Industrial Pollution',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                428 => 
                array (
                    'id' => 429,
                    'major_code' => 'EV',
                    'expertise_code' => 'E209',
                    'expertise_name_th' => 'ยาปราบศัตรูพืช',
                    'expertise_name_en' => 'Pesticides',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                429 => 
                array (
                    'id' => 430,
                    'major_code' => 'EV',
                    'expertise_code' => 'E210',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Socio-Economic',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                430 => 
                array (
                    'id' => 431,
                    'major_code' => 'EV',
                    'expertise_code' => 'E211',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Land Use',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                431 => 
                array (
                    'id' => 432,
                    'major_code' => 'EV',
                    'expertise_code' => 'E212',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Archaeology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                432 => 
                array (
                    'id' => 433,
                    'major_code' => 'EV',
                    'expertise_code' => 'E300',
                    'expertise_name_th' => 'ความเชี่ยวชาญในการปกป้องสิ่งแวดล้อม',
                    'expertise_name_en' => 'Environmental Protection Specialties',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                433 => 
                array (
                    'id' => 434,
                    'major_code' => 'EV',
                    'expertise_code' => 'E301',
                    'expertise_name_th' => 'ผลกระทบเหมืองแร่ถ่านหิน',
                    'expertise_name_en' => 'Mineral/Coal Mining Impacts',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                434 => 
                array (
                    'id' => 435,
                    'major_code' => 'EV',
                    'expertise_code' => 'E302',
                    'expertise_name_th' => 'ประเด็นสิ่งแวดล้อมในป่าไม้',
                    'expertise_name_en' => 'Environmental Issues In Forestry',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                435 => 
                array (
                    'id' => 436,
                    'major_code' => 'EV',
                    'expertise_code' => 'E303',
                    'expertise_name_th' => 'ชีววิทยาทางทะเล',
                    'expertise_name_en' => 'Marine Biology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                436 => 
                array (
                    'id' => 437,
                    'major_code' => 'EV',
                    'expertise_code' => 'E304',
                    'expertise_name_th' => 'การบริหารจัดการเขตชายฝั่งทะเล',
                    'expertise_name_en' => 'Coastal Zone Management',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                437 => 
                array (
                    'id' => 438,
                    'major_code' => 'EV',
                    'expertise_code' => 'E305',
                    'expertise_name_th' => 'การฟื้นฟูการคุ้มครองอนุสาวรีย์ทางประวัติศาสตร์และวัฒนธรรม',
                    'expertise_name_en' => 'Salvage/Protection Of Historic And Cultural Monuments',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                438 => 
                array (
                    'id' => 439,
                    'major_code' => 'EV',
                    'expertise_code' => 'E306',
                    'expertise_name_th' => 'การคุ้มครองสัตว์ป่า',
                    'expertise_name_en' => 'Protection Of Wildlife',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                439 => 
                array (
                    'id' => 440,
                    'major_code' => 'EV',
                    'expertise_code' => 'E307',
                    'expertise_name_th' => 'การวางแผนสิ่งแวดล้อมในเมือง',
                    'expertise_name_en' => 'Urban Environmental Planning',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                440 => 
                array (
                    'id' => 441,
                    'major_code' => 'EV',
                    'expertise_code' => 'E308',
                    'expertise_name_th' => 'การอพยพย้ายถิ่นฐาน',
                    'expertise_name_en' => 'Resettlement',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                441 => 
                array (
                    'id' => 442,
                    'major_code' => 'EV',
                    'expertise_code' => 'E309',
                    'expertise_name_th' => 'วิศวกรรมภูมิทัศน์',
                    'expertise_name_en' => 'Landscape Engineering',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                442 => 
                array (
                    'id' => 443,
                    'major_code' => 'EV',
                    'expertise_code' => 'E310',
                    'expertise_name_th' => 'ประเด็นด้านสังคมวัฒนธรรม',
                    'expertise_name_en' => 'Socio-Cultural Issues',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                443 => 
                array (
                    'id' => 444,
                    'major_code' => 'EV',
                    'expertise_code' => 'E311',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Industrial Impacts',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                444 => 
                array (
                    'id' => 445,
                    'major_code' => 'EV',
                    'expertise_code' => 'E312',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Infrastructure Impacts',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                445 => 
                array (
                    'id' => 446,
                    'major_code' => 'EV',
                    'expertise_code' => 'E313',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Freshwater Biology',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                446 => 
                array (
                    'id' => 447,
                    'major_code' => 'EV',
                    'expertise_code' => 'E314',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Land use Planner',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                447 => 
                array (
                    'id' => 448,
                    'major_code' => 'FI',
                    'expertise_code' => 'P100',
                    'expertise_name_th' => 'การเงิน',
                    'expertise_name_en' => 'Financial',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                448 => 
                array (
                    'id' => 449,
                    'major_code' => 'FI',
                    'expertise_code' => 'P101',
                    'expertise_name_th' => 'การดำเนินงานธนาคารชาติ',
                    'expertise_name_en' => 'Central Bank Operations',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                449 => 
                array (
                    'id' => 450,
                    'major_code' => 'FI',
                    'expertise_code' => 'P102',
                    'expertise_name_th' => 'การควบคุมดูแลสถาบันการเงิน',
                    'expertise_name_en' => 'Supervision of financial Institutions',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                450 => 
                array (
                    'id' => 451,
                    'major_code' => 'FI',
                    'expertise_code' => 'P103',
                    'expertise_name_th' => 'การดำเนินงานด้านการแลกเปลี่ยนเงินตราต่างประเทศของธนาคารชาติ',
                    'expertise_name_en' => 'Central Bank Foreign Exchange Operations',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                451 => 
                array (
                    'id' => 452,
                    'major_code' => 'FI',
                    'expertise_code' => 'P104',
                    'expertise_name_th' => 'การบริหารการซื้อลด',
                    'expertise_name_en' => 'Discount Operations',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                452 => 
                array (
                    'id' => 453,
                    'major_code' => 'FI',
                    'expertise_code' => 'P105',
                    'expertise_name_th' => 'การประกันเงินฝาก',
                    'expertise_name_en' => 'Deposit Insurance',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                453 => 
                array (
                    'id' => 454,
                    'major_code' => 'FI',
                    'expertise_code' => 'P106',
                    'expertise_name_th' => 'นโยบายอัตราดอกเบี้ย',
                    'expertise_name_en' => 'Interest Rate Policy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                454 => 
                array (
                    'id' => 455,
                    'major_code' => 'FI',
                    'expertise_code' => 'P107',
                    'expertise_name_th' => 'การฝึกอบรบ',
                    'expertise_name_en' => 'Training',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                455 => 
                array (
                    'id' => 456,
                    'major_code' => 'FI',
                    'expertise_code' => 'P108',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Information/Administration/Management',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                456 => 
                array (
                    'id' => 457,
                    'major_code' => 'FI',
                    'expertise_code' => 'P109',
                    'expertise_name_th' => '-',
                    'expertise_name_en' => 'Health Related Training',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                457 => 
                array (
                    'id' => 458,
                    'major_code' => 'FI',
                    'expertise_code' => 'P200',
                    'expertise_name_th' => 'ธนาคารพาณิชย์',
                    'expertise_name_en' => 'Commercial Banking',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                458 => 
                array (
                    'id' => 459,
                    'major_code' => 'FI',
                    'expertise_code' => 'P201',
                    'expertise_name_th' => 'การให้กู้เพื่อการพาณิชย์และการอุตสาหกรรม',
                    'expertise_name_en' => 'Commercial and Industrial Lending',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                459 => 
                array (
                    'id' => 460,
                    'major_code' => 'FI',
                    'expertise_code' => 'P202',
                    'expertise_name_th' => 'การสนับสนุนการเงินแก่การค้า',
                    'expertise_name_en' => 'Trade Financing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                460 => 
                array (
                    'id' => 461,
                    'major_code' => 'FI',
                    'expertise_code' => 'P203',
                    'expertise_name_th' => 'การให้กู้เงินเพื่อการเกษตร',
                    'expertise_name_en' => 'Agricultural Lending',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                461 => 
                array (
                    'id' => 462,
                    'major_code' => 'FI',
                    'expertise_code' => 'P204',
                    'expertise_name_th' => 'การบริหารการเงิน',
                    'expertise_name_en' => 'Treasury Operations',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                462 => 
                array (
                    'id' => 463,
                    'major_code' => 'FI',
                    'expertise_code' => 'P205',
                    'expertise_name_th' => 'การบริหารจัดการหนี้สิน',
                    'expertise_name_en' => 'Liability Management',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                463 => 
                array (
                    'id' => 464,
                    'major_code' => 'FI',
                    'expertise_code' => 'P206',
                    'expertise_name_th' => 'การแก้ไขหนี้ที่มีปัญหา',
                    'expertise_name_en' => 'Problem Loan Work-Outs',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                464 => 
                array (
                    'id' => 465,
                    'major_code' => 'FI',
                    'expertise_code' => 'P207',
                    'expertise_name_th' => 'การประมวลผลข้อมูล',
                    'expertise_name_en' => 'Data Processing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                465 => 
                array (
                    'id' => 466,
                    'major_code' => 'FI',
                    'expertise_code' => 'P208',
                    'expertise_name_th' => 'การตรวจสอบ',
                    'expertise_name_en' => 'Portfolio Audits',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                466 => 
                array (
                    'id' => 467,
                    'major_code' => 'FI',
                    'expertise_code' => 'P209',
                    'expertise_name_th' => 'การฝึกอบรมและการพัฒนาบุคลากร',
                    'expertise_name_en' => 'Training and Staff Development',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                467 => 
                array (
                    'id' => 468,
                    'major_code' => 'FI',
                    'expertise_code' => 'P210',
                    'expertise_name_th' => 'การค้าระหว่างธนาคาร',
                    'expertise_name_en' => 'Interbank Trading',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                468 => 
                array (
                    'id' => 469,
                    'major_code' => 'FI',
                    'expertise_code' => 'P211',
                    'expertise_name_th' => 'การนำระบบคอมพิวเตอร์มาใช้ในการปฏิบัติงาน',
                    'expertise_name_en' => 'Computerization',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                469 => 
                array (
                    'id' => 470,
                    'major_code' => 'FI',
                    'expertise_code' => 'P212',
                    'expertise_name_th' => 'การโอนเงินโดยระบบอิเล็กทรอนิกส์',
                    'expertise_name_en' => 'ELECTRONIC FUND TRANSFERS',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                470 => 
                array (
                    'id' => 471,
                    'major_code' => 'FI',
                    'expertise_code' => 'P300',
                    'expertise_name_th' => 'ธนาคารเพื่อการพัฒนา',
                    'expertise_name_en' => 'Development Banking',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                471 => 
                array (
                    'id' => 472,
                    'major_code' => 'FI',
                    'expertise_code' => 'P301',
                    'expertise_name_th' => 'การกำหนดและส่งเสริมโครงการ',
                    'expertise_name_en' => 'Project Identification and Promotion',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                472 => 
                array (
                    'id' => 473,
                    'major_code' => 'FI',
                    'expertise_code' => 'P302',
                    'expertise_name_th' => 'การประเมินโครงการ',
                    'expertise_name_en' => 'Project Appraisal',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                473 => 
                array (
                    'id' => 474,
                    'major_code' => 'FI',
                    'expertise_code' => 'P303',
                    'expertise_name_th' => 'การบริหารและติดตามโครงการ',
                    'expertise_name_en' => 'Project Administration and Follow-up',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                474 => 
                array (
                    'id' => 475,
                    'major_code' => 'FI',
                    'expertise_code' => 'P304',
                    'expertise_name_th' => 'การชดใช้เงินกู้',
                    'expertise_name_en' => 'Loan Recovery',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                475 => 
                array (
                    'id' => 476,
                    'major_code' => 'FI',
                    'expertise_code' => 'P305',
                    'expertise_name_th' => 'ระบบสารสนเทศเพื่อผู้บริหาร',
                    'expertise_name_en' => 'Management Information System',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                476 => 
                array (
                    'id' => 477,
                    'major_code' => 'FI',
                    'expertise_code' => 'P306',
                    'expertise_name_th' => 'การฝึกอบรมและการพัฒนาบุคลากร',
                    'expertise_name_en' => 'Training and Staff Development',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                477 => 
                array (
                    'id' => 478,
                    'major_code' => 'FI',
                    'expertise_code' => 'P307',
                    'expertise_name_th' => 'การตรวจสอบ',
                    'expertise_name_en' => 'Portfolio Audits',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                478 => 
                array (
                    'id' => 479,
                    'major_code' => 'FI',
                    'expertise_code' => 'P308',
                    'expertise_name_th' => 'การวางแผนบริษัทและการพัฒนาผลิตภัณฑ์',
                    'expertise_name_en' => 'Corporate Planning and Product Development',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                479 => 
                array (
                    'id' => 480,
                    'major_code' => 'FI',
                    'expertise_code' => 'P309',
                    'expertise_name_th' => 'การปรับโครงสร้างสถาบันการเงิน',
                    'expertise_name_en' => 'Restructuring of Financial Institutions',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                480 => 
                array (
                    'id' => 481,
                    'major_code' => 'FI',
                    'expertise_code' => 'P400',
                    'expertise_name_th' => 'วาณิชธนกิจ',
                    'expertise_name_en' => 'Investment/Merchant Banking',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                481 => 
                array (
                    'id' => 482,
                    'major_code' => 'FI',
                    'expertise_code' => 'P401',
                    'expertise_name_th' => 'การควบกิจการการซื้อกิจการและการเข้าครอบครองกิจการ',
                    'expertise_name_en' => 'Mergers, Acquisitions and Takeovers',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                482 => 
                array (
                    'id' => 483,
                    'major_code' => 'FI',
                    'expertise_code' => 'P402',
                    'expertise_name_th' => 'การซื้อกิจการทั้งหมด',
                    'expertise_name_en' => 'Buyouts',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                483 => 
                array (
                    'id' => 484,
                    'major_code' => 'FI',
                    'expertise_code' => 'P403',
                    'expertise_name_th' => 'การสร้างดำเนินการและเป็นเจ้าของ',
                'expertise_name_en' => 'Build, Operate and Own (BOO)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                484 => 
                array (
                    'id' => 485,
                    'major_code' => 'FI',
                    'expertise_code' => 'P404',
                    'expertise_name_th' => 'การสร้างดำเนินการและโอน',
                'expertise_name_en' => 'Build, Operate and Transfer (BOT)',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                485 => 
                array (
                    'id' => 486,
                    'major_code' => 'FI',
                    'expertise_code' => 'P405',
                    'expertise_name_th' => 'เงินลงทุนในกิจการที่มีความเสี่ยงสูง',
                    'expertise_name_en' => 'Venture Capital',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                486 => 
                array (
                    'id' => 487,
                    'major_code' => 'FI',
                    'expertise_code' => 'P406',
                    'expertise_name_th' => 'การเช่า',
                    'expertise_name_en' => 'Leasing',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                487 => 
                array (
                    'id' => 488,
                    'major_code' => 'FI',
                    'expertise_code' => 'P407',
                    'expertise_name_th' => 'การเงินเพื่อการส่งออก',
                    'expertise_name_en' => 'Export Finance',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                488 => 
                array (
                    'id' => 489,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408',
                    'expertise_name_th' => 'การแปรรูปกิจการรัฐวิสาหกิจ',
                    'expertise_name_en' => 'Privatization',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                489 => 
                array (
                    'id' => 490,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408A',
                    'expertise_name_th' => 'โทรคมนาคม',
                    'expertise_name_en' => 'Telecommunication',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                490 => 
                array (
                    'id' => 491,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408B',
                    'expertise_name_th' => 'พลังงาน',
                    'expertise_name_en' => 'Energy',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                491 => 
                array (
                    'id' => 492,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408C',
                    'expertise_name_th' => 'การขนส่ง',
                    'expertise_name_en' => 'Transportation',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                492 => 
                array (
                    'id' => 493,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408D',
                    'expertise_name_th' => 'ประปา',
                    'expertise_name_en' => 'Water Supply',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                493 => 
                array (
                    'id' => 494,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408E',
                    'expertise_name_th' => 'น้ำเสีย',
                    'expertise_name_en' => 'Waste Water',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                494 => 
                array (
                    'id' => 495,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408F',
                    'expertise_name_th' => 'ขยะ',
                    'expertise_name_en' => 'Solid Waste',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                495 => 
                array (
                    'id' => 496,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408G',
                    'expertise_name_th' => 'พาณิชยกรรม',
                    'expertise_name_en' => 'Commercial',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                496 => 
                array (
                    'id' => 497,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408H',
                    'expertise_name_th' => 'การบริการ',
                    'expertise_name_en' => 'Service',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                497 => 
                array (
                    'id' => 498,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408I',
                    'expertise_name_th' => 'การปฏิบัติการและการบำรุงรักษา',
                    'expertise_name_en' => 'O & M',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                498 => 
                array (
                    'id' => 499,
                    'major_code' => 'FI',
                    'expertise_code' => 'P408J',
                    'expertise_name_th' => 'อาหาร',
                    'expertise_name_en' => 'Food',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                499 => 
                array (
                    'id' => 500,
                    'major_code' => 'FI',
                    'expertise_code' => 'P409',
                    'expertise_name_th' => 'การให้คำปรึกษาด้านการเงิน',
                    'expertise_name_en' => 'Financial Advisory Operations',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
            ));
        \DB::table('expertises')->insert(array (
            0 => 
            array (
                'id' => 501,
                'major_code' => 'FI',
                'expertise_code' => 'P410',
                'expertise_name_th' => 'การประกันการจำหน่ายหลักทรัพย์',
                'expertise_name_en' => 'Securities Underwriting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            1 => 
            array (
                'id' => 502,
                'major_code' => 'FI',
                'expertise_code' => 'P411',
                'expertise_name_th' => 'การบริหารความเสี่ยงด้านอัตราแลกเปลี่ยน',
                'expertise_name_en' => 'Foreign Exchange Risk Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            2 => 
            array (
                'id' => 503,
                'major_code' => 'FI',
                'expertise_code' => 'P412',
                'expertise_name_th' => 'การบริหารความเสี่ยงด้านอัตราดอกเบี้ย',
                'expertise_name_en' => 'Interest Risk Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            3 => 
            array (
                'id' => 504,
                'major_code' => 'FI',
                'expertise_code' => 'P413',
                'expertise_name_th' => 'การล้มละลายและการปรับองค์กร',
                'expertise_name_en' => 'Bankruptcy and Reorganization',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            4 => 
            array (
                'id' => 505,
                'major_code' => 'FI',
                'expertise_code' => 'P414',
                'expertise_name_th' => 'การปรับโครงสร้างบริษัท',
                'expertise_name_en' => 'Corporate Restructuring',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            5 => 
            array (
                'id' => 506,
                'major_code' => 'FI',
                'expertise_code' => 'P415',
                'expertise_name_th' => 'การซื้อขายหลักทรัพย์',
                'expertise_name_en' => 'Securities Trading',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            6 => 
            array (
                'id' => 507,
                'major_code' => 'FI',
                'expertise_code' => 'P416',
                'expertise_name_th' => 'การซื้อขายด้วยระบบอิเล็กทรอนิกส์',
                'expertise_name_en' => 'ELECTRONIC TRADING',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            7 => 
            array (
                'id' => 508,
                'major_code' => 'FI',
                'expertise_code' => 'P500',
                'expertise_name_th' => 'กิจกรรมตลาดการเงิน',
                'expertise_name_en' => 'Financial Market Activities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            8 => 
            array (
                'id' => 509,
                'major_code' => 'FI',
                'expertise_code' => 'P501',
                'expertise_name_th' => 'การเสนอขายหุ้นเบื้องต้นต่อประชาชน',
            'expertise_name_en' => 'Initial Public Offering (IPO)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            9 => 
            array (
                'id' => 510,
                'major_code' => 'FI',
                'expertise_code' => 'P502',
                'expertise_name_th' => 'การซื้อขายหลักทรัพย์รัฐบาล',
                'expertise_name_en' => 'Government Securities Trading',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            10 => 
            array (
                'id' => 511,
                'major_code' => 'FI',
                'expertise_code' => 'P503',
                'expertise_name_th' => 'การค้าระหว่างธนาคาร',
                'expertise_name_en' => 'Inter-Bank Trading',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            11 => 
            array (
                'id' => 512,
                'major_code' => 'FI',
                'expertise_code' => 'P504',
                'expertise_name_th' => 'การประกันการจำหน่ายหลักทรัพย์',
                'expertise_name_en' => 'Securities Underwriting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            12 => 
            array (
                'id' => 513,
                'major_code' => 'FI',
                'expertise_code' => 'P505',
                'expertise_name_th' => 'การบริหารนายหน้าซื้อขายผู้ซื้อขายหลักทรัพย์',
                'expertise_name_en' => 'Broker/Dealer Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            13 => 
            array (
                'id' => 514,
                'major_code' => 'FI',
                'expertise_code' => 'P506',
                'expertise_name_th' => 'การเงินเพื่อสาธารณูปโภค',
                'expertise_name_en' => 'Public Utility Finance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            14 => 
            array (
                'id' => 515,
                'major_code' => 'FI',
                'expertise_code' => 'P507',
                'expertise_name_th' => 'การเงินเพื่อเทศบาล',
                'expertise_name_en' => 'Municipal Finance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            15 => 
            array (
                'id' => 516,
                'major_code' => 'FI',
                'expertise_code' => 'P508',
                'expertise_name_th' => 'การเงินเพื่อการจำนอง',
                'expertise_name_en' => 'Mortgage Finance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            16 => 
            array (
                'id' => 517,
                'major_code' => 'FI',
                'expertise_code' => 'P509',
                'expertise_name_th' => 'หลักทรัพย์ที่ได้จากการแปลงสินทรัพย์',
                'expertise_name_en' => 'Asset-backed Securities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            17 => 
            array (
                'id' => 518,
                'major_code' => 'FI',
                'expertise_code' => 'P510',
                'expertise_name_th' => 'เครื่องอำนวยความสะดวกเพื่อการธนาคารระหว่างประเทศ',
                'expertise_name_en' => 'International Banking Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            18 => 
            array (
                'id' => 519,
                'major_code' => 'FI',
                'expertise_code' => 'P511',
                'expertise_name_th' => 'การค้าตลาดเงิน',
                'expertise_name_en' => 'Money Market Trading',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            19 => 
            array (
                'id' => 520,
                'major_code' => 'FI',
                'expertise_code' => 'P512',
                'expertise_name_th' => 'กองทุนบำนาญ',
                'expertise_name_en' => 'Pension Fund',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            20 => 
            array (
                'id' => 521,
                'major_code' => 'FI',
                'expertise_code' => 'P513',
                'expertise_name_th' => 'การประเมินมูลค่าหุ้น',
                'expertise_name_en' => 'Evaluation Common Stock',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            21 => 
            array (
                'id' => 522,
                'major_code' => 'FI',
                'expertise_code' => 'P600',
                'expertise_name_th' => 'การบริหารตลาดทุนและตลาดหลักทรัพย์',
                'expertise_name_en' => 'Capital Markets and Stock Exchanges Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            22 => 
            array (
                'id' => 523,
                'major_code' => 'FI',
                'expertise_code' => 'P601',
                'expertise_name_th' => 'การประกันการจำหน่ายตราสารทุนและพันธบัตร',
                'expertise_name_en' => 'Equity and Bond Underwriting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            23 => 
            array (
                'id' => 524,
                'major_code' => 'FI',
                'expertise_code' => 'P602',
                'expertise_name_th' => 'การเป็นผู้นำในการบริหารจัดการ',
                'expertise_name_en' => 'Lead Managership',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            24 => 
            array (
                'id' => 525,
                'major_code' => 'FI',
                'expertise_code' => 'P603',
                'expertise_name_th' => 'กฎระเบียบว่าด้วยตลาดหลักทรัพย์',
                'expertise_name_en' => 'Regulation of Stock Exchanges',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            25 => 
            array (
                'id' => 526,
                'major_code' => 'FI',
                'expertise_code' => 'P604',
                'expertise_name_th' => 'คณะกรรมการหลักทรัพย์และตลาดหลักทรัพย์',
                'expertise_name_en' => 'Securities and Exchange Commissions',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            26 => 
            array (
                'id' => 527,
                'major_code' => 'FI',
                'expertise_code' => 'P605',
                'expertise_name_th' => 'การใช้ระบบอัตโนมัติในการดำเนินงานตลาดหลักทรัพย์',
                'expertise_name_en' => 'Automation of Stock Markets',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            27 => 
            array (
                'id' => 528,
                'major_code' => 'FI',
                'expertise_code' => 'P606',
                'expertise_name_th' => 'การให้การศึกษาและการฝึกอบรมเรื่องตลาดทุน',
                'expertise_name_en' => 'Capital Markets Education and Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            28 => 
            array (
                'id' => 529,
                'major_code' => 'FI',
                'expertise_code' => 'P607',
                'expertise_name_th' => 'ระเบียบว่าด้วยการประกันการจำหน่ายหลักทรัพย์',
                'expertise_name_en' => 'Underwriting Regulation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            29 => 
            array (
                'id' => 530,
                'major_code' => 'FI',
                'expertise_code' => 'P608',
                'expertise_name_th' => 'ระเบียบว่าด้วยหลักทรัพย์',
                'expertise_name_en' => 'Securities Regulation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            30 => 
            array (
                'id' => 531,
                'major_code' => 'FI',
                'expertise_code' => 'P609',
                'expertise_name_th' => 'ข้อกำหนดว่าด้วยสมาชิกตลาดหลักทรัพย์',
                'expertise_name_en' => 'Stock Exchange Membership Requirement',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            31 => 
            array (
                'id' => 532,
                'major_code' => 'FI',
                'expertise_code' => 'P610',
                'expertise_name_th' => 'การส่งเสริมและการจัดตั้งตลาดหลักทรัพย์แห่งใหม่',
                'expertise_name_en' => 'Promotion and Establishment of New Stock Exchanges',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            32 => 
            array (
                'id' => 533,
                'major_code' => 'FI',
                'expertise_code' => 'P700',
                'expertise_name_th' => 'การบริหารสถาบันการเงินที่มิใช่ธนาคาร',
                'expertise_name_en' => 'Non-Bank Financial Institution Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            33 => 
            array (
                'id' => 534,
                'major_code' => 'FI',
                'expertise_code' => 'P701',
                'expertise_name_th' => 'สมาคมออมทรัพย์และเงินกู้',
                'expertise_name_en' => 'Savings and Loan Association',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            34 => 
            array (
                'id' => 535,
                'major_code' => 'FI',
                'expertise_code' => 'P702',
                'expertise_name_th' => 'กองทุนบำนาญกองทุนสำรองเลี้ยงชีพสหภาพสินเชื่อกองทุนการสรรหาบุคลากร',
                'expertise_name_en' => 'Pension Fund/Provident Fund/Credit Union/Recruitment Funds',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            35 => 
            array (
                'id' => 536,
                'major_code' => 'FI',
                'expertise_code' => 'P703',
                'expertise_name_th' => 'บริษัทประกัน',
                'expertise_name_en' => 'Insurance Company',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            36 => 
            array (
                'id' => 537,
                'major_code' => 'FI',
                'expertise_code' => 'P704',
                'expertise_name_th' => 'บริษัทการเคหะและการเงิน',
                'expertise_name_en' => 'Housing and Finance Company',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            37 => 
            array (
                'id' => 538,
                'major_code' => 'FI',
                'expertise_code' => 'P800',
                'expertise_name_th' => 'การเงินภาครัฐ',
                'expertise_name_en' => 'Government Sector Financing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            38 => 
            array (
                'id' => 539,
                'major_code' => 'FI',
                'expertise_code' => 'P801',
                'expertise_name_th' => 'กิจกรรมตลาดหลักทรัพย์รัฐบาล',
                'expertise_name_en' => 'Government Securities Market Activities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            39 => 
            array (
                'id' => 540,
                'major_code' => 'FI',
                'expertise_code' => 'P802',
                'expertise_name_th' => 'การคงงบประมาณ',
                'expertise_name_en' => 'Budgeting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            40 => 
            array (
                'id' => 541,
                'major_code' => 'FI',
                'expertise_code' => 'P803',
                'expertise_name_th' => 'การบัญชีและการตรวจสอบภาครัฐ',
                'expertise_name_en' => 'Government Sector Accounting/Auditing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            41 => 
            array (
                'id' => 542,
                'major_code' => 'FI',
                'expertise_code' => 'P804',
                'expertise_name_th' => 'บัญชีสินทรัพย์ภาครัฐ',
                'expertise_name_en' => 'Government Assets Accounting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            42 => 
            array (
                'id' => 543,
                'major_code' => 'FI',
                'expertise_code' => 'P805',
                'expertise_name_th' => 'การบัญชีและการเงินเทศบาล',
                'expertise_name_en' => 'Municipal Accounting and Financing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            43 => 
            array (
                'id' => 544,
                'major_code' => 'FI',
                'expertise_code' => 'P900',
                'expertise_name_th' => 'การบริหารการเงินของบริษัท',
                'expertise_name_en' => 'Corporate Financial Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            44 => 
            array (
                'id' => 545,
                'major_code' => 'FI',
                'expertise_code' => 'P901',
                'expertise_name_th' => 'การวิเคราะห์งบการเงิน',
                'expertise_name_en' => 'Financial Statement Analysis',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            45 => 
            array (
                'id' => 546,
                'major_code' => 'FI',
                'expertise_code' => 'P902',
                'expertise_name_th' => 'การบริหารเงินทุนหมุนเวียน',
                'expertise_name_en' => 'Working Capital Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            46 => 
            array (
                'id' => 547,
                'major_code' => 'FI',
                'expertise_code' => 'P903',
                'expertise_name_th' => 'การจัดทำงบประมาณและการควบคุม',
                'expertise_name_en' => 'Budgeting and Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            47 => 
            array (
                'id' => 548,
                'major_code' => 'FI',
                'expertise_code' => 'P904',
                'expertise_name_th' => 'การบริหารจัดการต้นทุนภาวะเงินเฟ้อบัญชีการเงิน',
                'expertise_name_en' => 'Management/Cost/Inflationary/Financial Accounting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            48 => 
            array (
                'id' => 549,
                'major_code' => 'FI',
                'expertise_code' => 'P905',
                'expertise_name_th' => 'โครงสร้างเงินทุน',
                'expertise_name_en' => 'Capital Structure',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            49 => 
            array (
                'id' => 550,
                'major_code' => 'FI',
                'expertise_code' => 'P906',
                'expertise_name_th' => 'การบริหารหนี้สิน',
                'expertise_name_en' => 'Liability Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            50 => 
            array (
                'id' => 551,
                'major_code' => 'FI',
                'expertise_code' => 'P907',
                'expertise_name_th' => 'การวางแผนการเงิน',
                'expertise_name_en' => 'Financial Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            51 => 
            array (
                'id' => 552,
                'major_code' => 'FI',
                'expertise_code' => 'P908',
                'expertise_name_th' => 'การประเมินผลดำเนินการ',
                'expertise_name_en' => 'Performance Evaluation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            52 => 
            array (
                'id' => 553,
                'major_code' => 'FI',
                'expertise_code' => 'P1000',
                'expertise_name_th' => 'การบริหารการลงทุนและสัดส่วนประเภทหลักทรัพย์ที่ได้ลงทุนไว้',
                'expertise_name_en' => 'Investment and Portfolio Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            53 => 
            array (
                'id' => 554,
                'major_code' => 'FI',
                'expertise_code' => 'P1001',
                'expertise_name_th' => 'ตลาดการค้าหลักทรัพย์ที่มีรายได้คงที่',
                'expertise_name_en' => 'Fixed Income Securities Market',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            54 => 
            array (
                'id' => 555,
                'major_code' => 'FI',
                'expertise_code' => 'P1002',
                'expertise_name_th' => 'ตลาดหุ้น',
                'expertise_name_en' => 'Equities Market',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            55 => 
            array (
                'id' => 556,
                'major_code' => 'FI',
                'expertise_code' => 'P1003',
                'expertise_name_th' => 'กองทุนของประเทศ',
                'expertise_name_en' => 'Country Fund',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            56 => 
            array (
                'id' => 557,
                'major_code' => 'FI',
                'expertise_code' => 'P1004',
                'expertise_name_th' => 'ตลาดหลักทรัพย์ที่พัฒนาแล้ว',
                'expertise_name_en' => 'Developed Securities Markets',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            57 => 
            array (
                'id' => 558,
                'major_code' => 'FI',
                'expertise_code' => 'P1005',
                'expertise_name_th' => 'ตลาดหลักทรัพย์ที่กำลังพัฒนา',
                'expertise_name_en' => 'Developing Securities Markets',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            58 => 
            array (
                'id' => 559,
                'major_code' => 'FI',
                'expertise_code' => 'P1006',
                'expertise_name_th' => 'การวิเคราะห์หลักทรัพย์',
                'expertise_name_en' => 'Securities Analysis',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            59 => 
            array (
                'id' => 560,
                'major_code' => 'FI',
                'expertise_code' => 'P1007',
                'expertise_name_th' => 'การบริหาร',
                'expertise_name_en' => 'Portfolio Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            60 => 
            array (
                'id' => 561,
                'major_code' => 'FI',
                'expertise_code' => 'P1008',
                'expertise_name_th' => 'องค์กรจัดอันดับสินเชื่อเครดิต',
                'expertise_name_en' => 'Credit Rating Agencies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            61 => 
            array (
                'id' => 562,
                'major_code' => 'FI',
                'expertise_code' => 'P1009',
                'expertise_name_th' => 'การนำระบบคอมพิวเตอร์มาใช้ในการซื้อขายหลักทรัพย์',
                'expertise_name_en' => 'Computerization of Securities Trading',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            62 => 
            array (
                'id' => 563,
                'major_code' => 'FI',
                'expertise_code' => 'P1010',
                'expertise_name_th' => 'การกระจายการลงทุนในหลักทรัพย์ประเภทต่างๆ',
                'expertise_name_en' => 'Porfolio Diversification',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            63 => 
            array (
                'id' => 564,
                'major_code' => 'FI',
                'expertise_code' => 'P1011',
                'expertise_name_th' => 'การค้าหุ้นโดยใช้คอมพิวเตอร์',
                'expertise_name_en' => 'Program Trading',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            64 => 
            array (
                'id' => 565,
                'major_code' => 'FI',
                'expertise_code' => 'P1100',
                'expertise_name_th' => 'กฎระเบียบและการควบคุมภาคธุรกิจการเงิน',
                'expertise_name_en' => 'Financial Sector Regulation and Supervision',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            65 => 
            array (
                'id' => 566,
                'major_code' => 'FI',
                'expertise_code' => 'P1101',
                'expertise_name_th' => 'การเปิดเสรีทางการเงิน',
                'expertise_name_en' => 'Financial Liberalization',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            66 => 
            array (
                'id' => 567,
                'major_code' => 'FI',
                'expertise_code' => 'P1102',
                'expertise_name_th' => 'การยกเลิกกฎระเบียบทางการเงิน',
                'expertise_name_en' => 'Financial Deregulation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            67 => 
            array (
                'id' => 568,
                'major_code' => 'FI',
                'expertise_code' => 'P1103',
                'expertise_name_th' => 'การแปรรูปสถาบันการเงิน',
                'expertise_name_en' => 'Privatiztion of Financial Institutions',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            68 => 
            array (
                'id' => 569,
                'major_code' => 'FI',
                'expertise_code' => 'P1104',
                'expertise_name_th' => 'ระบบประกันเงินฝาก',
                'expertise_name_en' => 'Deposit Insurance System',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            69 => 
            array (
                'id' => 570,
                'major_code' => 'FI',
                'expertise_code' => 'P1105',
                'expertise_name_th' => 'การพัฒนาแบบจำลองทางการเงิน',
                'expertise_name_en' => 'Developing Financial Modeling',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            70 => 
            array (
                'id' => 571,
                'major_code' => 'FI',
                'expertise_code' => 'P1200',
                'expertise_name_th' => 'การบัญชี',
                'expertise_name_en' => 'Accounting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            71 => 
            array (
                'id' => 572,
                'major_code' => 'FI',
                'expertise_code' => 'P1201',
                'expertise_name_th' => 'การบัญชีการตรวจสอบบัญชี',
                'expertise_name_en' => 'ACCT., Auditing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            72 => 
            array (
                'id' => 573,
                'major_code' => 'FI',
                'expertise_code' => 'P1201A',
                'expertise_name_th' => 'การบัญชีการตรวจสอบบัญชีโดยรวมและค่าของเงิน',
            'expertise_name_en' => 'ACCT., Auditing, Comprehensive & Value for Money (VFM)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            73 => 
            array (
                'id' => 574,
                'major_code' => 'FI',
                'expertise_code' => 'P1201B',
                'expertise_name_th' => 'การบัญชีการตรวจสอบบัญชีการประมวลผลโดยระบบอิเล็กทรอนิกส์',
                'expertise_name_en' => 'ACCT., Auditing, Electronic Data Processing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            74 => 
            array (
                'id' => 575,
                'major_code' => 'FI',
                'expertise_code' => 'P1201C',
                'expertise_name_th' => 'การบัญชีการตรวจสอบบัญชีการเงิน',
                'expertise_name_en' => 'ACCT., Auditing, Finance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            75 => 
            array (
                'id' => 576,
                'major_code' => 'FI',
                'expertise_code' => 'P1201D',
                'expertise_name_th' => 'การบัญชีการตรวจสอบบัญชีบริหาร',
                'expertise_name_en' => 'ACCT., Auditing, Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            76 => 
            array (
                'id' => 577,
                'major_code' => 'FI',
                'expertise_code' => 'P1201E',
                'expertise_name_th' => 'การบัญชีการตรวจสอบบัญชีการดำเนินงาน',
                'expertise_name_en' => 'ACCT., Auditing, Operation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            77 => 
            array (
                'id' => 578,
                'major_code' => 'FI',
                'expertise_code' => 'P1202',
                'expertise_name_th' => 'การบัญชีระบบบัญชีที่ใช้ระบบคอมพิวเตอร์',
                'expertise_name_en' => 'ACCT., Computer-Based Acct. Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            78 => 
            array (
                'id' => 579,
                'major_code' => 'FI',
                'expertise_code' => 'P1202A',
                'expertise_name_th' => 'การบัญชีระบบบัญชีที่ใช้ระบบคอมพิวเตอร์โปรแกรมสำเร็จรู',
                'expertise_name_en' => 'ACCT., Computer-Based Acct. Systems, Application Packaged',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            79 => 
            array (
                'id' => 580,
                'major_code' => 'FI',
                'expertise_code' => 'P1202B',
                'expertise_name_th' => 'การบัญชีระบบบัญชีที่ใช้ระบบคอมพิวเตอร์การนำมาใช้งาน',
                'expertise_name_en' => 'ACCT., Computer-Based Acct. Systems, Implementation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            80 => 
            array (
                'id' => 581,
                'major_code' => 'FI',
                'expertise_code' => 'P1202C',
                'expertise_name_th' => 'การบัญชีระบบบัญชีที่ใช้ระบบคอมพิวเตอร์การประเมินซอฟต์แวร์',
                'expertise_name_en' => 'ACCT., Computer-Based Acct. Systems, Software Evaluation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            81 => 
            array (
                'id' => 582,
                'major_code' => 'FI',
                'expertise_code' => 'P1202D',
                'expertise_name_th' => 'การบัญชีระบบบัญชีที่ใช้ระบบคอมพิวเตอร์การออกแบบระบบ',
                'expertise_name_en' => 'ACCT., Computer-Based Acct. Systems, Systems Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            82 => 
            array (
                'id' => 583,
                'major_code' => 'FI',
                'expertise_code' => 'P1203',
                'expertise_name_th' => 'การบัญชีบริษัทพาณิชย์',
                'expertise_name_en' => 'ACCT., Corporate/Commercial',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            83 => 
            array (
                'id' => 584,
                'major_code' => 'FI',
                'expertise_code' => 'P1204',
                'expertise_name_th' => 'การบัญชีต้นทุน',
                'expertise_name_en' => 'ACCT., Cost',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            84 => 
            array (
                'id' => 585,
                'major_code' => 'FI',
                'expertise_code' => 'P1205',
                'expertise_name_th' => 'การบัญชีการบันทึกและการบริหารจัดการของฝ่าย',
                'expertise_name_en' => 'ACCT., Dept Recording & Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            85 => 
            array (
                'id' => 586,
                'major_code' => 'FI',
                'expertise_code' => 'P1206',
                'expertise_name_th' => 'การบัญชีการศึกษาและการฝึกอบรบ',
                'expertise_name_en' => 'ACCT., Education & Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            86 => 
            array (
                'id' => 587,
                'major_code' => 'FI',
                'expertise_code' => 'P1207',
                'expertise_name_th' => 'การบัญชีการบริหารจัดการ',
                'expertise_name_en' => 'ACCT., Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            87 => 
            array (
                'id' => 588,
                'major_code' => 'FI',
                'expertise_code' => 'P1208',
                'expertise_name_th' => 'การบัญชีภาครัฐ',
                'expertise_name_en' => 'ACCT., Public Sector',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            88 => 
            array (
                'id' => 589,
                'major_code' => 'FI',
                'expertise_code' => 'P1209',
                'expertise_name_th' => 'การบัญชีการคำนวณและออกแบบค่าธรรมเนียม',
                'expertise_name_en' => 'ACCT., Tariff Costing & Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            89 => 
            array (
                'id' => 590,
                'major_code' => 'FI',
                'expertise_code' => 'P1210',
                'expertise_name_th' => 'การบัญชีภาษี',
                'expertise_name_en' => 'ACCT., Tax',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            90 => 
            array (
                'id' => 591,
                'major_code' => 'FI',
                'expertise_code' => 'P1211',
                'expertise_name_th' => 'คณิตศาสตร์ประกันภัย',
                'expertise_name_en' => 'Actuaries',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            91 => 
            array (
                'id' => 592,
                'major_code' => 'HE',
                'expertise_code' => 'F100',
                'expertise_name_th' => 'สาธารณสุข',
                'expertise_name_en' => 'Health',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            92 => 
            array (
                'id' => 593,
                'major_code' => 'HE',
                'expertise_code' => 'F101',
                'expertise_name_th' => 'การวางแผนองค์กรด้านระบบสาธารณสุข',
                'expertise_name_en' => 'Health System Planning/Organization',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            93 => 
            array (
                'id' => 594,
                'major_code' => 'HE',
                'expertise_code' => 'F102',
                'expertise_name_th' => 'การวางแผนสาธารณสุขแห่งชาติ',
                'expertise_name_en' => 'National Health Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            94 => 
            array (
                'id' => 595,
                'major_code' => 'HE',
                'expertise_code' => 'F103',
                'expertise_name_th' => 'การออกแบบระบบพัสดุ',
                'expertise_name_en' => 'Logistics Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            95 => 
            array (
                'id' => 596,
                'major_code' => 'HE',
                'expertise_code' => 'F104',
                'expertise_name_th' => 'การออกแบบระบบการเงิน',
                'expertise_name_en' => 'Financial Systems Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            96 => 
            array (
                'id' => 597,
                'major_code' => 'HE',
                'expertise_code' => 'F105',
                'expertise_name_th' => 'การวางแผนระหว่างหน่วยงานสาขา',
                'expertise_name_en' => 'Intersectoral Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            97 => 
            array (
                'id' => 598,
                'major_code' => 'HE',
                'expertise_code' => 'F106',
                'expertise_name_th' => 'องค์กรการบริหารการจัดการ',
                'expertise_name_en' => 'Organization/Administration/Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            98 => 
            array (
                'id' => 599,
                'major_code' => 'HE',
                'expertise_code' => 'F107',
                'expertise_name_th' => 'การวางแผนอัตรากำลัง',
                'expertise_name_en' => 'Manpower Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            99 => 
            array (
                'id' => 600,
                'major_code' => 'HE',
                'expertise_code' => 'F108',
                'expertise_name_th' => 'การออกแบบระบบสารสนเทศข้อมูล',
                'expertise_name_en' => 'Information/Data Systems Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            100 => 
            array (
                'id' => 601,
                'major_code' => 'HE',
                'expertise_code' => 'F109',
                'expertise_name_th' => 'การฝึกอบรมที่เกี่ยวกับสาธารณสุข',
                'expertise_name_en' => 'Health Related Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            101 => 
            array (
                'id' => 602,
                'major_code' => 'HE',
                'expertise_code' => 'F200',
                'expertise_name_th' => 'โครงสร้างพื้นฐานสำหรับการรักษาพยาบาล',
                'expertise_name_en' => 'Health Care Infrastructure',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            102 => 
            array (
                'id' => 603,
                'major_code' => 'HE',
                'expertise_code' => 'F201',
                'expertise_name_th' => 'การออกแบบสถานพยาบาลขั้นมูลฐานชนบทในเมือง',
            'expertise_name_en' => 'Primary Care (Rural/Urban) Facilities Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            103 => 
            array (
                'id' => 604,
                'major_code' => 'HE',
                'expertise_code' => 'F202',
                'expertise_name_th' => 'การออกแบบสิ่งอำนวยความสะดวกสำหรับการฝึกอบรม',
                'expertise_name_en' => 'Training Facility Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            104 => 
            array (
                'id' => 605,
                'major_code' => 'HE',
                'expertise_code' => 'F203',
                'expertise_name_th' => 'อุปกรณ์ยานพาหนะ',
                'expertise_name_en' => 'Equipment/Vehicles',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            105 => 
            array (
                'id' => 606,
                'major_code' => 'HE',
                'expertise_code' => 'F204',
                'expertise_name_th' => 'โทรคมนาคมสำหรับการบริการสาธารณสุข',
            'expertise_name_en' => 'Telecommunication (For Health Service)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            106 => 
            array (
                'id' => 607,
                'major_code' => 'HE',
                'expertise_code' => 'F205',
                'expertise_name_th' => 'ระบบบำรุงรักษาซ่อม',
                'expertise_name_en' => 'Maintenance/Repair Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            107 => 
            array (
                'id' => 608,
                'major_code' => 'HE',
                'expertise_code' => 'F206',
                'expertise_name_th' => 'ระบบการจ่ายเภสัชภัณฑ์เวชภัณฑ์',
                'expertise_name_en' => 'Phamaceuticals/Supplies Distribution Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            108 => 
            array (
                'id' => 609,
                'major_code' => 'HE',
                'expertise_code' => 'F207',
                'expertise_name_th' => 'การออกแบบห้องเย็นเพื่อเก็บวัคซีน',
            'expertise_name_en' => 'Cold Storage Of Vacoines (Cold Chain) Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            109 => 
            array (
                'id' => 610,
                'major_code' => 'HE',
                'expertise_code' => 'F208',
                'expertise_name_th' => 'การออกแบบศูนย์ผลิตวัสดุอุปกรณ์การศึกษาด้านสาธารณสุข',
                'expertise_name_en' => 'Health Education Materials Production Center Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            110 => 
            array (
                'id' => 611,
                'major_code' => 'HE',
                'expertise_code' => 'F300',
                'expertise_name_th' => 'การให้บริการรักษาพยาบาล',
                'expertise_name_en' => 'Health Service Delivery',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            111 => 
            array (
                'id' => 612,
                'major_code' => 'HE',
                'expertise_code' => 'F301',
                'expertise_name_th' => 'สาธารณสุขมูลฐาน',
                'expertise_name_en' => 'Primary Health Care',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            112 => 
            array (
                'id' => 613,
                'major_code' => 'HE',
                'expertise_code' => 'F302',
                'expertise_name_th' => 'อาชีวอนามัย',
                'expertise_name_en' => 'Occupational Health',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            113 => 
            array (
                'id' => 614,
                'major_code' => 'HE',
                'expertise_code' => 'F303',
                'expertise_name_th' => 'อนามัยสิ่งแวดล้อมรวมทั้งระบบประปาและสุขาภิบาล',
            'expertise_name_en' => 'Environmental Health (Including Water Supply and Sanitation Systems)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            114 => 
            array (
                'id' => 615,
                'major_code' => 'HE',
                'expertise_code' => 'F304',
                'expertise_name_th' => 'การควบคุมโรคเขตร้อนและพาหะนำโรค',
                'expertise_name_en' => 'Tropical Diseases And Vector Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            115 => 
            array (
                'id' => 616,
                'major_code' => 'HE',
                'expertise_code' => 'F305',
                'expertise_name_th' => 'การควบคุมโรคที่ไม่ใช่โรคติดต่อ',
                'expertise_name_en' => 'Non-Communicable Disease Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            116 => 
            array (
                'id' => 617,
                'major_code' => 'HE',
                'expertise_code' => 'F306',
                'expertise_name_th' => 'อนามัยแม่และเด็ก',
                'expertise_name_en' => 'Maternal-Child Health',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            117 => 
            array (
                'id' => 618,
                'major_code' => 'HE',
                'expertise_code' => 'F307',
                'expertise_name_th' => 'ทันตสาธารณสุข',
                'expertise_name_en' => 'Dental Health',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            118 => 
            array (
                'id' => 619,
                'major_code' => 'HE',
                'expertise_code' => 'F308',
                'expertise_name_th' => 'สุขภาพจิต',
                'expertise_name_en' => 'Mental Health',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            119 => 
            array (
                'id' => 620,
                'major_code' => 'HE',
                'expertise_code' => 'F309',
                'expertise_name_th' => 'โภชนาการด้านสุขอนามัย',
            'expertise_name_en' => 'Nutrition (Health Aspects)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            120 => 
            array (
                'id' => 621,
                'major_code' => 'HE',
                'expertise_code' => 'F310',
                'expertise_name_th' => 'สุขศึกษา',
                'expertise_name_en' => 'Health Education',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            121 => 
            array (
                'id' => 622,
                'major_code' => 'HE',
                'expertise_code' => 'F311',
                'expertise_name_th' => 'เภสัชภัณฑ์',
                'expertise_name_en' => 'Phamaceuticals Supply',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            122 => 
            array (
                'id' => 623,
                'major_code' => 'HE',
                'expertise_code' => 'F312',
                'expertise_name_th' => 'การมีส่วนร่วมของชุมชน',
                'expertise_name_en' => 'Community Participation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            123 => 
            array (
                'id' => 624,
                'major_code' => 'HE',
                'expertise_code' => 'F313',
                'expertise_name_th' => 'สุขอนามัยในโรงเรียน',
                'expertise_name_en' => 'School Health',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            124 => 
            array (
                'id' => 625,
                'major_code' => 'HE',
                'expertise_code' => 'F314',
                'expertise_name_th' => 'สาธารณสุขทั่วไป',
                'expertise_name_en' => 'Public Health, General',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            125 => 
            array (
                'id' => 626,
                'major_code' => 'HE',
                'expertise_code' => 'F400',
                'expertise_name_th' => 'การพัฒนาบุคลากร',
                'expertise_name_en' => 'Manpower Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            126 => 
            array (
                'id' => 627,
                'major_code' => 'HE',
                'expertise_code' => 'F401',
                'expertise_name_th' => 'แพทย์ทันตแพทย์',
                'expertise_name_en' => 'Physicians/Dentists',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            127 => 
            array (
                'id' => 628,
                'major_code' => 'HE',
                'expertise_code' => 'F402',
                'expertise_name_th' => 'พยาบาลผดุงครรภ์',
                'expertise_name_en' => 'Nurses/Midwives',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            128 => 
            array (
                'id' => 629,
                'major_code' => 'HE',
                'expertise_code' => 'F403',
                'expertise_name_th' => 'ผู้บริหารผู้จัดการด้านสาธารณสุข',
                'expertise_name_en' => 'Health Asministrators/Managers',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            129 => 
            array (
                'id' => 630,
                'major_code' => 'HE',
                'expertise_code' => 'F404',
                'expertise_name_th' => 'เภสัชกร',
                'expertise_name_en' => 'Pharmacists',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            130 => 
            array (
                'id' => 631,
                'major_code' => 'HE',
                'expertise_code' => 'F405',
                'expertise_name_th' => 'ผู้ให้การศึกษาในภาคสนามผู้ไปเยี่ยมเยียนตามบ้าน',
                'expertise_name_en' => 'Field Educators, Home Visitors',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            131 => 
            array (
                'id' => 632,
                'major_code' => 'HE',
                'expertise_code' => 'F406',
                'expertise_name_th' => 'ผู้ช่วย',
                'expertise_name_en' => 'Auxiliaries',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            132 => 
            array (
                'id' => 633,
                'major_code' => 'HE',
                'expertise_code' => 'F407',
                'expertise_name_th' => 'อาสาสมัคร',
                'expertise_name_en' => 'Volunteers',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            133 => 
            array (
                'id' => 634,
                'major_code' => 'HE',
                'expertise_code' => 'F408',
                'expertise_name_th' => 'การออกแบบแผนการสอน',
                'expertise_name_en' => 'Instructional Program Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            134 => 
            array (
                'id' => 635,
                'major_code' => 'HE',
                'expertise_code' => 'F409',
                'expertise_name_th' => 'การพัฒนาการฝึกอบรมในระหว่างประจำการ',
                'expertise_name_en' => 'In-Service Training Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            135 => 
            array (
                'id' => 636,
                'major_code' => 'HE',
                'expertise_code' => 'F410',
                'expertise_name_th' => 'การบูรณาการบุคลากรด้านสาธารณสุขพื้นบ้าน',
                'expertise_name_en' => 'Traditional Health Manpower Integration',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            136 => 
            array (
                'id' => 637,
                'major_code' => 'HE',
                'expertise_code' => 'F411',
                'expertise_name_th' => 'การออกแบบระบบควบคุม',
                'expertise_name_en' => 'Supervision Systems Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            137 => 
            array (
                'id' => 638,
                'major_code' => 'HE',
                'expertise_code' => 'F500',
                'expertise_name_th' => 'ระบาดวิทยา',
                'expertise_name_en' => 'Epidemiology',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            138 => 
            array (
                'id' => 639,
                'major_code' => 'HE',
                'expertise_code' => 'F600',
                'expertise_name_th' => 'มานุษยวิทยาสังคมศาสตร์ด้านการแพทย์',
            'expertise_name_en' => 'Anthropology/Sociology(Medical)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            139 => 
            array (
                'id' => 640,
                'major_code' => 'HE',
                'expertise_code' => 'F700',
                'expertise_name_th' => 'การวิเคราะห์ด้านการเงินเศรษฐศาสตร์',
                'expertise_name_en' => 'Financial/Economic Analysis',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            140 => 
            array (
                'id' => 641,
                'major_code' => 'HE',
                'expertise_code' => 'F800',
                'expertise_name_th' => 'เศรษฐศาสตร์สาธารณสุข',
                'expertise_name_en' => 'Health Economics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            141 => 
            array (
                'id' => 642,
                'major_code' => 'HE',
                'expertise_code' => 'F900',
                'expertise_name_th' => 'ความฉลาดทางอารมณ์',
            'expertise_name_en' => 'Emotional Quotient (EQ)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            142 => 
            array (
                'id' => 643,
                'major_code' => 'IN',
                'expertise_code' => 'G100',
                'expertise_name_th' => 'อุตสาหกรรม',
                'expertise_name_en' => 'Industry',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            143 => 
            array (
                'id' => 644,
                'major_code' => 'IN',
                'expertise_code' => 'G101',
                'expertise_name_th' => 'แร่ทั่วไป',
                'expertise_name_en' => 'Minerals - General',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            144 => 
            array (
                'id' => 645,
                'major_code' => 'IN',
                'expertise_code' => 'G102',
                'expertise_name_th' => 'เศรษฐศาสตร์การแร่',
                'expertise_name_en' => 'Minerals Economics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            145 => 
            array (
                'id' => 646,
                'major_code' => 'IN',
                'expertise_code' => 'G103',
                'expertise_name_th' => 'การกำหนดราคาการตลาดและการจัดจำหน่ายแร่',
                'expertise_name_en' => 'Mineral Pricing, Marketing and Distribution',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            146 => 
            array (
                'id' => 647,
                'major_code' => 'IN',
                'expertise_code' => 'G104',
                'expertise_name_th' => 'กองทุนการสำรวจแร่',
                'expertise_name_en' => 'Mineral Exploration Funds',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            147 => 
            array (
                'id' => 648,
                'major_code' => 'IN',
                'expertise_code' => 'G105',
                'expertise_name_th' => 'ธรณีวิทยาแร่การสำรวจและประเมินปริมาณสำรอง',
                'expertise_name_en' => 'Mineral Geology, Exploration and Reserve Evaluations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            148 => 
            array (
                'id' => 649,
                'major_code' => 'IN',
                'expertise_code' => 'G200',
                'expertise_name_th' => 'เทคโนโลยี่แร่',
                'expertise_name_en' => 'Mineral Technology',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            149 => 
            array (
                'id' => 650,
                'major_code' => 'IN',
                'expertise_code' => 'G201',
                'expertise_name_th' => 'การทำเหมืองแบบเปิด',
                'expertise_name_en' => 'Open-Pit Mining',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            150 => 
            array (
                'id' => 651,
                'major_code' => 'IN',
                'expertise_code' => 'G202',
                'expertise_name_th' => 'การทำเหมืองใต้ดิน',
                'expertise_name_en' => 'Underground Mining',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            151 => 
            array (
                'id' => 652,
                'major_code' => 'IN',
                'expertise_code' => 'G203',
                'expertise_name_th' => 'การแต่งแร่',
                'expertise_name_en' => 'Mineral Beneficiation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            152 => 
            array (
                'id' => 653,
                'major_code' => 'IN',
                'expertise_code' => 'G204',
                'expertise_name_th' => 'การจัดการและการขนส่งแร่',
                'expertise_name_en' => 'Mineral Handling and Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            153 => 
            array (
                'id' => 654,
                'major_code' => 'IN',
                'expertise_code' => 'G205',
                'expertise_name_th' => 'โลหการโลหะซึ่งมิใช่เหล็ก',
                'expertise_name_en' => 'Matallurgy - Non-Ferrous Metals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            154 => 
            array (
                'id' => 655,
                'major_code' => 'IN',
                'expertise_code' => 'G206',
                'expertise_name_th' => 'โลหการโลหะจำพวกเหล็ก',
                'expertise_name_en' => 'Metallurgy - Ferrous Metals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            155 => 
            array (
                'id' => 656,
                'major_code' => 'IN',
                'expertise_code' => 'G300',
                'expertise_name_th' => 'การใช้และการค้าสินค้าวัตถุดิบ',
                'expertise_name_en' => 'Commodities Esploitation and Trading',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            156 => 
            array (
                'id' => 657,
                'major_code' => 'IN',
                'expertise_code' => 'G400',
                'expertise_name_th' => 'อุตสาหกรรมทั่วไป',
                'expertise_name_en' => 'Industry - General',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            157 => 
            array (
                'id' => 658,
                'major_code' => 'IN',
                'expertise_code' => 'G401',
                'expertise_name_th' => 'เศรษฐศาสตร์อุตสาหกรรมและนโยบายด้านอุตสาหกรรม',
                'expertise_name_en' => 'Industrial Economics and Policy',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            158 => 
            array (
                'id' => 659,
                'major_code' => 'IN',
                'expertise_code' => 'G402',
                'expertise_name_th' => 'การวางแผนลงทุนด้านอุตสาหกรรม',
                'expertise_name_en' => 'Industrial Investment Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            159 => 
            array (
                'id' => 660,
                'major_code' => 'IN',
                'expertise_code' => 'G403',
                'expertise_name_th' => 'เทคโนโลยีอุตสาหกรรม',
                'expertise_name_en' => 'Industrial Technology',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            160 => 
            array (
                'id' => 661,
                'major_code' => 'IN',
                'expertise_code' => 'G404',
                'expertise_name_th' => 'การพัฒนาอุตสาหกรรม',
                'expertise_name_en' => 'Industrial Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            161 => 
            array (
                'id' => 662,
                'major_code' => 'IN',
                'expertise_code' => 'G405',
                'expertise_name_th' => 'การศึกษาประสิทธิภาพทางอุตสาหกรรม',
                'expertise_name_en' => 'Industrial Efficiency Studies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            162 => 
            array (
                'id' => 663,
                'major_code' => 'IN',
                'expertise_code' => 'G406',
                'expertise_name_th' => 'การวิเคราะห์ต้นทุนอุตสาหกรรม',
                'expertise_name_en' => 'Industrial Cost Analysis',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            163 => 
            array (
                'id' => 664,
                'major_code' => 'IN',
                'expertise_code' => 'G407',
                'expertise_name_th' => 'เขตดำเนินกรรมวิธีส่งออกและเขตการค้าเสรี',
                'expertise_name_en' => 'Export Processing and Free Trade Zones',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            164 => 
            array (
                'id' => 665,
                'major_code' => 'IN',
                'expertise_code' => 'G408',
                'expertise_name_th' => 'สวนอุตสาหกรรมนิคมอุตสาหกรรม',
                'expertise_name_en' => 'Industrial Parks/Estates',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            165 => 
            array (
                'id' => 666,
                'major_code' => 'IN',
                'expertise_code' => 'G409',
                'expertise_name_th' => 'อาคารโรงงานอุตสาหกรรม',
                'expertise_name_en' => 'Industrial Plant/Factory Buildings',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            166 => 
            array (
                'id' => 667,
                'major_code' => 'IN',
                'expertise_code' => 'G410',
                'expertise_name_th' => 'อุตสาหกรรมขนาดกลางและขนาดย่อม',
                'expertise_name_en' => 'Medium and Small-Scale Industries',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            167 => 
            array (
                'id' => 668,
                'major_code' => 'IN',
                'expertise_code' => 'G411',
                'expertise_name_th' => 'สิ่งแวดล้อมและการควบคุมมลภาวะ',
                'expertise_name_en' => 'Environmental Issues and Pollution Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            168 => 
            array (
                'id' => 669,
                'major_code' => 'IN',
                'expertise_code' => 'G412',
                'expertise_name_th' => 'การฝึกอบรมเกี่ยวกับอุตสาหกรรม',
                'expertise_name_en' => 'Industry Related Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            169 => 
            array (
                'id' => 670,
                'major_code' => 'IN',
                'expertise_code' => 'G413',
                'expertise_name_th' => 'การตลาด',
                'expertise_name_en' => 'Marketing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            170 => 
            array (
                'id' => 671,
                'major_code' => 'IN',
                'expertise_code' => 'G500',
                'expertise_name_th' => 'สินค้าอุตสาหกรรมรูปแบบการค้าและการตลาด',
                'expertise_name_en' => 'Industrial Products, Trade Patterns and Marketing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            171 => 
            array (
                'id' => 672,
                'major_code' => 'IN',
                'expertise_code' => 'G501',
                'expertise_name_th' => 'การพัฒนาตลาดในประเทศ',
                'expertise_name_en' => 'Development of Domestic Markets',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            172 => 
            array (
                'id' => 673,
                'major_code' => 'IN',
                'expertise_code' => 'G502',
                'expertise_name_th' => 'การพัฒนาตลาดส่งออก',
                'expertise_name_en' => 'Development Of Export Markets',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            173 => 
            array (
                'id' => 674,
                'major_code' => 'IN',
                'expertise_code' => 'G503',
                'expertise_name_th' => 'ภาษีและข้อจำกัดทางการค้า',
                'expertise_name_en' => 'Tariffs and Trade Restraints',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            174 => 
            array (
                'id' => 675,
                'major_code' => 'IN',
                'expertise_code' => 'G600',
                'expertise_name_th' => 'สินเชื่อและสถาบัน',
                'expertise_name_en' => 'Credit and Institutions',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            175 => 
            array (
                'id' => 676,
                'major_code' => 'IN',
                'expertise_code' => 'G700',
                'expertise_name_th' => 'เส้นใยสังเคราะห์',
                'expertise_name_en' => 'Synthetic Fibers',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            176 => 
            array (
                'id' => 677,
                'major_code' => 'IN',
                'expertise_code' => 'G800',
                'expertise_name_th' => 'ผลิตภัณฑ์สิ่งทอ',
                'expertise_name_en' => 'Textile Products',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            177 => 
            array (
                'id' => 678,
                'major_code' => 'IN',
                'expertise_code' => 'G900',
                'expertise_name_th' => 'เสื้อผ้าเครื่องแต่งกายและผลิตภัณฑ์สำเร็จรูปอื่นๆที่ทำจากผ้าและวัสดุทำนองเดียวกัน',
                'expertise_name_en' => 'Apparel and Other Finished Products Made from Fabrics and Similar Materials',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            178 => 
            array (
                'id' => 679,
                'major_code' => 'IN',
                'expertise_code' => 'G1000',
                'expertise_name_th' => 'สารเคมีและผลิตภัณฑ์ที่เกี่ยวข้อง',
                'expertise_name_en' => 'Chemicals and Allied Products',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            179 => 
            array (
                'id' => 680,
                'major_code' => 'IN',
                'expertise_code' => 'G1100',
                'expertise_name_th' => 'ผลิตภัณฑ์ยางและพลาสติกเบ็ดเตล็ด',
                'expertise_name_en' => 'Rubber and Miscellaneous Plastic Products',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            180 => 
            array (
                'id' => 681,
                'major_code' => 'IN',
                'expertise_code' => 'G1200',
                'expertise_name_th' => 'หนังและเครื่องหนัง',
                'expertise_name_en' => 'Leather and Leather Products',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            181 => 
            array (
                'id' => 682,
                'major_code' => 'IN',
                'expertise_code' => 'G1300',
                'expertise_name_th' => 'ผลิตภัณฑ์ที่ทำจากหินดินเหนียวแก้วคอนกรีตและแร่อโลหะอื่นๆ',
                'expertise_name_en' => 'Stone, Clay, Glass, Concrete and Other Non-Metallic Mineral Products',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            182 => 
            array (
                'id' => 683,
                'major_code' => 'IN',
                'expertise_code' => 'G1400',
                'expertise_name_th' => 'อุตสาหกรรมโลหะพื้นฐาน',
                'expertise_name_en' => 'Basic Metal Industries',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            183 => 
            array (
                'id' => 684,
                'major_code' => 'IN',
                'expertise_code' => 'G1500',
                'expertise_name_th' => 'ผลิตภัณฑ์โลหะที่มิใช่เครื่องจักรและอุปกรณ์การขนส่ง',
            'expertise_name_en' => 'Metal Products (Except Machinery and Transport Equipment)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            184 => 
            array (
                'id' => 685,
                'major_code' => 'IN',
                'expertise_code' => 'G1600',
                'expertise_name_th' => 'เครื่องจักรกลและอุปกรณ์ยกเว้นไฟฟ้า',
                'expertise_name_en' => 'Machinery and Equipment, Except Electrical',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            185 => 
            array (
                'id' => 686,
                'major_code' => 'IN',
                'expertise_code' => 'G1700',
                'expertise_name_th' => 'เครื่องมือและอุปกรณ์ไฟฟ้าและอิเล็กทรอนิกส์',
                'expertise_name_en' => 'Electrical and Electronic Machinery and Equipment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            186 => 
            array (
                'id' => 687,
                'major_code' => 'IN',
                'expertise_code' => 'G1800',
                'expertise_name_th' => 'อุปกรณ์การขนส่ง',
                'expertise_name_en' => 'Transportation Equipment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            187 => 
            array (
                'id' => 688,
                'major_code' => 'IN',
                'expertise_code' => 'G1900',
                'expertise_name_th' => 'อุตสาหกรรมเบ็ดเตล็ด',
                'expertise_name_en' => 'Miscellaneous Industries',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            188 => 
            array (
                'id' => 689,
                'major_code' => 'PO',
                'expertise_code' => 'H100',
                'expertise_name_th' => 'ประชากร',
                'expertise_name_en' => 'Population',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            189 => 
            array (
                'id' => 690,
                'major_code' => 'PO',
                'expertise_code' => 'H101',
                'expertise_name_th' => 'การวางแผนและพัฒนาประชากรครอบครัว',
                'expertise_name_en' => 'Population/Family Planning and Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            190 => 
            array (
                'id' => 691,
                'major_code' => 'PO',
                'expertise_code' => 'H102',
                'expertise_name_th' => 'การวิเคราะห์สำมะโนประชากร',
                'expertise_name_en' => 'Demographic Analysis',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            191 => 
            array (
                'id' => 692,
                'major_code' => 'PO',
                'expertise_code' => 'H103',
                'expertise_name_th' => 'ตัวกำหนดความเจริญพันธ์',
                'expertise_name_en' => 'Determinants of Fertility',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            192 => 
            array (
                'id' => 693,
                'major_code' => 'PO',
                'expertise_code' => 'H104',
                'expertise_name_th' => 'ด้านสังคมเศรษฐศาสตร์วัฒนธรรมและจิตวิทยาของการวางแผนประชากรครอบครัว',
                'expertise_name_en' => 'Social, Economic, Cultural and Psychological Aspects of Population/Family Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            193 => 
            array (
                'id' => 694,
                'major_code' => 'PO',
                'expertise_code' => 'H105',
                'expertise_name_th' => 'ประเด็นด้านสุขอนามัยของการวางแผนครอบครัว',
                'expertise_name_en' => 'Health Aspects of Family Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            194 => 
            array (
                'id' => 695,
                'major_code' => 'PO',
                'expertise_code' => 'H106',
                'expertise_name_th' => 'โปรแกรมการพัฒนาสตรี',
                'expertise_name_en' => 'Women\'s Development Programs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            195 => 
            array (
                'id' => 696,
                'major_code' => 'PO',
                'expertise_code' => 'H107',
                'expertise_name_th' => 'การฝึกอบรมประชากร',
                'expertise_name_en' => 'Population Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            196 => 
            array (
                'id' => 697,
                'major_code' => 'PO',
                'expertise_code' => 'H108',
                'expertise_name_th' => 'การสำรวจสำมะโนประชากรและสถิติ',
                'expertise_name_en' => 'Population Cansuses and Statistics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            197 => 
            array (
                'id' => 698,
                'major_code' => 'PO',
                'expertise_code' => 'H109',
                'expertise_name_th' => 'การวางแผนและการจัดองค์กรของโปรแกรมการวางแผนประชากรครอบครัว',
                'expertise_name_en' => 'Planning and Organization of Population/Family Planning Programs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            198 => 
            array (
                'id' => 699,
                'major_code' => 'PO',
                'expertise_code' => 'H200',
                'expertise_name_th' => 'โครงสร้างพื้นฐานการบริการวางแผนครอบครัว',
                'expertise_name_en' => 'Family Planning Services Infrastructure',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            199 => 
            array (
                'id' => 700,
                'major_code' => 'PO',
                'expertise_code' => 'H201',
                'expertise_name_th' => 'การออกแบบสิ่งอำนวยความสะดวก',
                'expertise_name_en' => 'Facilities Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            200 => 
            array (
                'id' => 701,
                'major_code' => 'PO',
                'expertise_code' => 'H202',
                'expertise_name_th' => 'อุปกรณ์ยานพาหนะ',
                'expertise_name_en' => 'Equipment/Vehicles',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            201 => 
            array (
                'id' => 702,
                'major_code' => 'PO',
                'expertise_code' => 'H203',
                'expertise_name_th' => 'พัสดุ',
                'expertise_name_en' => 'Supplies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            202 => 
            array (
                'id' => 703,
                'major_code' => 'PO',
                'expertise_code' => 'H204',
                'expertise_name_th' => 'การออกแบบสิ่งอำนวยความสะดวกสถาปัตยกรรมและอาคาร',
            'expertise_name_en' => 'Facilities Design (arch. and Bldg.)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            203 => 
            array (
                'id' => 704,
                'major_code' => 'PO',
                'expertise_code' => 'H205',
                'expertise_name_th' => 'การบำรุงรักษาและซ่อมแซมอุปกรณ์',
                'expertise_name_en' => 'Equipment Maintenance and Repair',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            204 => 
            array (
                'id' => 705,
                'major_code' => 'PO',
                'expertise_code' => 'H300',
                'expertise_name_th' => 'ระบบการให้บริการวางแผนครอบครัว',
                'expertise_name_en' => 'Family Planning Services Delivery Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            205 => 
            array (
                'id' => 706,
                'major_code' => 'PO',
                'expertise_code' => 'H301',
                'expertise_name_th' => 'คลินิกวางแผนครอบครัว',
                'expertise_name_en' => 'Family Planning Clinics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            206 => 
            array (
                'id' => 707,
                'major_code' => 'PO',
                'expertise_code' => 'H302',
                'expertise_name_th' => 'การให้บริการวางแผนครอบครัวในโรงพยาบาล',
                'expertise_name_en' => 'Hospital-Based Family Planning Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            207 => 
            array (
                'id' => 708,
                'major_code' => 'PO',
                'expertise_code' => 'H303',
                'expertise_name_th' => 'หน่วยเคลื่อนที่เพื่อบริการวางแผนครอบครัว',
                'expertise_name_en' => 'Mobile Family Planning Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            208 => 
            array (
                'id' => 709,
                'major_code' => 'PO',
                'expertise_code' => 'H304',
                'expertise_name_th' => 'การให้บริการวางแผนครอบครัวสำหรับอนามัยแม่และเด็ก',
                'expertise_name_en' => 'Meternal-Child Health Family Planning Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            209 => 
            array (
                'id' => 710,
                'major_code' => 'PO',
                'expertise_code' => 'H305',
                'expertise_name_th' => 'การแจกจ่ายอุปกรณ์การวางแผนครอบครัว',
                'expertise_name_en' => 'Disribution of Family Planning Supplies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            210 => 
            array (
                'id' => 711,
                'major_code' => 'PO',
                'expertise_code' => 'H400',
                'expertise_name_th' => 'บุคลากรสำหรับบริการวางแผนครอบครัว',
                'expertise_name_en' => 'Manpower for Family Planning Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            211 => 
            array (
                'id' => 712,
                'major_code' => 'PO',
                'expertise_code' => 'H401',
                'expertise_name_th' => 'แพทย์',
                'expertise_name_en' => 'Physicians',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            212 => 
            array (
                'id' => 713,
                'major_code' => 'PO',
                'expertise_code' => 'H402',
                'expertise_name_th' => 'ผู้บริหารผู้จัดการ',
                'expertise_name_en' => 'Administrators/Managers',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            213 => 
            array (
                'id' => 714,
                'major_code' => 'PO',
                'expertise_code' => 'H403',
                'expertise_name_th' => 'พยาบาลผดุงครรภ์',
                'expertise_name_en' => 'Nurses/Midwives',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            214 => 
            array (
                'id' => 715,
                'major_code' => 'PO',
                'expertise_code' => 'H404',
                'expertise_name_th' => 'เภสัชกร',
                'expertise_name_en' => 'Pharmacists',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            215 => 
            array (
                'id' => 716,
                'major_code' => 'PO',
                'expertise_code' => 'H405',
                'expertise_name_th' => 'เจ้าหน้าที่ผู้ช่วย',
                'expertise_name_en' => 'Para-Professionals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            216 => 
            array (
                'id' => 717,
                'major_code' => 'PO',
                'expertise_code' => 'H406',
                'expertise_name_th' => 'เจ้าหน้าที่ภาคสนามเจ้าหน้าที่เยี่ยมเยียนตามบ้าน',
                'expertise_name_en' => 'Field Workers, Home Visitors',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            217 => 
            array (
                'id' => 718,
                'major_code' => 'PO',
                'expertise_code' => 'H407',
                'expertise_name_th' => 'อาสาสมัคร',
                'expertise_name_en' => 'Volunteers',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            218 => 
            array (
                'id' => 719,
                'major_code' => 'PO',
                'expertise_code' => 'H408',
                'expertise_name_th' => 'การออกแบบโปรแกรมการสอน',
                'expertise_name_en' => 'Instructional Program Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            219 => 
            array (
                'id' => 720,
                'major_code' => 'PO',
                'expertise_code' => 'H409',
                'expertise_name_th' => 'การออกแบบระบบควบคุม',
                'expertise_name_en' => 'Supervision Systems Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            220 => 
            array (
                'id' => 721,
                'major_code' => 'PO',
                'expertise_code' => 'H410',
                'expertise_name_th' => 'การพัฒนาบุคลากรด้านวางแผนครอบครัว',
                'expertise_name_en' => 'Family Planning Manpower Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            221 => 
            array (
                'id' => 722,
                'major_code' => 'PO',
                'expertise_code' => 'H500',
                'expertise_name_th' => 'การศึกษาการวางแผนประชากรครอบครัว',
                'expertise_name_en' => 'Population/Family Planning Education',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            222 => 
            array (
                'id' => 723,
                'major_code' => 'ICT',
                'expertise_code' => 'I100',
                'expertise_name_th' => 'เทคโนโลยีสารสนเทศและการสื่อสาร',
                'expertise_name_en' => 'Information and Communication Technology',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            223 => 
            array (
                'id' => 724,
                'major_code' => 'ICT',
                'expertise_code' => 'I101',
                'expertise_name_th' => 'ความต้องการ',
                'expertise_name_en' => 'Demand Requirements',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            224 => 
            array (
                'id' => 725,
                'major_code' => 'ICT',
                'expertise_code' => 'I102',
                'expertise_name_th' => 'การพยากรณ์',
                'expertise_name_en' => 'Forecasting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            225 => 
            array (
                'id' => 726,
                'major_code' => 'ICT',
                'expertise_code' => 'I103',
                'expertise_name_th' => 'การออกแบบโครงข่ายโดยรวม',
                'expertise_name_en' => 'Overall Network Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            226 => 
            array (
                'id' => 727,
                'major_code' => 'ICT',
                'expertise_code' => 'I104',
                'expertise_name_th' => 'การฝึกอบรมที่เกี่ยวกับโทรคมนาคม',
                'expertise_name_en' => 'Telecommunications Related Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            227 => 
            array (
                'id' => 728,
                'major_code' => 'ICT',
                'expertise_code' => 'I105',
                'expertise_name_th' => 'กรอบระเบียบ',
                'expertise_name_en' => 'Regulatory Framework',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            228 => 
            array (
                'id' => 729,
                'major_code' => 'ICT',
                'expertise_code' => 'I200',
                'expertise_name_th' => 'ระบบโทรศัพท์โทรเลขและโทรสารขนาดใหญ่',
                'expertise_name_en' => 'Large-Scale Telephone, Telegraph and Telex Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            229 => 
            array (
                'id' => 730,
                'major_code' => 'ICT',
                'expertise_code' => 'I201',
                'expertise_name_th' => 'ระบบการสวิตช์',
                'expertise_name_en' => 'Switching Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            230 => 
            array (
                'id' => 731,
                'major_code' => 'ICT',
                'expertise_code' => 'I201A',
                'expertise_name_th' => 'ระบบการสวิตช์แบบอนาล็อก',
                'expertise_name_en' => 'Analog Switching Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            231 => 
            array (
                'id' => 732,
                'major_code' => 'ICT',
                'expertise_code' => 'I201B',
                'expertise_name_th' => 'ระบบการสวิตช์แบบดิจิตอล',
                'expertise_name_en' => 'Digital Switching Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            232 => 
            array (
                'id' => 733,
                'major_code' => 'ICT',
                'expertise_code' => 'I202',
                'expertise_name_th' => 'ระบบการส่ง',
                'expertise_name_en' => 'Transmissions Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            233 => 
            array (
                'id' => 734,
                'major_code' => 'ICT',
                'expertise_code' => 'I202A',
                'expertise_name_th' => 'ระบบการส่งผ่านเคเบิลโลหะ',
                'expertise_name_en' => 'Metallic Cable Transmission Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            234 => 
            array (
                'id' => 735,
                'major_code' => 'ICT',
                'expertise_code' => 'I202B',
                'expertise_name_th' => 'ระบบการส่งผ่านเคเบิลเส้นใยแสง',
                'expertise_name_en' => 'Optic Fiber Cable Transmission Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            235 => 
            array (
                'id' => 736,
                'major_code' => 'ICT',
                'expertise_code' => 'I202C',
                'expertise_name_th' => 'ระบบการส่งผ่านเคเบิลใต้น้ำ',
                'expertise_name_en' => 'Submarine Cable Transmission Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            236 => 
            array (
                'id' => 737,
                'major_code' => 'ICT',
                'expertise_code' => 'I203',
                'expertise_name_th' => 'โรงงานเคเบิล',
                'expertise_name_en' => 'Cable Plants',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            237 => 
            array (
                'id' => 738,
                'major_code' => 'ICT',
                'expertise_code' => 'I204',
                'expertise_name_th' => 'ระบบสื่อสารดาวเทียม',
                'expertise_name_en' => 'Satellite Communications Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            238 => 
            array (
                'id' => 739,
                'major_code' => 'ICT',
                'expertise_code' => 'I205',
                'expertise_name_th' => 'ระบบการส่งข้อมูล',
                'expertise_name_en' => 'Data Transmission Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            239 => 
            array (
                'id' => 740,
                'major_code' => 'ICT',
                'expertise_code' => 'I205A',
                'expertise_name_th' => 'ระบบการสวิตช์วงจร',
                'expertise_name_en' => 'Circuit Switching Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            240 => 
            array (
                'id' => 741,
                'major_code' => 'ICT',
                'expertise_code' => 'I205B',
                'expertise_name_th' => 'ระบบการสวิตช์กลุ่มข้อมูล',
                'expertise_name_en' => 'Packet Switching Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            241 => 
            array (
                'id' => 742,
                'major_code' => 'ICT',
                'expertise_code' => 'I205C',
                'expertise_name_th' => 'ระบบวงจรเฉพาะ',
                'expertise_name_en' => 'Dedicated Circuit Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            242 => 
            array (
                'id' => 743,
                'major_code' => 'ICT',
                'expertise_code' => 'I206',
                'expertise_name_th' => 'การบริหารหน่วยงานโทรคมนาคม',
                'expertise_name_en' => 'Telecommunications Utilities Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            243 => 
            array (
                'id' => 744,
                'major_code' => 'ICT',
                'expertise_code' => 'I206A',
                'expertise_name_th' => 'องค์กรและการบริหารจัดการ',
                'expertise_name_en' => 'Organization and Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            244 => 
            array (
                'id' => 745,
                'major_code' => 'ICT',
                'expertise_code' => 'I206B',
                'expertise_name_th' => 'ระบบบัญชีการตรวจสอบบัญชี',
                'expertise_name_en' => 'Accounting/Auditing Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            245 => 
            array (
                'id' => 746,
                'major_code' => 'ICT',
                'expertise_code' => 'I206C',
                'expertise_name_th' => 'โครงสร้างอัตราค่าธรรมเนียมบริการ',
                'expertise_name_en' => 'Tariff Structures',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            246 => 
            array (
                'id' => 747,
                'major_code' => 'ICT',
                'expertise_code' => 'I300',
                'expertise_name_th' => 'ระบบกระจายเสียงทางวิทยุและแพร่ภาพทางโทรทัศน์',
                'expertise_name_en' => 'Radio and TV Broadcasting Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            247 => 
            array (
                'id' => 748,
                'major_code' => 'ICT',
                'expertise_code' => 'I301',
                'expertise_name_th' => 'ระบบกระจายเสียงทางวิทยุ',
                'expertise_name_en' => 'Radio Broadcasting Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            248 => 
            array (
                'id' => 749,
                'major_code' => 'ICT',
                'expertise_code' => 'I302',
                'expertise_name_th' => 'ระบบการส่งสัญญาณแพร่ภาพโทรทัศน์',
                'expertise_name_en' => 'TV Broadcasting Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            249 => 
            array (
                'id' => 750,
                'major_code' => 'ICT',
                'expertise_code' => 'I303',
                'expertise_name_th' => 'ระบบโทรทัศน์สายอากาศชุมชน',
            'expertise_name_en' => 'Community Antenna Television (CATV) Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            250 => 
            array (
                'id' => 751,
                'major_code' => 'ICT',
                'expertise_code' => 'I304',
                'expertise_name_th' => 'ระบบวิทยุเคลื่อนที่',
                'expertise_name_en' => 'Mobile Radio Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            251 => 
            array (
                'id' => 752,
                'major_code' => 'ICT',
                'expertise_code' => 'I400',
                'expertise_name_th' => 'ระบบสื่อสารพิเศษ',
                'expertise_name_en' => 'Specialized Communications Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            252 => 
            array (
                'id' => 753,
                'major_code' => 'ICT',
                'expertise_code' => 'I401',
                'expertise_name_th' => 'ระบบสื่อสารในการขนส่งทางราง',
                'expertise_name_en' => 'Rail Transport Communications Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            253 => 
            array (
                'id' => 754,
                'major_code' => 'ICT',
                'expertise_code' => 'I402',
                'expertise_name_th' => 'ระบบสื่อสารในการขนส่งทางอากาศ',
                'expertise_name_en' => 'Air Transport Communications Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            254 => 
            array (
                'id' => 755,
                'major_code' => 'ICT',
                'expertise_code' => 'I403',
                'expertise_name_th' => 'ระบบสื่อสารในการขนส่งทางท่อ',
                'expertise_name_en' => 'Pipe Transport Communications Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            255 => 
            array (
                'id' => 756,
                'major_code' => 'ICT',
                'expertise_code' => 'I404',
                'expertise_name_th' => 'ระบบสื่อสารในการขนส่งทางน้ำ',
                'expertise_name_en' => 'Water Transport Communications Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            256 => 
            array (
                'id' => 757,
                'major_code' => 'ICT',
                'expertise_code' => 'I405',
                'expertise_name_th' => 'ระบบสื่อสารทางวิดีทัศน์',
                'expertise_name_en' => 'Video Communications Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            257 => 
            array (
                'id' => 758,
                'major_code' => 'ICT',
                'expertise_code' => 'I500',
                'expertise_name_th' => 'ระบบสื่อสารขนาดเล็กในชนบท',
                'expertise_name_en' => 'Small-Scale/Rural Communication Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            258 => 
            array (
                'id' => 759,
                'major_code' => 'ICT',
                'expertise_code' => 'I501',
                'expertise_name_th' => 'ระบบไปรษณีย์และโทรเลข',
                'expertise_name_en' => 'Post and Telegraph Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            259 => 
            array (
                'id' => 760,
                'major_code' => 'ICT',
                'expertise_code' => 'I502',
                'expertise_name_th' => 'ระบบวิทยุและโทรศัพท์',
                'expertise_name_en' => 'Radio and Telephone Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            260 => 
            array (
                'id' => 761,
                'major_code' => 'ICT',
                'expertise_code' => 'I503',
                'expertise_name_th' => 'ระบบการสวิตช์แบบเคลื่อนย้ายได้ระบบการลดสายออก',
                'expertise_name_en' => 'Protable Switching Systems/Line Concentrator Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            261 => 
            array (
                'id' => 762,
                'major_code' => 'ICT',
                'expertise_code' => 'I600',
                'expertise_name_th' => 'การประยุกต์ใช้คอมพิวเตอร์',
                'expertise_name_en' => 'Computer Applications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            262 => 
            array (
                'id' => 763,
                'major_code' => 'ICT',
                'expertise_code' => 'I601',
                'expertise_name_th' => 'การประมวลข้อมูล',
                'expertise_name_en' => 'Data Processing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            263 => 
            array (
                'id' => 764,
                'major_code' => 'ICT',
                'expertise_code' => 'I601A',
                'expertise_name_th' => 'ระบบออนไลน์',
                'expertise_name_en' => 'On-Line',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            264 => 
            array (
                'id' => 765,
                'major_code' => 'ICT',
                'expertise_code' => 'I601B',
                'expertise_name_th' => 'ระบบออฟไลน์',
                'expertise_name_en' => 'Off-Line',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            265 => 
            array (
                'id' => 766,
                'major_code' => 'ICT',
                'expertise_code' => 'I602',
                'expertise_name_th' => 'ระบบการควบคุมและกำกับดูแลระยะไกล',
                'expertise_name_en' => 'Remote Control and Supervisory Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            266 => 
            array (
                'id' => 767,
                'major_code' => 'ICT',
                'expertise_code' => 'Q100',
                'expertise_name_th' => 'การปฏิบัติการของคอมพิวเตอร์',
                'expertise_name_en' => 'Computer Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            267 => 
            array (
                'id' => 768,
                'major_code' => 'ICT',
                'expertise_code' => 'Q101',
                'expertise_name_th' => 'ระบบคอมพิวเตอร์',
                'expertise_name_en' => 'Computer Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            268 => 
            array (
                'id' => 769,
                'major_code' => 'ICT',
                'expertise_code' => 'Q101A',
                'expertise_name_th' => 'ระบบคอมพิวเตอร์โครงข่ายการสื่อสาร',
                'expertise_name_en' => 'Computer System, Comm. Networks',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            269 => 
            array (
                'id' => 770,
                'major_code' => 'ICT',
                'expertise_code' => 'Q101B',
                'expertise_name_th' => 'ระบบคอมพิวเตอร์การประเมินฮาร์ดแวร์',
                'expertise_name_en' => 'Computer System, Hardware Evaluations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            270 => 
            array (
                'id' => 771,
                'major_code' => 'ICT',
                'expertise_code' => 'Q101C',
                'expertise_name_th' => 'ระบบคอมพิวเตอร์การวิเคราะห์ความต้องการ',
                'expertise_name_en' => 'Computer System, Requirements Analysis',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            271 => 
            array (
                'id' => 772,
                'major_code' => 'ICT',
                'expertise_code' => 'Q101D',
                'expertise_name_th' => 'ระบบคอมพิวเตอร์การประเมินซอฟต์แวร์',
                'expertise_name_en' => 'Computer System, Software Evaluations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            272 => 
            array (
                'id' => 773,
                'major_code' => 'ICT',
                'expertise_code' => 'Q101E',
                'expertise_name_th' => 'ระบบคอมพิวเตอร์การวางแผนสารสนเทศยุทธศาสตร์',
                'expertise_name_en' => 'Computer System, Strategic Info Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            273 => 
            array (
                'id' => 774,
                'major_code' => 'ICT',
                'expertise_code' => 'Q102',
                'expertise_name_th' => 'การพัฒนาระบบคอมพิวเตอร์',
                'expertise_name_en' => 'Computer Systems Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            274 => 
            array (
                'id' => 775,
                'major_code' => 'ICT',
                'expertise_code' => 'Q103',
                'expertise_name_th' => 'การสื่อสารข้อมูล',
                'expertise_name_en' => 'Data Communications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            275 => 
            array (
                'id' => 776,
                'major_code' => 'ICT',
                'expertise_code' => 'Q104',
                'expertise_name_th' => 'การป้อนข้อมูล',
                'expertise_name_en' => 'Data Entry Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            276 => 
            array (
                'id' => 777,
                'major_code' => 'ICT',
                'expertise_code' => 'Q105',
                'expertise_name_th' => 'การศึกษาและการฝึกอบรบ',
                'expertise_name_en' => 'Education and Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            277 => 
            array (
                'id' => 778,
                'major_code' => 'ICT',
                'expertise_code' => 'Q106',
                'expertise_name_th' => 'ข้อมูลเพื่อการบริหาร',
                'expertise_name_en' => 'Management Information',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            278 => 
            array (
                'id' => 779,
                'major_code' => 'ICT',
                'expertise_code' => 'Q107',
                'expertise_name_th' => 'ซอฟต์แวร์ไมโครคอมพิวเตอร์',
                'expertise_name_en' => 'Microcomputer Software',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            279 => 
            array (
                'id' => 780,
                'major_code' => 'ICT',
                'expertise_code' => 'Q108',
                'expertise_name_th' => 'การจัดการข้อมูลมินิไมโครคอมพิวเตอร์',
                'expertise_name_en' => 'Mini/Microcomputer Data Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            280 => 
            array (
                'id' => 781,
                'major_code' => 'ICT',
                'expertise_code' => 'Q109',
                'expertise_name_th' => 'การบริหารโครงการ',
                'expertise_name_en' => 'Project Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            281 => 
            array (
                'id' => 782,
                'major_code' => 'ICT',
                'expertise_code' => 'Q110',
                'expertise_name_th' => 'การออกแบบระบบ',
                'expertise_name_en' => 'System Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            282 => 
            array (
                'id' => 783,
                'major_code' => 'ICT',
                'expertise_code' => 'Q111',
                'expertise_name_th' => 'การนำระบบไปใช้งาน',
                'expertise_name_en' => 'System Inplementation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            283 => 
            array (
                'id' => 784,
                'major_code' => 'ICT',
                'expertise_code' => 'Q112',
                'expertise_name_th' => 'โทรคมนาคม',
                'expertise_name_en' => 'Telecommunications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            284 => 
            array (
                'id' => 785,
                'major_code' => 'ICT',
                'expertise_code' => 'Q113',
                'expertise_name_th' => 'ระบบสารสนเทศภูมิศาสตร์',
                'expertise_name_en' => 'Geographic Information System',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            285 => 
            array (
                'id' => 786,
                'major_code' => 'TO',
                'expertise_code' => 'J100',
                'expertise_name_th' => 'การท่องเที่ยว',
                'expertise_name_en' => 'Tourism',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            286 => 
            array (
                'id' => 787,
                'major_code' => 'TO',
                'expertise_code' => 'J101',
                'expertise_name_th' => 'การพยากรณ์ความต้องการด้านท่องเที่ยว',
                'expertise_name_en' => 'Tourism Demand Forecasting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            287 => 
            array (
                'id' => 788,
                'major_code' => 'TO',
                'expertise_code' => 'J102',
                'expertise_name_th' => 'การขนส่งสำหรับการท่องเที่ยว',
                'expertise_name_en' => 'Transportation for Tourism',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            288 => 
            array (
                'id' => 789,
                'major_code' => 'TO',
                'expertise_code' => 'J103',
                'expertise_name_th' => 'ผลกระทบด้านการท่องเที่ยว',
                'expertise_name_en' => 'Tourism Impacts',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            289 => 
            array (
                'id' => 790,
                'major_code' => 'TO',
                'expertise_code' => 'J104',
                'expertise_name_th' => 'การปกป้องสิ่งแวดล้อม',
                'expertise_name_en' => 'Environmental Protection',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            290 => 
            array (
                'id' => 791,
                'major_code' => 'TO',
                'expertise_code' => 'J105',
                'expertise_name_th' => 'นโยบายการบินแห่งชาติ',
                'expertise_name_en' => 'National Aviation Policies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            291 => 
            array (
                'id' => 792,
                'major_code' => 'TO',
                'expertise_code' => 'J200',
                'expertise_name_th' => 'การวางแผนออกแบบและดำเนินการโครงการท่องเที่ยว',
                'expertise_name_en' => 'Planning, Design and Implementation of Tourism Projects',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            292 => 
            array (
                'id' => 793,
                'major_code' => 'TO',
                'expertise_code' => 'J201',
                'expertise_name_th' => 'การวางผังเมืองและผังภาค',
                'expertise_name_en' => 'Town and Regional Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            293 => 
            array (
                'id' => 794,
                'major_code' => 'TO',
                'expertise_code' => 'J202',
                'expertise_name_th' => 'แผนข้อเสนอการลงทุนด้านการท่องเที่ยว',
                'expertise_name_en' => 'Tourism Investment Programs/Proposals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            294 => 
            array (
                'id' => 795,
                'major_code' => 'TO',
                'expertise_code' => 'J203',
                'expertise_name_th' => 'การวางผังสถานที่ท่องเที่ยวและภูมิทัศน์',
                'expertise_name_en' => 'Site Planning and Landscaping',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            295 => 
            array (
                'id' => 796,
                'major_code' => 'TO',
                'expertise_code' => 'J204',
                'expertise_name_th' => 'รีสอร์ทและสถานที่นันทนาการ',
                'expertise_name_en' => 'Resort and Recreation Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            296 => 
            array (
                'id' => 797,
                'major_code' => 'TO',
                'expertise_code' => 'J205',
                'expertise_name_th' => 'การพัฒนาโครงสร้างพื้นฐานรวมถึงสนามบิน',
            'expertise_name_en' => 'Infrastructure (Including Airport) Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            297 => 
            array (
                'id' => 798,
                'major_code' => 'TO',
                'expertise_code' => 'J206',
                'expertise_name_th' => 'สิ่งอำนวยความสะดวกแก่ชุมชน',
                'expertise_name_en' => 'Community Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            298 => 
            array (
                'id' => 799,
                'major_code' => 'TO',
                'expertise_code' => 'J207',
                'expertise_name_th' => 'อุทยานแห่งชาติ',
                'expertise_name_en' => 'National Parks',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            299 => 
            array (
                'id' => 800,
                'major_code' => 'TO',
                'expertise_code' => 'J208',
                'expertise_name_th' => 'การอนุรักษ์อนุสาวรีย์และสถานที่ทางประวัติศาสตร์',
                'expertise_name_en' => 'Conservation of Historic Monuments and Sites',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            300 => 
            array (
                'id' => 801,
                'major_code' => 'TO',
                'expertise_code' => 'J209',
                'expertise_name_th' => 'การพัฒนาอุทยานทางทะเล',
                'expertise_name_en' => 'Marines and Marine Park Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            301 => 
            array (
                'id' => 802,
                'major_code' => 'TO',
                'expertise_code' => 'J210',
                'expertise_name_th' => 'การควบคุมการใช้ที่ดินและการพัฒนา',
                'expertise_name_en' => 'Land-Use and Development Controls',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            302 => 
            array (
                'id' => 803,
                'major_code' => 'TO',
                'expertise_code' => 'J211',
                'expertise_name_th' => 'การออกแบบโรงแรม',
                'expertise_name_en' => 'Hotel Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            303 => 
            array (
                'id' => 804,
                'major_code' => 'TO',
                'expertise_code' => 'J212',
                'expertise_name_th' => 'การอนุรักษ์และการเก็บรักษาการแสดงโบราณวัตถุ',
                'expertise_name_en' => 'Conservation and Preservation/Display of Artifacts',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            304 => 
            array (
                'id' => 805,
                'major_code' => 'TO',
                'expertise_code' => 'J213',
                'expertise_name_th' => 'การบริหารทุ่งหญ้าธรรมชาติและสัตว์ป่า',
                'expertise_name_en' => 'Range and Wildlife Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            305 => 
            array (
                'id' => 806,
                'major_code' => 'TO',
                'expertise_code' => 'J214',
                'expertise_name_th' => 'หัตถกรรมเพื่อการท่องเที่ยว',
                'expertise_name_en' => 'Handicrafts for Tourism',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            306 => 
            array (
                'id' => 807,
                'major_code' => 'TO',
                'expertise_code' => 'J300',
                'expertise_name_th' => 'การดำเนินโครงการท่องเที่ยว',
                'expertise_name_en' => 'Operation of Tourism Projects',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            307 => 
            array (
                'id' => 808,
                'major_code' => 'TO',
                'expertise_code' => 'J301',
                'expertise_name_th' => 'การวิเคราะห์ทางการเงินและระบบบัญชี',
                'expertise_name_en' => 'Financial Analysis and Accounting Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            308 => 
            array (
                'id' => 809,
                'major_code' => 'TO',
                'expertise_code' => 'J302',
                'expertise_name_th' => 'ผู้ลงทุนและการส่งเสริมอื่นๆ',
                'expertise_name_en' => 'Investor and Other Promotions',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            309 => 
            array (
                'id' => 810,
                'major_code' => 'TO',
                'expertise_code' => 'J303',
                'expertise_name_th' => 'การขายและการตลาด',
                'expertise_name_en' => 'Sales and Marketing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            310 => 
            array (
                'id' => 811,
                'major_code' => 'TO',
                'expertise_code' => 'J304',
                'expertise_name_th' => 'การบริหารและการจัดองค์กรโรงแรม',
                'expertise_name_en' => 'Hotel Management and Organisation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            311 => 
            array (
                'id' => 812,
                'major_code' => 'TO',
                'expertise_code' => 'J305',
                'expertise_name_th' => 'การบริหารด้านอาหารและเครื่องดื่ม',
                'expertise_name_en' => 'Food and Beverage Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            312 => 
            array (
                'id' => 813,
                'major_code' => 'TO',
                'expertise_code' => 'J306',
                'expertise_name_th' => 'ระบบจองตั๋วเครื่องบิน',
                'expertise_name_en' => 'Airline Reservation Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            313 => 
            array (
                'id' => 814,
                'major_code' => 'TO',
                'expertise_code' => 'J307',
                'expertise_name_th' => 'ระบบจองโรงแรมและอื่นๆที่เกี่ยวข้อง',
                'expertise_name_en' => 'Hotel and Related Reservation Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            314 => 
            array (
                'id' => 815,
                'major_code' => 'TO',
                'expertise_code' => 'J308',
                'expertise_name_th' => 'การฝึกอบรมด้านการโรงแรมการท่องเที่ยว',
                'expertise_name_en' => 'Hotel/Tourism Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            315 => 
            array (
                'id' => 816,
                'major_code' => 'TR',
                'expertise_code' => 'K100',
                'expertise_name_th' => 'คมนาคมขนส่ง',
                'expertise_name_en' => 'Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            316 => 
            array (
                'id' => 817,
                'major_code' => 'TR',
                'expertise_code' => 'K101',
                'expertise_name_th' => 'การวางแผนการขนส่งระดับประเทศภูมิภาคการขนส่งต่อเนื่อง',
                'expertise_name_en' => 'National/Regional/Multimodal Transportation Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            317 => 
            array (
                'id' => 818,
                'major_code' => 'TR',
                'expertise_code' => 'K101A',
                'expertise_name_th' => 'การสำรวจการจราจรต้นทางปลายทาง',
                'expertise_name_en' => 'Traffic/Origin-Destination Surveys',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            318 => 
            array (
                'id' => 819,
                'major_code' => 'TR',
                'expertise_code' => 'K101B',
                'expertise_name_th' => 'ระบบสารสนเทศ',
                'expertise_name_en' => 'Information Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            319 => 
            array (
                'id' => 820,
                'major_code' => 'TR',
                'expertise_code' => 'K101C',
                'expertise_name_th' => 'การพยากรณ์ความต้องการ',
                'expertise_name_en' => 'Demand Forecasting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            320 => 
            array (
                'id' => 821,
                'major_code' => 'TR',
                'expertise_code' => 'K101D',
                'expertise_name_th' => 'แบบจำลองการขนส่ง',
                'expertise_name_en' => 'Transportation Models',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            321 => 
            array (
                'id' => 822,
                'major_code' => 'TR',
                'expertise_code' => 'K101E',
                'expertise_name_th' => 'นโยบายและแผนการลงทุน',
                'expertise_name_en' => 'Policies and Investment Programs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            322 => 
            array (
                'id' => 823,
                'major_code' => 'TR',
                'expertise_code' => 'K102',
                'expertise_name_th' => 'เทคโนโลยีการขนส่งต่อเนื่อง',
                'expertise_name_en' => 'Intermodal Transportation Technology',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            323 => 
            array (
                'id' => 824,
                'major_code' => 'TR',
                'expertise_code' => 'K103',
                'expertise_name_th' => 'สถานีขนส่งสินค้าต่อเนื่อง',
                'expertise_name_en' => 'Intermodal Freight Terminals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            324 => 
            array (
                'id' => 825,
                'major_code' => 'TR',
                'expertise_code' => 'K104',
                'expertise_name_th' => 'การอำนวยความสะดวกการลดขั้นตอนเอกสารวิธีการฯลฯ',
            'expertise_name_en' => 'Facilitation (Simplification of Transportation Documents, Procedures, etc.)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            325 => 
            array (
                'id' => 826,
                'major_code' => 'TR',
                'expertise_code' => 'K105',
                'expertise_name_th' => 'การฝึกอบรมที่เกี่ยวกับการคมนาคมขนส่ง',
                'expertise_name_en' => 'Transportation Rolated Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            326 => 
            array (
                'id' => 827,
                'major_code' => 'TR',
                'expertise_code' => 'K106',
                'expertise_name_th' => 'ระบบเครือข่ายการจัดส่งสินค้าและพัสดุ',
                'expertise_name_en' => 'Logistic',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            327 => 
            array (
                'id' => 828,
                'major_code' => 'TR',
                'expertise_code' => 'K200',
                'expertise_name_th' => 'สิ่งอำนวยความสะดวกการขนส่งทางถนน',
                'expertise_name_en' => 'Road Transportation Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            328 => 
            array (
                'id' => 829,
                'major_code' => 'TR',
                'expertise_code' => 'K201',
                'expertise_name_th' => 'การวางแผนและแผนงานทางหลวง',
                'expertise_name_en' => 'Highway Planning and Programming',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            329 => 
            array (
                'id' => 830,
                'major_code' => 'TR',
                'expertise_code' => 'K201A',
                'expertise_name_th' => 'ทางหลวง',
                'expertise_name_en' => 'Highways',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            330 => 
            array (
                'id' => 831,
                'major_code' => 'TR',
                'expertise_code' => 'K201B',
                'expertise_name_th' => 'ทางหลวงชนบทจากไร่นาไปสู่ตลาด',
            'expertise_name_en' => 'Rural Feeder Roads (Farm to Market)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            331 => 
            array (
                'id' => 832,
                'major_code' => 'TR',
                'expertise_code' => 'K202',
                'expertise_name_th' => 'ทางหลวงสายใหม่การปรับปรุงและบูรณะ',
                'expertise_name_en' => 'New Highways, Improvements and Reconstruction',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            332 => 
            array (
                'id' => 833,
                'major_code' => 'TR',
                'expertise_code' => 'K202A',
                'expertise_name_th' => 'ทางหลวงเก็บค่าผ่านทาง',
                'expertise_name_en' => 'Toll Roads',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            333 => 
            array (
                'id' => 834,
                'major_code' => 'TR',
                'expertise_code' => 'K202B',
                'expertise_name_th' => 'ทางหลวงสายประธาน',
                'expertise_name_en' => 'Primary Roads',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            334 => 
            array (
                'id' => 835,
                'major_code' => 'TR',
                'expertise_code' => 'K202C',
                'expertise_name_th' => 'ทางหลวงสายรองประธาน',
                'expertise_name_en' => 'Secondary Roads',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            335 => 
            array (
                'id' => 836,
                'major_code' => 'TR',
                'expertise_code' => 'K202D',
                'expertise_name_th' => 'ทางหลวงชนบทจากไร่นาไปสู่ตลาด',
            'expertise_name_en' => 'Rural Feeder Roads (Farm to Market)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            336 => 
            array (
                'id' => 837,
                'major_code' => 'TR',
                'expertise_code' => 'K202E',
                'expertise_name_th' => 'ทางท้องถิ่น',
                'expertise_name_en' => 'Access Tracks',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            337 => 
            array (
                'id' => 838,
                'major_code' => 'TR',
                'expertise_code' => 'K203',
                'expertise_name_th' => 'สิ่งก่อสร้างใหม่งานบูรณะ',
                'expertise_name_en' => 'New Structures, Reconstruction',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            338 => 
            array (
                'id' => 839,
                'major_code' => 'TR',
                'expertise_code' => 'K203A',
                'expertise_name_th' => 'สะพาน',
                'expertise_name_en' => 'Bridges',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            339 => 
            array (
                'id' => 840,
                'major_code' => 'TR',
                'expertise_code' => 'K203B',
                'expertise_name_th' => 'อุโมงค์',
                'expertise_name_en' => 'Tunnels',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            340 => 
            array (
                'id' => 841,
                'major_code' => 'TR',
                'expertise_code' => 'K203C',
                'expertise_name_th' => 'ชุมทางต่างระดับ',
                'expertise_name_en' => 'Interchanges',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            341 => 
            array (
                'id' => 842,
                'major_code' => 'TR',
                'expertise_code' => 'K203D',
                'expertise_name_th' => 'ท่าเทียบเรือขนานยนต์',
                'expertise_name_en' => 'Ferry Structures',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            342 => 
            array (
                'id' => 843,
                'major_code' => 'TR',
                'expertise_code' => 'K204',
                'expertise_name_th' => 'การบำรุงรักษาทางหลวง',
                'expertise_name_en' => 'Maintenance of Highways',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            343 => 
            array (
                'id' => 844,
                'major_code' => 'TR',
                'expertise_code' => 'K204A',
                'expertise_name_th' => 'การจัดองค์กรงบค่าใช้จ่ายและแผนงาน',
                'expertise_name_en' => 'Organization, Funding and Programming',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            344 => 
            array (
                'id' => 845,
                'major_code' => 'TR',
                'expertise_code' => 'K204B',
                'expertise_name_th' => 'การดำเนินงาน',
                'expertise_name_en' => 'Execution',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            345 => 
            array (
                'id' => 846,
                'major_code' => 'TR',
                'expertise_code' => 'K205',
                'expertise_name_th' => 'การบำรุงรักษาทางหลวงชนบทจากไร่นาไปสู่ตลาด',
            'expertise_name_en' => 'Maintenance of Rural Feeder Roads (Farm to Market)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            346 => 
            array (
                'id' => 847,
                'major_code' => 'TR',
                'expertise_code' => 'K206',
                'expertise_name_th' => 'การบริหารเครื่องจักรโรงงาน',
                'expertise_name_en' => 'Equipment/Plant Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            347 => 
            array (
                'id' => 848,
                'major_code' => 'TR',
                'expertise_code' => 'K207',
                'expertise_name_th' => 'การควบคุมการจราจรบนทางหลวง',
                'expertise_name_en' => 'Highway Traffic Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            348 => 
            array (
                'id' => 849,
                'major_code' => 'TR',
                'expertise_code' => 'K208',
                'expertise_name_th' => 'กฎหมายทางหลวง',
                'expertise_name_en' => 'Highway Legislation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            349 => 
            array (
                'id' => 850,
                'major_code' => 'TR',
                'expertise_code' => 'K209',
                'expertise_name_th' => 'ความปลอดภัยบนทางหลวง',
                'expertise_name_en' => 'Highway Safety',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            350 => 
            array (
                'id' => 851,
                'major_code' => 'TR',
                'expertise_code' => 'K210',
                'expertise_name_th' => 'การฝึกอบรมด้านสิ่งอำนวยความสะดวกสำหรับการขนส่งทางถนน',
                'expertise_name_en' => 'Road Transportation Facilities Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            351 => 
            array (
                'id' => 852,
                'major_code' => 'TR',
                'expertise_code' => 'K211',
                'expertise_name_th' => 'เศรษฐศาสตร์การขนส่งทางถนน',
                'expertise_name_en' => 'Road Transport Economics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            352 => 
            array (
                'id' => 853,
                'major_code' => 'TR',
                'expertise_code' => 'K300',
                'expertise_name_th' => 'อุตสาหกรรมการขนส่งทางถนน',
                'expertise_name_en' => 'Road Transportation Industry',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            353 => 
            array (
                'id' => 854,
                'major_code' => 'TR',
                'expertise_code' => 'K301',
                'expertise_name_th' => 'กฎระเบียบข้อบังคับ',
                'expertise_name_en' => 'Regulation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            354 => 
            array (
                'id' => 855,
                'major_code' => 'TR',
                'expertise_code' => 'K302',
                'expertise_name_th' => 'ค่าธรรมเนียมผู้ใช้ถนน',
                'expertise_name_en' => 'Road User Charges',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            355 => 
            array (
                'id' => 856,
                'major_code' => 'TR',
                'expertise_code' => 'K303',
                'expertise_name_th' => 'การบริหารบริษัท',
                'expertise_name_en' => 'Management of Firms',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            356 => 
            array (
                'id' => 857,
                'major_code' => 'TR',
                'expertise_code' => 'K303A',
                'expertise_name_th' => 'การขนส่งผู้โดยสาร',
                'expertise_name_en' => 'Passenger Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            357 => 
            array (
                'id' => 858,
                'major_code' => 'TR',
                'expertise_code' => 'K303B',
                'expertise_name_th' => 'การขนส่งสินค้า',
                'expertise_name_en' => 'Freight Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            358 => 
            array (
                'id' => 859,
                'major_code' => 'TR',
                'expertise_code' => 'K304',
                'expertise_name_th' => 'การวิเคราะห์ทางการเงินต้นทุนและค่าธรรมเนียม',
                'expertise_name_en' => 'Financial Analysis, Costing and Tariffs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            359 => 
            array (
                'id' => 860,
                'major_code' => 'TR',
                'expertise_code' => 'K305',
                'expertise_name_th' => 'สถานีขนส่ง',
                'expertise_name_en' => 'Terminals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            360 => 
            array (
                'id' => 861,
                'major_code' => 'TR',
                'expertise_code' => 'K305A',
                'expertise_name_th' => 'ผู้โดยสาร',
                'expertise_name_en' => 'Passenger',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            361 => 
            array (
                'id' => 862,
                'major_code' => 'TR',
                'expertise_code' => 'K305B',
                'expertise_name_th' => 'สินค้า',
                'expertise_name_en' => 'Freight',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            362 => 
            array (
                'id' => 863,
                'major_code' => 'TR',
                'expertise_code' => 'K306',
                'expertise_name_th' => 'การบริการขนส่งในชนบท',
                'expertise_name_en' => 'Rural Transportation Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            363 => 
            array (
                'id' => 864,
                'major_code' => 'TR',
                'expertise_code' => 'K306A',
                'expertise_name_th' => 'การขนส่งผู้โดยสาร',
                'expertise_name_en' => 'Passenger Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            364 => 
            array (
                'id' => 865,
                'major_code' => 'TR',
                'expertise_code' => 'K306B',
                'expertise_name_th' => 'การขนส่งสินค้า',
                'expertise_name_en' => 'Freight Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            365 => 
            array (
                'id' => 866,
                'major_code' => 'TR',
                'expertise_code' => 'K307',
                'expertise_name_th' => 'การฝึกอบรมด้านอุตสาหกรรมการขนส่งทางถนน',
                'expertise_name_en' => 'Road Transportation Industry Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            366 => 
            array (
                'id' => 867,
                'major_code' => 'TR',
                'expertise_code' => 'K400',
                'expertise_name_th' => 'การขนส่งทางราง',
                'expertise_name_en' => 'Rail Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            367 => 
            array (
                'id' => 868,
                'major_code' => 'TR',
                'expertise_code' => 'K401',
                'expertise_name_th' => 'การพยากรณ์ความต้องการและการวางแผนการลงทุน',
                'expertise_name_en' => 'Demand Forecasting and Investment Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            368 => 
            array (
                'id' => 869,
                'major_code' => 'TR',
                'expertise_code' => 'K402',
                'expertise_name_th' => 'การตลาด',
                'expertise_name_en' => 'Marketing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            369 => 
            array (
                'id' => 870,
                'major_code' => 'TR',
                'expertise_code' => 'K403',
                'expertise_name_th' => 'การวิเคราะห์ทางการเงินต้นทุนและค่าธรรมเนียม',
                'expertise_name_en' => 'Financial Analysis, Costing & Tariffs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            370 => 
            array (
                'id' => 871,
                'major_code' => 'TR',
                'expertise_code' => 'K404',
                'expertise_name_th' => 'กฎระเบียบข้อบังคับและการกำหนดราคา',
                'expertise_name_en' => 'Regulation and Pricing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            371 => 
            array (
                'id' => 872,
                'major_code' => 'TR',
                'expertise_code' => 'K405',
                'expertise_name_th' => 'การบริหารและการพัฒนาองค์กร',
                'expertise_name_en' => 'Management and Organizational Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            372 => 
            array (
                'id' => 873,
                'major_code' => 'TR',
                'expertise_code' => 'K406',
                'expertise_name_th' => 'การวางรางใหม่และการเปลี่ยนรางเดิม',
                'expertise_name_en' => 'New Tracks and Track Renewal',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            373 => 
            array (
                'id' => 874,
                'major_code' => 'TR',
                'expertise_code' => 'K406A',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Layout & Alignment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            374 => 
            array (
                'id' => 875,
                'major_code' => 'TR',
                'expertise_code' => 'K406B',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Trackwork',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            375 => 
            array (
                'id' => 876,
                'major_code' => 'TR',
                'expertise_code' => 'K407',
                'expertise_name_th' => 'สิ่งก่อสร้าง',
                'expertise_name_en' => 'Structures',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            376 => 
            array (
                'id' => 877,
                'major_code' => 'TR',
                'expertise_code' => 'K407A',
                'expertise_name_th' => 'สะพาน',
                'expertise_name_en' => 'Bridges',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            377 => 
            array (
                'id' => 878,
                'major_code' => 'TR',
                'expertise_code' => 'K407B',
                'expertise_name_th' => 'อุโมงค์',
                'expertise_name_en' => 'Tunnels',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            378 => 
            array (
                'id' => 879,
                'major_code' => 'TR',
                'expertise_code' => 'K407C',
                'expertise_name_th' => 'สถานี',
                'expertise_name_en' => 'Stations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            379 => 
            array (
                'id' => 880,
                'major_code' => 'TR',
                'expertise_code' => 'K408',
                'expertise_name_th' => 'ย่านสับเปลี่ยนและลานขนถ่ายสินค้า',
                'expertise_name_en' => 'Terminals and Yards',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            380 => 
            array (
                'id' => 881,
                'major_code' => 'TR',
                'expertise_code' => 'K409',
                'expertise_name_th' => 'ระบบไฟสัญญาณ',
                'expertise_name_en' => 'Signaling Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            381 => 
            array (
                'id' => 882,
                'major_code' => 'TR',
                'expertise_code' => 'K410',
                'expertise_name_th' => 'รถตู้โดยสารตู้สินค้า',
                'expertise_name_en' => 'Rolling Stock',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            382 => 
            array (
                'id' => 883,
                'major_code' => 'TR',
                'expertise_code' => 'K410A',
                'expertise_name_th' => 'รถจักร',
                'expertise_name_en' => 'Locomotives',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            383 => 
            array (
                'id' => 884,
                'major_code' => 'TR',
                'expertise_code' => 'K411',
                'expertise_name_th' => 'ระบบไฟฟ้า',
                'expertise_name_en' => 'Electrification',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            384 => 
            array (
                'id' => 885,
                'major_code' => 'TR',
                'expertise_code' => 'K411A',
                'expertise_name_th' => '-',
            'expertise_name_en' => 'Commuter Train (Urban)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            385 => 
            array (
                'id' => 886,
                'major_code' => 'TR',
                'expertise_code' => 'K411B',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'High-Speed Train',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            386 => 
            array (
                'id' => 887,
                'major_code' => 'TR',
                'expertise_code' => 'K412',
                'expertise_name_th' => 'การเดินรถ',
                'expertise_name_en' => 'Rail Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            387 => 
            array (
                'id' => 888,
                'major_code' => 'TR',
                'expertise_code' => 'K413',
                'expertise_name_th' => 'โรงซ่อมและการบำรุงรักษาอุปกรณ์',
                'expertise_name_en' => 'Workshops and Equipment Maintenance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            388 => 
            array (
                'id' => 889,
                'major_code' => 'TR',
                'expertise_code' => 'K413A',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Ordinary Train',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            389 => 
            array (
                'id' => 890,
                'major_code' => 'TR',
                'expertise_code' => 'K413B',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'High-Speed Train',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            390 => 
            array (
                'id' => 891,
                'major_code' => 'TR',
                'expertise_code' => 'K414',
                'expertise_name_th' => 'การบำรุงรักษาราง',
                'expertise_name_en' => 'Track Maintenance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            391 => 
            array (
                'id' => 892,
                'major_code' => 'TR',
                'expertise_code' => 'K414A',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Ordinary Train',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            392 => 
            array (
                'id' => 893,
                'major_code' => 'TR',
                'expertise_code' => 'K414B',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'High-Speed Train',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            393 => 
            array (
                'id' => 894,
                'major_code' => 'TR',
                'expertise_code' => 'K415',
                'expertise_name_th' => 'การประยุกต์ใช้คอมพิวเตอร์',
                'expertise_name_en' => 'Computer Applications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            394 => 
            array (
                'id' => 895,
                'major_code' => 'TR',
                'expertise_code' => 'K415A',
                'expertise_name_th' => 'ระบบสารสนเทศ',
                'expertise_name_en' => 'Information Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            395 => 
            array (
                'id' => 896,
                'major_code' => 'TR',
                'expertise_code' => 'K415B',
                'expertise_name_th' => 'การวิเคราะห์การวางแผนและการพยากรณ์',
                'expertise_name_en' => 'Analysis, Planning and Forecasting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            396 => 
            array (
                'id' => 897,
                'major_code' => 'TR',
                'expertise_code' => 'K415C',
                'expertise_name_th' => 'การดำเนินงาน',
                'expertise_name_en' => 'Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            397 => 
            array (
                'id' => 898,
                'major_code' => 'TR',
                'expertise_code' => 'K416',
                'expertise_name_th' => 'การฝึกอบรมเกี่ยวกับการขนส่งทางราง',
                'expertise_name_en' => 'Rail Transportation Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            398 => 
            array (
                'id' => 899,
                'major_code' => 'TR',
                'expertise_code' => 'K417',
                'expertise_name_th' => 'เศรษฐศาสตร์การขนส่งทางราง',
                'expertise_name_en' => 'Rail Transport Economics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            399 => 
            array (
                'id' => 900,
                'major_code' => 'TR',
                'expertise_code' => 'K500',
                'expertise_name_th' => 'ท่าเรือเดินสมุทรและท่าเรือแม่น้ำ',
                'expertise_name_en' => 'Seaports and River Ports',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            400 => 
            array (
                'id' => 901,
                'major_code' => 'TR',
                'expertise_code' => 'K501',
                'expertise_name_th' => 'การพยากรณ์ความต้องการและการวางแผนการลงทุน',
                'expertise_name_en' => 'Demand Forecasting and Investment Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            401 => 
            array (
                'id' => 902,
                'major_code' => 'TR',
                'expertise_code' => 'K502',
                'expertise_name_th' => 'การวิเคราะห์ทางการเงินต้นทุนและค่าธรรมเนียม',
                'expertise_name_en' => 'Financial Analysis, Costing and Tariffs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            402 => 
            array (
                'id' => 903,
                'major_code' => 'TR',
                'expertise_code' => 'K503',
                'expertise_name_th' => 'การบริหารและการพัฒนาองค์กร',
                'expertise_name_en' => 'Management and Organizational Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            403 => 
            array (
                'id' => 904,
                'major_code' => 'TR',
                'expertise_code' => 'K504',
                'expertise_name_th' => 'ท่าเรือท่าเทียบเรือ',
                'expertise_name_en' => 'Harbors, Piers, Wharves',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            404 => 
            array (
                'id' => 905,
                'major_code' => 'TR',
                'expertise_code' => 'K505',
                'expertise_name_th' => 'การบำรุงรักษาท่าเรือ',
                'expertise_name_en' => 'Port Maintenance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            405 => 
            array (
                'id' => 906,
                'major_code' => 'TR',
                'expertise_code' => 'K506',
                'expertise_name_th' => 'การขุดร่องน้ำและการถม',
                'expertise_name_en' => 'Dredging and Reclamation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            406 => 
            array (
                'id' => 907,
                'major_code' => 'TR',
                'expertise_code' => 'K507',
                'expertise_name_th' => 'การดำเนินงานท่าเรือ',
                'expertise_name_en' => 'Port Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            407 => 
            array (
                'id' => 908,
                'major_code' => 'TR',
                'expertise_code' => 'K508',
                'expertise_name_th' => 'คลังสินค้าและที่เก็บสินค้า',
                'expertise_name_en' => 'Warehouses and Storage',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            408 => 
            array (
                'id' => 909,
                'major_code' => 'TR',
                'expertise_code' => 'K509',
                'expertise_name_th' => 'สิ่งอำนวยความสะดวกในการขนถ่ายสินค้าที่ไม่บรรจุหีบห่อ',
                'expertise_name_en' => 'Bulk Cargo Handling Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            409 => 
            array (
                'id' => 910,
                'major_code' => 'TR',
                'expertise_code' => 'K510',
                'expertise_name_th' => 'สิ่งอำนวยความสะดวกริมฝั่ง',
                'expertise_name_en' => 'Offshore Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            410 => 
            array (
                'id' => 911,
                'major_code' => 'TR',
                'expertise_code' => 'K511',
                'expertise_name_th' => 'ท่าเรือน้ำลึก',
                'expertise_name_en' => 'Deep Sea Ports',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            411 => 
            array (
                'id' => 912,
                'major_code' => 'TR',
                'expertise_code' => 'K512',
                'expertise_name_th' => 'ท่าเรือขนส่งตู้สินค้า',
                'expertise_name_en' => 'Container Ports',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            412 => 
            array (
                'id' => 913,
                'major_code' => 'TR',
                'expertise_code' => 'K513',
                'expertise_name_th' => 'ท่าเรือขนส่งวัสดุไม่บรรจุหีบห่อวัสดุแห้งและเปียก',
            'expertise_name_en' => 'Bulk (Wet and Dry) Ports',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            413 => 
            array (
                'id' => 914,
                'major_code' => 'TR',
                'expertise_code' => 'K514',
                'expertise_name_th' => 'การขนถ่ายสินค้า',
                'expertise_name_en' => 'Cargo Handling Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            414 => 
            array (
                'id' => 915,
                'major_code' => 'TR',
                'expertise_code' => 'K515',
                'expertise_name_th' => 'ุอุปกรณ์การเดินเรือ',
                'expertise_name_en' => 'Navigational Aids',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            415 => 
            array (
                'id' => 916,
                'major_code' => 'TR',
                'expertise_code' => 'K516',
                'expertise_name_th' => 'การประยุกต์ใช้คอมพิวเตอร์',
                'expertise_name_en' => 'Computer Applications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            416 => 
            array (
                'id' => 917,
                'major_code' => 'TR',
                'expertise_code' => 'K516A',
                'expertise_name_th' => 'ระบบสารสนเทศ',
                'expertise_name_en' => 'Information Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            417 => 
            array (
                'id' => 918,
                'major_code' => 'TR',
                'expertise_code' => 'K516B',
                'expertise_name_th' => 'การดำเนินงานท่าเรือ',
                'expertise_name_en' => 'Port Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            418 => 
            array (
                'id' => 919,
                'major_code' => 'TR',
                'expertise_code' => 'K517',
                'expertise_name_th' => 'การฝึกอบรมเกี่ยวกับท่าเรือ',
                'expertise_name_en' => 'Ports Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            419 => 
            array (
                'id' => 920,
                'major_code' => 'TR',
                'expertise_code' => 'K600',
                'expertise_name_th' => 'การขนส่งทางเรือ',
                'expertise_name_en' => 'Shipping',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            420 => 
            array (
                'id' => 921,
                'major_code' => 'TR',
                'expertise_code' => 'K601',
                'expertise_name_th' => 'กองเรือพาณิชย์นาวีบริษัทเดินเรือ',
                'expertise_name_en' => 'Natioanl Shipping Flects/Companies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            421 => 
            array (
                'id' => 922,
                'major_code' => 'TR',
                'expertise_code' => 'K602',
                'expertise_name_th' => 'การบริหารและการดำเนินงาน',
                'expertise_name_en' => 'Management and Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            422 => 
            array (
                'id' => 923,
                'major_code' => 'TR',
                'expertise_code' => 'K603',
                'expertise_name_th' => 'การวิเคราะห์ทางการเงินต้นทุนและค่าธรรมเนียม',
                'expertise_name_en' => 'Financial Analysis, Costing and Tariffs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            423 => 
            array (
                'id' => 924,
                'major_code' => 'TR',
                'expertise_code' => 'K604',
                'expertise_name_th' => 'เรือสินค้า',
                'expertise_name_en' => 'Vessels',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            424 => 
            array (
                'id' => 925,
                'major_code' => 'TR',
                'expertise_code' => 'K605',
                'expertise_name_th' => 'การต่อเรือและการซ่อมเรือ',
                'expertise_name_en' => 'Shipbuilding and Repairing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            425 => 
            array (
                'id' => 926,
                'major_code' => 'TR',
                'expertise_code' => 'K605A',
                'expertise_name_th' => 'การต่อเรือ',
                'expertise_name_en' => 'Shipbuilding',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            426 => 
            array (
                'id' => 927,
                'major_code' => 'TR',
                'expertise_code' => 'K605B',
                'expertise_name_th' => 'การบำรุงรักษาและการซ่อมเรือ',
                'expertise_name_en' => 'Ship Maintenance and Repairing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            427 => 
            array (
                'id' => 928,
                'major_code' => 'TR',
                'expertise_code' => 'K605C',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Shipyards',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            428 => 
            array (
                'id' => 929,
                'major_code' => 'TR',
                'expertise_code' => 'K605D',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Dry Docks',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            429 => 
            array (
                'id' => 930,
                'major_code' => 'TR',
                'expertise_code' => 'K605E',
                'expertise_name_th' => '่ลอย',
                'expertise_name_en' => 'Floating Docks',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            430 => 
            array (
                'id' => 931,
                'major_code' => 'TR',
                'expertise_code' => 'K605F',
                'expertise_name_th' => 'การออกแบบต่อเรือ',
                'expertise_name_en' => 'Neval Architecture',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            431 => 
            array (
                'id' => 932,
                'major_code' => 'TR',
                'expertise_code' => 'K605G',
                'expertise_name_th' => 'วิศวกรรมทางทะเล',
                'expertise_name_en' => 'Marine Engineering',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            432 => 
            array (
                'id' => 933,
                'major_code' => 'TR',
                'expertise_code' => 'K606',
                'expertise_name_th' => 'การจัดการขนส่งสินค้า',
                'expertise_name_en' => 'Freight Forwarding',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            433 => 
            array (
                'id' => 934,
                'major_code' => 'TR',
                'expertise_code' => 'K607',
                'expertise_name_th' => 'การฝึกอบรมเกี่ยวกับการขนส่งทางเรื',
                'expertise_name_en' => 'Shipping Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            434 => 
            array (
                'id' => 935,
                'major_code' => 'TR',
                'expertise_code' => 'K608',
                'expertise_name_th' => 'เศรษฐศาสตร์การขนส่งทางเรือ',
                'expertise_name_en' => 'Shipping Transport Economics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            435 => 
            array (
                'id' => 936,
                'major_code' => 'TR',
                'expertise_code' => 'K700',
                'expertise_name_th' => 'ลำน้ำที่ใช้ในการขนส่ง',
                'expertise_name_en' => 'Inland Waterways',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            436 => 
            array (
                'id' => 937,
                'major_code' => 'TR',
                'expertise_code' => 'K701',
                'expertise_name_th' => 'การพยากรณ์ความต้องการและการวางแผนการลงทุน',
                'expertise_name_en' => 'Demand Forecasting and Investment Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            437 => 
            array (
                'id' => 938,
                'major_code' => 'TR',
                'expertise_code' => 'K702',
                'expertise_name_th' => 'การบริหารและการพัฒนาองค์กร',
                'expertise_name_en' => 'Management and Organisational Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            438 => 
            array (
                'id' => 939,
                'major_code' => 'TR',
                'expertise_code' => 'K703',
                'expertise_name_th' => 'กฎระเบียบและข้อบังคับทางน้ำ',
                'expertise_name_en' => 'River Regulation and Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            439 => 
            array (
                'id' => 940,
                'major_code' => 'TR',
                'expertise_code' => 'K704',
                'expertise_name_th' => 'การขุดร่องน้ำและการถม',
                'expertise_name_en' => 'Dredging and Reclamation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            440 => 
            array (
                'id' => 941,
                'major_code' => 'TR',
                'expertise_code' => 'K705',
                'expertise_name_th' => 'ประตูเรือสัญจรและเขื่อน',
                'expertise_name_en' => 'Navigation Locks and Dams',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            441 => 
            array (
                'id' => 942,
                'major_code' => 'TR',
                'expertise_code' => 'K706',
                'expertise_name_th' => 'คลอง',
                'expertise_name_en' => 'Canals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            442 => 
            array (
                'id' => 943,
                'major_code' => 'TR',
                'expertise_code' => 'K707',
                'expertise_name_th' => 'ท่าเรือ',
                'expertise_name_en' => 'Ports',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            443 => 
            array (
                'id' => 944,
                'major_code' => 'TR',
                'expertise_code' => 'K708',
                'expertise_name_th' => 'ท่าเทียบเรือ',
                'expertise_name_en' => 'Jetties',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            444 => 
            array (
                'id' => 945,
                'major_code' => 'TR',
                'expertise_code' => 'K709',
                'expertise_name_th' => 'การบำรุงรักษา',
                'expertise_name_en' => 'Maintenance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            445 => 
            array (
                'id' => 946,
                'major_code' => 'TR',
                'expertise_code' => 'K710',
                'expertise_name_th' => 'ุอุปกรณ์การเดินเรือ',
                'expertise_name_en' => 'Navigational Aids',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            446 => 
            array (
                'id' => 947,
                'major_code' => 'TR',
                'expertise_code' => 'K711',
                'expertise_name_th' => '่ซ่อมเรือและการซ่อมเรือ',
                'expertise_name_en' => 'Dockyards and Vessel Repair',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            447 => 
            array (
                'id' => 948,
                'major_code' => 'TR',
                'expertise_code' => 'K712',
                'expertise_name_th' => 'ุอุตสาหกรรมการขนส่งบริษัทบริการ',
            'expertise_name_en' => 'Transportation Industry (Firms/Services)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            448 => 
            array (
                'id' => 949,
                'major_code' => 'TR',
                'expertise_code' => 'K800',
                'expertise_name_th' => 'ท่าอากาศยาน',
                'expertise_name_en' => 'Airports',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            449 => 
            array (
                'id' => 950,
                'major_code' => 'TR',
                'expertise_code' => 'K801',
                'expertise_name_th' => 'การพยากรณ์ความต้องการและการวางแผนการลงทุน',
                'expertise_name_en' => 'Demand Forecasting and Investment Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            450 => 
            array (
                'id' => 951,
                'major_code' => 'TR',
                'expertise_code' => 'K802',
                'expertise_name_th' => 'การบริหารและการพัฒนาองค์กร',
                'expertise_name_en' => 'Management and Organisational Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            451 => 
            array (
                'id' => 952,
                'major_code' => 'TR',
                'expertise_code' => 'K803',
                'expertise_name_th' => 'การวิเคราะห์ทางการเงินต้นทุนและค่าธรรมเนียม',
                'expertise_name_en' => 'Financial Analysis, Costing and Charges',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            452 => 
            array (
                'id' => 953,
                'major_code' => 'TR',
                'expertise_code' => 'K804',
                'expertise_name_th' => 'การเลือกสถานที่และการศึกษาการใช้ที่ดินสิ่งแวดล้อม',
                'expertise_name_en' => 'Site Selection and Land Use/Environmental Studies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            453 => 
            array (
                'id' => 954,
                'major_code' => 'TR',
                'expertise_code' => 'K805',
                'expertise_name_th' => 'การวางผังท่าอากาศยานและงานโยธาทางวิ่งทางเชื่อมลานจอดเครื่องบินฯลฯ',
            'expertise_name_en' => 'Airport Layouts and Civil Works (Runways, Taxiways, Aprons, etc.)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            454 => 
            array (
                'id' => 955,
                'major_code' => 'TR',
                'expertise_code' => 'K806',
                'expertise_name_th' => 'โครงสร้าง',
                'expertise_name_en' => 'Structures',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            455 => 
            array (
                'id' => 956,
                'major_code' => 'TR',
                'expertise_code' => 'K806A',
                'expertise_name_th' => 'ท่าเทียบเครื่องบิน',
                'expertise_name_en' => 'Terminals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            456 => 
            array (
                'id' => 957,
                'major_code' => 'TR',
                'expertise_code' => 'K806B',
                'expertise_name_th' => 'สิ่งอำนวยความสะดวกการขนถ่ายสินค้าและคลังสินค้า',
                'expertise_name_en' => 'Warehouses and Freight Handling Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            457 => 
            array (
                'id' => 958,
                'major_code' => 'TR',
                'expertise_code' => 'K806C',
                'expertise_name_th' => 'โรงเก็บเครื่องบินโรงซ่อมฯลฯ',
                'expertise_name_en' => 'Hangers, Workshops, etc.',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            458 => 
            array (
                'id' => 959,
                'major_code' => 'TR',
                'expertise_code' => 'K807',
                'expertise_name_th' => 'โครงสร้างพื้นฐาน',
                'expertise_name_en' => 'Infrastructure',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            459 => 
            array (
                'id' => 960,
                'major_code' => 'TR',
                'expertise_code' => 'K808',
                'expertise_name_th' => 'การบำรุงรักษาท่าอากาศยาน',
                'expertise_name_en' => 'Airport Maintenance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            460 => 
            array (
                'id' => 961,
                'major_code' => 'TR',
                'expertise_code' => 'K808A',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Building',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            461 => 
            array (
                'id' => 962,
                'major_code' => 'TR',
                'expertise_code' => 'K808B',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'System & Equipment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            462 => 
            array (
                'id' => 963,
                'major_code' => 'TR',
                'expertise_code' => 'K809',
                'expertise_name_th' => 'การดำเนินงานท่าอากาศยาน',
                'expertise_name_en' => 'Airport Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            463 => 
            array (
                'id' => 964,
                'major_code' => 'TR',
                'expertise_code' => 'K810',
                'expertise_name_th' => 'การควบคุมการจราจรทางอากาศ',
                'expertise_name_en' => 'Air Traffic Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            464 => 
            array (
                'id' => 965,
                'major_code' => 'TR',
                'expertise_code' => 'K811',
                'expertise_name_th' => 'อุปกรณ์การควบคุมการบิน',
                'expertise_name_en' => 'Navigational Aids',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            465 => 
            array (
                'id' => 966,
                'major_code' => 'TR',
                'expertise_code' => 'K812',
                'expertise_name_th' => 'ช่องจราจรอากาศปริมาณการจราจรต่ำ',
            'expertise_name_en' => 'Airstrips (Low-Volume)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            466 => 
            array (
                'id' => 967,
                'major_code' => 'TR',
                'expertise_code' => 'K813',
                'expertise_name_th' => 'การฝึกอบรมเกี่ยวกับท่าอากาศยาน',
                'expertise_name_en' => 'Airports Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            467 => 
            array (
                'id' => 968,
                'major_code' => 'TR',
                'expertise_code' => 'K900',
                'expertise_name_th' => 'การบริการขนส่งทางอากาศ',
                'expertise_name_en' => 'Air Transportation Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            468 => 
            array (
                'id' => 969,
                'major_code' => 'TR',
                'expertise_code' => 'K901',
                'expertise_name_th' => 'การเลือกเครื่องบิน',
                'expertise_name_en' => 'Aircraft Selection',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            469 => 
            array (
                'id' => 970,
                'major_code' => 'TR',
                'expertise_code' => 'K902',
                'expertise_name_th' => 'การบริหารและการดำเนินงานสายการบิน',
                'expertise_name_en' => 'Airline Management and Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            470 => 
            array (
                'id' => 971,
                'major_code' => 'TR',
                'expertise_code' => 'K903',
                'expertise_name_th' => 'การวิเคราะห์ทางการเงินต้นทุนและค่าธรรมเนียม',
                'expertise_name_en' => 'Financial Analysis, Costing and Tariffs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            471 => 
            array (
                'id' => 972,
                'major_code' => 'TR',
                'expertise_code' => 'K904',
                'expertise_name_th' => 'การวางแผนตารางการบิน',
                'expertise_name_en' => 'Schedule Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            472 => 
            array (
                'id' => 973,
                'major_code' => 'TR',
                'expertise_code' => 'K905',
                'expertise_name_th' => 'กฎระเบียบและข้อบังคับ',
                'expertise_name_en' => 'Regulation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            473 => 
            array (
                'id' => 974,
                'major_code' => 'TR',
                'expertise_code' => 'K906',
                'expertise_name_th' => 'การกำหนดราคา',
                'expertise_name_en' => 'Pricing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            474 => 
            array (
                'id' => 975,
                'major_code' => 'TR',
                'expertise_code' => 'K907',
                'expertise_name_th' => 'การบำรุงรักษาเครื่องบิน',
                'expertise_name_en' => 'Aircraft Maintenance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            475 => 
            array (
                'id' => 976,
                'major_code' => 'TR',
                'expertise_code' => 'K908',
                'expertise_name_th' => 'การประยุกต์ใช้คอมพิวเตอร์',
                'expertise_name_en' => 'Computer Applications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            476 => 
            array (
                'id' => 977,
                'major_code' => 'TR',
                'expertise_code' => 'K908A',
                'expertise_name_th' => 'ระบบจองตั๋วเครื่องบิน',
                'expertise_name_en' => 'Airline Reservation Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            477 => 
            array (
                'id' => 978,
                'major_code' => 'TR',
                'expertise_code' => 'K908B',
                'expertise_name_th' => 'ระบบสารสนเทศ',
                'expertise_name_en' => 'Information Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            478 => 
            array (
                'id' => 979,
                'major_code' => 'TR',
                'expertise_code' => 'K908C',
                'expertise_name_th' => 'การดำเนินงาน',
                'expertise_name_en' => 'Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            479 => 
            array (
                'id' => 980,
                'major_code' => 'TR',
                'expertise_code' => 'K909',
                'expertise_name_th' => 'การฝึกอบรมเกี่ยวกับการขนส่งทางอากาศ',
                'expertise_name_en' => 'Air Transportation Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            480 => 
            array (
                'id' => 981,
                'major_code' => 'TR',
                'expertise_code' => 'K1000',
                'expertise_name_th' => 'การขนส่งสินค้าเบ็ดเตล็ด',
                'expertise_name_en' => 'Miscellaneous Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            481 => 
            array (
                'id' => 982,
                'major_code' => 'UD',
                'expertise_code' => 'L100',
                'expertise_name_th' => 'การพัฒนาเมือง',
                'expertise_name_en' => 'Urban Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            482 => 
            array (
                'id' => 983,
                'major_code' => 'UD',
                'expertise_code' => 'L101',
                'expertise_name_th' => 'การวางแผนพัฒนาเมือง',
                'expertise_name_en' => 'Urban Development Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            483 => 
            array (
                'id' => 984,
                'major_code' => 'UD',
                'expertise_code' => 'L102',
                'expertise_name_th' => '"การสำรวจวิเคราะห์และติดตามพื้นที่เมือง',
                'expertise_name_en' => 'Urban Area Servey, Analysis and Monitoring',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            484 => 
            array (
                'id' => 985,
                'major_code' => 'UD',
                'expertise_code' => 'L102A',
                'expertise_name_th' => 'การสำรวจด้านเศรษฐกิจสังคม',
                'expertise_name_en' => 'Secic-Economic Surveys',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            485 => 
            array (
                'id' => 986,
                'major_code' => 'UD',
                'expertise_code' => 'L102B',
                'expertise_name_th' => 'การสำรวจการใช้ที่ดิน',
                'expertise_name_en' => 'Land Use Surveys',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            486 => 
            array (
                'id' => 987,
                'major_code' => 'UD',
                'expertise_code' => 'L103',
                'expertise_name_th' => 'แบบจำลองการพัฒนาเมือง',
                'expertise_name_en' => 'Urban Development Models',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            487 => 
            array (
                'id' => 988,
                'major_code' => 'UD',
                'expertise_code' => 'L104',
                'expertise_name_th' => 'การวางแผนพัฒนายุทธศาสตร์รวมทั้งการวางผังแม่บท',
            'expertise_name_en' => 'Strategic Development Planning (Including master Planning)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            488 => 
            array (
                'id' => 989,
                'major_code' => 'UD',
                'expertise_code' => 'L105',
                'expertise_name_th' => 'การวางแผนการใช้ที่ดินการขนส่ง',
                'expertise_name_en' => 'Land Use/Transportation Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            489 => 
            array (
                'id' => 990,
                'major_code' => 'UD',
                'expertise_code' => 'L106',
                'expertise_name_th' => 'โปรแกรมการลงทุนในเขตเมือง',
                'expertise_name_en' => 'Urban Investment Programming',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            490 => 
            array (
                'id' => 991,
                'major_code' => 'UD',
                'expertise_code' => 'L107',
                'expertise_name_th' => 'นโยบายการพัฒนาเมืองแห่งชาติ',
                'expertise_name_en' => 'National Urban Policies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            491 => 
            array (
                'id' => 992,
                'major_code' => 'UD',
                'expertise_code' => 'L200',
                'expertise_name_th' => 'การวางแผนออกแบบด้านวิศวกรรมและการดำเนินการด้านที่พักบ้านพักอาศัย',
                'expertise_name_en' => 'Shelter/Housing Planning, Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            492 => 
            array (
                'id' => 993,
                'major_code' => 'UD',
                'expertise_code' => 'L201',
                'expertise_name_th' => 'การสำรวจด้านที่พักบ้านพักอาศัย',
                'expertise_name_en' => 'Shelter/Housing Sector Survey',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            493 => 
            array (
                'id' => 994,
                'major_code' => 'UD',
                'expertise_code' => 'L202',
                'expertise_name_th' => 'สถานที่และการบริการการวางแผนออกแบบและงานวิศวกรรม',
                'expertise_name_en' => 'Sites and Services - Planning,',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            494 => 
            array (
                'id' => 995,
                'major_code' => 'UD',
                'expertise_code' => 'L203',
                'expertise_name_th' => 'แผนการยกระดับชุมชนแออัด',
                'expertise_name_en' => 'Slum Upgrading Programs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            495 => 
            array (
                'id' => 996,
                'major_code' => 'UD',
                'expertise_code' => 'L204',
                'expertise_name_th' => 'การพัฒนาที่ดินที่พักอาศัยพาณิชย์อุตสาหกรรม',
                'expertise_name_en' => 'Land Development (residential,',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                496 => 
                array (
                    'id' => 997,
                    'major_code' => 'UD',
                    'expertise_code' => 'L205',
                    'expertise_name_th' => 'การปรับรูปที่ดิน',
                    'expertise_name_en' => 'Land Readjustment',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                497 => 
                array (
                    'id' => 998,
                    'major_code' => 'UD',
                    'expertise_code' => 'L206',
                    'expertise_name_th' => 'การปรับปรุงเมืองใหม่',
                    'expertise_name_en' => 'Urban Redevelopment',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                498 => 
                array (
                    'id' => 999,
                    'major_code' => 'UD',
                    'expertise_code' => 'L300',
                    'expertise_name_th' => 'การบริการชุมชนเมือง',
                    'expertise_name_en' => 'Urban Services',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
                499 => 
                array (
                    'id' => 1000,
                    'major_code' => 'UD',
                    'expertise_code' => 'L301',
                    'expertise_name_th' => 'วิศวกรรมเทศบาล',
                    'expertise_name_en' => 'Municipal Engineering',
                    'created_at' => '2018-01-14 14:11:40',
                    'updated_at' => '2018-01-14 14:11:40',
                ),
            ));
        \DB::table('expertises')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'major_code' => 'UD',
                'expertise_code' => 'L302',
                'expertise_name_th' => 'การบริการงานเทศบาล',
                'expertise_name_en' => 'Municipal Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            1 => 
            array (
                'id' => 1002,
                'major_code' => 'UD',
                'expertise_code' => 'L302A',
                'expertise_name_th' => 'การก่อสร้างและบำรุงรักษาถนนในเมือง',
                'expertise_name_en' => 'Urban Road Construction and',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            2 => 
            array (
                'id' => 1003,
                'major_code' => 'UD',
                'expertise_code' => 'L302B',
                'expertise_name_th' => 'ไฟแสงสว่างตามถนน',
                'expertise_name_en' => 'Street Lighting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            3 => 
            array (
                'id' => 1004,
                'major_code' => 'UD',
                'expertise_code' => 'L302C',
                'expertise_name_th' => 'การรวบรวมการกำจัดขยะมูลฝอย',
            'expertise_name_en' => 'Solid Waste (Refuse) Collection/',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            4 => 
            array (
                'id' => 1005,
                'major_code' => 'UD',
                'expertise_code' => 'L302D',
                'expertise_name_th' => 'การป้องกันอัคคีภัย',
                'expertise_name_en' => 'Fire Protection',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            5 => 
            array (
                'id' => 1006,
                'major_code' => 'UD',
                'expertise_code' => 'L303',
                'expertise_name_th' => 'สิ่งอำนวยความสะดวกแก่ชุมชนการวางแผนและออกแบบ',
                'expertise_name_en' => 'Community Facilities, Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            6 => 
            array (
                'id' => 1007,
                'major_code' => 'UD',
                'expertise_code' => 'L303A',
                'expertise_name_th' => 'ตลาด',
                'expertise_name_en' => 'Markets',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            7 => 
            array (
                'id' => 1008,
                'major_code' => 'UD',
                'expertise_code' => 'L303B',
                'expertise_name_th' => 'ศูนย์ชุมชน',
                'expertise_name_en' => 'Community Centers',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            8 => 
            array (
                'id' => 1009,
                'major_code' => 'UD',
                'expertise_code' => 'L400',
                'expertise_name_th' => 'การจ้างงานในเมือง',
                'expertise_name_en' => 'Urban Employment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            9 => 
            array (
                'id' => 1010,
                'major_code' => 'UD',
                'expertise_code' => 'L500',
                'expertise_name_th' => 'การเงินเพื่อการพัฒนาเมือง',
                'expertise_name_en' => 'Urban Finance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            10 => 
            array (
                'id' => 1011,
                'major_code' => 'UD',
                'expertise_code' => 'L501',
                'expertise_name_th' => 'การเงินและงบประมาณเทศบาล',
                'expertise_name_en' => 'Municipal Finance and Budgeting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            11 => 
            array (
                'id' => 1012,
                'major_code' => 'UD',
                'expertise_code' => 'L502',
                'expertise_name_th' => 'การประเมินการเก็บภาษีที่ดินและทรัพย์สิน',
                'expertise_name_en' => 'Land and Property Valuation/Taxation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            12 => 
            array (
                'id' => 1013,
                'major_code' => 'UD',
                'expertise_code' => 'L503',
                'expertise_name_th' => 'การเก็บภาษีเทศบาลอื่นๆ',
                'expertise_name_en' => 'Other Municipal Taxation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            13 => 
            array (
                'id' => 1014,
                'major_code' => 'UD',
                'expertise_code' => 'L504',
                'expertise_name_th' => 'การเงินเพื่อการพัฒนาที่พัก',
                'expertise_name_en' => 'Shelter Sector Finance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            14 => 
            array (
                'id' => 1015,
                'major_code' => 'UD',
                'expertise_code' => 'L505',
                'expertise_name_th' => 'การเงินเพื่อวิสาหกิจขนาดย่อม',
                'expertise_name_en' => 'Small-Scale Enterprise Finance',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            15 => 
            array (
                'id' => 1016,
                'major_code' => 'UD',
                'expertise_code' => 'L600',
                'expertise_name_th' => 'การบริหารเมือง',
                'expertise_name_en' => 'Urban Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            16 => 
            array (
                'id' => 1017,
                'major_code' => 'UD',
                'expertise_code' => 'L601',
                'expertise_name_th' => 'การบริหารเทศบาล',
                'expertise_name_en' => 'Municipal Administration',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            17 => 
            array (
                'id' => 1018,
                'major_code' => 'UD',
                'expertise_code' => 'L602',
                'expertise_name_th' => 'การบริหารการบริการของเทศบาล',
                'expertise_name_en' => 'Municipal Services Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            18 => 
            array (
                'id' => 1019,
                'major_code' => 'UD',
                'expertise_code' => 'L603',
                'expertise_name_th' => 'การควบคุมการพัฒนาและกฎระเบียบข้อบังคับต่างๆ',
                'expertise_name_en' => 'Development Control and Regulations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            19 => 
            array (
                'id' => 1020,
                'major_code' => 'UD',
                'expertise_code' => 'L604',
                'expertise_name_th' => 'มาตรฐานอาคารและกฎระเบียบข้อบังคับต่างๆ',
                'expertise_name_en' => 'Building Standards and Regulations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            20 => 
            array (
                'id' => 1021,
                'major_code' => 'UD',
                'expertise_code' => 'L605',
                'expertise_name_th' => 'การมีส่วนร่วมของชุมชน',
                'expertise_name_en' => 'Community Participation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            21 => 
            array (
                'id' => 1022,
                'major_code' => 'UD',
                'expertise_code' => 'L606',
                'expertise_name_th' => 'โปรแกรมการช่วยเหลือตนเอง',
                'expertise_name_en' => 'Self-Help Programs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            22 => 
            array (
                'id' => 1023,
                'major_code' => 'UD',
                'expertise_code' => 'L607',
                'expertise_name_th' => 'การฝึกอบรมที่เกี่ยวกับกิจกรรมเมือง',
                'expertise_name_en' => 'Urban Reglated Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            23 => 
            array (
                'id' => 1024,
                'major_code' => 'UD',
                'expertise_code' => 'L608',
                'expertise_name_th' => 'การบริหารจัดการที่ดิน',
                'expertise_name_en' => 'Land Administration Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            24 => 
            array (
                'id' => 1025,
                'major_code' => 'UD',
                'expertise_code' => 'L609',
                'expertise_name_th' => 'ระบบสารสนเทศ',
                'expertise_name_en' => 'Information Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            25 => 
            array (
                'id' => 1026,
                'major_code' => 'UD',
                'expertise_code' => 'L610',
                'expertise_name_th' => 'การบริหารและจัดการโครงการโปรแกรม',
                'expertise_name_en' => 'Project/Program Administration and Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            26 => 
            array (
                'id' => 1027,
                'major_code' => 'UD',
                'expertise_code' => 'L700',
                'expertise_name_th' => 'การขนส่งในเมือง',
                'expertise_name_en' => 'Urban Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            27 => 
            array (
                'id' => 1028,
                'major_code' => 'UD',
                'expertise_code' => 'L701',
                'expertise_name_th' => 'การบริหารการจราจร',
                'expertise_name_en' => 'Traffic Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            28 => 
            array (
                'id' => 1029,
                'major_code' => 'UD',
                'expertise_code' => 'L701A',
                'expertise_name_th' => 'เครื่องหมายและไฟสัญญาณ',
                'expertise_name_en' => 'Signs and Signalisation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            29 => 
            array (
                'id' => 1030,
                'major_code' => 'UD',
                'expertise_code' => 'L701B',
                'expertise_name_th' => 'การจัดช่องจราจร',
                'expertise_name_en' => 'Channelization',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            30 => 
            array (
                'id' => 1031,
                'major_code' => 'UD',
                'expertise_code' => 'L701C',
                'expertise_name_th' => 'มาตรการควบคุมการไหลของจราจร',
                'expertise_name_en' => 'Traffic Flow Regulation Measures',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            31 => 
            array (
                'id' => 1032,
                'major_code' => 'UD',
                'expertise_code' => 'L701D',
                'expertise_name_th' => 'แผนการควบคุมการจราจรในพื้นที่',
                'expertise_name_en' => 'Area Traffic Control Schemes',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            32 => 
            array (
                'id' => 1033,
                'major_code' => 'UD',
                'expertise_code' => 'L701E',
                'expertise_name_th' => 'การขนส่งสาธารณะและมาตรการหรือแผนให้ความสำคัญแก่ยานพาหนะที่มีผู้โดยสารจำนวนมาก',
                'expertise_name_en' => 'Public Transport and High-Occupancy',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            33 => 
            array (
                'id' => 1034,
                'major_code' => 'UD',
                'expertise_code' => 'L701F',
                'expertise_name_th' => 'มาตรการหรือแผนการจอดรถ',
                'expertise_name_en' => 'Parking Measures or Schemes',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            34 => 
            array (
                'id' => 1035,
                'major_code' => 'UD',
                'expertise_code' => 'L702',
                'expertise_name_th' => 'การดำเนินการขนส่งสาธารณะ',
                'expertise_name_en' => 'Public Transport Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            35 => 
            array (
                'id' => 1036,
                'major_code' => 'UD',
                'expertise_code' => 'L703',
                'expertise_name_th' => 'การดำเนินการขนส่งระบบอื่นๆ',
                'expertise_name_en' => 'Para Tansit Operations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            36 => 
            array (
                'id' => 1037,
                'major_code' => 'UD',
                'expertise_code' => 'L704',
                'expertise_name_th' => 'ระบบการให้ความสำคัญแก่รถจักรยาน',
                'expertise_name_en' => 'Bicycle Priority Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            37 => 
            array (
                'id' => 1038,
                'major_code' => 'UD',
                'expertise_code' => 'L705',
                'expertise_name_th' => 'สิ่งอำนวยความสะดวกแก่ผู้เดินเท้า',
                'expertise_name_en' => 'Pedestrian Facilities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            38 => 
            array (
                'id' => 1039,
                'major_code' => 'UD',
                'expertise_code' => 'L706',
                'expertise_name_th' => 'การวางแผนการขนส่งในเมือง',
                'expertise_name_en' => 'Urban Transport Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            39 => 
            array (
                'id' => 1040,
                'major_code' => 'UD',
                'expertise_code' => 'L706A',
                'expertise_name_th' => 'การสำรวจและวิเคราะห์การจราจรขนส่ง',
                'expertise_name_en' => 'Traffic/Transport Surveys and Analysis',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            40 => 
            array (
                'id' => 1041,
                'major_code' => 'UD',
                'expertise_code' => 'L706B',
                'expertise_name_th' => 'แบบจำลองการจราจรขนส่ง',
                'expertise_name_en' => 'Traffic/Transport Models',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            41 => 
            array (
                'id' => 1042,
                'major_code' => 'UD',
                'expertise_code' => 'L706C',
                'expertise_name_th' => 'การวางแผนและออกแบบโครงข่าย',
                'expertise_name_en' => 'Network Planning and Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            42 => 
            array (
                'id' => 1043,
                'major_code' => 'UD',
                'expertise_code' => 'L707',
                'expertise_name_th' => 'เศรษฐศาสตร์การขนส่งในเมือง',
                'expertise_name_en' => 'Urban Transport Economics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            43 => 
            array (
                'id' => 1044,
                'major_code' => 'UD',
                'expertise_code' => 'L708',
                'expertise_name_th' => 'การบริหารการขนส่งในเมือง',
                'expertise_name_en' => 'Urban Transport Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            44 => 
            array (
                'id' => 1045,
                'major_code' => 'WS',
                'expertise_code' => 'M100',
                'expertise_name_th' => 'การประปา',
                'expertise_name_en' => 'Water Supply',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            45 => 
            array (
                'id' => 1046,
                'major_code' => 'WS',
                'expertise_code' => 'M101',
                'expertise_name_th' => 'การวางแผนและออกแบบระบบประปา',
                'expertise_name_en' => 'Water System Planning and Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            46 => 
            array (
                'id' => 1047,
                'major_code' => 'WS',
                'expertise_code' => 'M102',
                'expertise_name_th' => 'การพัฒนาแหล่งน้ำ',
                'expertise_name_en' => 'Water Resources Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            47 => 
            array (
                'id' => 1048,
                'major_code' => 'WS',
                'expertise_code' => 'M102A',
                'expertise_name_th' => 'น้ำใต้ดิน',
                'expertise_name_en' => 'Groundwater',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            48 => 
            array (
                'id' => 1049,
                'major_code' => 'WS',
                'expertise_code' => 'M102B',
                'expertise_name_th' => 'น้ำผิวดิน',
                'expertise_name_en' => 'Surface Water',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            49 => 
            array (
                'id' => 1050,
                'major_code' => 'WS',
                'expertise_code' => 'M103',
                'expertise_name_th' => 'คุณภาพน้ำ',
                'expertise_name_en' => 'Water Quality',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            50 => 
            array (
                'id' => 1051,
                'major_code' => 'WS',
                'expertise_code' => 'M103A',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Groundwater',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            51 => 
            array (
                'id' => 1052,
                'major_code' => 'WS',
                'expertise_code' => 'M103B',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Surface Water',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            52 => 
            array (
                'id' => 1053,
                'major_code' => 'WS',
                'expertise_code' => 'M104',
                'expertise_name_th' => 'อ่างเก็บน้ำ',
                'expertise_name_en' => 'Source Reservoirs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            53 => 
            array (
                'id' => 1054,
                'major_code' => 'WS',
                'expertise_code' => 'M105',
                'expertise_name_th' => 'เขื่อน',
                'expertise_name_en' => 'Dams',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            54 => 
            array (
                'id' => 1055,
                'major_code' => 'WS',
                'expertise_code' => 'M106',
                'expertise_name_th' => 'อุโมงค์',
                'expertise_name_en' => 'Tunnels',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            55 => 
            array (
                'id' => 1056,
                'major_code' => 'WS',
                'expertise_code' => 'M107',
                'expertise_name_th' => 'ท่อใต้ทะเล',
                'expertise_name_en' => 'Submarine Pipelines',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            56 => 
            array (
                'id' => 1057,
                'major_code' => 'WS',
                'expertise_code' => 'M108',
                'expertise_name_th' => 'การส่งน้ำ',
                'expertise_name_en' => 'Water Transmission',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            57 => 
            array (
                'id' => 1058,
                'major_code' => 'WS',
                'expertise_code' => 'M109',
                'expertise_name_th' => 'สถานีสูบน้ำ',
                'expertise_name_en' => 'Pumping Stations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            58 => 
            array (
                'id' => 1059,
                'major_code' => 'WS',
                'expertise_code' => 'M110',
                'expertise_name_th' => 'การเก็บกักน้ำ',
                'expertise_name_en' => 'Water Storage',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            59 => 
            array (
                'id' => 1060,
                'major_code' => 'WS',
                'expertise_code' => 'M111',
                'expertise_name_th' => 'การกรองน้ำ',
                'expertise_name_en' => 'Water Treatment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            60 => 
            array (
                'id' => 1061,
                'major_code' => 'WS',
                'expertise_code' => 'M112',
                'expertise_name_th' => 'การจ่ายน้ำ',
                'expertise_name_en' => 'Water Distribution',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            61 => 
            array (
                'id' => 1062,
                'major_code' => 'WS',
                'expertise_code' => 'M113',
                'expertise_name_th' => 'การปรับปรุงและพัฒนาระบบ',
                'expertise_name_en' => 'System Rehabilitation and Upgrading',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            62 => 
            array (
                'id' => 1063,
                'major_code' => 'WS',
                'expertise_code' => 'M114',
                'expertise_name_th' => 'การผลิตน้ำจืดจากน้ำทะเล',
                'expertise_name_en' => 'Desalination',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            63 => 
            array (
                'id' => 1064,
                'major_code' => 'WS',
                'expertise_code' => 'M115',
                'expertise_name_th' => 'การกัดกร่อน',
                'expertise_name_en' => 'Corrosion',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            64 => 
            array (
                'id' => 1065,
                'major_code' => 'WS',
                'expertise_code' => 'M116',
                'expertise_name_th' => 'การตรวจน้ำสูญเสีย',
                'expertise_name_en' => 'Leak Detection',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            65 => 
            array (
                'id' => 1066,
                'major_code' => 'WS',
                'expertise_code' => 'M117',
                'expertise_name_th' => 'การประปาชนบท',
                'expertise_name_en' => 'Rural Water Supplies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            66 => 
            array (
                'id' => 1067,
                'major_code' => 'WS',
                'expertise_code' => 'M118',
                'expertise_name_th' => 'มาตรวัดน้ำ',
                'expertise_name_en' => 'Water Meters',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            67 => 
            array (
                'id' => 1068,
                'major_code' => 'WS',
                'expertise_code' => 'M119',
                'expertise_name_th' => 'วัสดุท่อและการผลิต',
                'expertise_name_en' => 'Pipe Materials and Manufacture',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            68 => 
            array (
                'id' => 1069,
                'major_code' => 'WS',
                'expertise_code' => 'M200',
                'expertise_name_th' => 'สุขาภิบาล',
                'expertise_name_en' => 'Sanitation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            69 => 
            array (
                'id' => 1070,
                'major_code' => 'WS',
                'expertise_code' => 'M201',
                'expertise_name_th' => 'ระบบรวบรวมน้ำเสีย',
                'expertise_name_en' => 'Sewage Collection Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            70 => 
            array (
                'id' => 1071,
                'major_code' => 'WS',
                'expertise_code' => 'M202',
                'expertise_name_th' => 'การบำบัดน้ำเสีย',
                'expertise_name_en' => 'Sewage Treatment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            71 => 
            array (
                'id' => 1072,
                'major_code' => 'WS',
                'expertise_code' => 'M202A',
                'expertise_name_th' => 'น้ำเสียจากบ้านพักอาศัย',
                'expertise_name_en' => 'Domestic',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            72 => 
            array (
                'id' => 1073,
                'major_code' => 'WS',
                'expertise_code' => 'M202B',
                'expertise_name_th' => 'น้ำเสียจากอุตสาหกรร',
                'expertise_name_en' => 'Industrial',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            73 => 
            array (
                'id' => 1074,
                'major_code' => 'WS',
                'expertise_code' => 'M203',
                'expertise_name_th' => 'การปรับปรุงและพัฒนาระบบ',
                'expertise_name_en' => 'System Rehabilitation and Upgrading',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            74 => 
            array (
                'id' => 1075,
                'major_code' => 'WS',
                'expertise_code' => 'M204',
                'expertise_name_th' => 'บ่อปรับเสถียร',
                'expertise_name_en' => 'Stabilization Ponds',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            75 => 
            array (
                'id' => 1076,
                'major_code' => 'WS',
                'expertise_code' => 'M205',
                'expertise_name_th' => 'การระบายน้ำทิ้งลงทะเล',
                'expertise_name_en' => 'Marine Disposal',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            76 => 
            array (
                'id' => 1077,
                'major_code' => 'WS',
                'expertise_code' => 'M206',
                'expertise_name_th' => 'การบำบัดน้ำเสียโดยการกระจายน้ำเสียลงบนดินที่มีพืชคลุมอยู่',
                'expertise_name_en' => 'Land Application',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            77 => 
            array (
                'id' => 1078,
                'major_code' => 'WS',
                'expertise_code' => 'M207',
                'expertise_name_th' => 'ระบบสุขาภิบาลราคาถูกสำหรับเมือง',
                'expertise_name_en' => 'Low-Cost Urban Sanitation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            78 => 
            array (
                'id' => 1079,
                'major_code' => 'WS',
                'expertise_code' => 'M208',
                'expertise_name_th' => 'การระบายน้ำฝน',
                'expertise_name_en' => 'Storm Drainage',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            79 => 
            array (
                'id' => 1080,
                'major_code' => 'WS',
                'expertise_code' => 'M209',
                'expertise_name_th' => 'สุขาภิบาลในชนบท',
                'expertise_name_en' => 'Rural Sanitation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            80 => 
            array (
                'id' => 1081,
                'major_code' => 'WS',
                'expertise_code' => 'M210',
                'expertise_name_th' => 'การควบคุมมลภาวะทางน้ำ',
                'expertise_name_en' => 'Water Pollution Control',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            81 => 
            array (
                'id' => 1082,
                'major_code' => 'WS',
                'expertise_code' => 'M211',
                'expertise_name_th' => 'การนำน้ำเสียกลับมาใช้ประโยชน์',
                'expertise_name_en' => 'Water Recycling and Re-use',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            82 => 
            array (
                'id' => 1083,
                'major_code' => 'WS',
                'expertise_code' => 'M212',
                'expertise_name_th' => 'การนำกากตะกอนกลับมาใช้ประโยชน์',
                'expertise_name_en' => 'Sludge Recycling and Re-Use',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            83 => 
            array (
                'id' => 1084,
                'major_code' => 'WS',
                'expertise_code' => 'M213',
                'expertise_name_th' => 'การนำทรัพยากรในน้ำเสียมาใช้ประโยชน์',
                'expertise_name_en' => 'Resource Recovery',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            84 => 
            array (
                'id' => 1085,
                'major_code' => 'WS',
                'expertise_code' => 'M300',
                'expertise_name_th' => 'ขยะ',
                'expertise_name_en' => 'Solid Waste',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            85 => 
            array (
                'id' => 1086,
                'major_code' => 'WS',
                'expertise_code' => 'M301',
                'expertise_name_th' => 'การรวบรวมเก็บขยะและกิจกรรมสนับสนุน',
                'expertise_name_en' => 'Collection and Logistics',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            86 => 
            array (
                'id' => 1087,
                'major_code' => 'WS',
                'expertise_code' => 'M301A',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            87 => 
            array (
                'id' => 1088,
                'major_code' => 'WS',
                'expertise_code' => 'M301B',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Collection System',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            88 => 
            array (
                'id' => 1089,
                'major_code' => 'WS',
                'expertise_code' => 'M302',
                'expertise_name_th' => 'การกำจัด',
                'expertise_name_en' => 'Disposal',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            89 => 
            array (
                'id' => 1090,
                'major_code' => 'WS',
                'expertise_code' => 'M303',
                'expertise_name_th' => 'การนำทรัพยากรในขยะมาใช้ประโยชน์',
                'expertise_name_en' => 'Resource Recovery',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            90 => 
            array (
                'id' => 1091,
                'major_code' => 'WS',
                'expertise_code' => 'M303A',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Landfill',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            91 => 
            array (
                'id' => 1092,
                'major_code' => 'WS',
                'expertise_code' => 'M303B',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Composting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            92 => 
            array (
                'id' => 1093,
                'major_code' => 'WS',
                'expertise_code' => 'M303C',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Incineration',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            93 => 
            array (
                'id' => 1094,
                'major_code' => 'WS',
                'expertise_code' => 'M304',
                'expertise_name_th' => '-',
                'expertise_name_en' => 'Organisation and Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            94 => 
            array (
                'id' => 1095,
                'major_code' => 'WS',
                'expertise_code' => 'M400',
                'expertise_name_th' => 'การบริหารการประปาและสุขาภิบาล',
                'expertise_name_en' => 'Water Supply and Sanitation Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            95 => 
            array (
                'id' => 1096,
                'major_code' => 'WS',
                'expertise_code' => 'M401',
                'expertise_name_th' => 'การพยากรณ์ความต้องการ',
                'expertise_name_en' => 'Requirements Forecasting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            96 => 
            array (
                'id' => 1097,
                'major_code' => 'WS',
                'expertise_code' => 'M402',
                'expertise_name_th' => 'การวางแผนการเงิน',
                'expertise_name_en' => 'Financial Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            97 => 
            array (
                'id' => 1098,
                'major_code' => 'WS',
                'expertise_code' => 'M403',
                'expertise_name_th' => 'องค์กรและการบริหาร',
                'expertise_name_en' => 'Organisation and Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            98 => 
            array (
                'id' => 1099,
                'major_code' => 'WS',
                'expertise_code' => 'M404',
                'expertise_name_th' => 'อัตราค่าบริการ',
                'expertise_name_en' => 'Rates and Tariffs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            99 => 
            array (
                'id' => 1100,
                'major_code' => 'WS',
                'expertise_code' => 'M405',
                'expertise_name_th' => 'การวัดน้ำด้วยมาตร',
                'expertise_name_en' => 'Water Metering',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            100 => 
            array (
                'id' => 1101,
                'major_code' => 'WS',
                'expertise_code' => 'M406',
                'expertise_name_th' => 'ระบบบัญชีการตรวจสอบบัญชี',
                'expertise_name_en' => 'Accounting/Auditing Systems',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            101 => 
            array (
                'id' => 1102,
                'major_code' => 'WS',
                'expertise_code' => 'M407',
                'expertise_name_th' => 'การนำระบบคอมพิวเตอร์มาใช้ในการปฏิบัติงาน',
                'expertise_name_en' => 'Computerisation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            102 => 
            array (
                'id' => 1103,
                'major_code' => 'WS',
                'expertise_code' => 'M408',
                'expertise_name_th' => 'กฎหมาย',
                'expertise_name_en' => 'Legislation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            103 => 
            array (
                'id' => 1104,
                'major_code' => 'WS',
                'expertise_code' => 'M409',
                'expertise_name_th' => 'การบริหารการประปาและสุขาภิบาลชนบท',
                'expertise_name_en' => 'Rural Water Supply and Sanitation Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            104 => 
            array (
                'id' => 1105,
                'major_code' => 'WS',
                'expertise_code' => 'M410',
                'expertise_name_th' => 'การฝึกอบรมด้านการประปาและสุขาภิบาล',
                'expertise_name_en' => 'Water Supply and Sanitation Training',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            105 => 
            array (
                'id' => 1106,
                'major_code' => 'LW',
                'expertise_code' => 'O100',
                'expertise_name_th' => 'อัยการ',
                'expertise_name_en' => 'Attorneys',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            106 => 
            array (
                'id' => 1107,
                'major_code' => 'LW',
                'expertise_code' => 'O101',
                'expertise_name_th' => 'นักกฎหมาย',
                'expertise_name_en' => 'Lawyers',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            107 => 
            array (
                'id' => 1108,
                'major_code' => 'LW',
                'expertise_code' => 'O102',
                'expertise_name_th' => 'นักกฎหมายอนุญาโตตุลาการ',
                'expertise_name_en' => 'Lawyer, Arbitration',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            108 => 
            array (
                'id' => 1109,
                'major_code' => 'LW',
                'expertise_code' => 'O103',
                'expertise_name_th' => 'นักกฎหมายการธนาคาร',
                'expertise_name_en' => 'Lawyer, banking',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            109 => 
            array (
                'id' => 1110,
                'major_code' => 'LW',
                'expertise_code' => 'O104',
                'expertise_name_th' => 'นักกฎหมายธนาคารพาณิชย์',
                'expertise_name_en' => 'Lawyer, Banking, Commercial',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            110 => 
            array (
                'id' => 1111,
                'major_code' => 'LW',
                'expertise_code' => 'O105',
                'expertise_name_th' => 'นักกฎหมายการธนาคารการลงทุน',
                'expertise_name_en' => 'Lawyer, Banking, Investment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            111 => 
            array (
                'id' => 1112,
                'major_code' => 'LW',
                'expertise_code' => 'O106',
                'expertise_name_th' => 'นักกฎหมายการธนาคารกฎระเบียบข้อบังคับต่างๆ',
                'expertise_name_en' => 'Lawyer, Banking, Regulatory',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            112 => 
            array (
                'id' => 1113,
                'major_code' => 'LW',
                'expertise_code' => 'O107',
                'expertise_name_th' => 'นักกฎหมายการธนาคารหลักทรัพย์',
                'expertise_name_en' => 'Lawyer, Banking, Securities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            113 => 
            array (
                'id' => 1114,
                'major_code' => 'LW',
                'expertise_code' => 'O108',
                'expertise_name_th' => 'นักกฎหมายวิศวกรรมโยธาอาคาร',
                'expertise_name_en' => 'Lawyer, Civil Engineering, Building',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            114 => 
            array (
                'id' => 1115,
                'major_code' => 'LW',
                'expertise_code' => 'O109',
                'expertise_name_th' => 'นักกฎหมายการก่อสร้าง',
                'expertise_name_en' => 'Lawyer, Construction',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            115 => 
            array (
                'id' => 1116,
                'major_code' => 'LW',
                'expertise_code' => 'O110',
                'expertise_name_th' => 'นักกฎหมายบริษัท',
                'expertise_name_en' => 'Lawyer, corporate',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            116 => 
            array (
                'id' => 1117,
                'major_code' => 'LW',
                'expertise_code' => 'O111',
                'expertise_name_th' => 'นักกฎหมายบริษัทการเช่า',
                'expertise_name_en' => 'Lawyer, corporate, Leasing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            117 => 
            array (
                'id' => 1118,
                'major_code' => 'LW',
                'expertise_code' => 'O112',
                'expertise_name_th' => 'นักกฎหมายบริษัทนโยบายและการออกกฎหมาย',
                'expertise_name_en' => 'Lawyer, Corporate, Policy & Legislation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            118 => 
            array (
                'id' => 1119,
                'major_code' => 'LW',
                'expertise_code' => 'O113',
                'expertise_name_th' => 'นักกฎหมายบริษัททรัพย์สิน',
                'expertise_name_en' => 'Lawyer, Corporate, Property',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            119 => 
            array (
                'id' => 1120,
                'major_code' => 'LW',
                'expertise_code' => 'O114',
                'expertise_name_th' => 'นักกฎหมายบริษัทหลักทรัพย์',
                'expertise_name_en' => 'Lawyer, Corporate, Securities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            120 => 
            array (
                'id' => 1121,
                'major_code' => 'LW',
                'expertise_code' => 'O115',
                'expertise_name_th' => 'นักกฎหมายบริษัทการเข้าครอบครองกิจการ',
                'expertise_name_en' => 'Lawyer, Corporate, Takeovers',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            121 => 
            array (
                'id' => 1122,
                'major_code' => 'LW',
                'expertise_code' => 'O116',
                'expertise_name_th' => 'นักกฎหมายการร่างกฎหมาย',
                'expertise_name_en' => 'Lawyer, Drafting',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            122 => 
            array (
                'id' => 1123,
                'major_code' => 'LW',
                'expertise_code' => 'O117',
                'expertise_name_th' => 'นักกฎหมายการพลังงาน',
                'expertise_name_en' => 'Lawyer, Energy',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            123 => 
            array (
                'id' => 1124,
                'major_code' => 'LW',
                'expertise_code' => 'O118',
                'expertise_name_th' => 'นักกฎหมายการพลังงานถ่านหิน',
                'expertise_name_en' => 'Lawyer, Energy-Coal',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            124 => 
            array (
                'id' => 1125,
                'major_code' => 'LW',
                'expertise_code' => 'O119',
                'expertise_name_th' => 'นักกฎหมายการพลังงานน้ำมันและก๊าซ',
                'expertise_name_en' => 'Lawyer, Energy-oil & Gas',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            125 => 
            array (
                'id' => 1126,
                'major_code' => 'LW',
                'expertise_code' => 'O120',
                'expertise_name_th' => 'นักกฎหมายการพลังงานนโยบายและการออกกฎหมาย',
                'expertise_name_en' => 'Lawyer, Energy-Policy & Legislation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            126 => 
            array (
                'id' => 1127,
                'major_code' => 'LW',
                'expertise_code' => 'O121',
                'expertise_name_th' => 'นักกฎหมายการพลังงานไฟฟ้า',
                'expertise_name_en' => 'Lawyer, Energy-Power',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            127 => 
            array (
                'id' => 1128,
                'major_code' => 'LW',
                'expertise_code' => 'O122',
                'expertise_name_th' => 'นักกฎหมายการพลังงานโทรคมนาคม',
                'expertise_name_en' => 'Lawyer, Energy-Telecommunications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            128 => 
            array (
                'id' => 1129,
                'major_code' => 'LW',
                'expertise_code' => 'O123',
                'expertise_name_th' => 'นักกฎหมายสิ่งแวดล้อม',
                'expertise_name_en' => 'Lawyer, environment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            129 => 
            array (
                'id' => 1130,
                'major_code' => 'LW',
                'expertise_code' => 'O124',
                'expertise_name_th' => 'นักกฎหมายสิ่งแวดล้อมการพลังงาน',
                'expertise_name_en' => 'Lawyer, Environment, Energy',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            130 => 
            array (
                'id' => 1131,
                'major_code' => 'LW',
                'expertise_code' => 'O125',
                'expertise_name_th' => 'นักกฎหมายสิ่งแวดล้อมมลภาวะ',
                'expertise_name_en' => 'Lawyer, Environment, Pollution',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            131 => 
            array (
                'id' => 1132,
                'major_code' => 'LW',
                'expertise_code' => 'O126',
                'expertise_name_th' => 'นักกฎหมายสิ่งแวดล้อมน้ำ',
                'expertise_name_en' => 'Lawyer, Environment, Water',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            132 => 
            array (
                'id' => 1133,
                'major_code' => 'LW',
                'expertise_code' => 'O127',
                'expertise_name_th' => 'นักกฎหมายทรัพย์สินทางปัญญา',
                'expertise_name_en' => 'Lawyer, Intellectual Property',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            133 => 
            array (
                'id' => 1134,
                'major_code' => 'LW',
                'expertise_code' => 'O128',
                'expertise_name_th' => 'นักกฎหมายทรัพย์สินทางปัญญาใบอนุญาต',
                'expertise_name_en' => 'Lawyer, Intellectual Property, Licensing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            134 => 
            array (
                'id' => 1135,
                'major_code' => 'LW',
                'expertise_code' => 'O129',
                'expertise_name_th' => 'นักกฎหมายทรัพย์สินทางปัญญาสิทธิบัตร',
                'expertise_name_en' => 'Lawyer, Intellectual Property, Patents',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            135 => 
            array (
                'id' => 1136,
                'major_code' => 'LW',
                'expertise_code' => 'O130',
                'expertise_name_th' => 'นักกฎหมายทรัพย์สินทางปัญญาเครื่องหมายการค้า',
                'expertise_name_en' => 'Lawyer, Intellectual Property, Trademarks',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            136 => 
            array (
                'id' => 1137,
                'major_code' => 'LW',
                'expertise_code' => 'O131',
                'expertise_name_th' => 'นักกฎหมายกฎหมายระหว่างประเทศ',
                'expertise_name_en' => 'Lawyer, International Law',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            137 => 
            array (
                'id' => 1138,
                'major_code' => 'LW',
                'expertise_code' => 'O132',
                'expertise_name_th' => 'นักกฎหมายแร่',
                'expertise_name_en' => 'Lawyer, Minerals',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            138 => 
            array (
                'id' => 1139,
                'major_code' => 'LW',
                'expertise_code' => 'O133',
                'expertise_name_th' => 'นักกฎหมายเหมืองแร่',
                'expertise_name_en' => 'Lawyer, Mining',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            139 => 
            array (
                'id' => 1140,
                'major_code' => 'LW',
                'expertise_code' => 'O134',
                'expertise_name_th' => 'นักกฎหมายการลงทุนในต่างประเทศ',
                'expertise_name_en' => 'Lawyer, Overseas Investment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            140 => 
            array (
                'id' => 1141,
                'major_code' => 'LW',
                'expertise_code' => 'O135',
                'expertise_name_th' => 'นักกฎหมายการวางแผน',
                'expertise_name_en' => 'Lawyer, Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            141 => 
            array (
                'id' => 1142,
                'major_code' => 'LW',
                'expertise_code' => 'O136',
                'expertise_name_th' => 'นักกฎหมายการวางแผนด้านเกษตรกรร',
                'expertise_name_en' => 'Lawyer, Planning, Agricultural',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            142 => 
            array (
                'id' => 1143,
                'major_code' => 'LW',
                'expertise_code' => 'O137',
                'expertise_name_th' => 'นักกฎหมายการวางแผนด้านสิ่งแวดล้อม',
                'expertise_name_en' => 'Lawyer, Planning, Environmental',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            143 => 
            array (
                'id' => 1144,
                'major_code' => 'LW',
                'expertise_code' => 'O138',
                'expertise_name_th' => 'นักกฎหมายการวางแผนด้านผังเมือง',
                'expertise_name_en' => 'Lawyer, Planning, Urban',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            144 => 
            array (
                'id' => 1145,
                'major_code' => 'LW',
                'expertise_code' => 'O139',
                'expertise_name_th' => 'นักกฎหมายการสนับสนุนทางการเงินแก่โครงการ',
                'expertise_name_en' => 'Lawyer, Project Financing',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            145 => 
            array (
                'id' => 1146,
                'major_code' => 'LW',
                'expertise_code' => 'O140',
                'expertise_name_th' => 'นักกฎหมายหลักทรัพย์',
                'expertise_name_en' => 'Lawyer, Securities',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            146 => 
            array (
                'id' => 1147,
                'major_code' => 'LW',
                'expertise_code' => 'O141',
                'expertise_name_th' => 'นักกฎหมายหลักทรัพย์หนังสือชี้ชวน',
                'expertise_name_en' => 'Lawyer, Securities, Prospectus',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            147 => 
            array (
                'id' => 1148,
                'major_code' => 'LW',
                'expertise_code' => 'O142',
                'expertise_name_th' => 'นักกฎหมายหลักทรัพย์การแปลงสภาพสินทรัพย์ให้เป็นตราสาร',
                'expertise_name_en' => 'Lawyer, Securities, Securitization',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            148 => 
            array (
                'id' => 1149,
                'major_code' => 'LW',
                'expertise_code' => 'O143',
                'expertise_name_th' => 'นักกฎหมายหลักทรัพย์ตลาดหลักทรัพย์',
                'expertise_name_en' => 'Lawyer, Securities, Stock Markets',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            149 => 
            array (
                'id' => 1150,
                'major_code' => 'LW',
                'expertise_code' => 'O144',
                'expertise_name_th' => 'นักกฎหมายการจัดเก็บภาษี',
                'expertise_name_en' => 'Lawyer, Taxation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            150 => 
            array (
                'id' => 1151,
                'major_code' => 'LW',
                'expertise_code' => 'O145',
                'expertise_name_th' => 'นักกฎหมายการจัดเก็บภาษีในประเทศ',
                'expertise_name_en' => 'Lawyer, Taxation, Domestic',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            151 => 
            array (
                'id' => 1152,
                'major_code' => 'LW',
                'expertise_code' => 'O146',
                'expertise_name_th' => 'นักกฎหมายการจัดเก็บภาษีต่างประเทศ',
                'expertise_name_en' => 'Lawyer, Taxation, International',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            152 => 
            array (
                'id' => 1153,
                'major_code' => 'LW',
                'expertise_code' => 'O147',
                'expertise_name_th' => 'นักกฎหมายการขนส่ง',
                'expertise_name_en' => 'Lawer, Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            153 => 
            array (
                'id' => 1154,
                'major_code' => 'LW',
                'expertise_code' => 'O148',
                'expertise_name_th' => 'นักกฎหมายกฎหมายแรงงาน',
                'expertise_name_en' => 'Lawyer, Labor Law',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            154 => 
            array (
                'id' => 1155,
                'major_code' => 'QS',
                'expertise_code' => 'R100',
                'expertise_name_th' => 'ระบบควบคุมคุณภาพ',
                'expertise_name_en' => 'ISO 9000/QS 9000',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            155 => 
            array (
                'id' => 1156,
                'major_code' => 'QS',
                'expertise_code' => 'R101',
            'expertise_name_th' => 'ระบบบริหารงานคุณภาพ (ISO 9001)',
                'expertise_name_en' => 'ISO 9001',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            156 => 
            array (
                'id' => 1157,
                'major_code' => 'QS',
                'expertise_code' => 'R102',
                'expertise_name_th' => 'ISO 9002',
                'expertise_name_en' => 'ISO 9002',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            157 => 
            array (
                'id' => 1158,
                'major_code' => 'QS',
                'expertise_code' => 'R103',
                'expertise_name_th' => 'ISO 9003',
                'expertise_name_en' => 'ISO 9003',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            158 => 
            array (
                'id' => 1159,
                'major_code' => 'QS',
                'expertise_code' => 'R104',
                'expertise_name_th' => 'ISO 9004',
                'expertise_name_en' => 'ISO 9004',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            159 => 
            array (
                'id' => 1160,
                'major_code' => 'QS',
                'expertise_code' => 'R105',
            'expertise_name_th' => 'ระบบการจัดการสิ่งแวดล้อม (ISO 14001)',
                'expertise_name_en' => 'ISO 14001',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            160 => 
            array (
                'id' => 1161,
                'major_code' => 'QS',
                'expertise_code' => 'R106',
                'expertise_name_th' => 'ระบบการวิเคราะห์อันตรายและจุดวิกฤตที่ต้องควบคุมในการผลิตอาหาร',
            'expertise_name_en' => 'HACCP System (Hazard Analysis and Critical Control Point)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            161 => 
            array (
                'id' => 1162,
                'major_code' => 'QS',
                'expertise_code' => 'R107',
                'expertise_name_th' => 'ระบบการจัดการสุขลักษณะที่ดีในการผลิตอาหาร',
            'expertise_name_en' => 'GMP System (Good Manufacturing Practice)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            162 => 
            array (
                'id' => 1163,
                'major_code' => 'QS',
                'expertise_code' => 'R108',
                'expertise_name_th' => 'ระบบคุณภาพมาตรฐานด้านการจัดการห้องปฏิบัติการ',
                'expertise_name_en' => 'ISO/IEC Guide 25 or ISO/IEC17025',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            163 => 
            array (
                'id' => 1164,
                'major_code' => 'QS',
                'expertise_code' => 'R109',
                'expertise_name_th' => 'ISO 14000',
                'expertise_name_en' => 'ISO 14000',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            164 => 
            array (
                'id' => 1165,
                'major_code' => 'QS',
                'expertise_code' => 'R110',
            'expertise_name_th' => 'ระบบการจัดการอาชีวอนามัยและความปลอดภัย (ISO 18001)',
                'expertise_name_en' => 'ISO 18001',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            165 => 
            array (
                'id' => 1166,
                'major_code' => 'QS',
                'expertise_code' => 'R111',
                'expertise_name_th' => 'กิจกรรม 5ส',
                'expertise_name_en' => '5 Activity',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            166 => 
            array (
                'id' => 1167,
                'major_code' => 'QS',
                'expertise_code' => 'R112',
                'expertise_name_th' => 'มาตรฐานระบบบริหารคุณภาพ เพื่ออุตสาหกรรมยานยนต์',
                'expertise_name_en' => 'ISO/TS 16949',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            167 => 
            array (
                'id' => 1168,
                'major_code' => 'QS',
                'expertise_code' => 'R113',
                'expertise_name_th' => 'ระบบมาตรฐานสากลที่ให้ความสำคัญกับสิทธิ ขั้นพื้นฐานของแรงงาน',
                'expertise_name_en' => 'SA 8000',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            168 => 
            array (
                'id' => 1169,
                'major_code' => 'QS',
                'expertise_code' => 'R114',
                'expertise_name_th' => 'คุณภาพโรงพยาบาล',
            'expertise_name_en' => 'HA (Hospital Accreditation)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            169 => 
            array (
                'id' => 1170,
                'major_code' => 'QS',
                'expertise_code' => 'R115',
                'expertise_name_th' => 'มาตรฐานด้านระบบการแพทย์',
                'expertise_name_en' => 'ISO 13485:2003',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            170 => 
            array (
                'id' => 1171,
                'major_code' => 'QS',
                'expertise_code' => 'R116',
                'expertise_name_th' => 'ระบบการจัดการอาชีวอนามัยและความปลอดภัย',
                'expertise_name_en' => 'OHSAS 18000',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            171 => 
            array (
                'id' => 1172,
                'major_code' => 'QS',
                'expertise_code' => 'R117',
                'expertise_name_th' => 'ISO/IEC Guide 66 and 62',
                'expertise_name_en' => 'ISO/IEC Guide 66 and 62',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            172 => 
            array (
                'id' => 1173,
                'major_code' => 'QS',
                'expertise_code' => 'R118',
                'expertise_name_th' => 'ระบบการจัดการอาชีวอนามัยและความปลอดภัย',
                'expertise_name_en' => 'OHSAS 18001',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            173 => 
            array (
                'id' => 1174,
                'major_code' => 'QS',
                'expertise_code' => 'R119',
                'expertise_name_th' => 'มาตรฐานแรงงานไทย',
                'expertise_name_en' => 'มรท. 8001',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            174 => 
            array (
                'id' => 1175,
                'major_code' => 'QS',
                'expertise_code' => 'R120',
                'expertise_name_th' => 'มาตรฐานระบบรักษาความปลอดภัยของข้อมูลองค์กร',
                'expertise_name_en' => 'ISO 27001',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            175 => 
            array (
                'id' => 1176,
                'major_code' => 'QS',
                'expertise_code' => 'R121',
                'expertise_name_th' => 'ระบบมาตรฐานความปลอดภัยทางด้านอาหาร',
                'expertise_name_en' => 'SQF 2000',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            176 => 
            array (
                'id' => 1177,
                'major_code' => 'QS',
                'expertise_code' => 'R122',
                'expertise_name_th' => 'การจัดทำระบบการจัดการความปลอดภัยด้านอาหาร',
                'expertise_name_en' => 'ISO22000',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            177 => 
            array (
                'id' => 1178,
                'major_code' => 'QS',
                'expertise_code' => 'R123',
                'expertise_name_th' => 'มาตรฐานอุตสาหกรรมการบินและอวกาศ',
                'expertise_name_en' => 'AS9100',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            178 => 
            array (
                'id' => 1179,
                'major_code' => 'QS',
                'expertise_code' => 'R124',
                'expertise_name_th' => 'ISO/IEC 17011',
                'expertise_name_en' => 'ISO/IEC 17011',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            179 => 
            array (
                'id' => 1180,
                'major_code' => 'QS',
                'expertise_code' => 'R125',
                'expertise_name_th' => 'ISO/IEC Guide 65',
                'expertise_name_en' => 'ISO/IEC Guide 65',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            180 => 
            array (
                'id' => 1181,
                'major_code' => 'QS',
                'expertise_code' => 'R126',
                'expertise_name_th' => 'มาตรฐานแนวทางความรับผิดชอบต่อสังคม',
                'expertise_name_en' => 'มอก./ISO26000/CSR',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            181 => 
            array (
                'id' => 1182,
                'major_code' => 'QS',
                'expertise_code' => 'R127',
                'expertise_name_th' => 'มาตรฐานผลิตภัณฑ์อุตสาหกรรม',
                'expertise_name_en' => 'มอก.532',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            182 => 
            array (
                'id' => 1183,
                'major_code' => 'QS',
                'expertise_code' => 'R128',
                'expertise_name_th' => 'มาตรฐานในการปรับปรุงคุณภาพซอฟแวร์',
                'expertise_name_en' => 'มาตรฐาน CMMI',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            183 => 
            array (
                'id' => 1184,
                'major_code' => 'QS',
                'expertise_code' => 'R129',
                'expertise_name_th' => 'ระบบการจัดการพลังงานตามาตรฐานสากล',
                'expertise_name_en' => 'ISO 50001',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            184 => 
            array (
                'id' => 1185,
                'major_code' => 'QS',
                'expertise_code' => 'R130',
                'expertise_name_th' => 'มาตรฐานงานบริการด้าน IT',
                'expertise_name_en' => 'ISO 20000',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            185 => 
            array (
                'id' => 1186,
                'major_code' => 'QS',
                'expertise_code' => 'R131',
                'expertise_name_th' => 'มาตรฐานการบริหารคุณภาพห้องปฏิบัติการทางการแพทย์',
                'expertise_name_en' => 'ISO 15189',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            186 => 
            array (
                'id' => 1187,
                'major_code' => 'QS',
                'expertise_code' => 'R132',
                'expertise_name_th' => 'ระบบคุณภาพสำหรับธุรกิจค้าปลีกอาหาร',
                'expertise_name_en' => 'BRC : Brithish Retail Consumer',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            187 => 
            array (
                'id' => 1188,
                'major_code' => 'QS',
                'expertise_code' => 'R133',
            'expertise_name_th' => 'ระบบการบริหารความต่อเนื่องทางธุรกิจ (BCM)',
            'expertise_name_en' => 'Business Continuity Management (ISO 22301)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            188 => 
            array (
                'id' => 1189,
                'major_code' => 'QS',
                'expertise_code' => 'R134',
            'expertise_name_th' => 'มาตรฐานการบริหารความต่อเนื่องทางธุรกิจ (BS 25999)',
            'expertise_name_en' => 'Business continuity management (BS 25999)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            189 => 
            array (
                'id' => 1190,
                'major_code' => 'QS',
                'expertise_code' => 'R135',
                'expertise_name_th' => 'ระบบการจัดการด้านการรักษาความปลอดภัย',
                'expertise_name_en' => 'มอก. 22300-2551',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            190 => 
            array (
                'id' => 1191,
                'major_code' => 'QS',
                'expertise_code' => 'R136',
                'expertise_name_th' => 'มาตรฐานอาหารระหว่างประเทศ',
                'expertise_name_en' => 'IFS : International Food Standard',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            191 => 
            array (
                'id' => 1192,
                'major_code' => 'QS',
                'expertise_code' => 'R137',
                'expertise_name_th' => 'มาตรฐานผลิตภัณฑ์อุตสาหกรรมวิศวกรรมซอฟแวร์',
                'expertise_name_en' => 'ISO/IEC 29110 or มอก 29110',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            192 => 
            array (
                'id' => 1193,
                'major_code' => 'QS',
                'expertise_code' => 'R138',
                'expertise_name_th' => 'มาตรฐานรับรองความปลอดภัยสินค้าอุตสาหกรรมของยุโรป',
                'expertise_name_en' => 'CE Mark : Conformite European Mark',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            193 => 
            array (
                'id' => 1194,
                'major_code' => 'QS',
                'expertise_code' => 'R139',
                'expertise_name_th' => 'มาตรฐานข้อกำหนดสำหรับหน่วยตรวจ',
                'expertise_name_en' => 'ISO/IEC/มอก. 17020',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            194 => 
            array (
                'id' => 1195,
                'major_code' => 'QS',
                'expertise_code' => 'R140',
                'expertise_name_th' => 'มาตรฐานการบริการด้านการเรียนรู้สำหรับการศึกษานอกระบบและการฝึกอบรม',
            'expertise_name_en' => 'ISO 29990 (Learning Service for Non-Formal Education and Training)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            195 => 
            array (
                'id' => 1196,
                'major_code' => 'QS',
                'expertise_code' => 'R141',
                'expertise_name_th' => 'ระบบการจัดการสุขลักษณะที่ดีในการผลิตเครื่องสำอาง',
                'expertise_name_en' => 'ISO 22716',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            196 => 
            array (
                'id' => 1197,
                'major_code' => 'QS',
                'expertise_code' => 'R142',
                'expertise_name_th' => 'มาตรฐานหลักเกณฑ์วิธีการที่ดีในการผลิตเครื่องสำอางของอาเซียน',
                'expertise_name_en' => 'GMP Asean Cosmetic',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            197 => 
            array (
                'id' => 1198,
                'major_code' => 'QS',
                'expertise_code' => 'R143',
                'expertise_name_th' => 'มาตรฐานฮาลาล',
                'expertise_name_en' => 'Halal Certification Process',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            198 => 
            array (
                'id' => 1199,
                'major_code' => 'MID',
                'expertise_code' => 'S100',
                'expertise_name_th' => 'การพัฒนาประเทศ',
                'expertise_name_en' => 'National Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            199 => 
            array (
                'id' => 1200,
                'major_code' => 'MID',
                'expertise_code' => 'S101',
                'expertise_name_th' => 'กลยุทธ์การพัฒนาประเทศ',
                'expertise_name_en' => 'National Development Strategies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            200 => 
            array (
                'id' => 1201,
                'major_code' => 'MID',
                'expertise_code' => 'S102',
                'expertise_name_th' => 'นโยบายด้านเกษตรอุตสาหกรรม',
                'expertise_name_en' => 'Agricultural-Industrial Policies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            201 => 
            array (
                'id' => 1202,
                'major_code' => 'MID',
                'expertise_code' => 'S103',
                'expertise_name_th' => 'นโยบายการค้าระหว่างประเทศ',
                'expertise_name_en' => 'Foreign Trade Policies',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            202 => 
            array (
                'id' => 1203,
                'major_code' => 'MID',
                'expertise_code' => 'S104',
                'expertise_name_th' => 'การวางแผนระดับชาติ',
                'expertise_name_en' => 'National Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            203 => 
            array (
                'id' => 1204,
                'major_code' => 'MID',
                'expertise_code' => 'S105',
                'expertise_name_th' => 'รัฐประศาสนศาสตร์',
                'expertise_name_en' => 'Public Administration',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            204 => 
            array (
                'id' => 1205,
                'major_code' => 'MID',
                'expertise_code' => 'S106',
                'expertise_name_th' => 'รัฐวิสาหกิจการบริหารและการเงิน',
                'expertise_name_en' => 'Public Enterprises : Management & Financial',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            205 => 
            array (
                'id' => 1206,
                'major_code' => 'MID',
                'expertise_code' => 'S107',
                'expertise_name_th' => 'รัฐวิสาหกิจระบบสารสนเทศและระบบควบคุม',
                'expertise_name_en' => 'Public Enterprises : Information and Control System',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            206 => 
            array (
                'id' => 1207,
                'major_code' => 'MID',
                'expertise_code' => 'S108',
                'expertise_name_th' => 'การบริหารเศรษฐกิจของชาติ',
                'expertise_name_en' => 'National Economic Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            207 => 
            array (
                'id' => 1208,
                'major_code' => 'MID',
                'expertise_code' => 'S109',
                'expertise_name_th' => 'การบริหารงบประมาณและการลงทุนภาครัฐ',
                'expertise_name_en' => 'Budget & Public Investment Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            208 => 
            array (
                'id' => 1209,
                'major_code' => 'MID',
                'expertise_code' => 'S110',
                'expertise_name_th' => 'การบริหารการเงินภาครัฐและหนี้สาธารณะ',
                'expertise_name_en' => 'Public Finances and Debt Management',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            209 => 
            array (
                'id' => 1210,
                'major_code' => 'MID',
                'expertise_code' => 'S111',
                'expertise_name_th' => 'การพัฒนาองค์กร',
                'expertise_name_en' => 'Institutional Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            210 => 
            array (
                'id' => 1211,
                'major_code' => 'MID',
                'expertise_code' => 'S112',
                'expertise_name_th' => 'แผนการแปรรูปรัฐวิสาหกิจ',
                'expertise_name_en' => 'Privatization Programs',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            211 => 
            array (
                'id' => 1212,
                'major_code' => 'MID',
                'expertise_code' => 'S113',
                'expertise_name_th' => 'การวางแผนธุรกิจ',
                'expertise_name_en' => 'Business Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            212 => 
            array (
                'id' => 1213,
                'major_code' => 'MID',
                'expertise_code' => 'S114',
                'expertise_name_th' => 'การบริหารจัดการเพื่อสร้างมูลค่าเชิงเศรษฐศาสตร์',
            'expertise_name_en' => 'Economic Value Management (EVM)',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            213 => 
            array (
                'id' => 1214,
                'major_code' => 'MID',
                'expertise_code' => 'S115',
                'expertise_name_th' => 'ตัวชี้วัด',
                'expertise_name_en' => 'KPI',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            214 => 
            array (
                'id' => 1215,
                'major_code' => 'MID',
                'expertise_code' => 'S116',
                'expertise_name_th' => 'การพัฒนาแผนและนโยบายแห่งชาติ',
                'expertise_name_en' => 'National Planning and Policy Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            215 => 
            array (
                'id' => 1216,
                'major_code' => 'MID',
                'expertise_code' => 'S117',
                'expertise_name_th' => 'การวางแผนผสมผสานหลายสาขา',
                'expertise_name_en' => 'Intersectoral Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            216 => 
            array (
                'id' => 1217,
                'major_code' => 'MID',
                'expertise_code' => 'S118',
                'expertise_name_th' => 'การวางแผนอัตรากำลัง',
                'expertise_name_en' => 'Manpower Planning',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            217 => 
            array (
                'id' => 1218,
                'major_code' => 'MID',
                'expertise_code' => 'S119',
                'expertise_name_th' => 'ทรัพยากรบุคคล',
                'expertise_name_en' => 'HUMAN RESOURCE',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            218 => 
            array (
                'id' => 1219,
                'major_code' => 'PR',
                'expertise_code' => 'T100',
                'expertise_name_th' => 'สารสนเทศการศึกษาการสื่อสาร',
                'expertise_name_en' => 'Information, Education, Communications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            219 => 
            array (
                'id' => 1220,
                'major_code' => 'PR',
                'expertise_code' => 'T101',
                'expertise_name_th' => 'การสื่อสารผ่านสื่อมวลชน',
                'expertise_name_en' => 'Mass Media Communications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            220 => 
            array (
                'id' => 1221,
                'major_code' => 'PR',
                'expertise_code' => 'T102',
                'expertise_name_th' => 'โสตทัศนูปกรณ์',
                'expertise_name_en' => 'Audio-Visual Aids',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            221 => 
            array (
                'id' => 1222,
                'major_code' => 'PR',
                'expertise_code' => 'T103',
                'expertise_name_th' => 'การสื่อสารระหว่างบุคคล',
                'expertise_name_en' => 'Interpersonal Communications',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            222 => 
            array (
                'id' => 1223,
                'major_code' => 'PR',
                'expertise_code' => 'T104',
                'expertise_name_th' => 'การใช้สื่อชาวบ้าน',
                'expertise_name_en' => 'Use of Folk Media',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            223 => 
            array (
                'id' => 1224,
                'major_code' => 'PR',
                'expertise_code' => 'T105',
                'expertise_name_th' => 'ผู้จัด',
                'expertise_name_en' => 'ORGANIZER',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            224 => 
            array (
                'id' => 1225,
                'major_code' => 'PR',
                'expertise_code' => 'T106',
                'expertise_name_th' => 'การประชุม',
                'expertise_name_en' => 'CONFERENCE',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            225 => 
            array (
                'id' => 1226,
                'major_code' => 'PR',
                'expertise_code' => 'T107',
                'expertise_name_th' => 'นิทรรศการ',
                'expertise_name_en' => 'EXHIBITION',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            226 => 
            array (
                'id' => 1227,
                'major_code' => 'RE',
                'expertise_code' => 'U700',
                'expertise_name_th' => 'การติดตามผล/การประเมินผล/การวิจัย',
                'expertise_name_en' => 'Monitoring, Evaluation, Research',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            227 => 
            array (
                'id' => 1228,
                'major_code' => 'RE',
                'expertise_code' => 'U700A',
                'expertise_name_th' => 'เกษตรและพัฒนาชนบท',
                'expertise_name_en' => 'Agriculture and Rural Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            228 => 
            array (
                'id' => 1229,
                'major_code' => 'RE',
                'expertise_code' => 'U700B',
                'expertise_name_th' => 'อุตสาหกรรมก่อสร้าง',
                'expertise_name_en' => 'Building Sector',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            229 => 
            array (
                'id' => 1230,
                'major_code' => 'RE',
                'expertise_code' => 'U700C',
                'expertise_name_th' => 'การศึกษา',
                'expertise_name_en' => 'Education',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            230 => 
            array (
                'id' => 1231,
                'major_code' => 'RE',
                'expertise_code' => 'U700D',
                'expertise_name_th' => 'พลังงาน',
                'expertise_name_en' => 'Energy',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            231 => 
            array (
                'id' => 1232,
                'major_code' => 'RE',
                'expertise_code' => 'U700E',
                'expertise_name_th' => 'สิ่งแวดล้อม',
                'expertise_name_en' => 'Environment',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            232 => 
            array (
                'id' => 1233,
                'major_code' => 'RE',
                'expertise_code' => 'U700F',
                'expertise_name_th' => 'การเงิน',
                'expertise_name_en' => 'Financial',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            233 => 
            array (
                'id' => 1234,
                'major_code' => 'RE',
                'expertise_code' => 'U700G',
                'expertise_name_th' => 'สาธารณสุข',
                'expertise_name_en' => 'Health',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            234 => 
            array (
                'id' => 1235,
                'major_code' => 'RE',
                'expertise_code' => 'U700H',
                'expertise_name_th' => 'อุตสาหกรรม',
                'expertise_name_en' => 'Industry',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            235 => 
            array (
                'id' => 1236,
                'major_code' => 'RE',
                'expertise_code' => 'U700I',
                'expertise_name_th' => 'ประชากร',
                'expertise_name_en' => 'Population',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            236 => 
            array (
                'id' => 1237,
                'major_code' => 'RE',
                'expertise_code' => 'U700J',
                'expertise_name_th' => 'เทคโนโลยีสารสนเทศและการสื่อสาร',
                'expertise_name_en' => 'Information and Communication Technology',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            237 => 
            array (
                'id' => 1238,
                'major_code' => 'RE',
                'expertise_code' => 'U700K',
                'expertise_name_th' => 'การท่องเที่ยว',
                'expertise_name_en' => 'Tourism',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            238 => 
            array (
                'id' => 1239,
                'major_code' => 'RE',
                'expertise_code' => 'U700L',
                'expertise_name_th' => 'คมนาคมขนส่ง',
                'expertise_name_en' => 'Transportation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            239 => 
            array (
                'id' => 1240,
                'major_code' => 'RE',
                'expertise_code' => 'U700M',
                'expertise_name_th' => 'พัฒนาเมือง',
                'expertise_name_en' => 'Urban Development',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            240 => 
            array (
                'id' => 1241,
                'major_code' => 'RE',
                'expertise_code' => 'U700N',
                'expertise_name_th' => 'การประปาและสุขาภิบาล',
                'expertise_name_en' => 'Water Supply and Sanitation',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            241 => 
            array (
                'id' => 1242,
                'major_code' => 'RE',
                'expertise_code' => 'U700O',
                'expertise_name_th' => 'กฎหมาย',
                'expertise_name_en' => 'Law Sector',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            242 => 
            array (
                'id' => 1243,
                'major_code' => 'RE',
                'expertise_code' => 'U700P',
                'expertise_name_th' => 'มาตรฐานคุณภาพ',
                'expertise_name_en' => 'Quality Standard Sector',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            243 => 
            array (
                'id' => 1244,
                'major_code' => 'RE',
                'expertise_code' => 'U700Q',
                'expertise_name_th' => 'การบริหารและการพัฒนาองค์กร',
                'expertise_name_en' => 'Management and Institutional Development Sector',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            244 => 
            array (
                'id' => 1245,
                'major_code' => 'RE',
                'expertise_code' => 'U700R',
                'expertise_name_th' => 'การประชาสัมพันธ์',
                'expertise_name_en' => 'Public Relations Sector',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            245 => 
            array (
                'id' => 1246,
                'major_code' => 'RE',
                'expertise_code' => 'U700S',
                'expertise_name_th' => 'การวิจัยและการประเมินผล',
                'expertise_name_en' => 'Research and Evaluation Sector',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            246 => 
            array (
                'id' => 1247,
                'major_code' => 'RE',
                'expertise_code' => 'U701',
                'expertise_name_th' => 'การออกแบบระบบติดตามผล',
                'expertise_name_en' => 'Monitoring Systems Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            247 => 
            array (
                'id' => 1248,
                'major_code' => 'RE',
                'expertise_code' => 'U702',
                'expertise_name_th' => 'สถิติการให้บริการ',
                'expertise_name_en' => 'Statistics on Services Provided',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            248 => 
            array (
                'id' => 1249,
                'major_code' => 'RE',
                'expertise_code' => 'U703',
                'expertise_name_th' => 'การออกแบบระบบประเมินผล',
                'expertise_name_en' => 'Evaluation Systems Design',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            249 => 
            array (
                'id' => 1250,
                'major_code' => 'RE',
                'expertise_code' => 'U704',
                'expertise_name_th' => 'การวิจัยและการให้บริการ',
                'expertise_name_en' => 'Research and Services',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            250 => 
            array (
                'id' => 1251,
                'major_code' => 'RE',
                'expertise_code' => 'U704A',
                'expertise_name_th' => 'เน้นการปฏิบัติ',
                'expertise_name_en' => 'Action-Oriented',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            251 => 
            array (
                'id' => 1252,
                'major_code' => 'RE',
                'expertise_code' => 'U704B',
                'expertise_name_th' => 'เน้นการประเมินผล',
                'expertise_name_en' => 'Evaluation/Oriented',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            252 => 
            array (
                'id' => 1253,
                'major_code' => 'RE',
                'expertise_code' => 'U704C',
                'expertise_name_th' => 'การวิจัยทางคลินิก',
                'expertise_name_en' => 'Clinical Research',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            253 => 
            array (
                'id' => 1254,
                'major_code' => 'MS',
                'expertise_code' => 'N100',
                'expertise_name_th' => 'ความเชี่ยวชาญสาขาเบ็ดเตล็ด',
                'expertise_name_en' => 'Miscellaneous Specializations',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            254 => 
            array (
                'id' => 1255,
                'major_code' => 'MS',
                'expertise_code' => 'N101',
                'expertise_name_th' => 'มนุษยวิทยา',
                'expertise_name_en' => 'Anthropology',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            255 => 
            array (
                'id' => 1256,
                'major_code' => 'MS',
                'expertise_code' => 'N102',
                'expertise_name_th' => 'วิศวกรรมชายฝั่ง',
                'expertise_name_en' => 'Coastal Engineering',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            256 => 
            array (
                'id' => 1257,
                'major_code' => 'MS',
                'expertise_code' => 'N103',
                'expertise_name_th' => 'สมุทรศาสตร์',
                'expertise_name_en' => 'Oceanography',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            257 => 
            array (
                'id' => 1258,
                'major_code' => 'MS',
                'expertise_code' => 'N104',
                'expertise_name_th' => 'วิทยาแผ่นดินไหว',
                'expertise_name_en' => 'Seismology',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            258 => 
            array (
                'id' => 1259,
                'major_code' => 'MS',
                'expertise_code' => 'N105',
                'expertise_name_th' => 'นักแปลภาษา',
                'expertise_name_en' => 'Translator',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            259 => 
            array (
                'id' => 1260,
                'major_code' => 'MS',
                'expertise_code' => 'N106',
                'expertise_name_th' => 'งานจัดซื้อ-จัดจ้าง',
                'expertise_name_en' => 'Procurement Process Improvement',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            260 => 
            array (
                'id' => 1261,
                'major_code' => 'MS',
                'expertise_code' => 'N107',
                'expertise_name_th' => 'วิทยาศาสตร์การกีฬา',
                'expertise_name_en' => 'Sport Science',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
            261 => 
            array (
                'id' => 1262,
                'major_code' => 'ICT',
                'expertise_code' => 'Q114',
                'expertise_name_th' => 'IT Audit',
                'expertise_name_en' => 'การตรวจสอบด้านเทคโนโลยีสารสนเทศ',
                'created_at' => '2018-01-14 14:11:40',
                'updated_at' => '2018-01-14 14:11:40',
            ),
        ));
        
        
    }
}