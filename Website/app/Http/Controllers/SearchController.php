<?php

namespace App\Http\Controllers;

use App\Models\BusinessAccount;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $resultsFreelancers = User::where('username', 'like', "%$query%")
            ->get()
            ->toArray();

        $resultsEmployers = BusinessAccount::where('company_name', 'like', "%$query")
            ->limit(1)
            ->get()
            ->toArray();

        $employersArray = array();

        foreach ($resultsEmployers as $result) {
            $employersArray[] = (array)$result;
        }

        $freelancersArray = array();

        foreach ($resultsFreelancers as $result) {
            $freelancersArray[] = (array)$result;
        }


        $employerPostsArray = array();
        if (!empty($employersArray)) {

            foreach ($employersArray as $employers) {
                $userId = $employers["user_id"];
            }
            $resultsPosts = Posts::where('user_id', $userId)
                ->get()
                ->toArray();


            foreach ($resultsPosts as $result) {
                $employerPostsArray[] = (array)$result;
            }
        }
        return view('search', ["freelancers" => $freelancersArray, "employers" => $employersArray, "employerPosts" => $employerPostsArray]);
    }
}