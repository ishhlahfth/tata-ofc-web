<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'period',
        'title',
        'description',
    ];

    protected $table = 'experiences';

    protected $primaryKey = 'id';

    public $timestamp = false;
}
