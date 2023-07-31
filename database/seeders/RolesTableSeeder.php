<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'brand-list',
            'brand-create',
            'brand-edit',
            'brand-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'order-list',
            'order-create',
            'order-edit',
            'order-delete',
            'transaction-list',
            'transaction-create',
            'transaction-edit',
            'transaction-delete',
            'tax-list',
            'tax-create',
            'tax-edit',
            'tax-delete',
            'delivery-charge-list',
            'delivery-charge-create',
            'delivery-charge-edit',
            'delivery-charge-delete',
            'currency-list',
            'currency-create',
            'currency-edit',
            'currency-delete',
            'coupon-list',
            'coupon-create',
            'coupon-edit',
            'coupon-delete',
            'slider-list',
            'slider-create',
            'slider-edit',
            'slider-delete',
            'banner-list',
            'banner-create',
            'banner-edit',
            'banner-delete',
            'advertise-list',
            'advertise-create',
            'advertise-edit',
            'advertise-delete',
            'blog-list',
            'blog-create',
            'blog-edit',
            'blog-delete',
            'crm-list',
            'crm-create',
            'crm-edit',
            'crm-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'cms-list',
            'cms-create',
            'cms-edit',
            'cms-delete',
            'menu-list',
            'menu-create',
            'menu-edit',
            'menu-delete',
            'payment-gateway-list',
            'payment-gateway-create',
            'payment-gateway-edit',
            'payment-gateway-delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $role_create = Role::create(['name' => 'Super Admin']);
        $pers = Permission::all();
        foreach($pers as $p) {
            DB::table('role_has_permissions')->insert(['permission_id' => $p->id, 'role_id' => $role_create->id]);
        }
        DB::table('model_has_roles')->insert([
            'role_id' => $role_create->id,
            'model_type' => 'App\Models\User',
            'model_id' => 1
        ]);
    }
}
