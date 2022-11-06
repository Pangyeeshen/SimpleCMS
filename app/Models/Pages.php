<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'sequences'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'name' => 'string',
        'code' => 'string',
        'sequences' => 'integer',
    ];
}
