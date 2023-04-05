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
        Schema::create('maintenance__histories', function (Blueprint $table) {
            $table->id();
            $table->date('date_maintenance')->notNullValue();
            $table->string('description')->notNullValue();
            $table->unsignedBigInteger('id_asset')->notNullValue();
            $table->unsignedBigInteger('id_status')->nullable();
            $table->foreign('id_asset')->references('id')->on('assets')->onDelete('cascade');
            $table->foreign('id_status')->references('id')->on('statuses')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance__histories');
    }
};
