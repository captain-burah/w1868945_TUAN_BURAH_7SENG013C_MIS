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
        Schema::create('clientele_documents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->unsignedBigInteger('unit_id')->nullable(true);
            $table->unsignedBigInteger('client_id')->nullable(true);
            $table->string('filename')->nullable(true);
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clienteles')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('clienteles')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientele_documents');
    }
};
