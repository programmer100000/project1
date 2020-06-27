<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $typenames = [
            ['type_name' => 'PS4'],
            ['type_name' => 'PS3'],
            ['type_name' => 'PS2'],
            ['type_name' => 'XBOX'],
            ['type_name' => 'XBOX360']
        ];
        DB::table('device_type_names')->insert($typenames);
        $userroles = [
            ['role_title' => 'Admin'],
            ['role_title' => 'User']
        ];
        DB::table('user_roles')->insert($userroles);
        $statuses = [
            ['status_title' => 'Active'],
            ['status_title' => 'isNotActive'],
            ['status_title' => 'Waiting Code']
        ];
        DB::table('status')->insert($statuses);
    }
}
