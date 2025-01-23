<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userRole = Role::create(['name' => RolesEnum::USER->value]);
        $adminRole = Role::create(['name' => RolesEnum::ADMIN->value]);
        $vendorRole = Role::create(['name' => RolesEnum::VENDOR->value]);

        $approveVendorsPermission = Permission::create(['name' => PermissionsEnum::ApproveVendors->value]);
        $buyProductsPermission = Permission::create(['name' => PermissionsEnum::BuyProducts->value]);
        $createProductsPermission = Permission::create(['name' => PermissionsEnum::CreateProducts->value]);

        $adminRole->givePermissionTo($approveVendorsPermission,$buyProductsPermission,$createProductsPermission);
        $vendorRole->givePermissionTo($createProductsPermission,$buyProductsPermission);
        $userRole->givePermissionTo($buyProductsPermission);
    }
}
