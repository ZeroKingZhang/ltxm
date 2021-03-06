<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.login');
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
        $uname = $request->input('uname');
        $upwd = $request -> input('upwd');
       $res=DB::table('home_users')->where('uname','=',$uname)->select('upwd')->first();
       // dd(Hash::check($upwd, $res->upwd));
        if(Hash::check($upwd, $res->upwd)){
           $request->session()->put('homeFlag', true); //登录成功标志
           $request->session()->put('homeUserInfo',$uname);//保存登录成功的用户信息
            // $uri=empty(session('back')) ? '/' :session('back');
            // session('back',null);
            return redirect('/')->with('success','登录成功');
        }else{
            return back()->with('error','登录失败用户名或密码错误');
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
    public function logout(Request $request)
    {
        $request->session()->put('homeFlag', null);
        $request->session()->put('homeUserInfo', null);
        return redirect('/')->with('message', '成功退出');
    }
}
