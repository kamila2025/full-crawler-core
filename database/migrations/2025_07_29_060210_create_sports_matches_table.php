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
        Schema::create('sports_matches', function (Blueprint $table) {
            $table->id();
            $table->date('match_date')->comment('比賽日期');
            $table->string('category')->comment('比賽類型');
            $table->string('team_top')->comment('主隊');
            $table->string('team_bottom')->comment('客隊');
            $table->string('spread')->comment('讓盤');
            $table->string('result')->comment('戰績');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports_matches');
    }
};
