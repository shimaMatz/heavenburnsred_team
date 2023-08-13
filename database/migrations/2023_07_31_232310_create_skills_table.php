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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('skill_name');
            $table->unsignedBigInteger('style_id');
            $table->unsignedBigInteger('weapon_attribute_id');
            $table->unsignedBigInteger('element_id');
            $table->integer('sp_cost');
            $table->string('description');
            $table->timestamps();

            // 外部キー制約の追加
            $table->foreign('style_id')->references('id')->on('styles');
            $table->foreign('weapon_attribute_id')->references('id')->on('weapon_attributes');
            $table->foreign('element_id')->references('id')->on('elements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
