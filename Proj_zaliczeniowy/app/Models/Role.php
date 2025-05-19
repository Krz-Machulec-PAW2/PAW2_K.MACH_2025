<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'ID_Role';

    public $timestamps = false;

    public function users(){
        return $this->hasMany(User::class, 'ID_Role', 'ID_Role');
    }
}
