<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
	//	$name = 'Voldemars Smelens';

	/*	return view('pages.about')->with([
			'first' => 'Voldemars',
			'last' => 'Smelens'
			]);
		*/
		$data = [];
		$data['first'] = 'Voldemars';
		$data['last'] = 'Smelens';

		$people = [
			'Volde', 'Hennis', 'Ro'
		];
		return view('pages.about', $data, compact('people'));
	}

	public function contact(){
	
		return view('pages.contact');
	}

}
