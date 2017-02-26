<?php
 
class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('roles')->insert(array (
            array (
                'id'       => 1,
                'name'     => 'admin',
            ),
            array (
                'id'       => 2,
                'name'     => 'user',
            ),
        ));
    }
}