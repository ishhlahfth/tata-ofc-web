<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cookies extends Model
{
    use HasFactory;

    protected $table = 'cookies';

    protected $primaryKey = 'id';

    public $timestamp = false;
}
