<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiqueta_post', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('post_id')->unsigned();
            $table->integer('etiqueta_id')->unsigned();

            $table->timestamps();

             //relaciones
             $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etiqueta_post');
    }
};
