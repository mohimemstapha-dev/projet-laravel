<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Agence extends Model
{
    //
    protected $fillable = ['nom','ville','adresse'];
    
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
