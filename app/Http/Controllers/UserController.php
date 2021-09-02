<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user =  User::where(['email'=>$req->email])->first(); //postavimo sve ovo u user prom
        if(!$user || !Hash::check($req->password,$user->password)){
            return "Usernmae or password is not matched";
            //ako nema usera izbaci poruku
        }else{
            $req->session()->put('user',$user);
            //pokrecemo sesiju
            //kad smo ovo dodali, on moze uvek da se vrati na login sto ne bi smeo kad je vec ulogovan
            //zato pravimo middleware
            return redirect('/');
            //ako se poklapa sa userom u bazi onda ga prebaci na homepage
            //za to je potrebno da prvo napravimo ProductController
            //$ php artisan make:controller ProductController
        }
    }
    function register(Request $req)
    {
       // return $req->input();
       $user= new User;
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password=Hash::make($req->password);
       $user->save();
       return redirect('/login');


    }
}
