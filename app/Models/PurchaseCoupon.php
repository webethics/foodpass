<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseCoupon extends Model
{
	use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'customer_id',
        'coupon_id',
		'store_id',
		'order_number',
		'date',
		'qr_image',
		'confirm_status',
    ];

    public function store() {
		return $this->hasOne('App\Models\User', 'id','store_id');
	}
	
	public function mycoupons() {
		 return $this->hasOne('App\Models\Coupons', 'id','coupon_id');
    }
	
	public function mycouponssortbyname() {
		 return $this->hasOne('App\Models\Coupons', 'id','coupon_id')->orderBy('product_name');
    }
	
	public function customer() {
		return $this->hasOne('App\Models\User', 'id','customer_id');
	}
    
	
}
