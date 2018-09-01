<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use DB;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Carousel::all();
         return view('admin.carousel.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousel.create');
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
        if($request -> hasFile('carousel_pic')){
            $profile =  $request -> file('carousel_pic');// 创建上传对象
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
         $carousel = new Carousel;
         $carousel -> carousel_pic  = $filename;
         $carousel -> isshow  =  $request -> input('isshow');
         $carousel -> carousel_title  =  $request -> input('carousel_title');
         $res = $carousel -> save();
         if($res){
            DB::commit(); //提交事务
           return redirect('/admin/carousel')->with('success','添加成功');
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
        DB::beginTransaction(); //开启事务
        $res = Carousel::destroy($id);
        if($res){

            DB::commit(); //提交事务
             return redirect('/admin/carousel')->with('success','删除成功');
        }else{
            DB::rollBack();
             return back()->with('error','删除失败');
        }
    }
}
