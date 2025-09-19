<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        $multipleUser = [
            ['name'=>'super admin','email'=>'superadmin@pleximus.com','password' => Hash::make('admin2024'),'img'=>'','status'=>1],		
		 ];
		 User::insert($multipleUser);
    }
}
