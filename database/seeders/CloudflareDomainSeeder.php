<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CloudflareDomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('cloudflare_domain', function(Blueprint $table){
            $table->increments('cfd_id');
            $table->string('domain_name');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

        });
    }
}
