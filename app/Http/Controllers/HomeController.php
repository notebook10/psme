<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Theme;
use Validator;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function viewHomePage(){
        if(Auth::check()){
            $theme = Theme::uses('admin')->layout('default');
            return $theme->of('admin.index')->render();
        }else{
            $theme = Theme::uses('default')->layout('default');
            return $theme->of('homepage')->render();
        }
    }
//    public function viewAdmin(){
//        $theme = Theme::uses('admin')->layout('default');
//        return $theme->of('admin.index')->render();
//    }
    public function showLogin(){
        $theme = Theme::uses('admin')->layout('default');
        return $theme->of('admin.login')->render();
    }
    public function showRegister(){
        $theme = Theme::uses('admin')->layout('default');
        return $theme->of('admin.register')->render();
    }
    public function insertUser(Request $request){
        $user = new User();
        $userData = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,
            'password' => $request->password,
        ];
        $user->insert($userData);
        Session::flash('message','User successfully inserted!');
        return Redirect::back();
    }
    public function login(Request $request){
        $username = $request->email;
        $password = $request->password;
        $data = [
            'email' => $username,
            'password' => $password
        ];
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];
        $validator = Validator::make($data,$rules);
        if($validator->fails()){
            return Redirect::to('/');
        }else{
            if(Auth::attempt(['email' => $username, 'password' => $password])){
                return Redirect::to('/');
            }else{
                return Redirect::to('/login')
                    ->withErrors([
                        'validate' => 'Wrong Email or Password!'
                    ]);
            }
        }
    }
    public function logout(){
        Auth::logout();
        return Redirect::to('/login');
    }
}