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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->notNullValue();
            $table->date('end_date')->nullable();
            $table->string('observation')->nullable();
            $table->unsignedBigInteger('id_asset')->notNullValue();
            $table->unsignedBigInteger('id_person')->notNullValue();
            $table->foreign('id_asset')->references('id')->on('assets')->onDelete('cascade');
            $table->foreign('id_person')->references('id')->on('people')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
