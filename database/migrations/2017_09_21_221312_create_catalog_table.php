<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_pled');
            $table->integer('price');
            $table->string('image_url');
            $table->string('pled_type');
            $table->boolean('in_stock')->default(true);
            $table->timestamps();
            $table->unique(['name_pled', 'image_url']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog');
    }
}
