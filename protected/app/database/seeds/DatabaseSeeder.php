<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Eloquent::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('UserSeeder');
		$this->call('AddressSeeder');
		$this->call('RoleSeeder');

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		\Cache::flush();
	}

}
