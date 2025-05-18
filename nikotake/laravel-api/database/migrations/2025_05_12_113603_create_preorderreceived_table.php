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
        Schema::create('preorderreceived', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('preorderId');
            $table->integer('warehouseId');
            $table->date('date');
            $table->timestamp('regDate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preorderreceived');
    }
};
