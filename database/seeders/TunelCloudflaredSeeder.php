<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class TunelCloudflaredSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('tunel_cloudflared', function(Blueprint $table){
            $table->increments('tcf_id');
            $table->unsignedBigInteger('cfd_id');
            $table->string('tunel_name');
            $table->string('tunel_host');
            $table->string('tunel_type');
            $table->string('tunel_login_users');
            $table->string('tunel_login_password');
            $table->string('tunel_login_key');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->foreign('cfd_id')->references('cfd_id')->on('cloudflare_domain')->onDelete('cascade');

        });
    }
}
