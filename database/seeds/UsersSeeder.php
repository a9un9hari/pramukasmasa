<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email'     => 'admin@pramukasmasa.com',
                'password'  => bcrypt('password'),
                'name'      => 'Admin',
                'jabatan'   => 'admin',
                'telp'       => '085639292757',
                'gudep'         => 'SMAN 1 Kota Blitar',
                'alamat_gudep'  => 'Blitar',
                'created_at'=> date('Y-m-d H:i:s')
            ]
        ];
        User::insert($data);
    }
}
