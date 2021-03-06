<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Forum;
use DB;
class ForumdeleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        
        //接收数据
        $search = $request -> input('search',''); //搜索条件
        $count = $request -> input('count',3); //搜索条数
        //获取被删除的数据
        $flights = Forum::onlyTrashed()->where('forum_name','like','%'.$search.'%') ->orderBy('forum_id') -> paginate($count);
        // dd($flights);
        return view('admin.user.list',['deldata'=>$flights,'request'=>$request->all()]);
    }

    

    public function getDestory(Request $request,$id)
    {      
        //删除并得到结果
        $flights = Forum::onlyTrashed()->find($id);
        $flights->forceDelete();
       
         //返回结果
        
             // DB::commit();//提交事务
            return redirect('/Forum/index') -> with('success','删除成功');
        // }else{
        //     DB::rollBack();
        //     return back() -> with('error','删除失败');
        // }
        // $flights = Forum::onlyTrashed()->find($id);

        // $flights->forceDelete();
    } 

    public function getRollback($id)
    {
        //开启事务
        DB::beginTransaction();
        //恢复并得到结果
        $res = Forum::withTrashed()->where('forum_id',$id) ->restore();
        //返回结果
        if ( $res ){
            DB::commit();//提交事务
            return redirect('/Forum/index') -> with('success','恢复成功');
        }else{
            DB::rollBack();
            return back() -> with('error','恢复失败');
        }
    }
}
