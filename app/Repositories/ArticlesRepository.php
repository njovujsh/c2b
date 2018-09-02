<?php

namespace App\Repositories;

use App\Base\BaseRepository;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Article;

class ArticlesRepository extends BaseRepository implements ArticleRepositoryInterface {
	protected $model;
	/**
	 * ArticlesRepository constructor.
	 *
	 * @param Article $article        	
	 */
	public function __construct(Article $article) {
		$this->model = $article;
	}
	/**
	 *
	 * @param array $attributes        	
	 * @return mixed
	 */
	public function create(array $attributes) {
		return $this->model->create ( $attributes );
	}
}