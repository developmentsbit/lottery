<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-28 12:08:51',
                'deleted_at' => NULL,
                'icon' => 'fa fa-home',
                'id' => 1,
                'label_id' => NULL,
                'menu_name_bn' => 'ড্যাশবোর্ড',
                'menu_name_en' => 'Dashboard',
                'order_by' => 1,
                'parent_id' => NULL,
                'route' => 'dashboard',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Dashboard',
                'type' => 3,
                'updated_at' => '2023-10-28 12:08:51',
            ),
            1 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-28 12:20:25',
                'deleted_at' => NULL,
                'icon' => 'fa fa-gears',
                'id' => 2,
                'label_id' => 1,
                'menu_name_bn' => 'মেনু সেটিংস',
                'menu_name_en' => 'Menu Settings',
                'order_by' => 2,
                'parent_id' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'status' => 1,
                'system_name' => 'Menu Settings',
                'type' => 1,
                'updated_at' => '2023-10-28 14:44:36',
            ),
            2 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-28 12:45:30',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 3,
                'label_id' => NULL,
                'menu_name_bn' => 'মেনু স্তর',
                'menu_name_en' => 'Menu Label',
                'order_by' => 1,
                'parent_id' => 2,
                'route' => 'menu_label',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Menu Label',
                'type' => 2,
                'updated_at' => '2023-10-28 12:45:30',
            ),
            3 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-28 12:51:14',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 4,
                'label_id' => NULL,
                'menu_name_bn' => 'মেনু',
                'menu_name_en' => 'Menu',
                'order_by' => 2,
                'parent_id' => 2,
                'route' => 'menu',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Menu',
                'type' => 2,
                'updated_at' => '2023-10-28 12:51:14',
            ),
            4 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-28 13:57:37',
                'deleted_at' => NULL,
                'icon' => 'fa fa-user',
                'id' => 5,
                'label_id' => 2,
                'menu_name_bn' => 'অ্যাডমিন সেটিংস',
                'menu_name_en' => 'Admin Settings',
                'order_by' => 3,
                'parent_id' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'status' => 1,
                'system_name' => 'Admin Settings',
                'type' => 1,
                'updated_at' => '2023-10-28 13:57:37',
            ),
            5 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-28 13:58:11',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 6,
                'label_id' => NULL,
                'menu_name_bn' => 'রোল',
                'menu_name_en' => 'Role',
                'order_by' => 1,
                'parent_id' => 5,
                'route' => 'role',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Role',
                'type' => 2,
                'updated_at' => '2023-10-28 13:58:11',
            ),
            6 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-28 14:09:00',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 7,
                'label_id' => NULL,
                'menu_name_bn' => 'অ্যাডমিন',
                'menu_name_en' => 'Admin',
                'order_by' => 2,
                'parent_id' => 5,
                'route' => 'user',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Admin',
                'type' => 2,
                'updated_at' => '2023-10-28 14:09:00',
            ),
            7 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-28 14:10:55',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 8,
                'label_id' => NULL,
                'menu_name_bn' => 'ব্রাঞ্চ',
                'menu_name_en' => 'Branch',
                'order_by' => 1,
                'parent_id' => 5,
                'route' => 'branch',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Branch',
                'type' => 2,
                'updated_at' => '2023-10-28 14:10:55',
            ),
            8 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-30 23:57:24',
                'deleted_at' => NULL,
                'icon' => 'fa fa-cog',
                'id' => 15,
                'label_id' => 6,
                'menu_name_bn' => 'সফটওয়্যার সেটিংস',
                'menu_name_en' => 'Software Settings',
                'order_by' => 4,
                'parent_id' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'status' => 1,
                'system_name' => 'Software Settings',
                'type' => 1,
                'updated_at' => '2023-10-30 23:57:24',
            ),
            9 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-10-30 23:58:47',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 16,
                'label_id' => NULL,
                'menu_name_bn' => 'সফটওয়্যার তথ্য',
                'menu_name_en' => 'Software Information',
                'order_by' => 1,
                'parent_id' => 15,
                'route' => 'software_info',
                'slug' => 'create',
                'status' => 1,
                'system_name' => 'Software Info',
                'type' => 2,
                'updated_at' => '2023-10-30 23:58:47',
            ),
            10 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-11-01 17:02:46',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 17,
                'label_id' => NULL,
                'menu_name_bn' => 'থিম সেটিংস',
                'menu_name_en' => 'Theme Settings',
                'order_by' => 2,
                'parent_id' => 15,
                'route' => 'user_theme',
                'slug' => 'create',
                'status' => 1,
                'system_name' => 'Theme Settings',
                'type' => 2,
                'updated_at' => '2023-11-01 17:02:46',
            ),
            11 => 
            array (
                'create_by' => 1,
                'created_at' => '2023-11-02 11:14:50',
                'deleted_at' => '2023-11-02',
                'icon' => 'fa fa-users',
                'id' => 18,
                'label_id' => 6,
                'menu_name_bn' => 'টেস্ট মেনু',
                'menu_name_en' => 'Test Menu',
                'order_by' => 3,
                'parent_id' => NULL,
                'route' => 'test_menu',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Test Menu',
                'type' => 3,
                'updated_at' => '2023-11-02 11:18:19',
            ),
        ));
        
        
    }
}