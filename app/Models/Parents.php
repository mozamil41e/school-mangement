<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    /** @use HasFactory<\Database\Factories\ParentsFactory> */
    use HasFactory;
    protected $fillable = [
        'school_id',
        'name',
        'email',
        'phone',
        'password_hash',
        'meta',
    ];
}
