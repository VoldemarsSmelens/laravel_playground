<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;



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

	public function store(CreateArticleRequest $request){

		
		Article::create($request->all());
		
		return redirect('articles');
	}
}
