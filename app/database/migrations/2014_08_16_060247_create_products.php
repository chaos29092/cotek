<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products',function($table){
            $table->increments('id');
            $table->string('name');
            $table->text('target');
            $table->boolean('is_discount')->default(0);
            $table->enum('category',array('Uncategorized','Plotter','Laser','Router'))->default('Uncategorized');
            $table->string('mainphoto');
            $table->text('introduction');
            $table->string('appphoto');
            $table->text('app');
            $table->text('advantage');
            $table->string('adphoto_1');
            $table->string('adphoto_2');
            $table->string('adphoto_3');
            $table->string('adphoto_4');
            $table->text('tocustomer');
            $table->string('footerphoto');
            $table->string('indexphoto');
            $table->string('mrg')->default('<li>app1</li><li style="list-style: none">|</li><li>app2</li><li style="list-style: none">|</li><li>app3</li>');
            $table->string('miniintro');
            $table->string('fnt')->default('Suitable for hospital, beauty salons, clinics,etc...');
            $table->string('style');
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
        Schema::drop('products');
	}

}
