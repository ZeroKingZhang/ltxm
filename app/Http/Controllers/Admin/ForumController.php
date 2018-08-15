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
        $data = Forum::where('forum_name','like','%'.$search.'%') ->orderBy('forum_id') -> paginate($count);
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
        return view('admin.forum.create');
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
        if($request -> hasFile('forum_pic')){
            $profile =  $request -> file('forum_pic');// 创建上传对象
            // 处理文件名称
            $temp_name = str_random(20);
            $ext = $profile -> getClientOriginalExtension();//获取后缀
            $name = $temp_name.'.'.$ext;
            // 拼接路径
            $dir = './uploads/'.date('Ymd',time());
            // 拼接向数据库存储的文件路径
            $filename = ltrim($dir.'/'.$name,'.');
             // echo $filename;
            // 执行上传
            $profile -> move($dir,$name);
         }else{
            dd('请选择文件');
         }
         DB::beginTransaction(); //开启事务
         //插入数据库
         $forum = new Forum;
         $forum -> forum_name = $request -> input('fname');
         $forum -> forum_pic  = $filename;
       
         $res = $forum -> save();
         if($res){
            DB::commit(); //提交事务
           return redirect('/admin/forum')->with('success','添加成功');
         }else{
            DB::rollBack();
            return back()->with('error','添加失败');
         }

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
        // 检测是否有文件上传
        if($request -> hasFile('forum_pic')){
            $profile =  $request -> file('forum_pic');// 创建上传对象
            // 处理文件名称
            $temp_name = str_random(20);
            $ext = $profile -> getClientOriginalExtension();//获取后缀
            $name = $temp_name.'.'.$ext;
            // 拼接路径
            $dir = './uploads/'.date('Ymd',time());
            // 拼接向数据库存储的文件路径
            $filename = ltrim($dir.'/'.$name,'.');
             // echo $filename;
            // 执行上传
            $profile -> move($dir,$name);
         }else{
            dd('请选择文件');
         }
         DB::beginTransaction(); //开启事务
         $forum = Forum::find($id);
         $forum -> forum_name = $request -> input('fname');
         $forum -> forum_pic  = $filename;
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
