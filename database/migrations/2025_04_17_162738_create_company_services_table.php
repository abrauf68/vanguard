<?php

use App\Models\ServiceType;
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
        Schema::create('company_services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ServiceType::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('meta_title');
            $table->string('meta_description');
            $table->longText('details');
            $table->string('meta_image')->nullable();
            $table->string('main_image')->nullable();
            $table->enum('is_active', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_services');
    }
};
