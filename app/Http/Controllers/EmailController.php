<?php

namespace App\Http\Controllers;

use App\Email;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    //Listando e-mails enviados
    public function enviados()
    {
        return view('email.enviados');
    }

    public function novo()
    {
        $users = User::all();

        return view('email.novo', [
            'users' => $users
        ]);
    }

    public function adicionar(Request $request)
    {
        $email = new Email();
        $destinatario = User::where('email', $request->email)->first();

        $email->remetente = Auth::user()->id;
        $email->destinatario = $destinatario->id;
        $email->assunto = $request->subject;
        $email->descricao = $request->message;

        if($email->save()){
            return redirect()->route('dashboard');
        }

//        dd($request->email);
    }

}
