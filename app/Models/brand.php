<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table = 'brand';
    const UPDATED_AT = null;
    const CREATED_AT = NULL;
    use HasFactory;
}
