<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_developer extends Model
{
    use HasFactory;
    protected $fillable = [
        'descreption',
        'picture',
        'contact',
        'developer_link',
        'location'
    ];
}
