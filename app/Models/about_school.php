<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_school extends Model
{
    use HasFactory;

    protected $fillable = [
        'descreption',
        'picture',
        'contact',
        'school_link'
    ];
}
