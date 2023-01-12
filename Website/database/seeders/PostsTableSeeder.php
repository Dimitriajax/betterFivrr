<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $json = Storage::disk('local')->get('public/json/advertenties.json');
        $posts = json_decode($json, true);

        foreach ($posts as $post) {

            Posts::query()->create([
                'title' => $post['title'],
                'sector' => $post['sector'],
                'category' => $post['category'],
                'description' => $post['description'],
                'price' => $post['price'],
                'placed_by' => $post['placed_by'],
                'primary_picture' => $post['primary_picture'],
                'secondary_picture' => $post['picture_secondary'],
                'tertiary_picture' => $post['picture_tertiary'],

                'user_id' => $post['user_id']
            ]);
        }
    }
}