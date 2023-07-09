<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livraisons extends Model
{
    use HasFactory;
    protected $table = 'livraisons';
    protected $primaryKey = 'Id_lv';

    protected $fillable = [
        'DatePro_lv',
        'Ville_lv',
        'Quartier_lv'
    ];

}
