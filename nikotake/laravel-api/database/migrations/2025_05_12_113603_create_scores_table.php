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
        Schema::create('scores', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('personId')->nullable();
            $table->integer('userId')->nullable();
            $table->integer('score');
            $table->string('description');
            $table->boolean('isIncrease')->default(true);
            $table->dateTime('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
