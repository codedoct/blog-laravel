<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function($table){
			$table->integer('id', true);
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('users', function(Blueprint $table)
        {
            $table->foreign('role_id', 'users_ibfk_1')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('CASCADE');
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
		
		Schema::drop('roles');
	}

}
