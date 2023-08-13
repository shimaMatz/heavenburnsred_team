<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->string('effect1')->nullable(); // 効果１
            $table->string('effect2')->nullable(); // 効果２
            $table->string('effect3')->nullable(); // 効果３
            $table->boolean('exclusive')->default(false); // 専用フラグ（デフォルトはfalse）
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn('effect1');
            $table->dropColumn('effect2');
            $table->dropColumn('effect3');
            $table->dropColumn('exclusive');
        });
    }
}
