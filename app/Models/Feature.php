<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'features'; // Match your database table name

    protected $fillable = [
        'feature_name',
        'description',
    ];
}
