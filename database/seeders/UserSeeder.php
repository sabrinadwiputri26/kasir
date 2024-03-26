<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("4dm1n")
        ]);
        User::create([
            "name" => "azel",
            "email" => "azel@gmail.com",
            "password" => bcrypt("coding")
        ]);

        $adminAccount = User::where("name", "=", "Admin")->first();
        $adminAccount->assignRole("administrator");

        $petugasAccount = User::where("name", "=", "azel")->first();
        $petugasAccount->assignRole("petugas");
    }
}