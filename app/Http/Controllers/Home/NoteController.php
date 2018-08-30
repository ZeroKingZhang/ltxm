<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Note;
use App\Models\Invitation;
use DB;

class NoteController extends Controller
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
        $note = new Note;
        $note -> uid = $request -> input('uid');
        $iid=$note -> invitation_id = $request -> input('invitation_id');
        $note -> content = $request -> input('content');
        $res = $note->save();
        if($res){
            return redirect("/note/$iid")->with('success','回复成功');
        }else{
            return redirect('/')->with('error','回复失败');
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
        $invitation = Invitation::where('invitation_id',$id)->get();
        $note = Note::where('invitation_id',$id)->orderBy('created_at')-> paginate(10);
        $fid = $invitation[0]->forum_id;
        $uid = $invitation[0]->uid;
        $user = DB::table('home_users')->where('uid', $uid)->get();
        $forums = DB::table('forums')->where('forum_id', $fid)->get();
        $pforums= DB::table('forums')->where('forum_id',$forums[0]->pid)->get();
        $homeFlag = $request->session()->get('homeFlag');
        $homeUserInfo = $request->session()->get('homeUserInfo');
        $luser = DB::table('home_users')->where('uname', $homeUserInfo)->get();
        // dd($pforums);
        return view('home.note.index',['invitation'=>$invitation,'note'=>$note,'user'=>$user,'forums'=>$forums,'pforums'=>$pforums,'luser'=>$luser,'request'=>$request->all(),'homeFlag'=>$homeFlag]);
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
