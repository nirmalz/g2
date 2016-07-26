<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{


    public function createArticle(Request $request){

       $validator = Validator::make($request->all(), array(
           'title'      => 'required|min:5',
           'content'    => 'required|min:50'
       ));

       if($validator->fails()){
            return redirect('dashboard')
                ->withErrors($validator)
                ->withInput();
       }

        $articleData = $request->all();
        $articleData['user_id'] = Auth::user()->id;

        Article::create($articleData);
        return redirect('dashboard');


    }


}
