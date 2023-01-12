<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function getUserPosts($userId)
    {
        $postsArray = array();
        $test = array();

        $posts = DB::table('posts')
            ->where('user_id', $userId)
            ->orderBy('sector')
            ->get()
            ->toArray();

        foreach ($posts as $post) {
            $postsArray[] = (array)$post;
        }



        return $postsArray;
    }


    public function getUser(Request $request)
    {
        $username = $request->route('username');

        $business = DB::table('business_accounts')
            ->where("company_name", $username)
            ->first();

        if (!is_null($business)) {

            $businessData = (array)$business;

            return view('userEmployer', ['businessInfo' => $businessData, 'posts' => $this->getUserPosts($businessData["user_id"])]);
        }


        if (is_null($business)) {
            $user = DB::table('users')->select('id', 'email', 'username', 'firstname', 'middlename', 'lastname', 'about', 'job', 'gender', 'location', 'profilepicture')
                ->where('username', $username)
                ->first();

            if (!is_null($user)) {
                $userData = (array)$user;

                $businessConnection =  DB::table('business_accounts')
                    ->where("user_id", $userData["id"])
                    ->first();

                if (is_null($businessConnection)) {
                    return view('user', ['userInfo' => $userData, 'posts' => $this->getUserPosts($userData["id"])]);
                }
            }

            abort(404);
        }
    }
}