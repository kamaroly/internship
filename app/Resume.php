<?php

namespace App;

use Sentry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    /**
     * Search resume based on the give keyword
     * @param   $keyword 
     * @return  collection of found resume
     */
    public static function search($keyword)
    {
        return self::where('title','LIKE','%'.$keyword.'%')
                   ->orWhere('resume','LIKE','%'.$keyword.'%');

    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        
        static::bootUsedByUser();
    }


    /**
     * Boot the global scope
     */
    protected static function bootUsedByUser()
    {


        static::addGlobalScope('user', function (Builder $builder) {

            $user =  Sentry::getUser();
            // Only apply filter if the user is not part of 
            // the admin group
            if (!$user->hasAccess('admin') &&  !$user->hasAccess('employers')) {
                $builder->where('user_id', Sentry::getUser()->id);
            }
        });
    }

}
