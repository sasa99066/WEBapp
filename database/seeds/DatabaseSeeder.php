<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert("insert into items (name,price,info) value (?,?,?)",[
            "スポーツ女神", 100000,"すべてのスポーツが可能！！！"
        ]);
        DB::insert("insert into items (name,price,info) value (?,?,?)",[
            "女子力女神", 200000,"すべての弁当料理可能！！！"
        ]);
        DB::insert("insert into items (name,price,info) value (?,?,?)",[
            "ミュージシャン女神", 250000,"すべての楽器演奏可能！！！"
        ]);
        DB::insert("insert into items (name,price,info) value (?,?,?)",[
            "モデル女神", 300000,"すべてのポーズ可能！！！"
        ]);
        DB::insert("insert into items (name,price,info) value (?,?,?)",[
            "宗教女神", 1000000,"すべての賛美可能！！！"
        ]);

    }

}
