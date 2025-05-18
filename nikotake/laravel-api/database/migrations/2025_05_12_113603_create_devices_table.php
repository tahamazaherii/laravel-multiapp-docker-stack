<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->integer('brandId');
            $table->integer('deviceSerieId');
            $table->integer('deviceTypeId');
            $table->double('price');
            $table->integer('currencyId')->default(1);
            $table->boolean('isRemoved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
