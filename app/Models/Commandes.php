<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;

    protected $table = 'comandes';

    protected $primaryKey = 'id_cmd';

    protected $fillable = [
        'nom_cl',
        'telephone_cl',
        'id_lv',
        'id_pd'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'nom_cl', 'nom_cl');
    }

    public function livraison()
    {
        return $this->belongsTo(Livraison::class, 'id_lv', 'id_lv');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_pd', 'id_pd');
    }
}
