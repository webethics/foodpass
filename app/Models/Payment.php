<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
	use SoftDeletes;
	public $timestamps = true;
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
		'customer_id',
        'user_id',
		'payment_id',
		'subscription_id',
		'amount',
		'status',
		'cancel_status',
    ];
    
	public function users() {
		return $this->HasMany(User::class);
	}
}
