<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku_model;
use Auth;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    public function index(){
        if(Auth::user()->level=="admin"){
            $dt_buku=Buku_Model::get();
            return response()->json($dt_buku);
        }else{
            return response()->json(['status'=>'anda bukan admin']);
        }
    }
public function store(Request $req){
    if(Auth::user()->level=="admin"){
    $validator=Validator::make($req->all(),
    [
        'judul'=>'required',
        'penerbit'=>'required',
        'pengarang'=>'required',
        'foto'=>'required'
    ]);
    if($validator->fails()){
        return Response()->json($validator->errors());
    }

    $simpan=Buku_Model::create([
        'judul'=>$req->judul,
        'penerbit'=>$req->penerbit,
        'pengarang'=>$req->pengarang,
        'foto'=>$req->foto
    ]);
        return Response()->json(['status'=>1]);
    }else{
        return Response()->json(['status'=>0]);
    }
}
public function update($id,Request $req){
    if(Auth::user()->level=="admin"){
    $validator=Validator::make($req->all(),
    [
        'judul'=>'required',
        'penerbit'=>'required',
        'pengarang'=>'required',
        'foto'=>'required'
    ]);
    if($validator->fails()){
        return Response()->json($validator->errors());
    }
    $ubah=Buku_Model::where('id',$id)->update([
        'judul'=>$req->judul,
        'penerbit'=>$req->penerbit,
        'pengarang'=>$req->pengarang,
        'foto'=>$req->foto
    ]);
      if($ubah){
        return Response()->json(['status'=>1]);
      }else{
        return Response()->json(['status'=>0]);
    }
    }
}
public function destroy($id){
 if(Auth::user()->level=="admin"){
 $hapus=Buku_Model::where('id',$id)->delete();
    return Response()->json(['status'=>1]);    
 }else{
    return Response()->json(['status'=>0]);  
 }
}
public function tampil(){
 if(Auth::user()->level=="admin"){
    $datas = Buku_Model::all();
    $count = $datas->count();
    $status = 1;

    return Response()->json(compact('datas', 'count', 'status'));
    }else{
        return Response()->json(['status'=>0]); 
    }
}
}
