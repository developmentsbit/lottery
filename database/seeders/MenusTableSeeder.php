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
                'id' => 1,
                'label_id' => NULL,
                'parent_id' => NULL,
                'menu_name_en' => 'Dashboard',
                'menu_name_bn' => 'ড্যাশবোর্ড',
                'system_name' => 'Dashboard',
                'route' => 'dashboard',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 3,
                'icon' => 'fa fa-home',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 12:08:51',
                'updated_at' => '2023-10-28 12:08:51',
            ),
            1 => 
            array (
                'id' => 2,
                'label_id' => 1,
                'parent_id' => NULL,
                'menu_name_en' => 'Menu Settings',
                'menu_name_bn' => 'মেনু সেটিংস',
                'system_name' => 'Menu Settings',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 2,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-gears',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 12:20:25',
                'updated_at' => '2023-10-28 14:44:36',
            ),
            2 => 
            array (
                'id' => 3,
                'label_id' => NULL,
                'parent_id' => 2,
                'menu_name_en' => 'Menu Label',
                'menu_name_bn' => 'মেনু স্তর',
                'system_name' => 'Menu Label',
                'route' => 'menu_label',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            3 => 
            array (
                'id' => 4,
                'label_id' => NULL,
                'parent_id' => 2,
                'menu_name_en' => 'Menu',
                'menu_name_bn' => 'মেনু',
                'system_name' => 'Menu',
                'route' => 'menu',
                'slug' => 'index',
                'order_by' => 2,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            4 => 
            array (
                'id' => 5,
                'label_id' => 2,
                'parent_id' => NULL,
                'menu_name_en' => 'Admin Settings',
                'menu_name_bn' => 'অ্যাডমিন সেটিংস',
                'system_name' => 'Admin Settings',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 3,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-user',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 13:57:37',
                'updated_at' => '2023-10-28 13:57:37',
            ),
            5 => 
            array (
                'id' => 6,
                'label_id' => NULL,
                'parent_id' => 5,
                'menu_name_en' => 'Role',
                'menu_name_bn' => 'রোল',
                'system_name' => 'Role',
                'route' => 'role',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            6 => 
            array (
                'id' => 7,
                'label_id' => NULL,
                'parent_id' => 5,
                'menu_name_en' => 'Admin',
                'menu_name_bn' => 'অ্যাডমিন',
                'system_name' => 'Admin',
                'route' => 'user',
                'slug' => 'index',
                'order_by' => 2,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            7 => 
            array (
                'id' => 8,
                'label_id' => NULL,
                'parent_id' => 5,
                'menu_name_en' => 'Branch',
                'menu_name_bn' => 'ব্রাঞ্চ',
                'system_name' => 'Branch',
                'route' => 'branch',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            8 => 
            array (
                'id' => 15,
                'label_id' => 6,
                'parent_id' => NULL,
                'menu_name_en' => 'Software Settings',
                'menu_name_bn' => 'সফটওয়্যার সেটিংস',
                'system_name' => 'Software Settings',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 4,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-cog',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-30 23:57:24',
                'updated_at' => '2023-10-30 23:57:24',
            ),
            9 => 
            array (
                'id' => 16,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Software Information',
                'menu_name_bn' => 'সফটওয়্যার তথ্য',
                'system_name' => 'Software Info',
                'route' => 'software_info',
                'slug' => 'create',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-30 23:58:47',
                'updated_at' => '2023-10-30 23:58:47',
            ),
            10 => 
            array (
                'id' => 17,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Theme Settings',
                'menu_name_bn' => 'থিম সেটিংস',
                'system_name' => 'Theme Settings',
                'route' => 'user_theme',
                'slug' => 'create',
                'order_by' => 2,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-11-01 17:02:46',
                'updated_at' => '2023-11-01 17:02:46',
            ),
            11 => 
            array (
                'id' => 19,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Payment Method',
                'menu_name_bn' => 'পেমেন্ট মেথড',
                'system_name' => 'Payment Method',
                'route' => 'payment_method',
                'slug' => 'create',
                'order_by' => 3,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            12 => 
            array (
                'id' => 20,
                'label_id' => 7,
                'parent_id' => NULL,
                'menu_name_en' => 'Cash In',
                'menu_name_bn' => 'ক্যাশ ইন',
                'system_name' => 'Cash In',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 1,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-dollar',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-04 21:09:16',
                'updated_at' => '2024-02-04 21:09:16',
            ),
            13 => 
            array (
                'id' => 21,
                'label_id' => NULL,
                'parent_id' => 20,
                'menu_name_en' => 'Cash In Request',
                'menu_name_bn' => 'ক্যাশ ইন রিকোয়েস্ট',
                'system_name' => 'Cash In Request',
                'route' => 'cash_in_request',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-04 21:10:30',
                'updated_at' => '2024-02-04 21:10:30',
            ),
            14 => 
            array (
                'id' => 22,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Game Setup',
                'menu_name_bn' => 'গেইম সেটআপ',
                'system_name' => 'Game Setup',
                'route' => 'game_setup',
                'slug' => 'create',
                'order_by' => 4,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-09 01:11:45',
            ),
            15 => 
            array (
                'id' => 26,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Photo Info',
                'menu_name_bn' => 'ছবি তথ্য',
                'system_name' => 'Photo Info',
                'route' => 'photo_info',
                'slug' => 'index',
                'order_by' => 5,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            16 => 
            array (
                'id' => 30,
                'label_id' => 7,
                'parent_id' => NULL,
                'menu_name_en' => 'Lottery Info',
                'menu_name_bn' => 'লটারি তথ্য',
                'system_name' => 'Lottery Info',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 10,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-box',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-09 10:22:39',
                'updated_at' => '2024-02-09 10:22:39',
            ),
            17 => 
            array (
                'id' => 31,
                'label_id' => NULL,
                'parent_id' => 30,
                'menu_name_en' => 'Lottery Request',
                'menu_name_bn' => 'লটারি রিকোয়েষ্ট',
                'system_name' => 'Lottery Request',
                'route' => 'lottery_info',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-09 10:24:02',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            18 => 
            array (
                'id' => 32,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Welcome Message',
                'menu_name_bn' => 'স্বাগত বার্তা',
                'system_name' => 'Welcome Message',
                'route' => 'welcome_message',
                'slug' => 'create',
                'order_by' => 7,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            19 => 
            array (
                'id' => 33,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'YouTube Live',
                'menu_name_bn' => 'ইউটিউব লাইভ',
                'system_name' => 'YouTube Live',
                'route' => 'youtube_live',
                'slug' => 'create',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            20 => 
            array (
                'id' => 34,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Banner For User Dashboard',
                'menu_name_bn' => 'ইউজার ড্যাশবোর্ডের ব্যানার',
                'system_name' => 'User Banner',
                'route' => 'banner',
                'slug' => 'index',
                'order_by' => 8,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-10 15:29:21',
                'updated_at' => '2024-02-10 15:29:21',
            ),
            21 => 
            array (
                'id' => 35,
                'label_id' => 7,
                'parent_id' => NULL,
                'menu_name_en' => 'Cash Out',
                'menu_name_bn' => 'ক্যাশ আউট',
                'system_name' => 'Cash Out',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 6,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-rocket',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-12 00:04:56',
                'updated_at' => '2024-02-12 00:04:56',
            ),
            22 => 
            array (
                'id' => 36,
                'label_id' => NULL,
                'parent_id' => 35,
                'menu_name_en' => 'Cash Out Request',
                'menu_name_bn' => 'ক্যাশ আউট রিকোয়েস্ট',
                'system_name' => 'Cash Out Requst',
                'route' => 'cash_out_request',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-12 00:05:57',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            23 => 
            array (
                'id' => 40,
                'label_id' => 6,
                'parent_id' => NULL,
                'menu_name_en' => 'Website Content',
                'menu_name_bn' => 'ওয়েবসাইট তথ্য',
                'system_name' => 'Website Content',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 12,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-gears',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-13 01:55:00',
                'updated_at' => '2024-02-13 01:55:00',
            ),
            24 => 
            array (
                'id' => 43,
                'label_id' => NULL,
                'parent_id' => 40,
                'menu_name_en' => 'About Us',
                'menu_name_bn' => 'আমাদের সম্পর্কে',
                'system_name' => 'About Us',
                'route' => 'about_us',
                'slug' => 'create',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-13 02:00:46',
                'updated_at' => '2024-02-13 02:00:46',
            ),
            25 => 
            array (
                'id' => 44,
                'label_id' => NULL,
                'parent_id' => 40,
                'menu_name_en' => 'Vision Mission',
                'menu_name_bn' => 'লক্ষ ও উদ্দেশ্য',
                'system_name' => 'Vision Mission',
                'route' => 'mission_vision',
                'slug' => 'create',
                'order_by' => 2,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-13 02:01:41',
                'updated_at' => '2024-02-13 02:01:41',
            ),
            26 => 
            array (
                'id' => 45,
                'label_id' => NULL,
                'parent_id' => 20,
                'menu_name_en' => 'Add Cash Balance',
                'menu_name_bn' => 'ক্যাশ ব্যালেন্স যুক্ত করুন',
                'system_name' => 'Add Cash Balance',
                'route' => 'add_cash_balance',
                'slug' => 'create',
                'order_by' => 2,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 13:08:00',
                'updated_at' => '2024-02-14 13:08:00',
            ),
            27 => 
            array (
                'id' => 46,
                'label_id' => 7,
                'parent_id' => NULL,
                'menu_name_en' => 'Registered Member',
                'menu_name_bn' => 'রেজিষ্ট্রেশনকৃত সদস্য সমূহ',
                'system_name' => 'Registered Member',
                'route' => 'registerd_member',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 3,
                'icon' => 'fa fa-users',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-14 16:08:24',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            28 => 
            array (
                'id' => 47,
                'label_id' => NULL,
                'parent_id' => 30,
                'menu_name_en' => 'Active Game Lottery Numbers',
                'menu_name_bn' => 'অ্যাকটিভ লটারির নাম্বারসমূহ',
                'system_name' => 'Active Game Lottery Numbers',
                'route' => 'active_lottery_numbers',
                'slug' => 'index',
                'order_by' => 2,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-02-15 12:30:57',
                'updated_at' => '2024-02-15 12:30:57',
            ),
        ));
        
        
    }
}