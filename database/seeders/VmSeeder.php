<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class VmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('vm', function(Blueprint $table){
            $table->increments('vm_id');
            $table->string('vm_name');
            $table->string('vm_ethernet');
            $table->string('vm_ip');
            $table->string('vm_gateway');
            $table->string('vm_name_server');
            $table->string('vm_vlan');
            $table->string('vm_host');
            $table->string('vm_hostname');
            $table->string('vm_os');
            $table->string('vm_kernel');
            $table->string('note');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

            DB::table('vm')->insert([
            'vm_name' => 'API-SubData1-50-234',
            'vm_ethernet' => 'ens160',
            'vm_ip' => '192.168.50.234/24',
            'vm_gateway' => '192.168.50.234/24',
            'vm_name_server' => '192.168.50.234/24',
            'vm_vlan' => 'LOKAL-227IN',
            'vm_host' => '10.1.12.64',
            'vm_hostname' => 'apidata',
            'vm_os' => 'Ubuntu 20.04.3 LTS (Focal Fossa)',
            'vm_kernel' => 'Linux 5.4.0-135-generic #152-Ubuntu SMP Wed Nov 23 20:19:22 UTC 2022',
            'note' => 'ada',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
