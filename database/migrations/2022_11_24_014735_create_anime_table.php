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
        Schema::create('anime', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('judul');                        
            $table->string('jumlah_episode');
            $table->string('rating');
            $table->string('rilis');
            $table->string('sinopsis');
            $table->string('gambar');
            $table->string('status');        
            $table->string('studios');          
            $table->string('duration');                       
            $table->integer('id_genre')->unsigned();
            $table->foreign('id_genre')->references('id')->on('genre')->onDelete('cascade');
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('type')->onDelete('cascade');
            $table->integer('id_abjad')->unsigned();
            $table->foreign('id_abjad')->references('id')->on('abjad')->onDelete('cascade');           
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
        Schema::dropIfExists('anime');
    }
};
