<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekam_medisModel extends Model
{
    use HasFactory;
    
    protected $table ="rekam_medis";
    protected $primaryKey ="id";
}
