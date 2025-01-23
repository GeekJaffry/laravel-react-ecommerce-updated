<?php

namespace App\Enums;

enum PermissionsEnum: string
{
    //
    case ApproveVendors = 'Approve Vendors';
    case BuyProducts = 'Buy Products';
    case CreateProducts = 'Create Products';
    case ManageUsers = 'Manage Users';
}
