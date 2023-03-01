<?php

namespace App\Models;
use Illuminate\Findation\Auth\User as Model;

class tbl_komcek extends Model{
    protected $connection = 'rmy_projek';
    protected $table = "tbl_komcek";
    protected $guarded = [];
    public $timestamps = false;
    public $inscremnting = false;
}
?>