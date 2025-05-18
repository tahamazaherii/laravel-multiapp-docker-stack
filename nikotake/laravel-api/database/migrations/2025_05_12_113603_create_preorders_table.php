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
        Schema::create('preorders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sendType');
            $table->integer('packageId');
            $table->integer('packageCount');
            $table->integer('carrierId');
            $table->integer('sellerId');
            $table->integer('transportType');
            $table->integer('priceTransport')->default(1);
            $table->integer('transportCurrencyId')->default(1);
            $table->integer('currencyId')->default(1);
            $table->integer('isDeliver');
            $table->integer('inserterId');
            $table->date('date');
            $table->dateTime('regDate')->useCurrent();
            $table->integer('isRemoved')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preorders');
    }
};
