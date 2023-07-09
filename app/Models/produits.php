<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $primaryKey = 'Nom_pd';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'Nom_pd',
        'Quantite_pd',
        'PrixU_pd',
        'Photo_pd'
    ];
}
