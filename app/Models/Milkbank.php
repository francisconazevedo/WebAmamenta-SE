<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Milkbank extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * Fillable fields
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'cep',
        'address',
        'number',
        'complement',
        'contact'
    ];
}
