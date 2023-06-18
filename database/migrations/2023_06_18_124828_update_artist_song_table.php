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
        Schema::table('artist_songs', function (Blueprint $table) {
            $table->bigInteger('artist_id')->unsigned()->change();
            $table->bigInteger('song_id')->unsigned()->change();

            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('song_id')->references('id')->on('songs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
