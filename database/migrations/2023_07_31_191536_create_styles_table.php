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
            $table->string('name'); // スタイル名
            $table->foreignId('rarity_id')->constrained('rarities'); // レアリティテーブルへの外部キー
            $table->foreignId('role_id')->constrained('roles'); // 役割テーブルへの外部キー
            $table->foreignId('weapon_attribute_id')->constrained('weapon_attributes'); // 武器属性テーブルへの外部キー
            $table->foreignId('element_id')->constrained('elements'); // 属性テーブルへの外部キー
            $table->timestamps();
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
