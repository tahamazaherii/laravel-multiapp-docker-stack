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
        Schema::create('receptions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('userId')->nullable();
            $table->integer('personId');
            $table->integer('deviceId');
            $table->string('serial');
            $table->integer('invoiceId')->nullable();
            $table->text('issue')->nullable();
            $table->integer('deliveryType');
            $table->text('description')->nullable();
            $table->binary('defects');
            $table->binary('accessories');
            $table->date('receptionDate')->useCurrent();
            $table->integer('inserterId')->default(0);
            $table->integer('estimatedPrice')->nullable();
            $table->date('regDate')->useCurrent();
            $table->boolean('isRemoved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receptions');
    }
};
