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
    static public function getCates($cates=[], $pid=0)
    {
    	if(empty($cates)){
    		$cates=self::all();
    	}
    	$tmp=[];
    	foreach($cates as $k=>$v){
    		if($v->pid==$pid){
    			$v->sub = self::getCates($cates, $v->forum_id);
    			$tmp[]=$v;
    		}
    	}
    	return $tmp;
    }
}
