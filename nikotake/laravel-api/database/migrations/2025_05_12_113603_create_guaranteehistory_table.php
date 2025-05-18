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
        Schema::create('guaranteehistory', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('guaranteeId');
            $table->integer('activityId');
            $table->text('description')->nullable();
            $table->integer('userId');
            $table->boolean('isRemoved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guaranteehistory');
    }
};
