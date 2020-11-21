<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //Trazendo a view de login
    public function index()
    {
        //Dados para cadastrar o primeiro usuário
//        $user = new User();
//        $user->name = "Nikolas Billerbeck";
//        $user->email = "nikolas@admin.com";
//        $user->password = Hash::make("123");
//        $user->save();

        return view('login');
    }

    public function login(Request $request)
    {
        $credenciais = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::check() === false){
            Auth::attempt($credenciais);
            return redirect()->route('dashboard');
        } else {
            dd($credenciais);
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('formLogin');
    }

    public function dashboard()
    {
        if (Auth::check() === false) {
            return redirect()->route('formLogin');
        }

        return view('dashboard.home');
    }

    public function getEmails(Request $request)
    {
        if($request->ajax()){
            $user_logged = Auth::user();

            $emails = DB::select("SELECT emails.id, users.name, emails.assunto, emails.created_at FROM emails
            INNER JOIN users ON emails.remetente = users.id
            WHERE emails.destinatario = $user_logged->id");

            return response()->json([
                'emails' => $emails
            ]);
        }
    }

}
