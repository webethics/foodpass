<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StorePostcode extends Model
{
	use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
		'post_code',
        'delivery_cost',
        'delivery_range',
		'order_amount'
    ];

    public function users() {
		return $this->HasMany(User::class);
	}
}
