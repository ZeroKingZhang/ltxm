<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AdminUser extends Model
{
   use SoftDeletes;
   protected $table = 'admin_user';
   public $primaryKey = 'admin_user_id';

}
