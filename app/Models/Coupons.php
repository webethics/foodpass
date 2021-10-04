<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupons extends Model
{
	use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'product_name',
		'coupon_start_time',
		'coupon_end_time',
		'coupon_price',
		'delivery_range',
		'discount_code',
		'copuon_order_price',
		'coupon_pickup_delivery',
		'delivery_cost',
		'discount_1',
		'new_price_1',
		'coupon_type',
		'free_product',
		'details',
		'coupon_image',
		'coupon_filters',
		'coupon_display',
		'free_coupon_type',
		'coupon_code',
		'is_varified',
		'is_store_verified',
		'is_notify',
    ];

    public function users() {
		return $this->HasMany(User::class);
	}
	
	
	public static function getcouopon($user_id){
		$currentTime = strtotime("now");
		$coupons = Coupons::where('user_id',$user_id)->where('is_varified',1)->where('is_store_verified',1)->where('coupons.coupon_end_time','>=', $currentTime)->get();
		$coupon_Count = Coupons::where('user_id',$user_id)->where('is_varified',1)->where('is_store_verified',1)->where('coupons.coupon_end_time','>=', $currentTime)->count();
		$array = array("coupon" => $coupons,"coupon_count" => $coupon_Count);
		return $array;
	}
	
	
    
}
