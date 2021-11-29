<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardTranslater extends Model
{
    use HasFactory;

    protected $table = "dashboard_translate";

    protected $guarded = [];

    public $timestamps = false;
}
