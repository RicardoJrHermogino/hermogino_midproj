<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phoneDetails extends Model
{
    use HasFactory;
    protected $table = "phone_list";

    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
        'phone_name',
        'price',
        'color',
        'size',
        'image',
        'processor',
        'ram',
        'storage',
        'camera',
        'display',
    ];
}