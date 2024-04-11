<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDPartenaire';

    protected $fillable = [
        'IDPartenaire',
        'Denomination',
        'Adresse',
        'Email',
        'Tel',
        'Pays',
        'Numero_compte',
        'montant_du',
        'montant_paye',
        'montant_initial',
        'logo',
    ];
}
