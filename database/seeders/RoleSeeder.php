<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

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
