<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pieces extends Model
{
    use HasFactory;
    protected $table='pieces';
    protected $fillable=[
        'type',
        'name',
        'surname',
        'reference',
        'localisation',
        'contact',
        'image',
        
    ];
    protected $imageDirectory = 'images/pieces/';

    // Mutateur pour le champ image
    public function setImageAttribute($value)
    {
        // Vérifie si une valeur est fournie
        if ($value) {
            // Génère un nom de fichier unique
            $fileName = uniqid() . '.' . $value->getClientOriginalExtension();
            // Déplace le fichier vers le répertoire des images par défaut
            $value->move(public_path($this->imageDirectory), $fileName);
            // Enregistre le chemin d'accès dans la base de données
            $this->attributes['image'] = $this->imageDirectory . $fileName;
        }
    }
}
