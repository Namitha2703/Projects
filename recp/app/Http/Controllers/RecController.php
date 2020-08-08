<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logi;
use App\recipe;
class RecController extends Controller
{
	public function valid(Request $req)
    {
    	$n=$req->input('usn');
    	$p=$req->input('pass');
        $select=logi::where('usn','=',$n)->where('pass','=',$p)->get();
if(count($select)>0)    	{
    		echo"
    		<script>
    		window.location='/login';
    		</script>
    		";
    	}
        else{
            echo"
            <script>
            alert('incorrect username/password');
            window.location='/start';
            </script>";
    }}
 public function add1(Request $req)
 {
    $image=$req->file('path');
    $ph=$image->getClientOriginalName();
    $re=new recipe();
    $re->images=$ph;
    $re->nameor=$req->input('title');
    $re->type=$req->input('type');
    $re->ingredients=$req->input('ingredients');
    $re->preparation=$req->input('preparation');
    if($re->save())
    {
        $destinationPath=public_path('/admin/images');
        $imagePath=$destinationPath."/".$ph;
        $image->move($destinationPath,$ph);
        echo"
        <script>
        window.location='/login';
        </script>
        ";
    }
 }
 public function viewmore($rid)
    {
        $res=recipe::where('rid','=',$rid)->get();
        return view('viewmore',compact('res'));
    }
    public function viewmore2($rid)
    {
        $res=recipe::where('rid','=',$rid)->get();
        return view('viewmore',compact('res'));
    }
public function editrec($rid)
    {
        $res=recipe::where('rid','=',$rid)->get();
        return view('Admin/editrec',compact('res'));
    }
    public function editq(Request $rew)
{    
        $r=$rew->input('rid');
        $n=$rew->input('title');
        $t=$rew->input('type');
        $i=$rew->input('ingredients');
        $p=$rew->input('preparation');
        $update=recipe::where('rid','=',$r)->update(['type'=>$t,'nameor'=>$n,'ingredients'=>$i,'preparation'=>$p]);
        if($update==true){
            echo" 
            <script>
            window.location='/viewrecipe';
            </script>";
        }
        else
        {
            echo"
            <script>
            alert('error');
            </script>";
        }
    }
    public function delrec($rid)
    {
        $del=recipe::where('rid','=',$rid)->delete();
        if($del==true)
        {
             echo" <script>
            window.location='/viewrecipe';
            </script>";
        }
        else
        {
            echo"
            <script>
            alert('error');
            </script>";
        }
    }
}


