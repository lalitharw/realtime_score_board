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

        \Log::info($request->all());
        // broadcast(new scoreUpdated($request->team,$request->score,$request->type));
    }
}
