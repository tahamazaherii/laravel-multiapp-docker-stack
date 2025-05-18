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
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('economicCode')->nullable();
            $table->string('companyNationalId')->nullable();
            $table->integer('provinceId')->nullable();
            $table->integer('cityId')->nullable();
            $table->string('postalCode')->nullable();
            $table->text('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->text('invoiceDescription')->nullable();
            $table->tinyInteger('isRemoved')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
