<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Passives3;

class Passives3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Passives3::truncate();
        Passives3::create(['name' => 'くじけぬ心', 'description' => 'ターン開始時、前衛＆ブレイク状態のとき、自身のDPを復活(1回)']);
        Passives3::create(['name' => '侵食', 'description' => '自身がかけた防御力ダウンの効果量+25%']);
        Passives3::create(['name' => '光の強威', 'description' => '行動開始時に前衛にいると自身の光属性のスキル攻撃力+25%']);
        Passives3::create(['name' => '光の意志', 'description' => '行動開始時に前衛にいると、前衛の光属性のスキル攻撃力+12%']);
        Passives3::create(['name' => '凍れる陣', 'description' => 'バトル開始時、前衛にいると氷属性強化フィールド(弱)を展開']);
        Passives3::create(['name' => '勇猛', 'description' => '行動開始時に前衛＆DP100％以上のとき、自身のスキル攻撃力+30％']);
        Passives3::create(['name' => '博愛の心', 'description' => 'ターン開始時、前衛にいると前衛のDP+10％']);
        Passives3::create(['name' => '危険な火遊び', 'description' => '行動開始時に前衛かつDP破損状態で自身の火属性のスキル攻撃力+50%']);
        Passives3::create(['name' => '厄災', 'description' => 'バトル開始時、前衛にいると敵を厄状態(2ターン)']);
        Passives3::create(['name' => '向上心', 'description' => 'ターン開始時、前衛にいるとオーバードライブゲージ+5％']);
        Passives3::create(['name' => '堅守', 'description' => 'ターン開始時、前衛にいると自身の防御力+30%']);
        Passives3::create(['name' => '壮烈', 'description' => '行動開始時に前衛＆DP80%以上のとき、自身のスキル攻撃力+20%']);
        Passives3::create(['name' => '威嚇の叫び', 'description' => 'バトル開始時、前衛にいると高確率で敵をスタン']);
        Passives3::create(['name' => '専心', 'description' => 'オーバードライブ開始時 前衛にいると自身のスキル攻撃力+20%']);
        Passives3::create(['name' => '弱化', 'description' => '行動開始時に前衛にいると敵の防御力-10%']);
        Passives3::create(['name' => '怒涛', 'description' => '行動開始時前衛にいると、自身のクリティカルダメージ+30%']);
        Passives3::create(['name' => '慈愛の心', 'description' => 'ターン開始時、前衛にいると味方全体のDP+7％']);
        Passives3::create(['name' => '打の威圧', 'description' => '行動開始時に前衛にいると敵の打属性の防御力‐10％']);
        Passives3::create(['name' => '打の意志', 'description' => '行動開始時に前衛にいると、前衛の打属性のスキル攻撃力+10%']);
        Passives3::create(['name' => '技巧', 'description' => '行動開始時、前衛にいると自身のクリティカル率+30％']);
        Passives3::create(['name' => '斬の威圧', 'description' => '行動開始時に前衛にいると敵の斬属性の防御力‐10％']);
        Passives3::create(['name' => '斬の意志', 'description' => '行動開始時に前衛にいると、前衛の斬属性のスキル攻撃力+10%']);
        Passives3::create(['name' => '斬の躍動', 'description' => '行動開始時に前衛にいると、前衛の斬属性クリティカルダメージ+8%']);
        Passives3::create(['name' => '星空', 'description' => '行動開始時前衛にいるとチームのクリティカル率+10%']);
        Passives3::create(['name' => '栄光の陣', 'description' => 'バトル開始時、前衛にいると光属性強化フィールド(弱)を展開']);
        Passives3::create(['name' => '気転', 'description' => '自身がかけたスキル攻撃力アップの効果量+25%']);
        Passives3::create(['name' => '氷の威圧', 'description' => '行動開始時に前衛にいると敵の氷属性の防御力‐12％']);
        Passives3::create(['name' => '氷の強威', 'description' => '行動開始時に前衛にいると自身の氷属性のスキル攻撃力+25%']);
        Passives3::create(['name' => '氷の意志', 'description' => '行動開始時に前衛にいると、前衛の氷属性のスキル攻撃力+12%']);
        Passives3::create(['name' => '決心', 'description' => '行動開始時に前衛＆SP15以上のとき、自身のスキル攻撃力+30％']);
        Passives3::create(['name' => '洗練', 'description' => 'バトル開始時 前衛にいると自身のトークン+5']);
        Passives3::create(['name' => '火の威圧', 'description' => '行動開始時に前衛にいると敵の火属性の防御力‐12％']);
        Passives3::create(['name' => '火の強威', 'description' => '行動開始時に前衛にいると自身の火属性のスキル攻撃力+25%']);
        Passives3::create(['name' => '火の意志', 'description' => '行動開始時に前衛にいると、前衛の火属性のスキル攻撃力+12%']);
        Passives3::create(['name' => '灼熱の陣', 'description' => 'バトル開始時、前衛にいると火属性強化フィールド(弱)を展開']);
        Passives3::create(['name' => '狂乱の型', 'description' => 'バトル開始時、前衛にいると自身の連撃数+3（1回）']);
        Passives3::create(['name' => '突の威圧', 'description' => '行動開始時に前衛にいると敵の突属性の防御力‐10％']);
        Passives3::create(['name' => '突の意志', 'description' => '行動開始時に前衛にいると、前衛の突属性のスキル攻撃力+10%']);
        Passives3::create(['name' => '英雄の凱歌', 'description' => '行動開始時、前衛にいるとチームのスキル攻撃力+10％']);
        Passives3::create(['name' => '護りの真髄', 'description' => '敵から攻撃を受けるとトークンを1上昇']);
        Passives3::create(['name' => '野生の勘', 'description' => '行動開始時、前衛にいると確率でスキル攻撃力+30％']);
        Passives3::create(['name' => '鋭気', 'description' => '行動開始時に前衛＆敵が挑発または注目状態のとき、自身のスキル攻撃力+30%']);
        Passives3::create(['name' => '闇の威圧', 'description' => '行動開始時に前衛にいると敵の闇属性の防御力‐12％']);
        Passives3::create(['name' => '闇の強威', 'description' => '行動開始時に前衛にいると自身の闇属性のスキル攻撃力+25%']);
        Passives3::create(['name' => '闇の意志', 'description' => '行動開始時に前衛にいると、前衛の闇属性のスキル攻撃力+12%']);
        Passives3::create(['name' => '闇夜の陣', 'description' => 'バトル開始時、前衛にいると闇属性強化フィールド(弱)を展開']);
        Passives3::create(['name' => '陽動作戦', 'description' => '行動開始時に前衛＆DP30%以下のとき、前衛のスキル攻撃力+30%']);
        Passives3::create(['name' => '雷の威圧', 'description' => '行動開始時に前衛にいると敵の雷属性の防御力‐12％']);
        Passives3::create(['name' => '雷の強威', 'description' => '行動開始時に前衛にいると自身の雷属性のスキル攻撃力+25%']);
        Passives3::create(['name' => '雷の意志', 'description' => '行動開始時に前衛にいると、前衛の雷属性のスキル攻撃力+12%']);
        Passives3::create(['name' => '雷の采配', 'description' => '行動開始時に前衛＆DP80%以上とき、前衛の雷属性のスキル攻撃力+18%']);
        Passives3::create(['name' => '雷鳴の陣', 'description' => 'バトル開始時、前衛にいると雷属性強化フィールド(弱)を展開']);
        Passives3::create(['name' => '高揚', 'description' => '行動開始時、前衛にいるとトークン1つにつき攻撃力+5%']);
        Passives3::create(['name' => '鮮烈', 'description' => '行動開始時に前衛にいると自身のスキル攻撃時の破壊率上昇値+30%']);
    }
}
