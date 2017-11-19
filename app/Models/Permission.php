<?php

namespace Chronos\Models;

use Illuminate\Database\Eloquent\Model;
use Chronos\Models\Role;

class Permission extends Model {
	
    protected $fillable = [
		'name', 
		'description',
	];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
