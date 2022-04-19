<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Comment;
use App\Models\Pesanan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Abdul Paralon',
            'email' => 'abdulparalon@email.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Fikry Saputra',
            'email' => 'fikrysaputra@email.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Aini',
            'email' => 'Aini@email.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Aliza',
            'email' => 'aliza@email.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Sinta',
            'email' => 'sinta@email.com',
            'password' => bcrypt('12345')
        ]);

        Comment::create([
            'name' => 'Abdul Paralon',
            'comments' => 'Gunung Papandayan ini terkenal akan berbagai Flora dan Faunanya diantarannya ada Pohon Suagi (Vaccinium valium), Edelweis (Anaphalis javanica), Puspa (Schima walichii), dan juga Faunnyanya seperti Babi Hutan ( Sus vitatus ), Trenggiling (Manis javanicus), Kijang (Muntiacus muntjak), Lutung (Trachypitecus auratus).'
        ]);

    }
}
