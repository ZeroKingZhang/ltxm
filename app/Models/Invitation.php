<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Note;

class Invitation extends Model
{
	use SoftDeletes;				
    public $table = 'invitation';
    protected $primaryKey = 'invitation_id';
    protected $dates = ['deleted_at'];

    //帖子属于用户
    public function user()
	{
	    return $this->belongsTo('App\User','uid');
	}
	//帖子属于版块
    public function forum()
	{
	    return $this->belongsTo('App\Models\Forum','forum_id');
	}
	public function note()
	{
	    return $this->hasMany('App\Models\Note','invitation_id');
	}
}
