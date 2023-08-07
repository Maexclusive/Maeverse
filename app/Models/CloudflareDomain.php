<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cloudflare;

class CloudflareDomain extends Model
{
    use HasFactory;
    protected $table ='cloudflare_domain';
    protected $primaryKey = 'cfd_id';
    protected $fillable = [
        'domain_name'
    ];
}
