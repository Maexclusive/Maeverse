<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('company', function(Blueprint $table){
            $table->increments('company_id');
            $table->string('company_name');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

        });
    }
}
