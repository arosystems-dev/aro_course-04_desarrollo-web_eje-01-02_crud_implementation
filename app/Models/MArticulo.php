<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MArticulo extends Model
{
    protected $table = 'articulo';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
