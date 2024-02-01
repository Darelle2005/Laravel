<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class licence extends Model
{
    use HasFactory;
    protected $table='licence';
    protected $fillable=[
        'type',
        'name',
        'surname',
        'reference',
        'localisation',
        'contact',
        'img',
        
    ];
}
