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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_id'); // 所属部隊の外部キー
            $table->string('seraphim_code'); // セラフィムコード
            $table->string('seraph'); // セラフ
            $table->string('first_person'); // 一人称
            $table->date('birthday'); // 誕生日
            $table->string('height'); // 身長
            $table->string('birthplace'); // 出身地
            $table->string('voice_actor'); // 声優
            $table->text('character_description')->nullable(); // キャラ解説（複数行可）
            $table->timestamps();

            // 外部キー制約：unit_idカラムはunitsテーブルのidカラムを参照する
            $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
