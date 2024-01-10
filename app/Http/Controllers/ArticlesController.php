<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article_Model;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index(){
        $article = Article_Model::all();
        return view('home',compact('home'));
    }
    public function create(){
        return response('hello world');
    }
    public function store(Request $request){
       

        return response('hello world');
    }
    public function delete(){

    }
}
