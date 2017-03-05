<?php
 
class CompanySeeder extends Seeder
{
    public function run()
    {
        DB::table('companies')->delete();
        DB::table('companies')->insert(array (
            array (
                'id'       => 1,
                'user_id'  => 1,
                'name'     => 'PT. HAHA',
                'position' => 'Software Engineer',
            ),
            array (
                'id'       => 2,
                'user_id'  => 2,
                'name'     => 'PT. HUHU',
                'position' => 'Marketing',
            ),
        ));
    }
}