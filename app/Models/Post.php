<?php

namespace Chronos\Models;

use Illuminate\Database\Eloquent\Model;
use Chronos\User;

class Post extends Model {
    
    protected $fillable = [
		'title', 'description'
	];

	public function user()
    {
        return $this->belongsTo(User::class);
    }

}
