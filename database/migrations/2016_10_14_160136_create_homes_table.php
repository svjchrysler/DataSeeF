<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('homes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('garage');
            $table->double('price');
            $table->integer('phone');
            $table->string('address');
            $table->double('x_coordinate');
            $table->double('y_coordinate');
            $table->string('image_one');
            $table->string('image_two');
            $table->string('image_three');
            $table->string('descripcion');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('homes');
	}

}
