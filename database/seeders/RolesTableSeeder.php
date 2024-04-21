<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'Super Admin', 'slug' => 'super-admin' ],
            ['name' => 'Producer', 'slug' => 'producer' ],
            ['name' => 'Hall Manager', 'slug' => 'hall-manager' ],
            ['name' => 'Hall Operator', 'slug' => 'hall-operator' ],
            ['name' => 'User', 'slug' => 'user' ],
        ]);
    }
}
