<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tulajdonos extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "tulajdonos";

    protected $fillable = [
        "allat_id",
        "gazdi_id",
    ];
}
