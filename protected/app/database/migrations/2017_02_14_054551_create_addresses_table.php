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
			$table->integer('user_id')->index('addresses_user_id')->nullable();
			$table->string('name_address');
			$table->string('city');
			$table->string('province');
			$table->string('address');
			$table->integer('zipcode');
			$table->string('phone');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('addresses', function(Blueprint $table)
        {
            $table->foreign('user_id', 'addresses_ibfk_1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('addresses', function(Blueprint $table)
		{
			$table->dropForeign('addresses_ibfk_1');
		});

		Schema::drop('addresses');
	}

}
