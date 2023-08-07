<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class TunelNgroxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('tunel_ngrox', function(Blueprint $table){
            $table->increments('tgk_id');
            $table->string('email');
            $table->string('password');
            $table->string('host');
            $table->string('port');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }
}
