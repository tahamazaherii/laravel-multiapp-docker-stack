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
        Schema::create('stock', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('typeId');
            $table->integer('warehouseId');
            $table->integer('qty');
            $table->tinyInteger('isIncrease');
            $table->integer('personId')->nullable();
            $table->string('invoice')->nullable();
            $table->string('reason');
            $table->text('description')->nullable();
            $table->date('date')->nullable();
            $table->dateTime('regDate')->useCurrent();
            $table->integer('inserterId');
            $table->integer('editorId')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
