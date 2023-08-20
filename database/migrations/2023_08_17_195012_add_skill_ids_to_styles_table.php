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
        Schema::table('styles', function (Blueprint $table) {
            $table->unsignedBigInteger('skill_id')->nullable()->after('element_id');
            $table->unsignedBigInteger('exclusive_skill_id')->nullable()->after('skill_id');

            $table->foreign('skill_id')->references('id')->on('skills');
            $table->foreign('exclusive_skill_id')->references('id')->on('skills');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('styles', function (Blueprint $table) {
            //
        });
    }
};
