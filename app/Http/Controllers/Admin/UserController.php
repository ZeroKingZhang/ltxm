<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Hash;
use DB;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserEditRequest;
class UserController extends Controller
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
        $data = AdminUser::where('admin_user_name','like','%'.$search.'%') ->orderBy('admin_user_id') -> paginate($count);
        //加载模板
         return view('admin.user.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {     
        //开启事务
        DB::beginTransaction();
        //插入到数据库
        $user = new AdminUser;
        $user -> admin_user_name = $request -> input('admin_user_name');
        $user -> admin_user_password = Hash::make($request -> input('admin_user_password'));
        $user -> admin_user_email = $request -> input('admin_user_email');
        $user -> admin_user_phone = $request -> input('admin_user_phone');
        $user -> admin_user_status = $request -> input('admin_user_status');
        $res = $user -> save();
        //返回结果
        if ( $res ){
            DB::commit();//提交事务
            return redirect('/admin/user') -> with('success','添加成功');
        }else{
            DB::rollBack();
            return back() -> with('error','添加失败');
        }
        // dump( $request -> all() );
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
        $user = AdminUser::find($id);
        //添加模板
        return view('admin.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        // dd($id);
        $user = AdminUser::find($id);
        $user -> admin_user_password = Hash::make($request -> input('admin_user_password'));
        $user -> admin_user_email = $request -> input('admin_user_email');
        $user -> admin_user_phone = $request -> input('admin_user_phone');
        $user -> admin_user_status = $request -> input('admin_user_status');
        $res = $user -> save();
        if($res){
            return redirect('/admin/user')->with('success','修改成功');
        }else{
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
        //开启事务
        DB::beginTransaction();
        //删除用户
        $res = AdminUser::destroy($id);
        //返回结果
        if ( $res ){
            DB::commit();//提交事务
            return back() -> with('success','删除成功');
        }else{
            DB::rollBack();
            return back() -> with('error','删除失败');
        }
    }
}
