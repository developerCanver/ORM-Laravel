<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();
            //relaciones poliformicas
            //morphs creaar dos campos : ID y la  Entidad
            //debe de terminar en tamle - commentable
            $table->morphs('commentable');

            $table->bigInteger('tag_id')->unsigned();
            $table->timestamps();

            $table->foreign('tag_id')->references('id')->on('tags')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taggables');
    }
}
