<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'moderator', 'member', 'operator'];

        foreach ($roles as $role) {
            if (! Role::StrictByName($role)->first()) {
                Role::create([
                    'name' => $role,
                ]);
            }
        }
    }
}
