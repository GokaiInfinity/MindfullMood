<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'user_id',
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

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
