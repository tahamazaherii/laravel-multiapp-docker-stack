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
        Schema::create('preorderdevices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('preorderId');
            $table->integer('deviceId');
            $table->integer('currencyId');
            $table->integer('conditionId');
            $table->integer('qty');
            $table->integer('price');
            $table->boolean('isRemoved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preorderdevices');
    }
};
