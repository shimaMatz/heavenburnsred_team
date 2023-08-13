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
        Schema::create('styles', function (Blueprint $table) {
            $table->id();
            $table->string('style_name'); // スタイル名
            $table->unsignedBigInteger('rarity_id'); // レアリティの外部キー
            $table->unsignedBigInteger('role_id'); // 役割の外部キー
            $table->unsignedBigInteger('weapon_attribute_id'); // 武器属性の外部キー
            $table->unsignedBigInteger('element_id'); // 属性の外部キー
            $table->timestamps();

            // レアリティ、役割、武器属性、属性に外部キーを設定
            $table->foreign('rarity_id')->references('id')->on('rarities');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('weapon_attribute_id')->references('id')->on('weapon_attributes');
            $table->foreign('element_id')->references('id')->on('elements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('styles');
    }
};
