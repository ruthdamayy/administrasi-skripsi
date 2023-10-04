<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();

        \DB::table('users')->insert([
            [
                'username' => 'mahasiswa1',
                'email' => 'mahasiswa1@gmail.com',
                'status' => 'mahasiswa',
                'password' => bcrypt('mahasiswa123')
            ],
            [
                'username' => 'admin1',
                'email' => 'admin1@gmail.com',
                'status' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'username' => 'dosen1',
                'email' => 'dosen1@gmail.com',
                'status' => 'dosen',
                'password' => bcrypt('dosen123')
            ],
        ]);
    }
}
