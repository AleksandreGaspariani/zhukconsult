<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    protected $table = 'homepages';

    protected $fillable = [
        'image_name',
        'text',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
