<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota_Model::insert([
            [
            'nama_anggota'=> 'budiman',
            'alamat'=>'masi sendiri',
            'telp'=>'08978675646'
        ],
        [
            'nama_anggota'=>'sabarin',
            'alamat'=>'sigle',
            'telp'=>'087675646'
        ],
        [
            'nama_anggota'=>'saya',
            'alamat'=>'disini',
            'telp'=>'0837675646'
        ],
        [
            'nama_anggota'=>'aku',
            'alamat'=>'jauh',
            'telp'=>'08128687646'
        ],
        [
            'nama_anggota'=>'dia',
            'alamat'=>'bahagia disana',
            'telp'=>'08123569846'
        ]
        ]);
    }
}
