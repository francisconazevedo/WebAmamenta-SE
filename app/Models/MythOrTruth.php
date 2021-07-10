<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MythOrTruth extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $table = 'mythsortruths';
    protected $primaryKey = 'id';
    protected $fillable = [
        'assumption',
        'response',
        'response_bool'
    ];
}
