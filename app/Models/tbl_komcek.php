<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Model;

class tbl_komcek extends Model{
    // protected $connection = 'rmy_projek'; // kalau koneksinya cuman 1 gausa pake ini za
    protected $table = "tbl_komcek";
    protected $guarded = [];
    public $timestamps = false;
    public $inscremnting = false;
}
?>