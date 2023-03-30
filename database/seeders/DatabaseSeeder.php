<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        News::factory(10)->create();
//        $users = User::factory(10)->create();
//        $userInfo = UserInformation::factory(10)->create();

//        foreach($users as $user)
//        {
//            dd($user);
//        }

//        dd($posts);
    }
}
