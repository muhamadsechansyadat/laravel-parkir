<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lahan;
class LahanController extends Controller
{
    public function lahan(){
    	$data=Lahan::where('id','1')->first();
    	return view('lahan.index',compact('data'));
    }
    public function updatelahan(Request $request,$id){
    	Lahan::where('id',$id)->update([
    		'stok_lahan'=> $request->stok_lahan,
    	]);
    	return back()->withMessage('Data Berhasil Terupdate!');
    }
}
