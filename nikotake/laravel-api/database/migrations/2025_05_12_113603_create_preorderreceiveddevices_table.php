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
        Schema::create('preorderreceiveddevices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('preorderId');
            $table->integer('preorderDevicesId');
            $table->integer('preorderReceiveId')->default(1);
            $table->integer('qty');
            $table->date('date');
            $table->timestamp('regDate')->useCurrent();
            $table->boolean('isRemoved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preorderreceiveddevices');
    }
};
