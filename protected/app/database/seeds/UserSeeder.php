<?php
 
class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array (
            array (
                'id'       => 1,
                'name'     => 'Dracule Mihawk',
                'username' => 'mihawk',
                'email'    => 'mihawk@gmail.com',
                'role_id'     => 1,
                'password' => Hash::make('rahasiakampret'),
            ),
            array (
                'id'       => 2,
                'name'     => 'Trafalgar Law',
                'username' => 'trafa',
                'email'    => 'trafa@gmail.com',
                'role_id'     => 2,
                'password' => Hash::make('rahasiakampret'),
            ),
        ));
    }
}