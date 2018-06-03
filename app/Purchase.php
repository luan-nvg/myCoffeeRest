<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['id_user', 'description', 'date_cancel'];
    protected $guarded  = ['id', 'created_at', 'update_at'];
    protected $table    = 'purchases';

     /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        // return $this->belongsTo('App\User','id_user','id');
   // 	return $this->hasOne('App\User', 'id', 'id_user');
    	return $this->belongsTo('App\User','id_user','id');
    	// return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
    }

}
