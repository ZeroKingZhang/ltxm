<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Invitation;

class SoftdeletesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        $flights = Invitation::onlyTrashed()
                    ->get();
        return view('admin.invitation.softdeletes',['flights'=>$flights]);
    }

    public function getDel($id)
    {
        $res = Invitation::find($id)->forceDelete();
        if($res){
            return redirect('/invitation/softdeletes')->with('success','删除成功');
        }else{
           return back()->with('error','删除失败'); 
        }
                   
    }
    public function getRestore($id)
    {
        $res = Invitation::withTrashed()
            ->where('invitation_id', $id)
            ->restore();
       if($res){
            return redirect('/invitation/softdeletes')->with('success','恢复成功');
        }else{

           return back()->with('error','恢复失败'); 
       }
    }
}
