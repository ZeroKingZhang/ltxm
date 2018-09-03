<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\Invitation;
use DB;
use App\User;

class PostController extends Controller
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
        $homeFlag = $request->session()->get('homeFlag');
        $forumid = $request -> input('forum_id');
        // dd($forumid);
        if($homeFlag){
             DB::beginTransaction(); //开启事务
             //插入数据库
             $invitation = new Invitation;
             $invitation -> ititle = $request -> input('title');
             $invitation -> content  = $request -> input('content');
             $invitation -> forum_id  = $request -> input('forum_id');
             $homeUserInfo = $request->session()->get('homeUserInfo');
             $user = User::where('uname','=',$homeUserInfo)->first();
             $invitation -> uid =  $user->uid;
             $forumid = $request -> input('forum_id');
             $res = $invitation -> save();
             if($res){
                DB::commit(); //提交事务
               return redirect("/list/$forumid")->with('success','添加成功');
             }else{
                DB::rollBack();
                return back()->with('error','添加失败');
             }
         }else{
           return  redirect("/list/$forumid")->with('error','请先去登录');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $homeFlag = $request->session()->get('homeFlag');
        // dd($homeFlag);
        if($homeFlag){
            $data=DB::table('forums')->where('forum_id',$id)->first();
            $data2=DB::table('forums')->where('forum_id',$data->pid)->first();
            return view('home.post.index',['data'=>$data,'data2'=>$data2]);
        }else{
           return  redirect("/list/$id")->with('error','请先去登录');
        }
        
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
