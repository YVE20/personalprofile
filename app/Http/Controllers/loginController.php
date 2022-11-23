<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class loginController extends Controller
{
    public function index(){
        $data = [
            'user_id' => ""
        ];
        return view('Login.index',$data);
    }
    public function checkAuth(Request $request){
        if($_POST['cmd'] == "LOGIN"){
            $loginModel = loginModel::get();
            $checkUsername = loginModel::where('username',$_POST['username'])->get();
            if(count($checkUsername) != 0){
                foreach($checkUsername as $lM){
                    if(Hash::check($_POST['password'],$lM->password)){
                        if($lM->level == "User"){
                            Session::put('user_id', $lM->id);
                            return redirect('/user/dashboard')->with(["judul_alert" => "Selamat Datang" , "icon" => "success","isSuccess" => true]);
                        }else{
                            Session::put('user_id', $lM->id);
                            return redirect('/adm/dashboard')->with(["judul_alert" => "Selamat Datang Admin" , "icon" => "success","isSuccess" => true]);
                        }
                    }else{
                        return redirect()->back()->with(["judul_alert" => "Gagal login" , "icon" => "warning","isSuccess" => false]);
                    }
                }
            }else{
                return redirect()->back()->with(["judul_alert" => "Gagal login" , "icon" => "warning","isSuccess" => false]);
            }
        }else if($_POST['cmd'] == "REGISTER"){
            $password_hash = password_hash($request->password,PASSWORD_DEFAULT);
            loginModel::create([
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'username' => $request->username,
                'password' => $password_hash,
                'level' => "User",
            ]);
            return redirect()->back()->with(["judul_alert" => "Silahkan login kembali" , "icon" => "success","isSuccess" => true]);
        }else if($_POST['cmd'] == "UPDATE"){
            $password_hash = password_hash($request->password_update,PASSWORD_DEFAULT);
            loginModel::where('id',$_POST['user_id_update'])->update([
                'nama' => $request->nama_update,
                'jenis_kelamin' => $request->jeni_kelamin_update,
                'tempat_lahir' => $request->tempat_lahir_update,
                'tanggal_lahir' => $request->tanggal_lahir_update,
                'alamat' => $request->alamat_update,
                'username' => $request->username_update,
                'password' => $password_hash,
                'level' => "User",
            ]);
            Session::put('user_id',$_POST['user_id_update']);
            return redirect('/user/dashboard')->with(["judul_alert" => "Selamat Datang" , "icon" => "success","isSuccess" => true]);
        }
    }
    public function logout(){
        Session::flush();
        return redirect('/');
    }
    public function loginGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function callback(){
        try {
            $user = Socialite::driver('google')->stateless()->user();
            //Check Email
            $loginModel = loginModel::get();
            $checkUsername = loginModel::where('username',$user['email'])->get();
            if(count($checkUsername) == 0){
                //Buatin Akun
                loginModel::create([
                    'nama' => $user['name'],
                    'username' => $user['email'],
                    'level' => "User"
                ]);
                Session::put('auth','google');
                //Cek Data yang masuk
                $googleData = loginModel::where('username',$user['email'])->get();
                if(count($googleData) != 0){
                    $data = [
                        'user_id' => $googleData[0]['id']
                    ];
                    return view('Login.index',$data);
                }
            }else{
                Session::put('user_id', $checkUsername[0]['user_id']);
                return redirect('/user/dashboard')->with(["judul_alert" => "Selamat Datang Admin" , "icon" => "success","isSuccess" => true]);
            }
        }catch (Exception $e) {
            return redirect()->back();
        }
    }
    public function isiRegisterAuth(){
        $dataLogin = loginModel::where('id',$_POST['user_id'])->first();
        echo json_encode($dataLogin);
    }
}
