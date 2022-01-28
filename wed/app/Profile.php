<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'profiles';
    
    protected $fillable = ['active', 'user_id', 'fullname', 'phone','bitcoin_balance','etherium_balance',
                            'litecoin_balance','tron_balance','xrp_balance','earnings','investments',
                            'withdrawals','bitcoin_address','etherium_address','litecoin_address',
                            'tron_address','xrp_address','usd_balance', 'verify_investor'];

    protected $primaryKey = 'profile_id';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
