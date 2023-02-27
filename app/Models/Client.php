<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'position',
        'image',
        'image1',
        'image2',
        'image_link',
        'image_link2',
        'image_link3'
    ];

    use HasFactory;
}
