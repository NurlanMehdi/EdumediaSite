<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudiesTranslater extends Model
{
    use HasFactory;

    protected $table = "studies_translate";

    protected $guarded = [];

    public $timestamps = false;
}
