<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'test seeding',
            'email' => 'testseeding@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Pass123456'),
            'remember_token' => Str::random(10),
        ]);
    }
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     DB::table('users')->insert([
    //         'name' => Str::random(10),
    //         'email' => Str::random(10).'@example.com',
    //         'password' => Hash::make('password'),
    // }
}
