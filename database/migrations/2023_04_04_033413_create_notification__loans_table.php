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
        Schema::create('notification__loans', function (Blueprint $table) {
            $table->id();
            $table->date('date_notification')->notNullValue();
            $table->unsignedBigInteger('id_loan')->notNullValue();
            $table->unsignedBigInteger('id_status')->nullable();
            $table->foreign('id_loan')->references('id')->on('loans')->onDelete('cascade');
            $table->foreign('id_status')->references('id')->on('statuses')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification__loans');
    }
};
