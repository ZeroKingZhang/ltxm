<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Invitation;
use App\Models\Note;
use DB;
use Hash;

class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //修改用户密码
        $uid = $request->input('uid');
        $opwd = $request -> input('opwd');
        $upwd = $request -> input('upwd');
        $reupwd = $request -> input('reupwd');
        if($upwd == $reupwd){
            $res=DB::table('home_users')->where('uid','=',$uid)->select('upwd')->first();
            if(Hash::check($opwd, $res->upwd)){
            $user = User::find($uid);
            $user -> upwd = Hash::make($request -> input('upwd'));
            $res1 =  $user -> save();
            $request->session()->put('homeFlag', null); //清空登录信息
            $request->session()->put('homeUserInfo',null);//清空登录信息
            return redirect('/')->with('success','修改成功，请重新登录');
            }
        }
        return back()->with('error','两次密码输入不一致');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // dd($id);
        $user = User::where('uid','=',$id)->first();
        $homeFlag = $request->session()->get('homeFlag');
        $homeUserInfo = $request->session()->get('homeUserInfo');
        // dd($user,$homeFlag,$homeUserInfo);
        return view('home.user.index',['user'=>$user,'homeFlag'=>$homeFlag,'homeUserInfo'=>$homeUserInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        
        $user = User::where('uid','=',$id)->first();
        $homeUserInfo = $request->session()->get('homeUserInfo');
        if($user->uname != $homeUserInfo){
            return redirect("user/$id")->with('error','请不要更改他人的资料');
        }
        return view('home.user.edit',['user'=>$user,'homeUserInfo'=>$homeUserInfo]);
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
        $user -> signature = $request -> input('signature');
        $user -> sex = $request -> input('sex');
        $user -> phone = $request -> input('phone');
        $res = $user ->save();
        if($res){
             return redirect("/user/$id") -> with('success','修改成功');
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
    //用户发帖信息
    public function invitation(Request $request, $id)
    {
        $invitation = Invitation::where('uid',$id)->orderBy('created_at','desc')-> paginate(10);//获取用户所有发帖
        $user = User::where('uid','=',$id)->first();
        $homeUserInfo = $request->session()->get('homeUserInfo');
        return view('home.user.invitation',['invitation'=>$invitation,'user'=>$user,'request'=>$request->all(),'homeUserInfo'=>$homeUserInfo]);
    }
    //用户回复信息
    public function note(Request $request, $id)
    {
        $note = Note::where('uid',$id)->orderBy('created_at','desc')-> paginate(10);//获取用户所有回复
        $user = User::where('uid','=',$id)->first();
        $homeUserInfo = $request->session()->get('homeUserInfo');
        return view('home.user.note',['note'=>$note,'user'=>$user,'request'=>$request->all(),'homeUserInfo'=>$homeUserInfo]);
    }
    //用户头像修改
    public function pic(Request $request, $id)
    {
        $user = User::where('uid','=',$id)->first();
        $homeUserInfo = $request->session()->get('homeUserInfo');
        if($user->uname != $homeUserInfo){
            return redirect("user/$id")->with('error','请不要更改他人的资料');
        }
        return view('home.user.pic',['user'=>$user]);
    }
    //文件上传方法
     public function upload(Request $request)
    {
            if($request -> hasFile('pic')){
            $profile =  $request -> file('pic');// 创建上传对象
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
         $id = $request -> input('uid');
         $res=DB::table('home_users')->where('uid', $id)->update(['pic' => $filename]);
         if($res){
            DB::commit(); //提交事务
           return redirect("/user/$id")->with('success','上传成功');
         }else{
            DB::rollBack();
            return back()->with('error','上传失败');
         }
    }
    //用户修改密码
    public function password(Request $request, $id)
    {
        $user = User::where('uid','=',$id)->first();
        $homeUserInfo = $request->session()->get('homeUserInfo');
        if($user->uname != $homeUserInfo){
            return redirect("user/$id")->with('error','请不要更改他人的资料');
        }
        return view('home.user.password',['user'=>$user]);
    }
}    