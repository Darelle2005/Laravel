<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cni extends Model
{
    use HasFactory;
    protected $table='cni';
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
