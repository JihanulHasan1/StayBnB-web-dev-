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
        if (Schema::hasTable('posts')) return;
        Schema::create('posts', function (Blueprint $table) {

            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->string('phone_no');
            $table->string('email', 20);

            $table->string('tittle');
            $table->text('description')->nullable();

            $table->string('area');
            $table->string('block');
            $table->string('Address');

            $table->string('restriction');
            $table->integer('price');
            $table->string('advance');
            $table->string('payment_date');
            $table->string('post_date');
            $table->string('user_id');
           // $table->foreign('user_id')->references('user_id')->on('users');

            
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
