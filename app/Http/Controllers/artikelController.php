<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikelModel;
use Exception;

class artikelController extends Controller
{
    public function simpanArtikel(Request $request){
        try{
            artikelModel::create($request->all());
            return redirect('/adm/dashboard')->with(["judul_alert" => "Data berhasil disimpan" , "icon" => "success","isSuccess" => true]);
        }
        catch(Exception $ex){
            throw $ex;
            return redirect('/adm/dashboard')->with(["status" => $ex,"isSuccess" => false]);
        }
    }
    public function deleteArtikel(){
        try{
            artikelModel::where('id_artikel',$_POST['id_artikel'])->delete();
            return "success";
        }
        catch(Exception $ex){
            throw $ex;
        }
    }
    public function editArtikel(Request $request){
        try{
            artikelModel::where('id_artikel',$_POST['id_artikel'])->update([
                'user_id' => $request->user_id,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'tanggal_terbit' => $request->tanggal_terbit,
                'waktu' => $request->waktu
            ]);
            return redirect('/adm/dashboard')->with(["judul_alert" => "Data berhasil diubah" , "icon" => "success","isSuccess" => true]);
        }
        catch(Exception $ex){
            throw $ex;
            return redirect('/adm/dashboard')->with(["status" => $ex,"isSuccess" => false]);
        }
    }
    public function isiEditTinyMCE(){
        $dataArtikel = artikelModel::where('id_artikel',$_POST['id_artikel'])->first();
        return $dataArtikel->isi;
    }
}
