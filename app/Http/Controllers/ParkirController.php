<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parkir;
use App\Lahan;
use App\Transaksi;
use DateTime;
use DB;
use laporan_parkir;
class ParkirController extends Controller
{
    public function __construct()
    {
    	// $this->middleware('auth');
    }

    public function index()
    {
    	$datahariini=Parkir::whereRaw("DATE(created_at) = CURDATE()")->count();
    	$dataterparkir=Parkir::whereRaw("DATE(created_at) = CURDATE() and jam_keluar is null")->count();
    	$bulan = date('m'); 
    	$dataperbulan=Parkir::whereRaw("MONTH(created_at) = '$bulan'")->count();
    	return view('parkir.dashboard',compact('datahariini','dataterparkir','dataperbulan'));
    }
    public function input(){
    	return view('parkiranku.index');
    }
    public function simpanparkir(Request $request){
        $stok_lahan = Lahan::where('id','1')->first();
        if ($stok_lahan->stok_lahan>0){
            Parkir::create($request->all());
            Lahan::where('id','1')->update([
                'stok_lahan'=>$stok_lahan->stok_lahan - 1,
            ]);
            return back()->withMessage('Data Berhasil Tersimpan');
        }else{
            return back()->withMessage('Parkiran Penuh');
        }
    } 
    public function dataparkir(){
        $data=Parkir::whereRaw("DATE(created_at) = CURDATE() AND jam_keluar IS NULL")->get();
        return view('parkiranku.dataparkir',compact('data'));
    }
    public function hapus($id){
        $stok_lahan = Lahan::where('id','1')->first();
        $data = Parkir::where('id',$id)->first();
        if ($data->jam_keluar==NULL) {
            Parkir::destroy($id);
            Lahan::where('id','1')->update([
                'stok_lahan'=>$stok_lahan->stok_lahan + 1,
            ]);
        }else{
            Parkir::destroy($id);
        }
        return back()->withMessage('Data Berhasil Terhapus');
    }
    public function edit($id){
        $data = Parkir::where('id',$id)->first();
        return view('edit', compact('data'));
    }
    public function updateparkir(Request $request,$id){
        Parkir::where('id',$id)->update([
            'plat_nomor' => $request->plat_nomor,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'nama_kendaraan' => $request->nama_kendaraan,
            'nama_pemilik' => $request->nama_pemilik
        ]);
        return redirect('parkiranku/dataparkir')->withMessage('Data Berhasil Terupdate!');
    }
    public function transaksi($id){
        $data  = Parkir::where('id',$id)->first();
        $date1 = new DateTime($data->created_at);
        $date2 = new DateTime(date("Y-m-d H:i:s"));
        $diff  = $date2->diff($date1);
        $jam   = $diff->format('%h');  
        if ($jam == 0) {
            if ($data->jenis_kendaraan == "mobil") {
                $harga = 5000 * 1;
            }elseif ($data->jenis_kendaraan == "motor") {
                $harga = 3000 * 1;
            }elseif ($data->jenis_kendaraan == "lainnya") {
                $harga = 7000 * 1;
            }
        }else{
            if ($data->jenis_kendaraan == "mobil") {
                $harga = 5000 * $jam;
            }elseif ($data->jenis_kendaraan == "motor") {
                $harga = 3000 * $jam;
            }elseif ($data->jenis_kendaraan == "lainnya") {
                $harga = 7000 * $jam;           }
        }

        return view('transaksi', compact('data','jam','harga'));
    }
    public function laporansemua(){
        $data = Parkir::all();
        $data1 = Transaksi::all();
        return view('laporansemua', compact('data','data1'));
    }
    public function laporantransaksi(){
        $data = Transaksi::all();
        return view('laporantransaksi', compact('data'));
    }
    public function query(){
        $data = laporan_parkir::all();
        return view('query', compact('data'));
    }
    public function laporanhari(){
        $data = Parkir::whereRaw('DATE(created_at) = CURDATE()')->get();
        return view('laporanhari', compact('data'));
    }
}