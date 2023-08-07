<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CloudflareDomain;

class Cloudflare extends Model
{
    use HasFactory;
    protected $table ='tunel_cloudflared';
    protected $primaryKey = 'tcf_id';
    protected $fillable = [
        'cfd_id',
        'tunel_name',
        'tunel_host',
        'tunel_type',
        'tunel_login_users',
        'tunel_login_password',
        'tunel_login_key'
    ];
}
