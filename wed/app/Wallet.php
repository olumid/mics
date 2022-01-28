<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = 'wallets';
    
    protected $fillable = ['type','passphrase'];

    protected $primaryKey = 'id';

    public $timestamps = true;

}
