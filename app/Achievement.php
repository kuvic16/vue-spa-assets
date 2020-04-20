<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    /**
     * Table name associated with
     *
     * @var $table
     */
    protected $table = 'achievements';


    /**
     * Specify primary key
     *
     * @var $primaryKey
     */
    protected $primaryKey = 'id';

    /**
     * Specify increment true
     *
     * @var $incrementing
     */
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * A achievement has one user
     * 
     * @return Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
