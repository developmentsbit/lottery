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
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 111,
                'name' => 'Student Information create',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            1 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 112,
                'name' => 'Student Information index',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            2 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 113,
                'name' => 'Student Information show',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            3 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 114,
                'name' => 'Student Information edit',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            4 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 115,
                'name' => 'Student Information destroy',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            5 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 116,
                'name' => 'Student Information trash',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            6 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 117,
                'name' => 'Student Information restore',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            7 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 118,
                'name' => 'Student Information delete',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            8 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 119,
                'name' => 'Student Information status',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            9 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 120,
                'name' => 'Student Information properties',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            10 => 
            array (
                'created_at' => '2023-10-28 10:21:22',
                'guard_name' => 'web',
                'id' => 121,
                'name' => 'Student Information print',
                'parent' => 'Student Information',
                'updated_at' => '2023-10-28 10:21:22',
            ),
            11 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 144,
                'name' => 'Income create',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            12 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 145,
                'name' => 'Income index',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            13 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 146,
                'name' => 'Income show',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            14 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 147,
                'name' => 'Income edit',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            15 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 148,
                'name' => 'Income destroy',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            16 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 149,
                'name' => 'Income trash',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            17 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 150,
                'name' => 'Income restore',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            18 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 151,
                'name' => 'Income delete',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            19 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 152,
                'name' => 'Income status',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            20 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 153,
                'name' => 'Income properties',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            21 => 
            array (
                'created_at' => '2023-10-28 10:34:05',
                'guard_name' => 'web',
                'id' => 154,
                'name' => 'Income print',
                'parent' => 'Income',
                'updated_at' => '2023-10-28 10:34:05',
            ),
            22 => 
            array (
                'created_at' => '2023-10-28 12:08:51',
                'guard_name' => 'web',
                'id' => 155,
                'name' => 'Dashboard index',
                'parent' => 'Dashboard',
                'updated_at' => '2023-10-28 12:08:51',
            ),
            23 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 156,
                'name' => 'Menu Label create',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            24 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 157,
                'name' => 'Menu Label index',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            25 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 158,
                'name' => 'Menu Label show',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            26 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 159,
                'name' => 'Menu Label edit',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            27 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 160,
                'name' => 'Menu Label destroy',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            28 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 161,
                'name' => 'Menu Label trash',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            29 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 162,
                'name' => 'Menu Label restore',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            30 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 163,
                'name' => 'Menu Label delete',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            31 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 164,
                'name' => 'Menu Label status',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            32 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 165,
                'name' => 'Menu Label properties',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            33 => 
            array (
                'created_at' => '2023-10-28 12:45:30',
                'guard_name' => 'web',
                'id' => 166,
                'name' => 'Menu Label print',
                'parent' => 'Menu Label',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            34 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 167,
                'name' => 'Menu create',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            35 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 168,
                'name' => 'Menu index',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            36 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 169,
                'name' => 'Menu show',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            37 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 170,
                'name' => 'Menu edit',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            38 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 171,
                'name' => 'Menu destroy',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            39 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 172,
                'name' => 'Menu trash',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            40 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 173,
                'name' => 'Menu restore',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            41 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 174,
                'name' => 'Menu delete',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            42 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 175,
                'name' => 'Menu status',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            43 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 176,
                'name' => 'Menu properties',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            44 => 
            array (
                'created_at' => '2023-10-28 12:51:14',
                'guard_name' => 'web',
                'id' => 177,
                'name' => 'Menu print',
                'parent' => 'Menu',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            45 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 178,
                'name' => 'Role create',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            46 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 179,
                'name' => 'Role index',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            47 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 180,
                'name' => 'Role show',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            48 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 181,
                'name' => 'Role edit',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            49 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 182,
                'name' => 'Role destroy',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            50 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 183,
                'name' => 'Role trash',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            51 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 184,
                'name' => 'Role restore',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            52 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 185,
                'name' => 'Role delete',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            53 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 186,
                'name' => 'Role status',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            54 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 187,
                'name' => 'Role properties',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            55 => 
            array (
                'created_at' => '2023-10-28 13:58:11',
                'guard_name' => 'web',
                'id' => 188,
                'name' => 'Role print',
                'parent' => 'Role',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            56 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 189,
                'name' => 'Admin create',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            57 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 190,
                'name' => 'Admin index',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            58 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 191,
                'name' => 'Admin show',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            59 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 192,
                'name' => 'Admin edit',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            60 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 193,
                'name' => 'Admin destroy',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            61 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 194,
                'name' => 'Admin trash',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            62 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 195,
                'name' => 'Admin restore',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            63 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 196,
                'name' => 'Admin delete',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            64 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 197,
                'name' => 'Admin status',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            65 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 198,
                'name' => 'Admin properties',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            66 => 
            array (
                'created_at' => '2023-10-28 14:09:00',
                'guard_name' => 'web',
                'id' => 199,
                'name' => 'Admin print',
                'parent' => 'Admin',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            67 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 200,
                'name' => 'Branch create',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            68 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 201,
                'name' => 'Branch index',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            69 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 202,
                'name' => 'Branch show',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            70 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 203,
                'name' => 'Branch edit',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            71 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 204,
                'name' => 'Branch destroy',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            72 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 205,
                'name' => 'Branch trash',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            73 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 206,
                'name' => 'Branch restore',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            74 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 207,
                'name' => 'Branch delete',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            75 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 208,
                'name' => 'Branch status',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            76 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 209,
                'name' => 'Branch properties',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            77 => 
            array (
                'created_at' => '2023-10-28 14:10:55',
                'guard_name' => 'web',
                'id' => 210,
                'name' => 'Branch print',
                'parent' => 'Branch',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            78 => 
            array (
                'created_at' => '2023-10-31 00:17:35',
                'guard_name' => 'web',
                'id' => 276,
                'name' => 'Software Info create',
                'parent' => 'Software Info',
                'updated_at' => '2023-10-31 00:17:35',
            ),
            79 => 
            array (
                'created_at' => '2023-10-31 00:17:35',
                'guard_name' => 'web',
                'id' => 277,
                'name' => 'Software Info index',
                'parent' => 'Software Info',
                'updated_at' => '2023-10-31 00:17:35',
            ),
            80 => 
            array (
                'created_at' => '2023-11-01 17:02:46',
                'guard_name' => 'web',
                'id' => 278,
                'name' => 'Theme Settings create',
                'parent' => 'Theme Settings',
                'updated_at' => '2023-11-01 17:02:46',
            ),
            81 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 280,
                'name' => 'Payment Method create',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            82 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 281,
                'name' => 'Payment Method index',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            83 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 282,
                'name' => 'Payment Method show',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            84 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 283,
                'name' => 'Payment Method edit',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            85 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 284,
                'name' => 'Payment Method destroy',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            86 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 285,
                'name' => 'Payment Method trash',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            87 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 286,
                'name' => 'Payment Method restore',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            88 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 287,
                'name' => 'Payment Method delete',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            89 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 288,
                'name' => 'Payment Method status',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            90 => 
            array (
                'created_at' => '2024-02-03 17:38:27',
                'guard_name' => 'web',
                'id' => 289,
                'name' => 'Payment Method properties',
                'parent' => 'Payment Method',
                'updated_at' => '2024-02-03 17:38:27',
            ),
            91 => 
            array (
                'created_at' => '2024-02-05 12:35:52',
                'guard_name' => 'web',
                'id' => 296,
                'name' => 'Cash In Request create',
                'parent' => 'Cash In Request',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            92 => 
            array (
                'created_at' => '2024-02-05 12:35:52',
                'guard_name' => 'web',
                'id' => 297,
                'name' => 'Cash In Request index',
                'parent' => 'Cash In Request',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            93 => 
            array (
                'created_at' => '2024-02-05 12:35:52',
                'guard_name' => 'web',
                'id' => 298,
                'name' => 'Cash In Request show',
                'parent' => 'Cash In Request',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            94 => 
            array (
                'created_at' => '2024-02-05 12:35:52',
                'guard_name' => 'web',
                'id' => 299,
                'name' => 'Cash In Request edit',
                'parent' => 'Cash In Request',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            95 => 
            array (
                'created_at' => '2024-02-05 12:35:52',
                'guard_name' => 'web',
                'id' => 300,
                'name' => 'Cash In Request destroy',
                'parent' => 'Cash In Request',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            96 => 
            array (
                'created_at' => '2024-02-05 12:35:52',
                'guard_name' => 'web',
                'id' => 301,
                'name' => 'Cash In Request trash',
                'parent' => 'Cash In Request',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            97 => 
            array (
                'created_at' => '2024-02-05 12:35:52',
                'guard_name' => 'web',
                'id' => 302,
                'name' => 'Cash In Request restore',
                'parent' => 'Cash In Request',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            98 => 
            array (
                'created_at' => '2024-02-05 12:35:52',
                'guard_name' => 'web',
                'id' => 303,
                'name' => 'Cash In Request delete',
                'parent' => 'Cash In Request',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            99 => 
            array (
                'created_at' => '2024-02-05 12:35:52',
                'guard_name' => 'web',
                'id' => 304,
                'name' => 'Cash In Request status',
                'parent' => 'Cash In Request',
                'updated_at' => '2024-02-05 12:35:52',
            ),
            100 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 305,
                'name' => 'Game Setup create',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            101 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 306,
                'name' => 'Game Setup index',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            102 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 307,
                'name' => 'Game Setup show',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            103 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 308,
                'name' => 'Game Setup edit',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            104 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 309,
                'name' => 'Game Setup destroy',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            105 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 310,
                'name' => 'Game Setup trash',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            106 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 311,
                'name' => 'Game Setup restore',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            107 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 312,
                'name' => 'Game Setup delete',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            108 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 313,
                'name' => 'Game Setup status',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            109 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 314,
                'name' => 'Game Setup properties',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            110 => 
            array (
                'created_at' => '2024-02-05 16:49:23',
                'guard_name' => 'web',
                'id' => 315,
                'name' => 'Game Setup print',
                'parent' => 'Game Setup',
                'updated_at' => '2024-02-05 16:49:23',
            ),
            111 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 349,
                'name' => 'Photo Info create',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            112 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 350,
                'name' => 'Photo Info index',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            113 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 351,
                'name' => 'Photo Info show',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            114 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 352,
                'name' => 'Photo Info edit',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            115 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 353,
                'name' => 'Photo Info destroy',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            116 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 354,
                'name' => 'Photo Info trash',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            117 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 355,
                'name' => 'Photo Info restore',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            118 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 356,
                'name' => 'Photo Info delete',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            119 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 357,
                'name' => 'Photo Info status',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            120 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 358,
                'name' => 'Photo Info properties',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            121 => 
            array (
                'created_at' => '2024-02-09 01:18:49',
                'guard_name' => 'web',
                'id' => 359,
                'name' => 'Photo Info print',
                'parent' => 'Photo Info',
                'updated_at' => '2024-02-09 01:18:49',
            ),
            122 => 
            array (
                'created_at' => '2024-02-09 10:24:02',
                'guard_name' => 'web',
                'id' => 382,
                'name' => 'Lottery Request index',
                'parent' => 'Lottery Request',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            123 => 
            array (
                'created_at' => '2024-02-09 10:24:02',
                'guard_name' => 'web',
                'id' => 383,
                'name' => 'Lottery Request show',
                'parent' => 'Lottery Request',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            124 => 
            array (
                'created_at' => '2024-02-09 10:24:02',
                'guard_name' => 'web',
                'id' => 384,
                'name' => 'Lottery Request edit',
                'parent' => 'Lottery Request',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            125 => 
            array (
                'created_at' => '2024-02-09 10:24:02',
                'guard_name' => 'web',
                'id' => 385,
                'name' => 'Lottery Request destroy',
                'parent' => 'Lottery Request',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            126 => 
            array (
                'created_at' => '2024-02-09 10:24:02',
                'guard_name' => 'web',
                'id' => 386,
                'name' => 'Lottery Request trash',
                'parent' => 'Lottery Request',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            127 => 
            array (
                'created_at' => '2024-02-09 10:24:02',
                'guard_name' => 'web',
                'id' => 387,
                'name' => 'Lottery Request restore',
                'parent' => 'Lottery Request',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            128 => 
            array (
                'created_at' => '2024-02-09 10:24:02',
                'guard_name' => 'web',
                'id' => 388,
                'name' => 'Lottery Request delete',
                'parent' => 'Lottery Request',
                'updated_at' => '2024-02-09 10:24:02',
            ),
            129 => 
            array (
                'created_at' => '2024-02-10 10:51:04',
                'guard_name' => 'web',
                'id' => 389,
                'name' => 'Welcome Message create',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            130 => 
            array (
                'created_at' => '2024-02-10 10:51:04',
                'guard_name' => 'web',
                'id' => 390,
                'name' => 'Welcome Message index',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            131 => 
            array (
                'created_at' => '2024-02-10 10:51:04',
                'guard_name' => 'web',
                'id' => 391,
                'name' => 'Welcome Message show',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            132 => 
            array (
                'created_at' => '2024-02-10 10:51:04',
                'guard_name' => 'web',
                'id' => 392,
                'name' => 'Welcome Message edit',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            133 => 
            array (
                'created_at' => '2024-02-10 10:51:04',
                'guard_name' => 'web',
                'id' => 393,
                'name' => 'Welcome Message destroy',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            134 => 
            array (
                'created_at' => '2024-02-10 10:51:04',
                'guard_name' => 'web',
                'id' => 394,
                'name' => 'Welcome Message trash',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            135 => 
            array (
                'created_at' => '2024-02-10 10:51:04',
                'guard_name' => 'web',
                'id' => 395,
                'name' => 'Welcome Message restore',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            136 => 
            array (
                'created_at' => '2024-02-10 10:51:04',
                'guard_name' => 'web',
                'id' => 396,
                'name' => 'Welcome Message delete',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            137 => 
            array (
                'created_at' => '2024-02-10 10:51:04',
                'guard_name' => 'web',
                'id' => 397,
                'name' => 'Welcome Message status',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:04',
            ),
            138 => 
            array (
                'created_at' => '2024-02-10 10:51:05',
                'guard_name' => 'web',
                'id' => 398,
                'name' => 'Welcome Message properties',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:05',
            ),
            139 => 
            array (
                'created_at' => '2024-02-10 10:51:05',
                'guard_name' => 'web',
                'id' => 399,
                'name' => 'Welcome Message print',
                'parent' => 'Welcome Message',
                'updated_at' => '2024-02-10 10:51:05',
            ),
            140 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 400,
                'name' => 'YouTube Live create',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            141 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 401,
                'name' => 'YouTube Live index',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            142 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 402,
                'name' => 'YouTube Live show',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            143 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 403,
                'name' => 'YouTube Live edit',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            144 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 404,
                'name' => 'YouTube Live destroy',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            145 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 405,
                'name' => 'YouTube Live trash',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            146 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 406,
                'name' => 'YouTube Live restore',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            147 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 407,
                'name' => 'YouTube Live delete',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            148 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 408,
                'name' => 'YouTube Live status',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            149 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 409,
                'name' => 'YouTube Live properties',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            150 => 
            array (
                'created_at' => '2024-02-10 11:36:40',
                'guard_name' => 'web',
                'id' => 410,
                'name' => 'YouTube Live print',
                'parent' => 'YouTube Live',
                'updated_at' => '2024-02-10 11:36:40',
            ),
            151 => 
            array (
                'created_at' => '2024-02-12 00:05:57',
                'guard_name' => 'web',
                'id' => 412,
                'name' => 'Cash Out Requst create',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            152 => 
            array (
                'created_at' => '2024-02-12 00:05:57',
                'guard_name' => 'web',
                'id' => 413,
                'name' => 'Cash Out Requst index',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            153 => 
            array (
                'created_at' => '2024-02-12 00:05:57',
                'guard_name' => 'web',
                'id' => 414,
                'name' => 'Cash Out Requst show',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            154 => 
            array (
                'created_at' => '2024-02-12 00:05:57',
                'guard_name' => 'web',
                'id' => 415,
                'name' => 'Cash Out Requst edit',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            155 => 
            array (
                'created_at' => '2024-02-12 00:05:57',
                'guard_name' => 'web',
                'id' => 416,
                'name' => 'Cash Out Requst destroy',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            156 => 
            array (
                'created_at' => '2024-02-12 00:05:57',
                'guard_name' => 'web',
                'id' => 417,
                'name' => 'Cash Out Requst trash',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            157 => 
            array (
                'created_at' => '2024-02-12 00:05:57',
                'guard_name' => 'web',
                'id' => 418,
                'name' => 'Cash Out Requst restore',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            158 => 
            array (
                'created_at' => '2024-02-12 00:05:57',
                'guard_name' => 'web',
                'id' => 419,
                'name' => 'Cash Out Requst delete',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:57',
            ),
            159 => 
            array (
                'created_at' => '2024-02-12 00:05:58',
                'guard_name' => 'web',
                'id' => 420,
                'name' => 'Cash Out Requst status',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:58',
            ),
            160 => 
            array (
                'created_at' => '2024-02-12 00:05:58',
                'guard_name' => 'web',
                'id' => 421,
                'name' => 'Cash Out Requst properties',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:58',
            ),
            161 => 
            array (
                'created_at' => '2024-02-12 00:05:58',
                'guard_name' => 'web',
                'id' => 422,
                'name' => 'Cash Out Requst print',
                'parent' => 'Cash Out Requst',
                'updated_at' => '2024-02-12 00:05:58',
            ),
            162 => 
            array (
                'created_at' => '2024-02-13 01:52:07',
                'guard_name' => 'web',
                'id' => 477,
                'name' => 'User Banner create',
                'parent' => 'User Banner',
                'updated_at' => '2024-02-13 01:52:07',
            ),
            163 => 
            array (
                'created_at' => '2024-02-13 01:52:07',
                'guard_name' => 'web',
                'id' => 478,
                'name' => 'User Banner index',
                'parent' => 'User Banner',
                'updated_at' => '2024-02-13 01:52:07',
            ),
            164 => 
            array (
                'created_at' => '2024-02-13 02:00:47',
                'guard_name' => 'web',
                'id' => 481,
                'name' => 'About Us create',
                'parent' => 'About Us',
                'updated_at' => '2024-02-13 02:00:47',
            ),
            165 => 
            array (
                'created_at' => '2024-02-13 02:01:41',
                'guard_name' => 'web',
                'id' => 482,
                'name' => 'Vision Mission create',
                'parent' => 'Vision Mission',
                'updated_at' => '2024-02-13 02:01:41',
            ),
            166 => 
            array (
                'created_at' => '2024-02-14 13:08:00',
                'guard_name' => 'web',
                'id' => 483,
                'name' => 'Add Cash Balance create',
                'parent' => 'Add Cash Balance',
                'updated_at' => '2024-02-14 13:08:00',
            ),
            167 => 
            array (
                'created_at' => '2024-02-14 16:08:24',
                'guard_name' => 'web',
                'id' => 484,
                'name' => 'Registered Member create',
                'parent' => 'Registered Member',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            168 => 
            array (
                'created_at' => '2024-02-14 16:08:24',
                'guard_name' => 'web',
                'id' => 485,
                'name' => 'Registered Member index',
                'parent' => 'Registered Member',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            169 => 
            array (
                'created_at' => '2024-02-14 16:08:24',
                'guard_name' => 'web',
                'id' => 486,
                'name' => 'Registered Member show',
                'parent' => 'Registered Member',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            170 => 
            array (
                'created_at' => '2024-02-14 16:08:24',
                'guard_name' => 'web',
                'id' => 487,
                'name' => 'Registered Member destroy',
                'parent' => 'Registered Member',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            171 => 
            array (
                'created_at' => '2024-02-14 16:08:24',
                'guard_name' => 'web',
                'id' => 488,
                'name' => 'Registered Member trash',
                'parent' => 'Registered Member',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            172 => 
            array (
                'created_at' => '2024-02-14 16:08:24',
                'guard_name' => 'web',
                'id' => 489,
                'name' => 'Registered Member restore',
                'parent' => 'Registered Member',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            173 => 
            array (
                'created_at' => '2024-02-14 16:08:24',
                'guard_name' => 'web',
                'id' => 490,
                'name' => 'Registered Member delete',
                'parent' => 'Registered Member',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            174 => 
            array (
                'created_at' => '2024-02-14 16:08:24',
                'guard_name' => 'web',
                'id' => 491,
                'name' => 'Registered Member status',
                'parent' => 'Registered Member',
                'updated_at' => '2024-02-14 16:08:24',
            ),
            175 => 
            array (
                'created_at' => '2024-02-15 12:30:57',
                'guard_name' => 'web',
                'id' => 492,
                'name' => 'Active Game Lottery Numbers index',
                'parent' => 'Active Game Lottery Numbers',
                'updated_at' => '2024-02-15 12:30:57',
            ),
            176 => 
            array (
                'created_at' => '2024-02-19 13:17:19',
                'guard_name' => 'web',
                'id' => 493,
                'name' => 'All Lottery index',
                'parent' => 'All Lottery',
                'updated_at' => '2024-02-19 13:17:19',
            ),
            177 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 495,
                'name' => 'Result create',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            178 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 496,
                'name' => 'Result index',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            179 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 497,
                'name' => 'Result show',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            180 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 498,
                'name' => 'Result edit',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            181 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 499,
                'name' => 'Result destroy',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            182 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 500,
                'name' => 'Result trash',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            183 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 501,
                'name' => 'Result restore',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            184 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 502,
                'name' => 'Result delete',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            185 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 503,
                'name' => 'Result status',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            186 => 
            array (
                'created_at' => '2024-02-19 15:57:57',
                'guard_name' => 'web',
                'id' => 504,
                'name' => 'Result properties',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:57',
            ),
            187 => 
            array (
                'created_at' => '2024-02-19 15:57:58',
                'guard_name' => 'web',
                'id' => 505,
                'name' => 'Result print',
                'parent' => 'Result',
                'updated_at' => '2024-02-19 15:57:58',
            ),
            188 => 
            array (
                'created_at' => '2024-03-04 12:07:18',
                'guard_name' => 'web',
                'id' => 506,
                'name' => 'Member Post create',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:18',
            ),
            189 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 507,
                'name' => 'Member Post index',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            190 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 508,
                'name' => 'Member Post show',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            191 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 509,
                'name' => 'Member Post edit',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            192 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 510,
                'name' => 'Member Post destroy',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            193 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 511,
                'name' => 'Member Post trash',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            194 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 512,
                'name' => 'Member Post restore',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            195 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 513,
                'name' => 'Member Post delete',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            196 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 514,
                'name' => 'Member Post status',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            197 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 515,
                'name' => 'Member Post properties',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            198 => 
            array (
                'created_at' => '2024-03-04 12:07:19',
                'guard_name' => 'web',
                'id' => 516,
                'name' => 'Member Post print',
                'parent' => 'Member Post',
                'updated_at' => '2024-03-04 12:07:19',
            ),
            199 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 528,
                'name' => 'Public Post create',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            200 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 529,
                'name' => 'Public Post index',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            201 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 530,
                'name' => 'Public Post show',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            202 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 531,
                'name' => 'Public Post edit',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            203 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 532,
                'name' => 'Public Post destroy',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            204 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 533,
                'name' => 'Public Post trash',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            205 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 534,
                'name' => 'Public Post restore',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            206 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 535,
                'name' => 'Public Post delete',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            207 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 536,
                'name' => 'Public Post status',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            208 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 537,
                'name' => 'Public Post properties',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
            209 => 
            array (
                'created_at' => '2024-03-04 14:14:20',
                'guard_name' => 'web',
                'id' => 538,
                'name' => 'Public Post print',
                'parent' => 'Public Post',
                'updated_at' => '2024-03-04 14:14:20',
            ),
        ));
        
        
    }
}