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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_location');
            $table->string('delivery_location');
            $table->string('zip_code')->nullable();
            // $table->string('weight')->nullable();
            // $table->string('dimension')->nullable();
            $table->longText('delivery_details')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longText('message')->nullable();
            $table->enum('status', ['pending', 'in_progress', 'approved', 'rejected', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
