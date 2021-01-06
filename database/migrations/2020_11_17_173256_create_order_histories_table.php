<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_histories', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('celebrity_email')->nullable();
            $table->string('who');
            $table->string('occasion');
            $table->string('gift');
            $table->text('ex_birth');
            $table->string('show_ciaostar');
            $table->string('to',55);
            $table->string('from',55);
            $table->string('phone_number');
            $table->date('order_placed')->nullable();
            $table->date('order_complete')->nullable();
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
        Schema::dropIfExists('order_histories');
    }
}
