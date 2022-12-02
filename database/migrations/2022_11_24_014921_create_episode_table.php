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
        Schema::create('episode', function (Blueprint $table) {
            $table->Increments('id');           
            $table->string('episode');           
            $table->string('slug');
            $table->integer('id_anime')->unsigned();
            $table->foreign('id_anime')->references('id')->on('anime')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('episode');
    }
};
