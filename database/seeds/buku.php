<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku_Model::insert([
            [
            'judul'=>'sendiri',
            'penerbit'=>'Gramedia',
            'pengarang'=>'bajigur',
            'foto'=> '-',
            'created_at'=> date('Y-m-d H:i:s')
        ],
        [
            'judul'=>'berdua',
            'penerbit'=>'Gramedia',
            'pengarang'=>'budiman',
            'foto'=> '-',
            'created_at'=> date('Y-m-d H:i:s')
        ],
        [
            'judul'=>'dia aku',
            'penerbit'=>'Gramedia',
            'pengarang'=>'bagaskara',
            'foto'=> '-',
            'created_at'=> date('Y-m-d H:i:s')
        ],
        [
            'judul'=>'dilankku',
            'penerbit'=>'Gramedia',
            'pengarang'=>'bissaaja',
            'foto'=> '-',
            'created_at'=> date('Y-m-d H:i:s')
        ],
        [
            'judul'=>'Merbabu',
            'penerbit'=>'Gramedia',
            'pengarang'=>'alwyspositif',
            'foto'=> '-',
            'created_at'=> date('Y-m-d H:i:s')
        ]
        ]);
    }
}

