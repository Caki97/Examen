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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

             $table->string('nombre',128)->unique();
             $table->string('slug',128);
             $table->text('cuerpo');
             $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');
             $table->string('file', 128)->nullable();
 
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
        Schema::dropIfExists('posts');
    }
};
