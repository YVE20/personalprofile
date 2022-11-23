<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikelModel;

class homeController extends Controller
{
    public function index(){
        $artikelModel = artikelModel::orderByRaw("SUBSTRING_INDEX(id_artikel, '/', -1) + 0 DESC")->get();
        $data = [
            'artikel' => $artikelModel
        ];
        return view('Home.index',$data);
    }
}
