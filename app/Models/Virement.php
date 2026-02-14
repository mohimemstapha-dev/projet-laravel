<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Virement extends Model
{

    protected $fillable = ['motif','montant','client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
