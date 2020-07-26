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
            ['role_title' => 'User'],
            ['role_title' => 'None']
        ];
        DB::table('user_roles')->insert($userroles);
        $statuses = [
            ['status_title' => 'Active'],
            ['status_title' => 'isNotActive'],
            ['status_title' => 'Waiting Code']
        ];
        DB::table('status')->insert($statuses);
        $user = [
            'mobile' => '09xxxxxxxxx',
            'role_id' => 3,
            'confirm_code' => '3928',
            'status_id' => 2
        ];
        DB::table('users')->insert($user);
        $plans = [
            [
                'time' => 3 ,
                'name' => 'free',
                'price' => 0
            ],
            [
                'time' => 30 ,
                'name' => 'bronze',
                'price' => 30000
            ],
            [
                'time' => 90 ,
                'name' => 'silver',
                'price' => 180000
            ],
            [
                'time' => 180 ,
                'name' => 'gold',
                'price' => 360000
            ]
        ];
    }
}
