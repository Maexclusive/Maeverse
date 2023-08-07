<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class TunelProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('tunel_provider', function(Blueprint $table){
            $table->increments('tpr_id');
            $table->string('name');
            $table->string('deskripsi');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }
}
