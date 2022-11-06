<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'content',
        'sequences',
        'page_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'name' => 'string',
        'code' => 'string',
        'content' => 'string',
        'sequences' => 'integer',
        'page_id' => 'integer',
    ];
}
