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
            $table->string('skill_name'); // スキル名
            $table->unsignedBigInteger('style_id'); // スタイルの外部キー
            $table->unsignedBigInteger('weapon_attribute_id'); // 武器属性の外部キー
            $table->unsignedBigInteger('element_id'); // 属性の外部キー
            $table->unsignedInteger('sp_consumption'); // 消費SP
            $table->text('description'); // 効果の説明
            $table->timestamps();

            // スタイル、武器属性、属性に外部キーを設定
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
