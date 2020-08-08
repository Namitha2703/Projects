<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logi;
use App\art;
use App\register;

class ArtController extends Controller
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
    $re=new art();
    $re->images=$ph;
    $re->artname=$req->input('artname');
    $re->type=$req->input('type');
    $re->description=$req->input('description');
    $re->price=$req->input('price');
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
 public function viewmore($aid)
    {
        $res=art::where('aid','=',$aid)->get();
        return view('viewmore',compact('res'));
    }
    public function viewmore2($aid)
    {
        $res=art::where('aid','=',$aid)->get();
        return view('viewmore',compact('res'));
    }
public function editrec($aid)
    {
        $res=art::where('aid','=',$aid)->get();
        return view('Admin/editrec',compact('res'));
    }
    public function editq(Request $rew)
{    
        $r=$rew->input('aid');
        $n=$rew->input('artname');
        $t=$rew->input('type');
        $i=$rew->input('description');
        $p=$rew->input('price');
        $update=art::where('aid','=',$r)->update(['type'=>$t,'artname'=>$n,'description'=>$i,'price'=>$p]);
        if($update==true){
            echo" 
            <script>
            window.location='/viewart';
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
    public function delrec($aid)
    {
        $del=art::where('aid','=',$aid)->delete();
        if($del==true)
        {
             echo" <script>
            window.location='/viewart';
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
public function login(Request $req)
    {
        $n=$req->input('usn');
        $p=$req->input('pass');
        $select=register::where('usn','=',$n)->where('pass','=',$p)->get();
if(count($select)>0)        {
            echo"
            <script>
            window.location='/art';
            </script>
            ";
        }
        else{
            echo"
            <script>
            alert('incorrect username/password');
            window.location='/userlogin';
            </script>";
    }}
    public function reg(Request $req)
    {
        $us=new register();
        $us->usn=$req->input('usn');
        $us->email=$req->input('email');
        $us->pass=$req->input('pass');
        if($us->save())
        {
            echo"
            <script>
            alert('Register succesful!');
            window.location='/userlogin';
            </script>";
        }



    }
}




