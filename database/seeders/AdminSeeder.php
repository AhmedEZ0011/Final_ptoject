<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     * في حالة تريد ادخال بيانات الي قاعدة بيانات طريقة يدوية 
     * لتنفيذه يجب الدهاب الي databaseSeeder
     */
    public function run(): void
    {
        Admin::created([
            'departments_id' =>'1',
            'faculty_id' =>'1010',
            'role' =>'supervisor',
        ]);
    }
}
