<?php

namespace Database\Seeders;

use App\Models\BuisnessAccount;
use App\Models\BusinessAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class BusinessAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/business.json');

        $buisnesses = json_decode($json, true);

        foreach ($buisnesses as $buisness) {
            BusinessAccount::query()->create([
                'company_name' => $buisness["company_name"],
                'address' => $buisness["address"],
                'zipcode' => $buisness["zipcode"],
                'country' => $buisness["country"],
                'sector' => $buisness["sector"],
                'about' => $buisness["about"],
                'company_logo' => $buisness["company_logo"],
                'user_id' => $buisness["user_id"]
            ]);
        }
    }
}