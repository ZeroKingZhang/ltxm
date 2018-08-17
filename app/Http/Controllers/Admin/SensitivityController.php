<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sensitivity;
use DB;

class SensitivityController extends Controller
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
        $data = Sensitivity::where('badword','like','%'.$search.'%') ->orderBy('sensitivity_id') -> paginate($count);
        return view('admin.sensitivity.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sensitivity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //插入数据库
            $sensitivity = new Sensitivity ;
            $sensitivity -> badword = $request -> input('badword');
            $res = $sensitivity -> save();
             DB::beginTransaction(); //开启事务
            if($res){
                 DB::commit(); //提交事务
                 return redirect('/admin/sensitivity')->with('success','添加成功');
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
        $res = Sensitivity::destroy($id);
        if($res){
            DB::commit(); //提交事务
            return redirect('/admin/sensitivity')->with('success','删除成功');
        }else{
            DB::rollBack();
            return back()->with('error','删除失败');
        }

    }
}
