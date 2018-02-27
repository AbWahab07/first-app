<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    protected $article;

    function __construct(Article $article)
    {
        $this->article = $article;
        $this->middleware('auth', ['only' => ['create', 'index']]);
        //$this->middleware('manager', ['only' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$articles = $this->article->latest('published_at')->published()->get();
        $articles = Auth::user()->articles()->latest('published_at')->published()->get();
        return view('articles.home', compact('articles'));
    }

    public function create(){
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticleRequest $request)
    {
        // Validation
        //$this->article->create($request->all());

        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
        flash('Your article has been created');
        return redirect()->route('get_articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //dd($article->user()->first());
        return view('articles.show', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
