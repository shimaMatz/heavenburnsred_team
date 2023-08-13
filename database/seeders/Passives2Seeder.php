<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Passives2;

class Passives2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Passives2::create(['name' => '先駆', 'description' => 'ターン開始時、前衛にいると後衛のSP+1']);
        Passives2::create(['name' => '勇気', 'description' => '行動開始時に前衛＆DP50％以上のとき、自身のスキル攻撃力+15％']);
        Passives2::create(['name' => '勇猛', 'description' => '行動開始時に前衛＆DP100％以上のとき、自身のスキル攻撃力+30％']);
        Passives2::create(['name' => '友愛', 'description' => 'ターン開始時、前衛にいると後衛のDP+10%']);
        Passives2::create(['name' => '吉報', 'description' => 'ターン開始時、前衛にいると確率で自身のSP+3']);
        Passives2::create(['name' => '咆吼', 'description' => 'バトル開始時、前衛にいるとオーバードライブゲージ+10％']);
        Passives2::create(['name' => '堅忍', 'description' => '敵行動開始時に前衛＆DP破損状態で、自身の防御力+50％']);
        Passives2::create(['name' => '好機', 'description' => 'ターン開始時、前衛＆SPが3以下のとき、自身のSP+1']);
        Passives2::create(['name' => '専心', 'description' => 'オーバードライブ開始時 前衛にいると自身のスキル攻撃力+20%']);
        Passives2::create(['name' => '忍耐', 'description' => '敵行動開始時に前衛＆DP50％以下のとき、自身の防御力+25％']);
        Passives2::create(['name' => '機敏', 'description' => 'バトル開始時、前衛にいると自身のSP+2']);
        Passives2::create(['name' => '気合', 'description' => 'ターン開始時、前衛にいると、DP50%以下のとき自身のDP+15%']);
        Passives2::create(['name' => '決心', 'description' => '行動開始時に前衛＆SP15以上のとき、自身のスキル攻撃力+30％']);
        Passives2::create(['name' => '決意', 'description' => '行動開始時に前衛＆SP10以上のとき、自身のスキル攻撃力+15％']);
        Passives2::create(['name' => '洞察', 'description' => 'バトル開始時、前衛にいると自身のクリティカル率+20％(3ターン)']);
        Passives2::create(['name' => '烈風', 'description' => 'バトル開始時 前衛にいると自身のスキル攻撃力+30%(1ターン)']);
        Passives2::create(['name' => '疾風', 'description' => 'バトル開始時、前衛にいるとスキル攻撃力+15％(3ターン)']);
        Passives2::create(['name' => '福運', 'description' => 'ターン開始時、前衛にいると確率でオーバードライブゲージ+10％']);
        Passives2::create(['name' => '警衛', 'description' => 'バトル開始時、前衛にいると自身の防御力+25％(3ターン)']);
        Passives2::create(['name' => '鉄壁', 'description' => '敵行動開始時、前衛にいるとトークン1つにつき自身の防御力+7％']);
        Passives2::create(['name' => '閃光', 'description' => 'ターン開始時に前衛にいると自身のSP＋1']);
    }
}
