<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'title',
        'category',
        'time',
        'date',
        'platform',
        'link',
        'description',
        'img'
    ];
}
