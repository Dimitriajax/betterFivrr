<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('public/json/freelancer.json');

        $users = json_decode($json, true);

        foreach ($users as $user) {
            User::query()->create([
                'email' => $user["email"],
                'password' => Hash::make($user["password"]),
                'username' => $user["username"],
                'firstname' => $user["firstname"],
                'middlename' => $user["middlename"],
                'lastname' => $user["lastname"],
                'about' => $user["about"],
                'job' => $user["job"],
                'gender' => $user["gender"],
                'date_of_birth' => $user["age"],
                'location' => $user["location"],
                'profilepicture' => $user["profilepicture"]
            ]);
        }
    }
}