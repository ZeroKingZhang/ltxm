<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Process;
use DB;
class ProcessDeleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //接收数据
        $search = $request -> input('search',''); //搜索条件
        $count = $request -> input('count',3); //搜索条数
        //获取数据
        $data = Process::onlyTrashed() -> where('content','like','%'.$search.'%') ->orderBy('id') -> paginate($count);
        //加载模板
         return view('admin.process.list',['deldata'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //获取数据
        $process = Process::onlyTrashed() -> find($id);
        //添加模板
        return view('admin.process.show', ['data' => $process]);
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
        //开启事务
        DB::beginTransaction();
        //恢复并得到结果
        $res = Process::withTrashed()->where('id',$id) ->restore();
        //返回结果
        if ( $res ){
            DB::commit();//提交事务
            return redirect('/admin/process') -> with('success','恢复成功');
        }else{
            DB::rollBack();
            return back() -> with('error','恢复失败');
        }
    }
}
