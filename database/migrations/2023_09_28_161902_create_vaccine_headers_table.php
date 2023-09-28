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
        Schema::create('vaccine_headers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('balance1')->nullable();
            $table->text('used1')->nullable();
            $table->text('adults1')->nullable();
            $table->text('children1')->nullable();
            $table->text('balance2')->nullable();
            $table->text('used2')->nullable();
            $table->text('adults2')->nullable();
            $table->text('children2')->nullable();
            $table->text('balance3')->nullable();
            $table->text('used3')->nullable();
            $table->text('adults3')->nullable();
            $table->text('children3')->nullable();
            $table->text('balance4')->nullable();
            $table->text('used4')->nullable();
            $table->text('adults4')->nullable();
            $table->text('children4')->nullable();
            $table->text('balance5')->nullable();
            $table->text('used5')->nullable();
            $table->text('adults5')->nullable();
            $table->text('children5')->nullable();
            $table->text('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccine_headers');
    }
};
