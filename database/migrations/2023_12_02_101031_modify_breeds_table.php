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
        Schema::table('breeds', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->unsignedBigInteger('type_id');
    
            $table->foreign('type_id')->references('type_id')->on('pet_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('breeds', function (Blueprint $table) {
            //
        });
    }
};
