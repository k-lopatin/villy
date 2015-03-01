<?php namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public $blocks;
	public $viewVars;

	public function __construct()
	{
		$this->setBlocks();
		$this->setViewVars();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = News::all();
		$this->viewVars['news'] = $news;
		return view('news', $this->viewVars);
	}

	/**
	 * Set views blocks.
	 *
	 */
	private function setBlocks()
	{
		$this->blocks = [];
		$this->blocks['head'] = view('blocks/head');
		$this->blocks['header'] = view('blocks/header');
		$this->blocks['footer'] = view('blocks/footer');
	}

	/**
	 * Set views variables.
	 *
	 */
	private function setViewVars()
	{
		$this->viewVars = [];
		$this->viewVars['blocks'] = $this->blocks;
	}


}
