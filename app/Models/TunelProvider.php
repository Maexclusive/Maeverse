<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TunelProvider extends Model
{
    use HasFactory;
    protected $table ='tunel_provider';
    protected $primaryKey = 'tpr_id';
    protected $fillable = [
        'name',
        'deskripsi'
    ];
}
