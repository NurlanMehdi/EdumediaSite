<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studies extends Model
{
    use HasFactory;

    protected $table = "studies_items";

    protected $guarded = [];

    public $timestamps = false;

}
