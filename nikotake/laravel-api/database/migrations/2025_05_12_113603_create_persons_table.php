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
        Schema::create('persons', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('company')->nullable();
            $table->string('mobile', 11)->nullable()->unique('mobile');
            $table->string('ssn')->nullable()->unique('ssn');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('economicCode')->nullable()->unique('economiccode');
            $table->string('companyNationalId', 11)->nullable()->unique('companynationalid');
            $table->integer('provinceId')->nullable();
            $table->integer('cityId')->nullable();
            $table->integer('customerGroupId')->default(1);
            $table->string('phone')->nullable();
            $table->string('postalCode', 10)->nullable();
            $table->dateTime('registerDate')->useCurrent();
            $table->boolean('verified')->default(false);
            $table->boolean('fullyUpdated')->default(false);
            $table->boolean('isRemoved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
