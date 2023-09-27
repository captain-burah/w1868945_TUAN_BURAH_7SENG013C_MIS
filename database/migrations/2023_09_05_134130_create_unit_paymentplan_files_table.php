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
        Schema::create('unit_paymentplan_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_paymentplan_id')->nullable(true);
            $table->string('name');
            $table->unsignedBigInteger('percentage');
            $table->unsignedBigInteger('amount');
            $table->timestamps();
            $table->foreign('unit_paymentplan_id')->references('id')->on('unit_paymentplans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_paymentplan_files');
    }
};
