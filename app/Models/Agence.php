<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agence extends Model
{
    //
    use HasFactory;
    protected $fillable = ['nom','ville','adresse'];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
