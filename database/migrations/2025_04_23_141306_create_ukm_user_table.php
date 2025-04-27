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
        Schema::create('ukm_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->nullable(true)
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedBigInteger('ukm_id')->nullable();
            $table->foreign('ukm_id')->nullable(true)
                ->references('id')
                ->on('ukm')
                ->onDelete('cascade');
            $table->boolean('has_voted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukm_user');
    }
};
