<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          [
            'nama' => 'Dode',
            'email' => 'dode@gmail.com',
            'password' => bcrypt('123456'),
            'alamat' => 'Batuyang',
            'role' => 'admin',
            'no_telp' => '0891239812931',
            'created_at' => NOW(),
            'updated_at' => NOW()
          ],
          [
            'nama' => 'Admin Ganteng',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'alamat' => 'Batubulan',
            'role' => 'admin',
            'no_telp' => '0817237123123',
            'created_at' => NOW(),
            'updated_at' => NOW()
          ],
          [
            'nama' => 'User Ganteng',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456'),
            'alamat' => 'Blahbatuh',
            'role' => 'user',
            'no_telp' => '08979123123',
            'created_at' => NOW(),
            'updated_at' => NOW()
          ],
          [
            'nama' => 'User Cantiks',
            'email' => 'usercantik@gmail.com',
            'password' => bcrypt('123456'),
            'alamat' => 'Blahbatuh 2',
            'role' => 'user',
            'no_telp' => '089791231231',
            'created_at' => NOW(),
            'updated_at' => NOW()
          ]
        ]);
    }
}
