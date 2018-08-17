<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use DB;

class AnnouncementController extends Controller
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
        $data = Announcement::where('announcement_title','like','%'.$search.'%') ->orderBy('announcement_id') -> paginate($count);
        return view('admin.announcement.index',['data'=>$data,'request'=>$request->all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.announcement.create');
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
         $announcement = new Announcement;
         $announcement -> announcement_title = $request -> input('announcement_title');
         $announcement -> announcement_text  = $request -> input('content');
         $announcement -> announcement_status  = $request -> input('announcement_status');
         $announcement -> admin_user_id     = 1;
       
         $res = $announcement -> save();
         if($res){
            DB::commit(); //提交事务
           return redirect('/admin/announcement')->with('success','添加成功');
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
        $data = Announcement::find($id);
        return view('admin.announcement.edit',['data'=>$data]);
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
         $announcement = Announcement::find($id);
         $announcement -> announcement_title = $request -> input('announcement_title');
         $announcement -> announcement_text = $request -> input('content');
         $announcement -> announcement_status = $request -> input('announcement_status');
         
         $res = $announcement -> save();
          if($res){
            DB::commit(); //提交事务
           return redirect('/admin/announcement')->with('success','修改成功');
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
        //
        DB::beginTransaction(); //开启事务
        $res = Announcement::destroy($id);
        if($res){

        DB::commit(); //提交事务
            return redirect('/admin/announcement')->with('success','删除成功');
        }else{
        DB::rollBack();
            return back()->with('error','删除失败');
        }
    }
    public function disabled($id)
    {
        DB::beginTransaction(); //开启事务
        $announcement = Announcement::find($id);
        $announcement -> announcement_status = 1;
        $res = $announcement -> save();
        if($res){
            DB::commit(); //提交事务
            return redirect('/admin/announcement')->with('success','更新成功');
        }else{
            DB::rollBack();
            return back()->with('error','更新失败');
        }
    }
    public function start($id)
    {
        DB::beginTransaction(); //开启事务
        $announcement = Announcement::find($id);
        $announcement -> announcement_status = 0;
        $res = $announcement -> save();
        if($res){
             DB::commit(); //提交事务
            return redirect('/admin/announcement')->with('success','更新成功');
        }else{
             DB::rollBack();
            return back()->with('error','更新失败');
        }

    }
}
