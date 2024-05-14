<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
    public $timestamps = false;

    protected $casts = [
        'date_created' => 'datetime',
    ];

    protected $fillable = [
        'title',
        'username',
        'pfp',
        'content',
        'date_created',
        'date_modified',
        'mood',
        'attachments',
        'deleted',
        'version'
    ];

}