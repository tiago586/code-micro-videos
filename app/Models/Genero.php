<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Model
{
    public $incrementing = false;
    protected $KeyType = 'string';
    use SoftDeletes, Traits\Uuid;
    protected $fillable = ['name', 'is_active'];
    protected $dates = ['deleted_at'];
}
