<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact_reasons')->insert([
            [
                'description' => 'Giải pháp SAP Business One',
                'description_en' => 'SAP Business One Solution',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => 'Giải pháp Oracle Netsuite',
                'description_en' => 'Oracle NetSuite Solution',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => 'Báo cáo & Bảng điều khiển dữ liệu Power BI',
                'description_en' => 'Power BI Data Reporting & Dashboard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => 'Giải pháp quản lý sản xuất Boyum Beas',
                'description_en' => 'Boyum Beas Manufacturing Management Solution',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
