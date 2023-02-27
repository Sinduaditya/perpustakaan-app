<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function customLogin(Request $request){
        $credentials = $request -> validate([
            'no_user' =>  'required',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'))
                        ->with('success','Behasil Masuk ');
        }

        return back()->withErrors(['no_user' => 'Nomor atau password salah!']);;
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function customRegistration(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            'alamat' =>    'required',
            'no_user' => 'required',
            'no_telepon' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);

        $data['roles'] = 'Member';
        $user = User::create($data);
        Auth::login($user);

        return redirect('login')->with('success','berhasil mendaftar');
    }


    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'] ,
        'password' => Hash::make($data['password']),
        'alamat' => $data['alamat'],
        'no_user' => $data['no_user'],
        'no_telepon' => $data['no_telepon']
      ]);
    }

    public function signOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}