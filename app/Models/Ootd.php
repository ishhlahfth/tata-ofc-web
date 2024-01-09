<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ootd extends Model
{
    use HasFactory;

    protected $table = 'ootds';

    protected $primaryKey = 'id';

    public $timestamp = false;
}
