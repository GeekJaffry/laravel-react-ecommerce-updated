<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\RolesEnum;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com'
        ])->assignRole(RolesEnum::USER->value);

        User::factory()->create([
            'name' => 'Vendor',
            'email' => 'vendor@example.com'
        ])->assignRole(RolesEnum::VENDOR->value);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com'
        ])->assignRole(RolesEnum::ADMIN->value);
    }
}
