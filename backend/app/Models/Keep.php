<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keep extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "keepers";

    protected $fillable = [
        "animal_id",
        "owner_id",
    ];
}
