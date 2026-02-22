<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agence;
use App\Models\Virement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Facture;
class Client extends Model
{
    //
    use HasFactory;
    protected $fillable = ['nom','prenom','age','solde','agence_id'];
    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function virements()
    {
        return $this->hasMany(Virement::class);
    }
    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
}
