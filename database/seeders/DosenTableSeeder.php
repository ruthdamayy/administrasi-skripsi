<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('dosens')->truncate();

        \DB::table('dosens')->insert([
            [
                'nip' => '197901082012121002',
                'nama' => 'Baihaqi Siregar',
                'email' => 'baihaqi@gmail.com',
                'jenis_kelamin' => 'laki-laki',
                'foto' => 'image.jpg',
                'id_user' => 3
            ],
        ]);
    }
}
