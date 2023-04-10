<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categories;
use App\Models\Comments;
use App\Models\News;
use App\Models\TagNews;
use App\Models\Tags;
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
        User::factory(100)->create();
        UserInformation::factory(100)->create();
        Tags::factory(100)->create();
        Categories::factory(6)->create();
        News::factory(60)->create();
        TagNews::factory(1000)->create();
        Comments::factory(5000)->create();


    }
}
