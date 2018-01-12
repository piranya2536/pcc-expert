<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_code' => 'pcc01',
                'project_name' => 'ศูนย์พัฒนาเศรษฐกิจดิจิทัล ',
                'year_fund' => '2017',
                'fund' => 'รายได้',
                'dep' => 'วชภ.',
                'created_at' => '2018-01-12 14:49:18',
                'updated_at' => '2018-01-12 14:49:18',
            ),
            1 => 
            array (
                'id' => 2,
                'project_code' => 'pcc02',
                'project_name' => 'มัคคุเทศก์น้อย',
                'year_fund' => '2017',
                'fund' => 'รายได้',
                'dep' => 'วชภ.',
                'created_at' => '2018-01-12 14:51:45',
                'updated_at' => '2018-01-12 14:51:45',
            ),
        ));
        
        
    }
}