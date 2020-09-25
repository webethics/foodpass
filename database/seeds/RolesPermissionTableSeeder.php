<?php 
use App\Models\RolesPermission;
use Illuminate\Database\Seeder;

class RolesPermissionTableSeeder extends Seeder
{
    public function run()
    {
		$RolesPermission = [
		['id'         => 770, 'role_id'=>1, 'permission_id'=>17, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 771, 'role_id'=>1, 'permission_id'=>12, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 772, 'role_id'=>1, 'permission_id'=>13, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 773, 'role_id'=>1, 'permission_id'=>14, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 774, 'role_id'=>1, 'permission_id'=>16, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 775, 'role_id'=>1, 'permission_id'=>22, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 776, 'role_id'=>1, 'permission_id'=>33, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 777, 'role_id'=>1, 'permission_id'=>9, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 778, 'role_id'=>1, 'permission_id'=>10, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 779, 'role_id'=>1, 'permission_id'=>11, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 780, 'role_id'=>1, 'permission_id'=>19, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 781, 'role_id'=>1, 'permission_id'=>20, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 782, 'role_id'=>1, 'permission_id'=>21, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 783, 'role_id'=>1, 'permission_id'=>24, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 784, 'role_id'=>1, 'permission_id'=>25, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 785, 'role_id'=>1, 'permission_id'=>26, 'created'=>'2020-09-04 15:26:54'],		
		['id'         => 790, 'role_id'=>2, 'permission_id'=>24, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 791, 'role_id'=>2, 'permission_id'=>25, 'created'=>'2020-09-04 15:26:54'],
		['id'         => 792, 'role_id'=>1, 'permission_id'=>26, 'created'=>'2020-09-04 15:26:54']];
		

        RolesPermission::insert($RolesPermission);
    }
}
?>