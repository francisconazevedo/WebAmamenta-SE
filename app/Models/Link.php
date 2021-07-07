<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'link'
    ];
}
