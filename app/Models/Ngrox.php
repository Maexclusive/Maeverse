<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ngrox extends Model
{
    use HasFactory;
    protected $table ='tunel_ngrox';
    protected $primaryKey = 'tgk_id';
    protected $fillable = [
        'email',
        'password',
        'host',
        'port'
    ];
}
