<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        //table pivote, debe llevar el nombre de manera singular de las dos tablas que se relacionan
        //articles & tags = article & tag = article_tag

        Schema::create('publicacion_tag', function(Blueprint $table){
            $table->increments('id');
            $table->integer('publicacion_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('publicacion_id')->references('id')->on('publicaciones');
            $table->foreign('tag_id')->references('id')->on('tags');

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
        Schema::dropIfExists('tags');
    }
}
