<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikelModel;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    public function index(){
        if(Session::get('user_id')){
            $artikelModel = artikelModel::orderByRaw("SUBSTRING_INDEX(id_artikel, '/', -1) + 0 DESC")->get();
            $data = [
                'user_id' => Session::get('user_id'),
                'artikel' => $artikelModel
            ];
            return view('Admin.index',$data);
        }else{
            return redirect('/login')->with(["status" => "Session telah berakhir","icon" => "warning","isSuccess" => true]);
        }
    }
}
