<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Blogroll;
use DB;

class BlogrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search = $request -> input('search',''); //搜索条件
        $count = $request -> input('count',3); //搜索条数
        $data = Blogroll::where('blogroll_name','like','%'.$search.'%') ->orderBy('blogroll_id') -> paginate($count);
        return view('admin.blogroll.index',['data'=>$data,'request'=>$request->all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blogroll.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         DB::beginTransaction(); //开启事务
         //插入数据库
         $blogroll = new Blogroll;
         $blogroll -> blogroll_name = $request -> input('blogroll_name');
         $blogroll -> blogroll_dns  = $request -> input('blogroll_dns');
       
         $res = $blogroll -> save();
         if($res){
            DB::commit(); //提交事务
           return redirect('/blogroll')->with('success','添加成功');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Blogroll::find($id);
        return view('admin.blogroll.edit',['data'=>$data]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         DB::beginTransaction(); //开启事务
        $res = Blogroll::destroy($id);
        if($res){

            DB::commit(); //提交事务
             return redirect('/blogroll')->with('success','删除成功');
        }else{
            DB::rollBack();
             return back()->with('error','删除失败');
        }

    }
}
