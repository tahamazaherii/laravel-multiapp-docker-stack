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
        Schema::create('guarantee', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('deviceNameId');
            $table->string('serial');
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('ownerId')->nullable();
            $table->integer('userId');
            $table->integer('personId')->nullable();
            $table->string('invoice')->nullable();
            $table->string('govRefCode')->nullable();
            $table->dateTime('registerDate')->useCurrent();
            $table->boolean('isRemoved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guarantee');
    }
};
