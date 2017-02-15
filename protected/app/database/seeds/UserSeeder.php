<?php
 
class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array (
            array (
            'name'     => 'Dracule Mihawk',
            'username' => 'mihawk',
            'email'    => 'mihawk@gmail.com',
            'address_id' => 1,
            'password' => Hash::make('rahasiakampret'),
            ),
            array (
            'name'     => 'Trafalgar Law',
            'username' => 'trafa',
            'email'    => 'trafa@gmail.com',
            'address_id' => 2,
            'password' => Hash::make('rahasiakampret'),
            ),
        ));
    }
}