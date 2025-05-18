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
        Schema::create('invoices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('uid');
            $table->integer('personId');
            $table->integer('userId');
            $table->date('date');
            $table->decimal('discount', 10, 0)->default(0);
            $table->tinyInteger('hasVat')->default(0);
            $table->decimal('vatAmount', 10, 0);
            $table->integer('companyId');
            $table->text('description')->nullable();
            $table->integer('receptionId')->nullable();
            $table->integer('type');
            $table->tinyInteger('isPeriodic')->default(0);
            $table->string('period')->nullable();
            $table->decimal('totalAmount', 20, 0);
            $table->decimal('paAmount', 20, 0);
            $table->dateTime('regDate')->useCurrent();
            $table->integer('inserterId');
            $table->integer('topId')->nullable();
            $table->integer('editorId')->nullable();
            $table->boolean('hasEdit')->default(false);
            $table->tinyInteger('isRemoved')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
