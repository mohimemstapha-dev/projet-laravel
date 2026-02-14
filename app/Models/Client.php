<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agence;
use App\Models\Virement;

class Client extends Model
{
    //
    protected $fillable = ['nom','prenom','age','solde','agence_id'];
    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function virements()
    {
        return $this->hasMany(Virement::class);
    }
}
