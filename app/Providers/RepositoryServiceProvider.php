<?php

namespace App\Providers;

use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Repositories\ArticlesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {
	/**
	 * Bind the interface to an implementation repository class
	 */
	public function register() {
		$this->app->bind ( ArticleRepositoryInterface::class, ArticlesRepository::class );
	}
}