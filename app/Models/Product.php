<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    const UPDATED_AT = null;
    const CREATED_AT = NULL;
    use HasFactory;
}
