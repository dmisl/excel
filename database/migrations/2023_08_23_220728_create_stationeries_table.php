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
        Schema::create('stationeries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('product_name')->nullable();
            $table->integer('admin_a1')->nullable();
            $table->integer('admin_o1')->nullable();
            $table->integer('nurse_a1')->nullable();
            $table->integer('nurse_o1')->nullable();
            $table->integer('admin_a2')->nullable();
            $table->integer('admin_o2')->nullable();
            $table->integer('nurse_a2')->nullable();
            $table->integer('nurse_o2')->nullable();
            $table->integer('admin_a3')->nullable();
            $table->integer('admin_o3')->nullable();
            $table->integer('nurse_a3')->nullable();
            $table->integer('nurse_o3')->nullable();
            $table->integer('admin_a4')->nullable();
            $table->integer('admin_o4')->nullable();
            $table->integer('nurse_a4')->nullable();
            $table->integer('nurse_o4')->nullable();
            $table->integer('admin_a5')->nullable();
            $table->integer('admin_o5')->nullable();
            $table->integer('nurse_a5')->nullable();
            $table->integer('nurse_o5')->nullable();
            $table->integer('admin_a6')->nullable();
            $table->integer('admin_o6')->nullable();
            $table->integer('admin_a7')->nullable();
            $table->integer('admin_o7')->nullable();
            $table->integer('admin_a8')->nullable();
            $table->integer('admin_o8')->nullable();
            $table->integer('admin_a9')->nullable();
            $table->integer('admin_o9')->nullable();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stationeries');
    }
};
