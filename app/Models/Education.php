<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'period',
        'institute',
        'description',
    ];

    protected $table = 'education';

    protected $primaryKey = 'id';

    public $timestamp = false;
}
