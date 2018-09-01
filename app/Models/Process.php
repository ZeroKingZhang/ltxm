<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Process extends Model
{
    use SoftDeletes;
    protected $table = 'process';

    protected $primaryKey = 'id';
}
