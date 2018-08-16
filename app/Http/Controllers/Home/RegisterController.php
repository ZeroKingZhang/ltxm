<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Home\UserStoreRequest;
use App\User;
use App\Models\Home_User_detail;
use DB;
use Germey\Geetest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.register');
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
    public function store(UserStoreRequest $request)
    {
        DB::beginTransaction(); //事务开启
        $user = new User;
        $user -> uname = $request -> input('uname');
        $user -> upwd = md5($request -> input('upwd'));
        $user -> email = $request -> input('email');
        $res1 =  $user -> save();
        $id = $user -> id;
        $userdetail = new Home_User_detail;
        $userdetail ->uid = $id;
        $userdetail -> phone =  $request -> input('phone');
        $res2 = $userdetail -> save();
        if($res1 && $res2){
            DB::commit(); //提交事务
            return redirect('/login')->with('success','注册成功');
        }else{
            DB::rollBcak(); //回滚事务
            return redirect('/register')->with('error','注册失败');
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
    }
}
