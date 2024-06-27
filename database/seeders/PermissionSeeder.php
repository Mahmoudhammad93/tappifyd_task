<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Table;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dashboard
        $table = Table::create([
            'name'=>'dashboard',
            'display_name_ar'=>'لوحة التحكم',
            'display_name_en'=>'Dashboard',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'browse_dashboard',
            'display_name_ar'=>'تصفح لوحة التحكم',
            'display_name_en'=>'Dashboard',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'browse_all_products',
            'display_name_ar'=>'كل المنتجات',
            'display_name_en'=>'All Products',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'browse_all_categories',
            'display_name_ar'=>'كل الاقسام',
            'display_name_en'=>'All Categories',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'browse_all_users',
            'display_name_ar'=>'كل المستخدمين',
            'display_name_en'=>'All Users',
        ]);

        // Admins
        $table = Table::create([
            'name'=>'admins',
            'display_name_ar'=>'المشرفين',
            'display_name_en'=>'Admins',
        ]);
        Permission::create([
            'table_id'=>$table->id,
            'name'=>'browse_admins',
            'display_name_ar'=>'المشرفين',
            'display_name_en'=>'Admins',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'view_admins',
            'display_name_ar'=>'المشرفين',
            'display_name_en'=>'Admins View',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'create_admins',
            'display_name_ar'=>'المشرفين',
            'display_name_en'=>'Admins Create',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'edit_admins',
            'display_name_ar'=>'المشرفين',
            'display_name_en'=>'Admins Edit',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'delete_admins',
            'display_name_ar'=>'المشرفين',
            'display_name_en'=>'Admins Delete',
        ]);

        // Roles

        $table = Table::create([
            'name'=>'roles',
            'display_name_ar'=>'المشرفين',
            'display_name_en'=>'Roles',
        ]);
        Permission::create([
            'table_id'=>$table->id,
            'name'=>'browse_roles',
            'display_name_ar'=>'الادوار',
            'display_name_en'=>'Roles',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'view_roles',
            'display_name_ar'=>'الادوار',
            'display_name_en'=>'Roles View',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'create_roles',
            'display_name_ar'=>'الادوار',
            'display_name_en'=>'Roles Create',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'edit_roles',
            'display_name_ar'=>'الادوار',
            'display_name_en'=>'Roles Edit',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'delete_roles',
            'display_name_ar'=>'الادوار',
            'display_name_en'=>'Roles Delete',
        ]);

        // Categories
        $table = Table::create([
            'name'=>'categories',
            'display_name_ar'=>'المشرفين',
            'display_name_en'=>'Categories',
        ]);
        Permission::create([
            'table_id'=>$table->id,
            'name'=>'browse_categories',
            'display_name_ar'=>'الاقسام',
            'display_name_en'=>'Categories',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'view_categories',
            'display_name_ar'=>'الاقسام',
            'display_name_en'=>'Categories View',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'create_categories',
            'display_name_ar'=>'الاقسام',
            'display_name_en'=>'Categories Create',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'edit_categories',
            'display_name_ar'=>'الاقسام',
            'display_name_en'=>'Categories Edit',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'delete_categories',
            'display_name_ar'=>'الاقسام',
            'display_name_en'=>'Categories Delete',
        ]);

        // Products
        $table = Table::create([
            'name'=>'products',
            'display_name_ar'=>'المشرفين',
            'display_name_en'=>'Products',
        ]);
        Permission::create([
            'table_id'=>$table->id,
            'name'=>'browse_products',
            'display_name_ar'=>'المنتجات',
            'display_name_en'=>'Products',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'view_products',
            'display_name_ar'=>'المنتجات',
            'display_name_en'=>'Products View',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'create_products',
            'display_name_ar'=>'المنتجات',
            'display_name_en'=>'Products Create',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'edit_products',
            'display_name_ar'=>'المنتجات',
            'display_name_en'=>'Products Edit',
        ]);

        Permission::create([
            'table_id'=>$table->id,
            'name'=>'delete_products',
            'display_name_ar'=>'المنتجات',
            'display_name_en'=>'Products Delete',
        ]);
        
    }
}
