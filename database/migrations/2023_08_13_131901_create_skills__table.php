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
            $table->integer('sp_cost');
            $table->unsignedBigInteger('target_id'); // 対象
            $table->unsignedBigInteger('skill_attribute_id'); // スキル属性
            $table->unsignedBigInteger('element_id'); // 属性
            $table->string('effect_1');
            $table->string('effect_2');
            $table->text('description'); // 説明カラムをtextデータ型に変更
            $table->boolean('exclusive')->default(false); // 専用フラグ（デフォルトはfalse）
            $table->timestamps();

            $table->foreign('target_id')->references('id')->on('targets');
            $table->foreign('skill_attribute_id')->references('id')->on('skill_attributes');
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
