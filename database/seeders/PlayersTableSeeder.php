<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['侍太郎'];
        $age = [25];
        $position = ['ファースト'];
        $is_southpaw = [1];
        $is_lefty = [0];
        $mailaddress = ['samurai@sam.com'];
        $password = ['555333'];

        Player::create([
            'name' => $name[0],
            'age' => $age[0],
            'position' => $position[0],
            'is_southpaw' => $is_southpaw[0],
            'is_lefty' => $is_lefty[0],
            'mailaddress' => $mailaddress[0],
            'password' => $password[0]
        ]);
    }
}
