<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Invitation;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //传输轮播图数据
       $carousel = DB::table('carousel')->where('isshow', 1)->get();
       //传输公告数据
       $announcements = DB::table('announcements')->where('announcement_status',0)->first();
       //查询最新发布帖子
       $invitation= Invitation::offset(0)->limit(3)->orderBy('created_at','desc')->get();
       return view('home.index.index',['carousel'=>$carousel,'announcements'=>$announcements,'invitation'=>$invitation]);
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
    public function announcement(Request $request, $id)
    {
        $announcements = DB::table('announcements')->where('announcement_id',$id)->first();
        // dd($announcements);
        return view('home.announcement.index',['announcements'=>$announcements]);
    }
}
