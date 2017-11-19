<?php

namespace Chronos\Models;

use Illuminate\Database\Eloquent\Model;
use Chronos\Models\Permission;
use Chronos\Models\Role;

class Role extends Model {
    
    protected $fillable = [
		'name', 
		'description',
	];


    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

   
    public function hasAnyPermissions($permissions)
    {
        if(is_array($permissions) || is_object($permissions) ) {
            return !! $permissions->intersect($this->permissions)->count();
        }
        
        return $this->permissions->contains('name', $permissions);
    }
   
}
