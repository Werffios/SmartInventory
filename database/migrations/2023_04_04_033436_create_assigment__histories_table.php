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
        Schema::create('assigment__histories', function (Blueprint $table) {
            $table->id();
            $table->date('date_assigment')->notNullValue();
            $table->date('date_return')->notNullValue();
            $table->unsignedBigInteger('id_asset')->nullable();
            $table->unsignedBigInteger('id_status')->nullable();
            $table->unsignedBigInteger('id_location')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_asset')->references('id')->on('assets')->onDelete('set null');
            $table->foreign('id_status')->references('id')->on('statuses')->onDelete('set null');
            $table->foreign('id_location')->references('id')->on('locations')->onDelete('set null');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigment__histories');
    }
};
