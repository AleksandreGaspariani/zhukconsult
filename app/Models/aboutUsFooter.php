<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutUsFooter extends Model
{
    use HasFactory;

    protected $table = 'aboutus_footer';

    protected $fillable = [
        'footer_text',
        'footer_email',
    ];

}
