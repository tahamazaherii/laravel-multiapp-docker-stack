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
        Schema::create('stockdevices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('stockId');
            $table->integer('deviceId');
            $table->integer('typeId')->nullable();
            $table->integer('warehouseId');
            $table->tinyInteger('isIncrease');
            $table->string('serial')->index('serial');
            $table->integer('deviceConditionId');
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockdevices');
    }
};
