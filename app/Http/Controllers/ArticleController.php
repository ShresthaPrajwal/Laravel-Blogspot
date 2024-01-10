<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article_Model;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article_Model::all();
        return view('articles_page',  ['articles' => $articles]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData=$request->validate([
            'title'=>'required',
            'text'=>'required',
        ]);
        
        $post = Article_Model::create($validatedData);
        return redirect()->route('article.index')->with('success','Article has been created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $articles = Article_Model::orderBy('id','desc')->paginate(2);
        return view('articles',['paginated_articles' => $articles]);
    }

    public function home(){
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $result = Article_Model::find($id);
        $title = $result->title;
        $texts = $result->text;
        return view('layouts.update_form',['article_id' => $id , 'title' => $title, 'text' => $texts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $result = Article_Model::find($id);
        $result->title = $request->input('title');
        $result->text = $request->input('text');
        $result->save();

        return redirect()->route('article.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $article_instance = Article_Model::find($id);
        $article_instance->delete();
        return redirect()->route('article.index');
    }
}
