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
        Schema::create('houses', function (Blueprint $table) {
            $table->id('House_Id');
            $table->string('House_Name');
            $table->string('Location');
            $table->string('Address', 100);
            $table->integer('House_No');
            $table->string('Block');
            $table->integer('Road_No');
            $table->char('flat_id');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');

    }
};
