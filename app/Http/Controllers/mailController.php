<?php

namespace App\Http\Controllers;

use App\Mail\dataEmail;
use Illuminate\support\Facades\Mail;
use Illuminate\Http\Request;

class mailController extends Controller
{
    public function sendMessage(Request $request){
        $data =[
            'subject' => 'Permintaan Freelance',
            'email' => $request->email,
            'message' => $request->message
        ];
        Mail::to('euaggeliony28@mail.com')->send(new dataEmail($data));

        return "SUKSES";
    }
}
