<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota_Model extends Model
{
    protected $table="table_anggota";
    protected $primaryKey="id";
    public $timestamps= false;
}
