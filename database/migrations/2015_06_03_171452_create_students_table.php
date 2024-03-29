<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('studentId')->unique();
			$table->string('phone');
			$table->string('email')->uniqid();
			$table->date('dob');
			$table->char('gender');
			$table->string('address');
			$table->string('state');
			$table->string('nationality');

			$table->integer('class_id');
			$table->string('image');
			$table->timestamps();
			$table->timestamp('end_date');
			$table->string('slug');


			$table->foreign('class_id')
				->references('id')
				->on('classes')
				->onDelete('cascade');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}
