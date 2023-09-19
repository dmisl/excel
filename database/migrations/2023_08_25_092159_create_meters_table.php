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
        Schema::create('meters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('data')->nullable();
            $table->text('month1')->nullable();
            $table->text('month2')->nullable();
            $table->text('month3')->nullable();
            $table->text('month4')->nullable();
            $table->text('month5')->nullable();
            $table->text('month6')->nullable();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meters');
    }
};
