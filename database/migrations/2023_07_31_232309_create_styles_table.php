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
            $table->string('style_name');
            $table->unsignedBigInteger('rarity_id');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('weapon_attribute_id')->nullable();
            $table->unsignedBigInteger('element_id')->nullable();
            $table->unsignedBigInteger('passive_1')->nullable();
            $table->unsignedBigInteger('passive_2')->nullable();
            $table->unsignedBigInteger('passive_3')->nullable();
            $table->boolean('generated')->nullable()->default(0);
            $table->timestamps();

            // 外部キー制約の追加
            $table->foreign('rarity_id')->references('id')->on('rarities');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('weapon_attribute_id')->references('id')->on('weapon_attributes');
            $table->foreign('element_id')->references('id')->on('elements');
            $table->foreign('passive_1')->references('id')->on('passives1');
            $table->foreign('passive_2')->references('id')->on('passives2');
            $table->foreign('passive_3')->references('id')->on('passives3');
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
