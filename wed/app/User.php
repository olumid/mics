<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'referrer_id', 'username', 'email', 'password','active', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /** the accessor to append to model's array form**/
    protected $appends = ['referral_link'];

    /** Get user return referral link**/
    public function getReferralLinkAttribute(){
        return $this->referral_link = route('register', ['ref' => $this->referral_id]);
    }

    /** a user has a referrer
     * */
    public function referrer()
    {
        return $this->belongsTo('App\User', 'referrer_id', 'id');
    }

    public function referrals(){
        return $this->hasMany('App\User', 'referrer_id','id');
    }

    public function role(){
        return $this->hasOne('App\Role','id','role_id');
    }

    public function checkIfUserHasRole($need_role){

        return (strtolower($need_role)==strtolower($this->role->name)) ? true : null;

    }

    public function hasRole($roles){
        if(is_array($roles)) {

            foreach ($roles as $need_role) {
                if ($this->checkIfUserHasRole($need_role))
                {
                    return true;
                }

            }
        }
        else
        {
            return $this->checkIfUserHasRole($roles);
        }


        return false;
    }


}
