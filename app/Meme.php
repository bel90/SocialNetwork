<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    
    protected $fillable = [
    	'image_url',
    	'title',
    	'description',
    	'upvotes',
    	'downvotes',
    	'is_flagged',
    	'user_id',
    	'group_id',
    ];
}
