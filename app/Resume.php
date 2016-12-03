<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    
	/** @var Mass assignement  */
    protected $fillable = ['title','resume','file'];


    /**
     * Relationship to user
     * @return  
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
