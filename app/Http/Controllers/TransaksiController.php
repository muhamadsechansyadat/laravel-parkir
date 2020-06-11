<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Parkir;
use App\Lahan;
class TransaksiController extends Controller
{
   public function simpantransaksi(Request $request){
   		$stok_lahan = Lahan::where('id','1')->first();
   		Transaksi::create($request->all());
   		Parkir::where('id',$request->parkir_id)->update([
   			'jam_keluar'=>date('Y-m-d H:i:s'),
   		]);
   		Lahan::where('id','1')->update([
    		'stok_lahan'=> $stok_lahan->stok_lahan + 1,
    	]);	
   		return redirect('struk/'.$request->parkir_id)->withMessage('Transaksi Berhasil!');
   }

   public function struk($id){
   		$data = Transaksi::where('parkir_id',$id)->first();
   		$platno = Parkir::where('id',$data->parkir_id)->first();
   		return view('struk',compact('data','platno'));
   }
   public function struk1($id){
      $data = Transaksi::where('parkir_id',$id)->first();
      $platno = Parkir::where('id',$data->parkir_id)->first();
      return view('struk1',compact('data','platno'));
   }
}
