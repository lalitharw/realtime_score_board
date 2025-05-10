<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Events\scoreUpdated;

class ScoreController extends Controller
{
    public function updateScore(Request $request){
        $request->validate([
            "home_team_id" => "required|exists:teams,id",
            "away_team_id" => "required|exists:teams,id",
            "runs" => "required"
        ]);

        $test = scoreUpdated::dispatch($request->home_team_id, $request->away_team_id);
        \Log::info($test);
        return response([
            "message" => "Score Updated Successfully",
            "success" => true
        ],200);
    }
}
