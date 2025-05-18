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
        Schema::create('receptionstates', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('receptionId');
            $table->integer('stateId');
            $table->integer('userId');
            $table->dateTime('regDate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receptionstates');
    }
};
