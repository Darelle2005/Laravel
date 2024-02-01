<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class others extends Model
{
    use HasFactory;
    protected $table='passport';
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
