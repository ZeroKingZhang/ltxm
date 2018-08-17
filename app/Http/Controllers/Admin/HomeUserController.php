<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Home_User_detail;
use DB;

class HomeUserController extends Controller
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
        // dump($search);
        //获取数据
        $data = User::where('uname','like','%'.$search.'%') ->orderBy('id') -> paginate($count);
        //加载模板
         return view('admin.home.index',['data'=>$data,'request'=>$request->all()]);
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
        //获取数据
        $data = User::find($id);
        //添加模板
        return view('admin.home.edit', ['data' => $data]);
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
        $user = User::find($id);
        $user ->upwd = md5($request -> input('upwd'));
        $res = $user ->save();
        if($res){
             return redirect('/admin/home/user') -> with('success','修改成功');
         }else{
            return back() -> with('error','修改失败');
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
         //开启事务
        DB::beginTransaction();
        //删除用户
        $res1 = User::destroy($id);
        //删除详情
        $res2 = Home_User_detail::where('uid',$id)->delete();
        //返回结果
        if ( $res1 && $res2 ){
            DB::commit();//提交事务
            return back() -> with('success','删除成功');
        }else{
            DB::rollBack();
            return back() -> with('error','删除失败');
        }
    }
}
