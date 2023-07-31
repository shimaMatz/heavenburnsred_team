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
            $table->id(); // キャラクターID (プライマリーキー)
            $table->string('name'); // キャラクター名
            $table->unsignedBigInteger('unit_id'); // 所属部隊のID (外部キー)
            $table->string('seraphim_code'); // セラフィムコード
            $table->string('seraph'); // セラフ
            $table->string('first_person'); // 一人称
            $table->date('birthday'); // 誕生日
            $table->string('height'); // 身長
            $table->string('birthplace'); // 出身地
            $table->string('voice_actor'); // 声優
            $table->text('character_description')->nullable(); // キャラクター解説（複数行可能）
            $table->timestamps(); // 作成日時と更新日時
            // 外部キー制約を追加
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
