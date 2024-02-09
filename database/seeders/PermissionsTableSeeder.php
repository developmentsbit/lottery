<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 111,
                'name' => 'Student Information create',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            1 => 
            array (
                'id' => 112,
                'name' => 'Student Information index',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            2 => 
            array (
                'id' => 113,
                'name' => 'Student Information show',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            3 => 
            array (
                'id' => 114,
                'name' => 'Student Information edit',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            4 => 
            array (
                'id' => 115,
                'name' => 'Student Information destroy',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            5 => 
            array (
                'id' => 116,
                'name' => 'Student Information trash',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            6 => 
            array (
                'id' => 117,
                'name' => 'Student Information restore',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            7 => 
            array (
                'id' => 118,
                'name' => 'Student Information delete',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            8 => 
            array (
                'id' => 119,
                'name' => 'Student Information status',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            9 => 
            array (
                'id' => 120,
                'name' => 'Student Information properties',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            10 => 
            array (
                'id' => 121,
                'name' => 'Student Information print',
                'parent' => 'Student Information',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:21:22',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            11 => 
            array (
                'id' => 144,
                'name' => 'Income create',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            12 => 
            array (
                'id' => 145,
                'name' => 'Income index',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            13 => 
            array (
                'id' => 146,
                'name' => 'Income show',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            14 => 
            array (
                'id' => 147,
                'name' => 'Income edit',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            15 => 
            array (
                'id' => 148,
                'name' => 'Income destroy',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            16 => 
            array (
                'id' => 149,
                'name' => 'Income trash',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            17 => 
            array (
                'id' => 150,
                'name' => 'Income restore',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            18 => 
            array (
                'id' => 151,
                'name' => 'Income delete',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            19 => 
            array (
                'id' => 152,
                'name' => 'Income status',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            20 => 
            array (
                'id' => 153,
                'name' => 'Income properties',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            21 => 
            array (
                'id' => 154,
                'name' => 'Income print',
                'parent' => 'Income',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 10:34:05',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            22 => 
            array (
                'id' => 155,
                'name' => 'Dashboard index',
                'parent' => 'Dashboard',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:08:51',
                'updated_at' => '2023-10-28 12:08:51',
            ),
            23 => 
            array (
                'id' => 156,
                'name' => 'Menu Label create',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            24 => 
            array (
                'id' => 157,
                'name' => 'Menu Label index',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            25 => 
            array (
                'id' => 158,
                'name' => 'Menu Label show',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            26 => 
            array (
                'id' => 159,
                'name' => 'Menu Label edit',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            27 => 
            array (
                'id' => 160,
                'name' => 'Menu Label destroy',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            28 => 
            array (
                'id' => 161,
                'name' => 'Menu Label trash',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            29 => 
            array (
                'id' => 162,
                'name' => 'Menu Label restore',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            30 => 
            array (
                'id' => 163,
                'name' => 'Menu Label delete',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            31 => 
            array (
                'id' => 164,
                'name' => 'Menu Label status',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            32 => 
            array (
                'id' => 165,
                'name' => 'Menu Label properties',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            33 => 
            array (
                'id' => 166,
                'name' => 'Menu Label print',
                'parent' => 'Menu Label',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            34 => 
            array (
                'id' => 167,
                'name' => 'Menu create',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            35 => 
            array (
                'id' => 168,
                'name' => 'Menu index',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            36 => 
            array (
                'id' => 169,
                'name' => 'Menu show',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            37 => 
            array (
                'id' => 170,
                'name' => 'Menu edit',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            38 => 
            array (
                'id' => 171,
                'name' => 'Menu destroy',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            39 => 
            array (
                'id' => 172,
                'name' => 'Menu trash',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            40 => 
            array (
                'id' => 173,
                'name' => 'Menu restore',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            41 => 
            array (
                'id' => 174,
                'name' => 'Menu delete',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            42 => 
            array (
                'id' => 175,
                'name' => 'Menu status',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            43 => 
            array (
                'id' => 176,
                'name' => 'Menu properties',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            44 => 
            array (
                'id' => 177,
                'name' => 'Menu print',
                'parent' => 'Menu',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            45 => 
            array (
                'id' => 178,
                'name' => 'Role create',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            46 => 
            array (
                'id' => 179,
                'name' => 'Role index',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            47 => 
            array (
                'id' => 180,
                'name' => 'Role show',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            48 => 
            array (
                'id' => 181,
                'name' => 'Role edit',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            49 => 
            array (
                'id' => 182,
                'name' => 'Role destroy',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            50 => 
            array (
                'id' => 183,
                'name' => 'Role trash',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            51 => 
            array (
                'id' => 184,
                'name' => 'Role restore',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            52 => 
            array (
                'id' => 185,
                'name' => 'Role delete',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            53 => 
            array (
                'id' => 186,
                'name' => 'Role status',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            54 => 
            array (
                'id' => 187,
                'name' => 'Role properties',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            55 => 
            array (
                'id' => 188,
                'name' => 'Role print',
                'parent' => 'Role',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            56 => 
            array (
                'id' => 189,
                'name' => 'Admin create',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            57 => 
            array (
                'id' => 190,
                'name' => 'Admin index',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            58 => 
            array (
                'id' => 191,
                'name' => 'Admin show',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            59 => 
            array (
                'id' => 192,
                'name' => 'Admin edit',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            60 => 
            array (
                'id' => 193,
                'name' => 'Admin destroy',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            61 => 
            array (
                'id' => 194,
                'name' => 'Admin trash',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            62 => 
            array (
                'id' => 195,
                'name' => 'Admin restore',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            63 => 
            array (
                'id' => 196,
                'name' => 'Admin delete',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            64 => 
            array (
                'id' => 197,
                'name' => 'Admin status',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            65 => 
            array (
                'id' => 198,
                'name' => 'Admin properties',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            66 => 
            array (
                'id' => 199,
                'name' => 'Admin print',
                'parent' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            67 => 
            array (
                'id' => 200,
                'name' => 'Branch create',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            68 => 
            array (
                'id' => 201,
                'name' => 'Branch index',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            69 => 
            array (
                'id' => 202,
                'name' => 'Branch show',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            70 => 
            array (
                'id' => 203,
                'name' => 'Branch edit',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            71 => 
            array (
                'id' => 204,
                'name' => 'Branch destroy',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            72 => 
            array (
                'id' => 205,
                'name' => 'Branch trash',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            73 => 
            array (
                'id' => 206,
                'name' => 'Branch restore',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            74 => 
            array (
                'id' => 207,
                'name' => 'Branch delete',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            75 => 
            array (
                'id' => 208,
                'name' => 'Branch status',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            76 => 
            array (
                'id' => 209,
                'name' => 'Branch properties',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            77 => 
            array (
                'id' => 210,
                'name' => 'Branch print',
                'parent' => 'Branch',
                'guard_name' => 'web',
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            78 => 
            array (
                'id' => 276,
                'name' => 'Software Info create',
                'parent' => 'Software Info',
                'guard_name' => 'web',
                'created_at' => '2023-10-31 00:17:35',
                'updated_at' => '2023-10-31 00:17:35',
            ),
            79 => 
            array (
                'id' => 277,
                'name' => 'Software Info index',
                'parent' => 'Software Info',
                'guard_name' => 'web',
                'created_at' => '2023-10-31 00:17:35',
                'updated_at' => '2023-10-31 00:17:35',
            ),
            80 => 
            array (
                'id' => 278,
                'name' => 'Theme Settings create',
                'parent' => 'Theme Settings',
                'guard_name' => 'web',
                'created_at' => '2023-11-01 17:02:46',
                'updated_at' => '2023-11-01 17:02:46',
            ),
            81 => 
            array (
                'id' => 280,
                'name' => 'Payment Method create',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            82 => 
            array (
                'id' => 281,
                'name' => 'Payment Method index',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            83 => 
            array (
                'id' => 282,
                'name' => 'Payment Method show',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            84 => 
            array (
                'id' => 283,
                'name' => 'Payment Method edit',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            85 => 
            array (
                'id' => 284,
                'name' => 'Payment Method destroy',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            86 => 
            array (
                'id' => 285,
                'name' => 'Payment Method trash',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            87 => 
            array (
                'id' => 286,
                'name' => 'Payment Method restore',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            88 => 
            array (
                'id' => 287,
                'name' => 'Payment Method delete',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            89 => 
            array (
                'id' => 288,
                'name' => 'Payment Method status',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            90 => 
            array (
                'id' => 289,
                'name' => 'Payment Method properties',
                'parent' => 'Payment Method',
                'guard_name' => 'web',
                'created_at' => '2024-02-03 17:38:27',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            91 => 
            array (
                'id' => 296,
                'name' => 'Cash In Request create',
                'parent' => 'Cash In Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 12:35:52',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            92 => 
            array (
                'id' => 297,
                'name' => 'Cash In Request index',
                'parent' => 'Cash In Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 12:35:52',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            93 => 
            array (
                'id' => 298,
                'name' => 'Cash In Request show',
                'parent' => 'Cash In Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 12:35:52',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            94 => 
            array (
                'id' => 299,
                'name' => 'Cash In Request edit',
                'parent' => 'Cash In Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 12:35:52',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            95 => 
            array (
                'id' => 300,
                'name' => 'Cash In Request destroy',
                'parent' => 'Cash In Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 12:35:52',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            96 => 
            array (
                'id' => 301,
                'name' => 'Cash In Request trash',
                'parent' => 'Cash In Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 12:35:52',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            97 => 
            array (
                'id' => 302,
                'name' => 'Cash In Request restore',
                'parent' => 'Cash In Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 12:35:52',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            98 => 
            array (
                'id' => 303,
                'name' => 'Cash In Request delete',
                'parent' => 'Cash In Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 12:35:52',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            99 => 
            array (
                'id' => 304,
                'name' => 'Cash In Request status',
                'parent' => 'Cash In Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 12:35:52',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            100 => 
            array (
                'id' => 305,
                'name' => 'Game Setup create',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            101 => 
            array (
                'id' => 306,
                'name' => 'Game Setup index',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            102 => 
            array (
                'id' => 307,
                'name' => 'Game Setup show',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            103 => 
            array (
                'id' => 308,
                'name' => 'Game Setup edit',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            104 => 
            array (
                'id' => 309,
                'name' => 'Game Setup destroy',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            105 => 
            array (
                'id' => 310,
                'name' => 'Game Setup trash',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            106 => 
            array (
                'id' => 311,
                'name' => 'Game Setup restore',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            107 => 
            array (
                'id' => 312,
                'name' => 'Game Setup delete',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            108 => 
            array (
                'id' => 313,
                'name' => 'Game Setup status',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            109 => 
            array (
                'id' => 314,
                'name' => 'Game Setup properties',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            110 => 
            array (
                'id' => 315,
                'name' => 'Game Setup print',
                'parent' => 'Game Setup',
                'guard_name' => 'web',
                'created_at' => '2024-02-05 16:49:23',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            111 => 
            array (
                'id' => 349,
                'name' => 'Photo Info create',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            112 => 
            array (
                'id' => 350,
                'name' => 'Photo Info index',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            113 => 
            array (
                'id' => 351,
                'name' => 'Photo Info show',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            114 => 
            array (
                'id' => 352,
                'name' => 'Photo Info edit',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            115 => 
            array (
                'id' => 353,
                'name' => 'Photo Info destroy',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            116 => 
            array (
                'id' => 354,
                'name' => 'Photo Info trash',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            117 => 
            array (
                'id' => 355,
                'name' => 'Photo Info restore',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            118 => 
            array (
                'id' => 356,
                'name' => 'Photo Info delete',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            119 => 
            array (
                'id' => 357,
                'name' => 'Photo Info status',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            120 => 
            array (
                'id' => 358,
                'name' => 'Photo Info properties',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            121 => 
            array (
                'id' => 359,
                'name' => 'Photo Info print',
                'parent' => 'Photo Info',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 01:18:49',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            122 => 
            array (
                'id' => 382,
                'name' => 'Lottery Request index',
                'parent' => 'Lottery Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 10:24:02',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            123 => 
            array (
                'id' => 383,
                'name' => 'Lottery Request show',
                'parent' => 'Lottery Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 10:24:02',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            124 => 
            array (
                'id' => 384,
                'name' => 'Lottery Request edit',
                'parent' => 'Lottery Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 10:24:02',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            125 => 
            array (
                'id' => 385,
                'name' => 'Lottery Request destroy',
                'parent' => 'Lottery Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 10:24:02',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            126 => 
            array (
                'id' => 386,
                'name' => 'Lottery Request trash',
                'parent' => 'Lottery Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 10:24:02',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            127 => 
            array (
                'id' => 387,
                'name' => 'Lottery Request restore',
                'parent' => 'Lottery Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 10:24:02',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            128 => 
            array (
                'id' => 388,
                'name' => 'Lottery Request delete',
                'parent' => 'Lottery Request',
                'guard_name' => 'web',
                'created_at' => '2024-02-09 10:24:02',
                'updated_at' => '2024-02-09 10:24:02',
            ),
        ));
        
        
    }
}