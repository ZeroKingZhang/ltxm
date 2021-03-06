<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Forum;
use DB;


class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
          //接收数据
        $search = $request -> input('search',''); //搜索条件
        $count = $request -> input('count',3); //搜索条数
        $data = Forum::select('*',DB::raw('concat(path,forum_id) as paths'))->orderBy('paths')->get();
        return view('admin.forum.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $cates = Forum::select('*',DB::raw('concat(path,forum_id) as paths'))->orderBy('paths')->get();
        return view('admin.forum.create',['cates'=>$cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // 检测是否有文件上传
        
        $pid = $request -> input('pid');
          if($pid==0){
            $path='0,'; //如果父类是0，那么path就是'0,'
        }else{
            //如果父类ID不是0，那么path就是 父类path连接上父pid  
            $path=Forum::find($pid)->path."$pid,";         
        }
         DB::beginTransaction(); //开启事务
         //插入数据库
         $forum = new Forum;
         $forum -> forum_name = $request -> input('forum_name');
         $forum -> forum_info  = $request -> input('forum_info');
         $forum -> pid  = $pid;
         $forum -> path = $path;
       
         $res = $forum -> save();
         if($res){
            DB::commit(); //提交事务
           return redirect('/admin/forum')->with('success','添加成功');
         }else{
            DB::rollBack();
            return back()->with('error','添加失败');
         }
        dump($request->all());

    }   
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        DB::beginTransaction(); //开启事务
        $forum = Forum::find($id);
        $forum -> forum_status = 1;
        $res = $forum -> save();
        if($res){
             DB::commit(); //提交事务
            return redirect('/admin/forum')->with('success','更新成功');
        }else{
             DB::rollBack();
            return back()->with('error','更新失败');
        }

    }
    public function show1($id)
    {
        DB::beginTransaction(); //开启事务
        $forum = Forum::find($id);
        $forum -> forum_status = 0;
        $res = $forum -> save();
        if($res){
             DB::commit(); //提交事务
            return redirect('/admin/forum')->with('success','更新成功');
        }else{
             DB::rollBack();
            return back()->with('error','更新失败');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Forum::find($id);
        return view('admin.forum.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         DB::beginTransaction(); //开启事务
         $forum = Forum::find($id);
         $forum -> forum_name = $request -> input('fname');
         $forum -> forum_info  = $request -> input('forum_info');
         $res = $forum -> save();
          if($res){
            DB::commit(); //提交事务
           return redirect('/admin/forum')->with('success','修改成功');
         }else{
            DB::rollBack();
            return back()->with('error','修改失败');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        DB::beginTransaction(); //开启事务
        $res = Forum::destroy($id);
        if($res){

            DB::commit(); //提交事务
             return redirect('/admin/forum')->with('success','删除成功');
        }else{
            DB::rollBack();
             return back()->with('error','删除失败');
        }

    }
}
