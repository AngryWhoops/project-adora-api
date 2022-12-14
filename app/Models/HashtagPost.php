<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HashtagPost extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'hashtag_post';
    protected $primaryKey = 'id';
    protected $fillable = [
        'hashtag_id',
        'post_id'
    ];
}
