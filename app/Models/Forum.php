<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Forum extends Model
{
    use SoftDeletes;
    public $table = 'forums';
    protected $primaryKey = 'forum_id';
}
