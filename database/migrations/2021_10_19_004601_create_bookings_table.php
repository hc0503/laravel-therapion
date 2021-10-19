<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('psychologist_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->string('ip')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('town');
            $table->string('service_provider')->nullable();
            $table->string('username')->nullable();
            $table->string('phone')->nullable();
            $table->string('suggest_time')->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
