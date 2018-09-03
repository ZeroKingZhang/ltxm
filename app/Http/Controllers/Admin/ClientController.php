<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Client;
use DB;
use App\Http\Requests\Admin\ClientRequest;
class ClientController extends Controller
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
        $data = Client::where('ctitle','like','%'.$search.'%') ->orderBy('client_id') -> paginate($count);
        //加载模板
         return view('admin.client.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        //开启事务
        DB::beginTransaction();
        //插入到数据库
        $client = new Client;
        $client -> ctitle = $request -> input('ctitle');
        $client -> cinfo =  $request -> input('cinfo');
        $res = $client -> save();
        //返回结果
        if ( $res ){
            DB::commit();//提交事务
            return redirect('/admin/client') -> with('success','添加成功');
        }else{
            DB::rollBack();
            return back() -> with('error','添加失败');
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
        //获取数据
        $client = Client::find($id);
        //添加模板
        return view('admin.client.show', ['data' => $client]);
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
        $client = Client::find($id);
        //添加模板
        return view('admin.client.edit', ['data' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {       
         //开启事务
        DB::beginTransaction();
        //插入到数据库
        $client = Client::find($id);
        $client -> ctitle = $request -> input('ctitle');
        $client -> cinfo =  $request -> input('cinfo');
        $res = $client -> save();
        //返回结果
        if ( $res ){
            DB::commit();//提交事务
            return redirect('/admin/client') -> with('success','修改成功');
        }else{
            DB::rollBack();
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
        $res = Client::destroy($id);
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
