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
                'created_at' => '2023-11-02 11:14:50',
                'guard_name' => 'web',
                'id' => 279,
                'name' => 'Test Menu index',
                'parent' => 'Test Menu',
                'updated_at' => '2023-11-02 11:14:50',
            ),
        ));
        
        
    }
}