<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {// to run it:
        // php artisan db:seed --class=UsersTableSeeder
        DB::table('users')->insert([
            'id' => 11,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'type' => 1,
            'department_id' => 1,
            'collage' => "IT",
            'active' => 1,
            'password' => Hash::make('1'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 217180142,
            'name' => 'Ahmed',
            'email' => 'ahmed@gmail.com',
            'type' => 4,
            'department_id' => 1,
            'collage' => "IT",
            'active' => 1,
            'password' => Hash::make('1'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 217180410,
            'name' => 'Mohammad albay',
            'email' => 'MohammadAlbay99@gmail.com',
            'type' => 4,
            'collage' => "IT",
            'department_id' => 1,
            'active' => 1,
            'password' => Hash::make('1'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 99,
            'name' => 'Ahmed Alhony',
            'email' => 'ahmedalhony@gmail.com',
            'type' => 3,
            'collage' => "IT",
            'department_id' => 1,
            'active' => 1,
            'password' => Hash::make('1'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 98,
            'name' => 'Dhiaf',
            'email' => 'dhiaf@gmail.com',
            'type' => 3,
            'collage' => "IT",
            'department_id' => 1,
            'active' => 1,
            'password' => Hash::make('1'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
