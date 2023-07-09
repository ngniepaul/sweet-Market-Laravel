<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients_table extends Model
{

    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = ['Nom_cl', 'Telephone_cl'];
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'Nom_cl',
        'Email_cl',
        'Telephone_cl',
        'Login_cl',
        'Password_cl'
    ];
}
