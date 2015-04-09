<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ArticlesController extends Controller {

	public function index(){

		//$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();//json
		$articles = Article::latest('published_at')->published()->get();//json
		return view('articles.index', compact('articles'));
	}

	public function show($id){

		$article = Article::findOrFail($id);

		//dd($article);

		return view('articles.show', compact('article'));
	}

	public function create(){

		return view('articles.create');
	}

	public function store(ArticleRequest $request){

		
		Article::create($request->all());
		
		return redirect('articles');
	}	

	public function edit($id){
		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}
	public function update($id, ArticleRequest $response){
		$article = Article::findOrFail($id);

		$article->update($response->all());
		return redirect('articles');
	}
}
