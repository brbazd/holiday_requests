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
        Schema::create('holiday_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee')->constrained('users');
            $table->text('reason');
            $table->enum('status',['pending','rejected','approved']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holiday_requests');
    }
};
