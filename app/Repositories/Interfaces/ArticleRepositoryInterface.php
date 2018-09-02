<?php

namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\Base\BaseRepositoryInterface;

interface ArticleRepositoryInterface extends BaseRepositoryInterface {
	public function create(array $attributes);
}