<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
protected $fillable=['codeBanq','codeGuichet','cleRib','solde','devise','client_id'];
}
