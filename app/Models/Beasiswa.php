<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $table = "beasiswas";
   protected $primaryKey = "id";
    protected $guarded = [];
}
