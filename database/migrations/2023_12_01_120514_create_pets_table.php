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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('breed_id');
            $table->enum('sex', ['Male', 'Female']);
            $table->enum('weight', ['5-10 lbs', '10-20 lbs', '20-50 lbs', 'More than 50 lbs']);
            $table->enum('age', ['Less than 6 months', '6 months to 5 years', '5 to 10 years', 'More than 10 years']);
            $table->text('about')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

            $table->foreign('breed_id')->references('id')->on('breeds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
