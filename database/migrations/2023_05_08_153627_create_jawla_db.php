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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('iso_code');
            $table->integer('population');
            $table->integer('area');
            $table->string('currency');
            $table->string('language');
            $table->string('flag');
            $table->timestamps();

        });

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();;
            $table->float('longitude');
            $table->float('latitude');
            $table->unsignedBigInteger('country_id');
            $table->string('thumbnail')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->timestamps();


        });

        Schema::table('countries', function (Blueprint $table) {
            $table->unsignedBigInteger('capital_id')->nullable();
            $table->foreign('capital_id')->references('id')->on('cities')->onDelete('set null');
        });

        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('longitude');
            $table->float('latitude');
            $table->text('images')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('opening_hours')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('category')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('places');
    }
};
