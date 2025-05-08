<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ball_by_balls', function (Blueprint $table) {
            $table->id();
            $table->foreignId("match_id")->constrained("cricket_matches")->cascadeOnDelete();
            $table->enum("innings_number",[1,0]);
            $table->string("over_number");
            $table->string("ball_in_over");
            $table->foreignId("batting_id")->constrained("teams")->cascadeOnDelete();
            $table->foreignId("bowling_id")->constrained("teams")->cascadeOnDelete();
            $table->integer("runs")->default(0);
            $table->integer("is_wicket")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ball_by_balls');
    }
};
