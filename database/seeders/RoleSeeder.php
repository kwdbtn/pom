<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Role::create(['name' => 'SuperAdmin']);
        Role::create(['name' => 'Operator']);
        Role::create(['name' => 'Dispatch']);
        Role::create(['name' => 'Planning']);
    }
}
