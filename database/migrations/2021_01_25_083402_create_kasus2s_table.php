<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasus2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasus2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rws_id');
            $table->foreign('rws_id')
            ->references('id')->on('rws')->onDelete('cascade');
            $table->string('positif');
            $table->integer('negatif');
            $table->integer('sembuh');
            $table->integer('meninggal');
            $table->date('tanggal');
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
        Schema::dropIfExists('kasus2s');
    }
}
