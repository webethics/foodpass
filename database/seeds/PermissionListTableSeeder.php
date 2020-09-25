<?php 
use App\Models\PermissionList;
use Illuminate\Database\Seeder;

class PermissionListTableSeeder extends Seeder
{
    public function run()
    {
		$PermissionList = [
		['id'         => 9, 'category_id'=>7, 'name'=>'Email: Listing', 'slug'=>'email_listing'],
		['id'         => 10, 'category_id'=>7, 'name'=>'Email: Edit', 'slug'=>'email_edit'],
		['id'         => 11, 'category_id'=>8, 'name'=>'Config: Listing','slug'=> 'config_listing'],
		['id'         => 12,'category_id'=> 2,'name'=> 'Customer: Listing', 'slug'=>'customer_listing'],
		['id'         => 13, 'category_id'=>2, 'name'=>'Customer: Edit', 'slug'=>'customer_edit'],
		['id'         => 14, 'category_id'=>2, 'name'=>'Customer: Manage','slug'=> 'customer_manage'],
		['id'         => 16, 'category_id'=>2, 'name'=>'Customer Status: Edit','slug'=> 'customer_status_edit'],
		['id'         => 17,'category_id'=> 1, 'name'=>'Dashboard : Listing', 'slug'=>'dashboard_listing'],
		['id'         => 19, 'category_id'=>9, 'name'=>'Roles: Listing','slug'=> 'roles_listing'],
		['id'         => 20, 'category_id'=>9, 'name'=>'Roles: Edit', 'slug'=>'roles_edit'],
		['id'         => 21, 'category_id'=>9, 'name'=>'Roles: Create New','slug'=> 'roles_create'],
		['id'         => 22, 'category_id'=>2, 'name'=>'Customer: Create New', 'slug'=>'customer_create'],
		['id'         => 24, 'category_id'=>10, 'name'=>'Account: Listing', 'slug'=>'account_listing'],
		['id'         => 25, 'category_id'=>10, 'name'=>'Account:Edit', 'slug'=>'account_edit'],
		['id'         => 26, 'category_id'=>10, 'name'=>'Account:Reset Password','slug'=> 'account_reset_password'],
		['id'         => 33, 'category_id'=>2, 'name'=>'Customer: Delete','slug'=> 'customer_delete']];

        PermissionList::insert($PermissionList);
    }
}
?>