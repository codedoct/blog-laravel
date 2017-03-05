<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function($table){
			$table->integer('id', true);
			$table->integer('user_id')->index('companies_user_id');
			$table->string('name');
			$table->string('position');
			$table->timestamps();
		});

		Schema::table('companies', function(Blueprint $table)
        {
            $table->foreign('user_id', 'companies_ibfk_1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('companies', function(Blueprint $table)
		{
			$table->dropForeign('companies_ibfk_1');
		});

		Schema::drop('companies');
	}

}
