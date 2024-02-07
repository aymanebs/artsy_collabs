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
        Schema::create('art_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('budget');
            $table->text('description');
            $table->string('category');
            $table->integer('state')->default('0');
            $table->foreignId('partner_id')->constrained('partners')->cascadeOnDelete()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art_projects');
    }
};
