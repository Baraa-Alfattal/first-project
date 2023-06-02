<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hello_message extends Model
{
    use HasFactory;
    protected $table = "hello_messages";
    protected $fillable = [
        'descreption',
        'picture',
        'message'
    ];
}
