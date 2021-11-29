<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslate extends Model
{
    use HasFactory;

    protected $table = "post_translate";

    protected $guarded = [];

    public $timestamps = false;
}
