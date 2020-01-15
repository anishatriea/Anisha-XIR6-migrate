<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku_Model extends Model
{
    protected $table="table_buku";
    protected $primaryKey="id";
    public $timestamps= false;
}
