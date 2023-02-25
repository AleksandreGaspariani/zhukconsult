<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable = [
        'image',
        'label1',
        'label2',
        'phone',
        'email',
        'vat',
        'map_link',
    ];
}
