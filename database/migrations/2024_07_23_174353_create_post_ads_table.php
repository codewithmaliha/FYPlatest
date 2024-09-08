<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('image');
            $table->string('serviceName');
            $table->string('duration');
            $table->string('location');
            $table->string('price');
            $table->string('type');
            $table->string('contact');
            $table->longText('description');
            $table->string('fuelType')->nullable();
            $table->string('modelYear')->nullable();
            $table->string('powerSource')->nullable();
            $table->string('capacity')->nullable();
            $table->string('loadCapacity')->nullable();
            $table->string('goodsSupported')->nullable();
            $table->string('specialFeatures')->nullable();
            $table->string('workersAvailable')->nullable();
            $table->string('experienceSkills')->nullable();
            $table->string('certifications')->nullable();
            $table->string('booked_until');
            $table->integer('status')->default('1');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_ads');
    }
};
