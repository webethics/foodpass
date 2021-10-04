<?php

namespace App\Models;

use Carbon\Carbon;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable
{
    use  Notifiable;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'password',
		'address',
		'role_id',
		'status',
		'date_of_birth',
		'age',
		'remember_token',
		'verify_token' ,
		'gender',
		'address',
		'post_code',
		'city',
		'website',
		'instagram',
		'facebook',
		'delivery_cost',
		'order_amount',
		'restaurant_name',
		'admin_verify_status',
		'dilevery_range',
		'menu_file',
		'restaurant_kitchens',
		'customer_id',
		'order_options',
        'affilate_id',
        'is_store_coupons_enabled_from_admin',
    ];

    protected $appends = ['full_name'];

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
	
	
	public function role() {
        return $this->belongsTo(App\Models\Role, 'role_id');
    }
	
	public function coupons() {
		 return $this->hasMany('App\Models\Coupons', 'user_id');
    }
	
	public function verifiedcoupons() {
		 return $this->hasMany('App\Models\Coupons', 'user_id')->where('is_varified',1);
    }
	
	
	
	public function storetimings() {
		 return $this->hasOne('App\Models\StoreTimings', 'user_id');
    }
	
	public function subscription() {
		 return $this->hasOne('App\Models\Payment', 'user_id');
    }
	
	public function storepostcodes() {
		 return $this->hasMany('App\Models\StorePostcode', 'user_id');
    }

    public function paymentoptions() {
        return $this->hasMany('App\Models\PaymentOptions', 'user_id');
   }

    public function tempRequestUser() {
        return $this->hasMany('App\Models\TempRequestUser','user_id');
    }

    public function getFullNameAttribute()
    {
        return ucfirst("{$this->first_name} {$this->last_name}");
    }
   
}
