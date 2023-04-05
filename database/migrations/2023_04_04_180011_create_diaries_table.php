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
        Schema::create('diaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mahlzeit');
            $table->date('datum');
            $table->time('uhrzeit')->nullable();
            $table->string('ort')->nullable();
            $table->string('essen');
            $table->string('getraenk')->nullable();
            $table->string('beschwerden')->nullable();
            $table->text('anmerkungen')->nullable();
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
        Schema::dropIfExists('diaries');
    }
};
