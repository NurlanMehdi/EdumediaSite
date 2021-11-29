<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutAndCareers extends Model
{
    use HasFactory;

    protected $table = "about_careers";

    protected $guarded = [];

    public $timestamps = false;
}
