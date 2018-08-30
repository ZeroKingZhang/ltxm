<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'note';

    protected $primaryKey = 'id';
    //回复属于用户
    public function user()
	{
	    return $this->belongsTo('App\User','uid');
	}
	//回复属于帖子
	public function invitation()
	{
	    return $this->belongsTo('App\Models\Invitation','invitation_id');
	}
}
