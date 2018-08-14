<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    public $table = 'invitation';
    protected $primaryKey = 'invitation_id';
}
