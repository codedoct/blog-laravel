<?php
 
class AddressSeeder extends Seeder
{
    public function run()
    {
        DB::table('addresses')->delete();
        DB::table('addresses')->insert(array (
            array (
                'id' => 1,
                'name_address'     => 'Alamat Mihawk',
                'city' => 'north blue',
                'province'    => 'fusa',
                'address' => 'jalan-jalan 1',
                'zipcode' => '12456',
                'phone' => '0982345432',
            ),
            array (
                'id' => 2,
                'name_address'     => 'Alamat Law',
                'city' => 'konoha',
                'province'    => 'wano',
                'address' => 'jalan-jalan 2',
                'zipcode' => '12344',
                'phone' => '0987651245',
            ),
        ));
    }
}