<?php

namespace App\Http\Controllers;

use App\Article;
use App\Requests\CreateArticleRequest;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
// Repository pattern with Laravel
class ArticlesApiController extends Controller {
	private $articleRepo;
	public function __construct(ArticleRepositoryInterface $articleRepository) {
		$this->articleRepo = $articleRepository;
	}
	public function store(CreateArticleRequest $request) {
		$article = $this->articleRepo->create ( $request->all () );
		return response ()->json ( $article, 201 );
		// return Article::create ( $request->all () );
	}
}
