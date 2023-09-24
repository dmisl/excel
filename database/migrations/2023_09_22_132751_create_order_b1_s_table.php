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
        Schema::create('order_b1_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('product')->nullable();
            $table->text('m1')->nullable();
            $table->text('m2')->nullable();
            $table->text('s1')->nullable();
            $table->text('s2')->nullable();
            $table->text('l1')->nullable();
            $table->text('l2')->nullable();
            $table->text('h1')->nullable();
            $table->text('h2')->nullable();
            $table->text('o1')->nullable();
            $table->text('o2')->nullable();
            $table->text('t1')->nullable();
            $table->text('t2')->nullable();
            $table->text('aa')->nullable();
            $table->text('be')->nullable();
            $table->text('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_b1_s');
    }
};
