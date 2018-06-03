<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['id_user', 'description', 'date_cancel'];
    protected $guarded  = ['id', 'created_at', 'update_at'];
    protected $table    = 'purchases';
}
