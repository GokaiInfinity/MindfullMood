<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tryjournal extends Model
{
    use HasFactory;

    // Enable timestamps
    public $timestamps = false;

    protected $casts = [
        'date_created' => 'datetime',
    ];

    // Specify the fillable attributes
    protected $fillable = [
        'title',
        'content',
        'date_created',
        'mood',
        'tags',
        'location',
        'weather',
        'attachments',
        'deleted',
        'version',
        'font_color',
        'font_format',
        'font_family',
    ];

}
