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
        Schema::create('mobility__histories', function (Blueprint $table) {
            $table->id();
            $table->date('date_mobility')->notNullValue();
            $table->unsignedBigInteger('id_asset')->notNullValue();
            $table->unsignedBigInteger('From_location_id')->nullable();
            $table->unsignedBigInteger('To_location_id')->nullable();
            $table->unsignedBigInteger('id_status')->nullable();
            $table->foreign('id_asset')->references('id')->on('assets')->onDelete('cascade');
            $table->foreign('From_location_id')->references('id')->on('locations')->onDelete('set null');
            $table->foreign('To_location_id')->references('id')->on('locations')->onDelete('set null');
            $table->foreign('id_status')->references('id')->on('statuses')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobility__histories');
    }
};
