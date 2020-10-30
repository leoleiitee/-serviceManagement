<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicebasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicebases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('state',2)->nullable();
            $table->string('district')->nullable();
            $table->string('street')->nullable();
            $table->integer('number')->nullable();
            $table->integer('zipCode')->nullable();
            $table->string('contactName')->nullable();
            $table->boolean('active');
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
        Schema::dropIfExists('servicebases');
    }
}
