<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';
    protected $primaryKey = 'ID_Video';

    const CREATED_AT = 'Added_Date';
    const UPDATED_AT = null;


}
