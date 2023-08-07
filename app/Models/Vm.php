<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vm extends Model
{
    use HasFactory;
    protected $table ='vm';
    protected $primaryKey = 'vm_id';
    protected $fillable = [
        'vm_name',
        'vm_ethernet',
        'vm_ip',
        'vm_gateway',
        'vm_name_server',
        'vm_vlan',
        'vm_host',
        'vm_hostname',
        'vm_os',
        'vm_kernel',
        'note'
    ];
}
