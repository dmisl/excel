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
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('goods')->nullable();
            $table->text('street1')->nullable();
            $table->text('street2')->nullable();
            $table->text('street3')->nullable();
            $table->text('street4')->nullable();
            $table->text('street5')->nullable();
            $table->text('street6')->nullable();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
