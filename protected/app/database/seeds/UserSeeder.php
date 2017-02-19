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
                'password' => Hash::make('rahasiakampret'),
            ),
            array (
                'name'     => 'Trafalgar Law',
                'username' => 'trafa',
                'email'    => 'trafa@gmail.com',
                'password' => Hash::make('rahasiakampret'),
            ),
        ));
    }
}