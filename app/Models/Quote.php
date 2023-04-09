<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quote extends Model
{
    protected $table = 'quotes';
    protected $primaryKey = 'id';
    public $incrementing = 'true';
}

function getOne(){
    return DB::select('select * from quotes');
}
