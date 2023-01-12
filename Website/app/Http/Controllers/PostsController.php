<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    public function getPost(Request $request)
    {
        $postId = $request->route('postId');

        $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->where('posts.id', $postId)
            ->first();

        // $postsArray = array();
        // foreach ($posts as $post) {
        //     $postsArray[] = $post;
        // }

        $postsArray = (array)$posts;


        $businessConnection =  DB::table('business_accounts')
            ->where("user_id", $postsArray["user_id"])
            ->first();




        if (!is_null($businessConnection)) {

            $posts = DB::table('posts')
                ->join('business_accounts', 'business_accounts.user_id', '=', 'posts.user_id')
                ->where('posts.id', $postId)
                ->first();

            return view('applicationEmployer', ['businessInfo' => (array)$businessConnection, "post" => (array)$posts]);
        } else {
            return view('application', ["post" => (array)$posts]);
        }



        if (is_null($posts)) {
            abort(404);
        }

        // return view('application', ['post' => (array)$posts]);
    }


    public function getAllFreelancePosts()
    {
        $posts = DB::table('posts')
            ->where('placed_by', 'freelancer')
            ->orderBy('sector')
            ->get()
            ->toArray();

        foreach ($posts as $post) {
            $postsArray[] = (array)$post;
        }
        $uniqueSectors = array();

        foreach ($postsArray as $post) {
            $test[$post["sector"]][] = $post;

            if (!in_array($post["sector"], $uniqueSectors)) {
                $uniqueSectors[] = $post["sector"];
            }
        }

        return view('applications', ['posts' => $test, 'search' => "freelancer", 'sectors' => $uniqueSectors]);
    }

    public function getAllEmployerPosts()
    {
        $posts = DB::table('posts')
            ->where('placed_by', 'employer')
            ->orderBy('sector')
            ->get()
            ->toArray();

        $postsArray = array();

        foreach ($posts as $post) {
            $postsArray[] = (array)$post;
        }

        $uniqueSectors = array();
        $test = array();

        foreach ($postsArray as $post) {
            $test[$post["sector"]][] = $post;

            if (!in_array($post["sector"], $uniqueSectors)) {
                $uniqueSectors[] = $post["sector"];
            }
        }

        return view('applicationsEmployer', ['posts' => $test, 'search' => "werkgever", 'sectors' => $uniqueSectors]);
    }


    public function getAllFeaturedPosts()
    {
        $freelancerPosts = DB::table('posts')
            ->where('placed_by', 'freelancer')
            ->limit(10)
            ->get()
            ->toArray();

        $freelancerPostsArray = array();

        foreach ($freelancerPosts as $post) {
            $freelancerPostsArray[] = (array)$post;
        }

        $employerPosts = DB::table('posts')
            ->where('placed_by', 'employer')
            ->limit(10)
            ->get()
            ->toArray();

        $employerPostsArray = array();

        foreach ($employerPosts as $post) {
            $employerPostsArray[] = (array)$post;
        }

        return view('home', ['freelancers' => $freelancerPostsArray, 'employers' => $employerPostsArray]);
    }



    public function create(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->input("title"),
            'category' => $request->input("category"),
            'sector' => $request->input("sector"),
            'price' => $request->input("price"),
            'placed_by' => $request->input('applicationType'),
            'user_id' => Auth::user()->id,
            'primary_picture' => "https://picsum.photos/id/1/200/300",
            'description' => $request->input("description"),
        ]);


        return redirect(route('user', Auth::user()->username));
    }
}