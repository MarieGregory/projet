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
        Schema::table('service__reserves', function (Blueprint $table) {
            $table->foreignId('reservations_id')->references('id')->on('reservations');
            $table->foreignId('services_id')->references('id')->on('services');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_reserves', function (Blueprint $table) {
            //
        });
    }
};
