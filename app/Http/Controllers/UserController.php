<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function displayDashboard(){
        $level = Auth::user()->level;

        if($level == 'admin'){
            return $this->showAdminDash();
        }elseif($level == 'author'){
            return $this->showAuthorDash();
        }else{

        }

    }


    public function showAdminDash(){

        $authors = User::where('level', '=', 'author')->get();

        return view('adminDash', array(
            'authors' => $authors
        ));

    }

    public function showAuthorDash(){

        $articles = Auth::user()->articles;

        return view('authorDash', array(
            'articles' => $articles
        ));
    }

    public function createAuthor(Request $request){

        $validator =  Validator::make($request->all(), array(
            'name'      => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|min:6|confirmed',
        ));

        if($validator->fails()){
            return redirect('dashboard')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        $data['level'] = 'author';
        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect('dashboard');

    }


}
