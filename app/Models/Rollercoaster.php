<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rollercoaster extends Model
{
    use HasFactory;
    protected $fillable = ['Maker', 'Lengte','Hoogte'];
}
