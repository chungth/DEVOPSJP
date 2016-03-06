<?php

use Illuminate\Database\Seeder;

class ProfileMockData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->truncate();

        DB::table('profiles')->insert(
            [
                [
                    'family_name' => '長岡',
                    'given_name' => '外史',
                    'family_name_furigana' => 'がおか',
                    'given_name_furigana' => 'がいし',
                    'prefecture' => '山口県',
                    'age' => 141,
                    'sex' => '男性',
                    'attribute' => '面白い',
                    'best_technique' => '自称世界一のプロペラ鬚で陸軍だけど飛んできます軍人',
                    'recommendation_ranking' => 5
                ],
                [
                    'family_name' => '板垣',
                    'given_name' => '退助',
                    'family_name_furigana' => 'いたがき',
                    'given_name_furigana' => 'たいすけ',
                    'prefecture' => '高知県',
                    'age' => 179,
                    'sex' => '男性',
                    'attribute' => 'すごい',
                    'best_technique' => 'ニセ札防止の逆V字髭首相',
                    'recommendation_ranking' => 3
                ],
                [
                    'family_name' => 'クーデンホーフ',
                    'given_name' => '光子',
                    'family_name_furigana' => 'ぐーでんほーふ',
                    'given_name_furigana' => 'みつこ',
                    'prefecture' => '東京都',
                    'age' => 142,
                    'sex' => '女性',
                    'attribute' => 'すごい',
                    'best_technique' => '日本で初めて国際結婚してみたらパン・ヨーロッパの母と呼ばれるようにまでなりました',
                    'recommendation_ranking' => 2
                ],

            ]
        );
    }
}
