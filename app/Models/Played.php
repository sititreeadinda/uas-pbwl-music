<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    use HasFactory;

    protected $table = "tb_played";
    protected $primaryKey = 'played_id';
    protected $fillable = ['played_name'];
}
