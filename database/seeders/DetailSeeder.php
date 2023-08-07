<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('details', function(Blueprint $table){
            $table->increments('detail_id');
            $table->unsignedBigInteger('vm_id');
            $table->unsignedBigInteger('tunel_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('detail_op_id');
            $table->foreign('vm_id')->references('vm_id')->on('vm')->onDelete('cascade');
            $table->foreign('tunel_id')->references('tunel_id')->on('tunnel')->onDelete('cascade');
            $table->foreign('company_id')->references('company_id')->on('company')->onDelete('cascade');
            $table->foreign('detail_op_id')->references('detail_op_id')->on('detail_option')->onDelete('cascade');
        });
    }
}
