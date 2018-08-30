<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Home_User_detail;
use DB;
use App\Models\Invitation;
use App\Models\Note;

class MyinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //接收数据
        $data = $request->session()->all();
        $uname = $data['homeUserInfo'];
        $user = User::where('uname','=',$uname)->first();
        $uid = $user['uid'];
        // dd($uid);
        $invitation = Invitation::where('uid',$uid)->get();//获取用户所有发帖
        $note = Note::where('uid',$uid)->orderBy('created_at','desc')-> paginate(10);//获取用户回复信息并排序分页
        //加载界面传输数据
        return view('home.myinfo.index',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //接收数据
        $data = $request->session()->all();
        $uname = $data['homeUserInfo'];
        $user = User::where('uname','=',$uname)->first();
        //加载模板
        return view('home.myinfo.pic',['uname'=>$uname,'user'=>$user]);
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
        $user = User::find($id);
        //添加模板
        return view('home.myinfo.password', ['user' => $user]);
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
        $user = User::find($id);
        $uname = $user['uname'];
        //添加模板
        return view('home.myinfo.edit', ['user' => $user,'uname'=>$uname]);
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
        $uname = $user['uname'];
        // dd($uname);
        $user -> pic = $request -> input('pic');
        $user -> email = $request -> input('email');
        $user -> signature = $request -> input('signature');
        $user -> sex = $request -> input('sex');
        $user -> address = $request -> input('address');
        $user -> phone = $request -> input('phone');
        $res = $user ->save();
        if($res){
             return redirect('/myinfo',['user'=>$user,'uname'=>$uname]) -> with('success','修改成功');
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
        //
    }
}
