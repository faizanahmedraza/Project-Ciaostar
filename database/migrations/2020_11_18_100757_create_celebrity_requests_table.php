<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelebrityRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celebrity_requests', function (Blueprint $table) {
            $table->id();
            $table->string('celebrity_request_name');
            $table->string('celebrity_request_email');
            $table->float('charges',8,2);
            $table->boolean('accept')->nullable()->default(0);
            $table->boolean('decline')->nullable()->default(0);
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
        Schema::dropIfExists('celebrity_requests');
    }
}
