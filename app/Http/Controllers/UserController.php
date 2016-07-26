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

        return view('authorDash');
    }

    public function createAuthor(Request $request){

        pre($request->all());
        exit;

    }


}
