<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

class catFactController extends Controller
{
    public function show()
    {
        try {
            $catFact = Http::get('https://catfact.ninja/fact')->json('fact');
        } catch (\Exception $e) {
            $catFact = "Failed to get cat facts due to some error: " . $e->getMessage();
        }

        $response = [
            "status" => "success",
            "user" => [
                "email" => "bethranjerry@gmail.com",
                "name" => "Divine-Bethran Jerry",
                "stack" => "PHP/Laravel"
            ],
            "timestamp" => Carbon::now()->toIso8601String(),
            "fact" => $catFact
        ];

        return response()->json($response, 200);
    }
}
