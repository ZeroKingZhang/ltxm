<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
	use SoftDeletes;				
    public $table = 'invitation';
    protected $primaryKey = 'invitation_id';
    protected $dates = ['deleted_at'];
}
