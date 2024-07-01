<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("departments")->insert([
            'department_id' => "WT",
            'name' => "Web Technology"
        ]);

        DB::table("departments")->insert([
            'department_id' => "SE",
            'name' => "Software Engineer"
        ]);
    }
}
