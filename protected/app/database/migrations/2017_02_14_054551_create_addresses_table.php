<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function($table){
			$table->integer('id', true);
			$table->string('name_address');
			$table->string('city');
			$table->string('province');
			$table->string('address');
			$table->integer('zipcode');
			$table->string('phone');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('users', function(Blueprint $table)
        {
            $table->foreign('address_id', 'users_ibfk_1')->references('id')->on('addresses')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('users_ibfk_1');
		});

		Schema::drop('addresses');
	}

}
