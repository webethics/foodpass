<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [[
            'id'         => 1,
            'title'      => 'Super Admin',
            'slug'      => 'super_admin',
            'created_at' => '2019-04-15 19:13:32',
            'updated_at' => '2019-04-15 19:13:32',
            'deleted_at' => null,
        ], 
		[
			'id'         => 2,
            'title'      => 'User',
            'slug'      => 'user',
            'created_at' => '2019-04-15 19:13:32',
            'updated_at' => '2019-04-15 19:13:32',
            'deleted_at' => null,
		]
		];

        Role::insert($roles);
    }
}
