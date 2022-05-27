<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'phone', 'email', 'source_point', 'destination',
        'package_name', 'volume', 'contains', 'date',
    ];
}