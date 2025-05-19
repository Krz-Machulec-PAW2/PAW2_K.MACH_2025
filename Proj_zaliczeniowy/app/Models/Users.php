<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'ID_User';

    public $timestamps = false;

    public function role(){
        return $this->belongsTo(Role::class, 'ID_Role', 'ID_Role');
    }
}
