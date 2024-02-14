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
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');

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
                'created_at' => '2024-02-03 17:38:27',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 19,
                'label_id' => NULL,
                'menu_name_bn' => 'পেমেন্ট মেথড',
                'menu_name_en' => 'Payment Method',
                'order_by' => 3,
                'parent_id' => 15,
                'route' => 'payment_method',
                'slug' => 'create',
                'status' => 1,
                'system_name' => 'Payment Method',
                'type' => 2,
                'updated_at' => '2024-02-03 17:38:27',
            ),
            12 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-04 21:09:16',
                'deleted_at' => NULL,
                'icon' => 'fa fa-dollar',
                'id' => 20,
                'label_id' => 7,
                'menu_name_bn' => 'ক্যাশ ইন',
                'menu_name_en' => 'Cash In',
                'order_by' => 1,
                'parent_id' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'status' => 1,
                'system_name' => 'Cash In',
                'type' => 1,
                'updated_at' => '2024-02-04 21:09:16',
            ),
            13 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-04 21:10:30',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 21,
                'label_id' => NULL,
                'menu_name_bn' => 'ক্যাশ ইন রিকোয়েস্ট',
                'menu_name_en' => 'Cash In Request',
                'order_by' => 1,
                'parent_id' => 20,
                'route' => 'cash_in_request',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Cash In Request',
                'type' => 2,
                'updated_at' => '2024-02-04 21:10:30',
            ),
            14 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-05 16:49:23',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 22,
                'label_id' => NULL,
                'menu_name_bn' => 'গেইম সেটআপ',
                'menu_name_en' => 'Game Setup',
                'order_by' => 4,
                'parent_id' => 15,
                'route' => 'game_setup',
                'slug' => 'create',
                'status' => 1,
                'system_name' => 'Game Setup',
                'type' => 2,
                'updated_at' => '2024-02-09 01:11:45',
            ),
            15 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-09 01:18:49',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 26,
                'label_id' => NULL,
                'menu_name_bn' => 'ছবি তথ্য',
                'menu_name_en' => 'Photo Info',
                'order_by' => 5,
                'parent_id' => 15,
                'route' => 'photo_info',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Photo Info',
                'type' => 2,
                'updated_at' => '2024-02-09 01:18:49',
            ),
            16 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-09 10:22:39',
                'deleted_at' => NULL,
                'icon' => 'fa fa-box',
                'id' => 30,
                'label_id' => 7,
                'menu_name_bn' => 'লটারি তথ্য',
                'menu_name_en' => 'Lottery Info',
                'order_by' => 10,
                'parent_id' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'status' => 1,
                'system_name' => 'Lottery Info',
                'type' => 1,
                'updated_at' => '2024-02-09 10:22:39',
            ),
            17 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-09 10:24:02',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 31,
                'label_id' => NULL,
                'menu_name_bn' => 'লটারি রিকোয়েষ্ট',
                'menu_name_en' => 'Lottery Request',
                'order_by' => 1,
                'parent_id' => 30,
                'route' => 'lottery_info',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Lottery Request',
                'type' => 2,
                'updated_at' => '2024-02-09 10:24:02',
            ),
            18 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-10 10:51:04',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 32,
                'label_id' => NULL,
                'menu_name_bn' => 'স্বাগত বার্তা',
                'menu_name_en' => 'Welcome Message',
                'order_by' => 7,
                'parent_id' => 15,
                'route' => 'welcome_message',
                'slug' => 'create',
                'status' => 1,
                'system_name' => 'Welcome Message',
                'type' => 2,
                'updated_at' => '2024-02-10 10:51:04',
            ),
            19 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-10 11:36:40',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 33,
                'label_id' => NULL,
                'menu_name_bn' => 'ইউটিউব লাইভ',
                'menu_name_en' => 'YouTube Live',
                'order_by' => 1,
                'parent_id' => 15,
                'route' => 'youtube_live',
                'slug' => 'create',
                'status' => 1,
                'system_name' => 'YouTube Live',
                'type' => 2,
                'updated_at' => '2024-02-10 11:36:40',
            ),
            20 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-10 15:29:21',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 34,
                'label_id' => NULL,
                'menu_name_bn' => 'ইউজার ড্যাশবোর্ডের ব্যানার',
                'menu_name_en' => 'Banner For User Dashboard',
                'order_by' => 8,
                'parent_id' => 15,
                'route' => 'banner',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'User Banner',
                'type' => 2,
                'updated_at' => '2024-02-10 15:29:21',
            ),
            21 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-12 00:04:56',
                'deleted_at' => NULL,
                'icon' => 'fa fa-rocket',
                'id' => 35,
                'label_id' => 7,
                'menu_name_bn' => 'ক্যাশ আউট',
                'menu_name_en' => 'Cash Out',
                'order_by' => 6,
                'parent_id' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'status' => 1,
                'system_name' => 'Cash Out',
                'type' => 1,
                'updated_at' => '2024-02-12 00:04:56',
            ),
            22 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-12 00:05:57',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 36,
                'label_id' => NULL,
                'menu_name_bn' => 'ক্যাশ আউট রিকোয়েস্ট',
                'menu_name_en' => 'Cash Out Request',
                'order_by' => 1,
                'parent_id' => 35,
                'route' => 'cash_out_request',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Cash Out Requst',
                'type' => 2,
                'updated_at' => '2024-02-12 00:05:57',
            ),
            23 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-13 01:55:00',
                'deleted_at' => NULL,
                'icon' => 'fa fa-gears',
                'id' => 40,
                'label_id' => 6,
                'menu_name_bn' => 'ওয়েবসাইট তথ্য',
                'menu_name_en' => 'Website Content',
                'order_by' => 12,
                'parent_id' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'status' => 1,
                'system_name' => 'Website Content',
                'type' => 1,
                'updated_at' => '2024-02-13 01:55:00',
            ),
            24 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-13 02:00:46',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 43,
                'label_id' => NULL,
                'menu_name_bn' => 'আমাদের সম্পর্কে',
                'menu_name_en' => 'About Us',
                'order_by' => 1,
                'parent_id' => 40,
                'route' => 'about_us',
                'slug' => 'create',
                'status' => 1,
                'system_name' => 'About Us',
                'type' => 2,
                'updated_at' => '2024-02-13 02:00:46',
            ),
            25 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-13 02:01:41',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 44,
                'label_id' => NULL,
                'menu_name_bn' => 'লক্ষ ও উদ্দেশ্য',
                'menu_name_en' => 'Vision Mission',
                'order_by' => 2,
                'parent_id' => 40,
                'route' => 'mission_vision',
                'slug' => 'create',
                'status' => 1,
                'system_name' => 'Vision Mission',
                'type' => 2,
                'updated_at' => '2024-02-13 02:01:41',
            ),
            26 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-14 13:08:00',
                'deleted_at' => NULL,
                'icon' => NULL,
                'id' => 45,
                'label_id' => NULL,
                'menu_name_bn' => 'ক্যাশ ব্যালেন্স যুক্ত করুন',
                'menu_name_en' => 'Add Cash Balance',
                'order_by' => 2,
                'parent_id' => 20,
                'route' => 'add_cash_balance',
                'slug' => 'create',
                'status' => 1,
                'system_name' => 'Add Cash Balance',
                'type' => 2,
                'updated_at' => '2024-02-14 13:08:00',
            ),
            27 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-14 16:08:24',
                'deleted_at' => NULL,
                'icon' => 'fa fa-users',
                'id' => 46,
                'label_id' => 7,
                'menu_name_bn' => 'রেজিষ্ট্রেশনকৃত সদস্য সমূহ',
                'menu_name_en' => 'Registered Member',
                'order_by' => 1,
                'parent_id' => NULL,
                'route' => 'registerd_member',
                'slug' => 'index',
                'status' => 1,
                'system_name' => 'Registered Member',
                'type' => 3,
                'updated_at' => '2024-02-14 16:08:24',
            ),
        ));
        
        
    }
}