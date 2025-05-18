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
        Schema::create('invoiceitems', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('invoiceId');
            $table->integer('itemType');
            $table->integer('itemTypeId');
            $table->decimal('price', 20, 0);
            $table->integer('qty');
            $table->tinyInteger('isRemoved')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoiceitems');
    }
};
