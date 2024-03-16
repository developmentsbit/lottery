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
            129 => 
            array (
                'id' => 389,
                'name' => 'Welcome Message create',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            130 => 
            array (
                'id' => 390,
                'name' => 'Welcome Message index',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            131 => 
            array (
                'id' => 391,
                'name' => 'Welcome Message show',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            132 => 
            array (
                'id' => 392,
                'name' => 'Welcome Message edit',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            133 => 
            array (
                'id' => 393,
                'name' => 'Welcome Message destroy',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            134 => 
            array (
                'id' => 394,
                'name' => 'Welcome Message trash',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            135 => 
            array (
                'id' => 395,
                'name' => 'Welcome Message restore',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            136 => 
            array (
                'id' => 396,
                'name' => 'Welcome Message delete',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            137 => 
            array (
                'id' => 397,
                'name' => 'Welcome Message status',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:04',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            138 => 
            array (
                'id' => 398,
                'name' => 'Welcome Message properties',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:05',
                'updated_at' => '2024-02-10 10:51:05',
            ),
            139 => 
            array (
                'id' => 399,
                'name' => 'Welcome Message print',
                'parent' => 'Welcome Message',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 10:51:05',
                'updated_at' => '2024-02-10 10:51:05',
            ),
            140 => 
            array (
                'id' => 400,
                'name' => 'YouTube Live create',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            141 => 
            array (
                'id' => 401,
                'name' => 'YouTube Live index',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            142 => 
            array (
                'id' => 402,
                'name' => 'YouTube Live show',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            143 => 
            array (
                'id' => 403,
                'name' => 'YouTube Live edit',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            144 => 
            array (
                'id' => 404,
                'name' => 'YouTube Live destroy',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            145 => 
            array (
                'id' => 405,
                'name' => 'YouTube Live trash',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            146 => 
            array (
                'id' => 406,
                'name' => 'YouTube Live restore',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            147 => 
            array (
                'id' => 407,
                'name' => 'YouTube Live delete',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            148 => 
            array (
                'id' => 408,
                'name' => 'YouTube Live status',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            149 => 
            array (
                'id' => 409,
                'name' => 'YouTube Live properties',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            150 => 
            array (
                'id' => 410,
                'name' => 'YouTube Live print',
                'parent' => 'YouTube Live',
                'guard_name' => 'web',
                'created_at' => '2024-02-10 11:36:40',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            151 => 
            array (
                'id' => 412,
                'name' => 'Cash Out Requst create',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:57',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            152 => 
            array (
                'id' => 413,
                'name' => 'Cash Out Requst index',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:57',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            153 => 
            array (
                'id' => 414,
                'name' => 'Cash Out Requst show',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:57',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            154 => 
            array (
                'id' => 415,
                'name' => 'Cash Out Requst edit',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:57',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            155 => 
            array (
                'id' => 416,
                'name' => 'Cash Out Requst destroy',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:57',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            156 => 
            array (
                'id' => 417,
                'name' => 'Cash Out Requst trash',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:57',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            157 => 
            array (
                'id' => 418,
                'name' => 'Cash Out Requst restore',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:57',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            158 => 
            array (
                'id' => 419,
                'name' => 'Cash Out Requst delete',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:57',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            159 => 
            array (
                'id' => 420,
                'name' => 'Cash Out Requst status',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:58',
                'updated_at' => '2024-02-12 00:05:58',
            ),
            160 => 
            array (
                'id' => 421,
                'name' => 'Cash Out Requst properties',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:58',
                'updated_at' => '2024-02-12 00:05:58',
            ),
            161 => 
            array (
                'id' => 422,
                'name' => 'Cash Out Requst print',
                'parent' => 'Cash Out Requst',
                'guard_name' => 'web',
                'created_at' => '2024-02-12 00:05:58',
                'updated_at' => '2024-02-12 00:05:58',
            ),
            162 => 
            array (
                'id' => 477,
                'name' => 'User Banner create',
                'parent' => 'User Banner',
                'guard_name' => 'web',
                'created_at' => '2024-02-13 01:52:07',
                'updated_at' => '2024-02-13 01:52:07',
            ),
            163 => 
            array (
                'id' => 478,
                'name' => 'User Banner index',
                'parent' => 'User Banner',
                'guard_name' => 'web',
                'created_at' => '2024-02-13 01:52:07',
                'updated_at' => '2024-02-13 01:52:07',
            ),
            164 => 
            array (
                'id' => 481,
                'name' => 'About Us create',
                'parent' => 'About Us',
                'guard_name' => 'web',
                'created_at' => '2024-02-13 02:00:47',
                'updated_at' => '2024-02-13 02:00:47',
            ),
            165 => 
            array (
                'id' => 482,
                'name' => 'Vision Mission create',
                'parent' => 'Vision Mission',
                'guard_name' => 'web',
                'created_at' => '2024-02-13 02:01:41',
                'updated_at' => '2024-02-13 02:01:41',
            ),
            166 => 
            array (
                'id' => 483,
                'name' => 'Add Cash Balance create',
                'parent' => 'Add Cash Balance',
                'guard_name' => 'web',
                'created_at' => '2024-02-14 13:08:00',
                'updated_at' => '2024-02-14 13:08:00',
            ),
            167 => 
            array (
                'id' => 484,
                'name' => 'Registered Member create',
                'parent' => 'Registered Member',
                'guard_name' => 'web',
                'created_at' => '2024-02-14 16:08:24',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            168 => 
            array (
                'id' => 485,
                'name' => 'Registered Member index',
                'parent' => 'Registered Member',
                'guard_name' => 'web',
                'created_at' => '2024-02-14 16:08:24',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            169 => 
            array (
                'id' => 486,
                'name' => 'Registered Member show',
                'parent' => 'Registered Member',
                'guard_name' => 'web',
                'created_at' => '2024-02-14 16:08:24',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            170 => 
            array (
                'id' => 487,
                'name' => 'Registered Member destroy',
                'parent' => 'Registered Member',
                'guard_name' => 'web',
                'created_at' => '2024-02-14 16:08:24',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            171 => 
            array (
                'id' => 488,
                'name' => 'Registered Member trash',
                'parent' => 'Registered Member',
                'guard_name' => 'web',
                'created_at' => '2024-02-14 16:08:24',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            172 => 
            array (
                'id' => 489,
                'name' => 'Registered Member restore',
                'parent' => 'Registered Member',
                'guard_name' => 'web',
                'created_at' => '2024-02-14 16:08:24',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            173 => 
            array (
                'id' => 490,
                'name' => 'Registered Member delete',
                'parent' => 'Registered Member',
                'guard_name' => 'web',
                'created_at' => '2024-02-14 16:08:24',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            174 => 
            array (
                'id' => 491,
                'name' => 'Registered Member status',
                'parent' => 'Registered Member',
                'guard_name' => 'web',
                'created_at' => '2024-02-14 16:08:24',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            175 => 
            array (
                'id' => 492,
                'name' => 'Active Game Lottery Numbers index',
                'parent' => 'Active Game Lottery Numbers',
                'guard_name' => 'web',
                'created_at' => '2024-02-15 12:30:57',
                'updated_at' => '2024-02-15 12:30:57',
            ),
            176 => 
            array (
                'id' => 493,
                'name' => 'All Lottery index',
                'parent' => 'All Lottery',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 13:17:19',
                'updated_at' => '2024-02-19 13:17:19',
            ),
            177 => 
            array (
                'id' => 495,
                'name' => 'Result create',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            178 => 
            array (
                'id' => 496,
                'name' => 'Result index',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            179 => 
            array (
                'id' => 497,
                'name' => 'Result show',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            180 => 
            array (
                'id' => 498,
                'name' => 'Result edit',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            181 => 
            array (
                'id' => 499,
                'name' => 'Result destroy',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            182 => 
            array (
                'id' => 500,
                'name' => 'Result trash',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            183 => 
            array (
                'id' => 501,
                'name' => 'Result restore',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            184 => 
            array (
                'id' => 502,
                'name' => 'Result delete',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            185 => 
            array (
                'id' => 503,
                'name' => 'Result status',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            186 => 
            array (
                'id' => 504,
                'name' => 'Result properties',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:57',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            187 => 
            array (
                'id' => 505,
                'name' => 'Result print',
                'parent' => 'Result',
                'guard_name' => 'web',
                'created_at' => '2024-02-19 15:57:58',
                'updated_at' => '2024-02-19 15:57:58',
            ),
            188 => 
            array (
                'id' => 506,
                'name' => 'Member Post create',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:18',
                'updated_at' => '2024-03-04 12:07:18',
            ),
            189 => 
            array (
                'id' => 507,
                'name' => 'Member Post index',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            190 => 
            array (
                'id' => 508,
                'name' => 'Member Post show',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            191 => 
            array (
                'id' => 509,
                'name' => 'Member Post edit',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            192 => 
            array (
                'id' => 510,
                'name' => 'Member Post destroy',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            193 => 
            array (
                'id' => 511,
                'name' => 'Member Post trash',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            194 => 
            array (
                'id' => 512,
                'name' => 'Member Post restore',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            195 => 
            array (
                'id' => 513,
                'name' => 'Member Post delete',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            196 => 
            array (
                'id' => 514,
                'name' => 'Member Post status',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            197 => 
            array (
                'id' => 515,
                'name' => 'Member Post properties',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            198 => 
            array (
                'id' => 516,
                'name' => 'Member Post print',
                'parent' => 'Member Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 12:07:19',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            199 => 
            array (
                'id' => 528,
                'name' => 'Public Post create',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            200 => 
            array (
                'id' => 529,
                'name' => 'Public Post index',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            201 => 
            array (
                'id' => 530,
                'name' => 'Public Post show',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            202 => 
            array (
                'id' => 531,
                'name' => 'Public Post edit',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            203 => 
            array (
                'id' => 532,
                'name' => 'Public Post destroy',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            204 => 
            array (
                'id' => 533,
                'name' => 'Public Post trash',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            205 => 
            array (
                'id' => 534,
                'name' => 'Public Post restore',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            206 => 
            array (
                'id' => 535,
                'name' => 'Public Post delete',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            207 => 
            array (
                'id' => 536,
                'name' => 'Public Post status',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            208 => 
            array (
                'id' => 537,
                'name' => 'Public Post properties',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            209 => 
            array (
                'id' => 538,
                'name' => 'Public Post print',
                'parent' => 'Public Post',
                'guard_name' => 'web',
                'created_at' => '2024-03-04 14:14:20',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            210 => 
            array (
                'id' => 539,
                'name' => 'Country Setup create',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:25',
                'updated_at' => '2024-03-14 23:03:25',
            ),
            211 => 
            array (
                'id' => 540,
                'name' => 'Country Setup index',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:25',
                'updated_at' => '2024-03-14 23:03:25',
            ),
            212 => 
            array (
                'id' => 541,
                'name' => 'Country Setup show',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:25',
                'updated_at' => '2024-03-14 23:03:25',
            ),
            213 => 
            array (
                'id' => 542,
                'name' => 'Country Setup edit',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:25',
                'updated_at' => '2024-03-14 23:03:25',
            ),
            214 => 
            array (
                'id' => 543,
                'name' => 'Country Setup destroy',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:25',
                'updated_at' => '2024-03-14 23:03:25',
            ),
            215 => 
            array (
                'id' => 544,
                'name' => 'Country Setup trash',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:25',
                'updated_at' => '2024-03-14 23:03:25',
            ),
            216 => 
            array (
                'id' => 545,
                'name' => 'Country Setup restore',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:26',
                'updated_at' => '2024-03-14 23:03:26',
            ),
            217 => 
            array (
                'id' => 546,
                'name' => 'Country Setup delete',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:26',
                'updated_at' => '2024-03-14 23:03:26',
            ),
            218 => 
            array (
                'id' => 547,
                'name' => 'Country Setup status',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:26',
                'updated_at' => '2024-03-14 23:03:26',
            ),
            219 => 
            array (
                'id' => 548,
                'name' => 'Country Setup properties',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:26',
                'updated_at' => '2024-03-14 23:03:26',
            ),
            220 => 
            array (
                'id' => 549,
                'name' => 'Country Setup print',
                'parent' => 'Country Setup',
                'guard_name' => 'web',
                'created_at' => '2024-03-14 23:03:26',
                'updated_at' => '2024-03-14 23:03:26',
            ),
            221 => 
            array (
                'id' => 550,
                'name' => 'Agent create',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:45',
                'updated_at' => '2024-03-15 15:29:45',
            ),
            222 => 
            array (
                'id' => 551,
                'name' => 'Agent index',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:45',
                'updated_at' => '2024-03-15 15:29:45',
            ),
            223 => 
            array (
                'id' => 552,
                'name' => 'Agent show',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:45',
                'updated_at' => '2024-03-15 15:29:45',
            ),
            224 => 
            array (
                'id' => 553,
                'name' => 'Agent edit',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:45',
                'updated_at' => '2024-03-15 15:29:45',
            ),
            225 => 
            array (
                'id' => 554,
                'name' => 'Agent destroy',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:46',
                'updated_at' => '2024-03-15 15:29:46',
            ),
            226 => 
            array (
                'id' => 555,
                'name' => 'Agent trash',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:46',
                'updated_at' => '2024-03-15 15:29:46',
            ),
            227 => 
            array (
                'id' => 556,
                'name' => 'Agent restore',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:46',
                'updated_at' => '2024-03-15 15:29:46',
            ),
            228 => 
            array (
                'id' => 557,
                'name' => 'Agent delete',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:46',
                'updated_at' => '2024-03-15 15:29:46',
            ),
            229 => 
            array (
                'id' => 558,
                'name' => 'Agent status',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:46',
                'updated_at' => '2024-03-15 15:29:46',
            ),
            230 => 
            array (
                'id' => 559,
                'name' => 'Agent properties',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:46',
                'updated_at' => '2024-03-15 15:29:46',
            ),
            231 => 
            array (
                'id' => 560,
                'name' => 'Agent print',
                'parent' => 'Agent',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 15:29:46',
                'updated_at' => '2024-03-15 15:29:46',
            ),
            232 => 
            array (
                'id' => 561,
                'name' => 'Agent Accounts create',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            233 => 
            array (
                'id' => 562,
                'name' => 'Agent Accounts index',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            234 => 
            array (
                'id' => 563,
                'name' => 'Agent Accounts show',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            235 => 
            array (
                'id' => 564,
                'name' => 'Agent Accounts edit',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            236 => 
            array (
                'id' => 565,
                'name' => 'Agent Accounts destroy',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            237 => 
            array (
                'id' => 566,
                'name' => 'Agent Accounts trash',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            238 => 
            array (
                'id' => 567,
                'name' => 'Agent Accounts restore',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            239 => 
            array (
                'id' => 568,
                'name' => 'Agent Accounts delete',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            240 => 
            array (
                'id' => 569,
                'name' => 'Agent Accounts status',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            241 => 
            array (
                'id' => 570,
                'name' => 'Agent Accounts properties',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:56',
                'updated_at' => '2024-03-15 22:59:56',
            ),
            242 => 
            array (
                'id' => 571,
                'name' => 'Agent Accounts print',
                'parent' => 'Agent Accounts',
                'guard_name' => 'web',
                'created_at' => '2024-03-15 22:59:57',
                'updated_at' => '2024-03-15 22:59:57',
            ),
        ));
        
        
    }
}