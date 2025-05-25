<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("working")->insert([
            [
                "clinic_id"=>1,
                "worker_id"=>1
            ],
            [
                "clinic_id"=>1,
                "worker_id"=>2
            ]
        ]);
    }
}
