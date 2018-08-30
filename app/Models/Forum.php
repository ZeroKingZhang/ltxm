<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Forum extends Model
{
    use SoftDeletes;
    public $table = 'forums';
    protected $primaryKey = 'forum_id';
    //获取类别的树型结构
    static public function getCates( $pid=0)
    {
    	$data = self::where('pid',$pid)->get(); //顶级分类
        $arr = [];
        foreach ($data as $key => $value) {
            $value['sub'] = self::getCates($value->forum_id);//子分类 
            $arr[] = $value;
        }
        return $arr;
    }
    public function invitation()
    {
        return $this->hasMany('App\Models\Invitation','invitation_id');
    }

}
