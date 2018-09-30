<?php

namespace App\Models;
use Illuminate\Database\Capsule;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comments extends Eloquent
{
		protected $table = 'comments';
		
    protected $fillable = [
    		'id',
        'name',
        'email',
        'comment'
    ];
}