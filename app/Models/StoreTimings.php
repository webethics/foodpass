<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreTimings extends Model
{
	use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'mon_start',
		'mon_end',
		'tue_start',
		'tue_end',
		'wed_start',
		'wed_end',
		'thu_start',
		'thu_end',
		'fri_start',
		'fri_end',
		'sat_start',
		'sat_end',
		'sun_start',
		'sun_end'
    ];

    public function users() {
		return $this->HasMany(User::class);
	}
	
	public static function checktodaystatus($user_id){
		
		$status = 0;
		$t=date('d-m-Y');
		$today = date("D",strtotime($t));
		$time=time();
		$current_time = (date("h:i A",$time));
		$getrest = StoreTimings::where('user_id',$user_id)->first();
		if(isset($getrest) && !empty($getrest)){
			if($today == "Mon"){
				$start_time = $getrest->mon_start;
				$end_time = $getrest->mon_end;
			}elseif($today == "Tue"){
				$start_time = $getrest->tue_start;
				$end_time = $getrest->tue_end;
			}elseif($today == "Wed"){
				$start_time = $getrest->wed_start;
				$end_time = $getrest->wed_end;
			}elseif($today == "Thu"){
				$start_time = $getrest->thu_start;
				$end_time = $getrest->thu_end;
			}elseif($today == "Fri"){
				$start_time = $getrest->fri_start;
				$end_time = $getrest->fri_end;
			}elseif($today == "Sat"){
				$start_time = $getrest->sat_start;
				$end_time = $getrest->sat_end;
			}elseif($today == "Sun"){
				$start_time = $getrest->sun_start;
				$end_time = $getrest->sun_end;
			}
			// echo date_default_timezone_get();
			// echo "<br>";
			// echo $start_time;
			// echo "<br>";
			// echo $end_time;
			// echo "<br>";
			// echo $current_time;
			// die;
			if(strtotime($start_time) < strtotime($current_time) && strtotime($current_time) < strtotime($end_time)){
				$status = 1;
			}
		}
		return $status;
	}
    
}
