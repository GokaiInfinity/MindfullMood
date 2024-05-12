<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tryjournal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["title", "content","date"];

}
