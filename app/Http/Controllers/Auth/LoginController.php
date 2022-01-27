<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function ShowLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required|string'
        ]);
        if ($validator->fails()) {
            return redirect('login')
            ->withErrors($validator)
            ->withInput();
        }
        $credentials = $request->only('email', 'password');
        $credentials['estado']=1;
        if (Auth::attempt($credentials)) {
            if(Auth::user()->confirmado==1){
                if ( (Auth::user()->tipo==1 || Auth::user()->tipo==2)  && Auth::user()->estado==1) {
                    return redirect('/admin/ordenes');
                }
                elseif (Auth::user()->tipo==3 && Auth::user()->estado==1) {

                    //a futuro se puede implementar una panel para clientes
                    return redirect('/admin/ordenes');

                }
                else{
                    Auth::logout();
                    return redirect('/login');
                }
            }
            Auth::logout();
            return redirect('/login?q=sin-confirmar');
        }
        return redirect('/login?q=incorrectos');
    }
    public function logout(){
        // $this->redirectLogout='/login';
        Auth::logout();
        return redirect('/login');
    }

}
