<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota_Model;
use Auth;
use Illuminate\Support\Facades\Validator;

class AnggotaController extends Controller
{
    public function index(){
        if(Auth::user()->level=="admin"){
            $dt_anggota=Anggota_Model::get();
            return response()->json($dt_anggota);
        }else{
            return response()->json(['status'=>'anda bukan admin']);
        }
    }
public function store(Request $req){
    if(Auth::user()->level=="admin"){
    $validator=Validator::make($req->all(),
    [
        'nama_anggota'=>'required',
        'alamat'=>'required',
        'telp'=>'required'
    ]);
    if($validator->fails()){
        return Response()->json($validator->errors());
    }

    $simpan=Anggota_Model::create([
        'nama_anggota'=>$req->nama_anggota,
        'alamat'=>$req->alamat,
        'telp'=>$req->telp
    ]);
        return Response()->json(['status'=>'yey berhasil']);
    }else{
        return Response()->json(['status'=>'yah gagal coba lagi gih']);
    }
}
public function update($id,Request $req){
    if(Auth::user()->level=="admin"){
    $validator=Validator::make($req->all(),
    [
        'nama_anggota'=>'required',
        'alamat'=>'required',
        'telp'=>'required'
    ]);
    if($validator->fails()){
        return Response()->json($validator->errors());
    }
    $ubah=Anggota_Model::where('id',$id)->update([
        'nama_anggota'=>$req->nama_anggota,
        'alamat'=>$req->alamat,
        'telp'=>$req->telp
    ]);
      return Response()->json(['status'=>'yey berhasil']);
    }else{
      return Response()->json(['status'=>'yah gagal coba lagi yaaa']);
    }
}
public function destroy($id){
 if(Auth::user()->level=="admin"){
 $hapus=Anggota_Model::where('id',$id)->delete();
    return Response()->json(['status'=>1]);    
 }else{
    return Response()->json(['status'=>0]);  
 }
}
public function tampil(){
 if(Auth::user()->level=="admin"){
    $datas = Anggota_Model::all();
    $count = $datas->count();
    $status = 1;
      return Response()->json(compact('datas', 'count', 'status'));
    }
    else{
        return Response()->json(['status'=>'yah gagal coba lagi yaaa']); 
    }
}
}