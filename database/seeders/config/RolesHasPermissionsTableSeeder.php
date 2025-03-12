<?php

namespace Database\Seeders\Config;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesHasPermissionsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('role_has_permissions')->truncate();

        /* DB::table('role_has_permissions')
            ->insert(array(
            	array('permission_id' => '16', 'role_id' => '3'),
            )); */
    }
}
