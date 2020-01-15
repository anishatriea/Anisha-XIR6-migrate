<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Petugas_Model::insert([
            [
            'nama_petugas'=>'suhooo',
            'alamat'=>'jauh disana',
            'telp'=>'0897654332',
            'username'=>'suhooo',
            'password'=>'12345',
            'created_at'=> date('Y-m-d H:i:s')
        ],
        [
            'nama_petugas'=>'jarwooo',
            'alamat'=>'jauhaja',
            'telp'=>'081475789949',
            'username'=>'jarwooo',
            'password'=>'12345',
            'created_at'=> date('Y-m-d H:i:s')
        ],
        [
            'nama_petugas'=>'Auliaaa',
            'alamat'=>'deketin aja',
            'telp'=>'08126489297',
            'username'=>'auliaaa',
            'password'=>'12345',
            'created_at'=> date('Y-m-d H:i:s')
        ],
        [
            'nama_petugas'=>'bastiannn',
            'alamat'=>'jauh ajalah',
            'telp'=>'0897654332',
            'username'=>'bastiannn',
            'password'=>'12345',
            'created_at'=> date('Y-m-d H:i:s')
        ],
        [
            'nama_petugas'=>'yogaiiin',
            'alamat'=>'deket titik',
            'telp'=>'0897654332',
            'username'=>'yogaiiin',
            'password'=>'12345',
            'created_at'=> date('Y-m-d H:i:s')
        ]
        ]);
    }
}
