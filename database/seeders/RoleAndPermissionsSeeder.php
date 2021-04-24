<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionsSeeder extends Seeder
{
    /**
     * Run Seeder
     * @return void
     */

     public function run()
     {
         //Reset Cached Roles and Permissions for fresh seeding
         app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

         //Create the various permissions

         //Product Permissions
         Permission::create(['name' => 'view_product']);
         Permission::create(['name' => 'edit_product']);
         Permission::create(['name' => 'delete_product']);
         Permission::create(['name' => 'create_product']);
         

         //Category Permissions
         Permission::create(['name' => 'view_category']);
         Permission::create(['name' => 'edit_category']);
         Permission::create(['name' => 'delete_category']);
         Permission::create(['name' => 'create_category']);

         //User Permissions
         Permission::create(['name' => 'view_user']);
         Permission::create(['name' => 'edit_user']);
         Permission::create(['name' => 'delete_user']);
         Permission::create(['name' => 'create_user']);

         //Warehouse Permissions
         Permission::create(['name' => 'view_warehouse']);
         Permission::create(['name' => 'edit_warehouse']);
         Permission::create(['name' => 'delete_warehouse']);
         Permission::create(['name' => 'create_warehouse']);

         //Locations Permissions
         Permission::create(['name' => 'view_location']);
         Permission::create(['name' => 'edit_location']);
         Permission::create(['name' => 'delete_location']);
         Permission::create(['name' => 'create_location']);

         //Sales Permissions
         Permission::create(['name' => 'view_sale']);
         Permission::create(['name' => 'edit_sale']);
         Permission::create(['name' => 'delete_sale']);
         Permission::create(['name'=> 'create_sale']);

         //Delivery Permissions
         Permission::create(['name' => 'view_delivery']);
         Permission::create(['name' => 'edit_delivery']);
         Permission::create(['name' => 'delete_delivery']);
         Permission::create(['name' => 'create_delivery']);
         Permission::create(['name' => 'approve_delivery']);

         //Finance Permissions
         Permission::create(['name' => 'view_finance']);



         //Create Roles

         //Staff roles
            Role::create(['name' => 'staff'])->givePermissionTo(['view_product', 'view_category', 'view_user', 'view_warehouse', 'view_location', 'view_sale', 'create_sale', 'view_delivery', 'create_delivery']);

        //Manager roles
            Role::create(['name' => 'manager'])->givePermissionTo(['view_product', 'view_category', 'view_user', 'view_warehouse', 'view_location', 'view_sale', 'create_sale', 'view_delivery', 'create_delivery', 'approve_delivery', 'view_finance']);
        
        //Admin roles
            Role::create(['name' => 'admin'])->givePermissionTo(['view_product', 'edit_product', 'delete_product', 'create_product', 'view_category', 'edit_category', 'delete_category', 'create_category', 'view_user', 'edit_user', 'delete_user', 'create_user', 'view_warehouse', 'edit_warehouse', 'delete_warehouse', 'create_warehouse', 'view_location', 'edit_location', 'delete_location', 'create_location', 'view_sale', 'edit_sale', 'delete_sale', 'create_sale', 'view_delivery', 'edit_delivery', 'delete_delivery', 'create_delivery', 'approve_delivery', 'view_finance']);
     }
}