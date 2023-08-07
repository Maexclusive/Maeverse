<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class TunnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('tunnel', function(Blueprint $table){
            $table->increments('tunel_id');
            $table->unsignedBigInteger('tcf_id');
            $table->unsignedBigInteger('tgk_id');
            $table->unsignedBigInteger('tpr_id');
            $table->foreign('tcf_id')->references('tcf_id')->on('tunel_cloudflared')->onDelete('cascade');
            $table->foreign('tgk_id')->references('tgk_id')->on('tunel_ngrox')->onDelete('cascade');
            $table->foreign('tpr_id')->references('tpr_id')->on('tunel_provider')->onDelete('cascade');
        });
    }
}
