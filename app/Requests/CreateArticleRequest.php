<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest {
	public function response(array $errors) {
		return response ()->json ( $errors, 422 );
	}
	public function authorize() {
		return true;
	}
	public function rules() {
		return [ 
				'title' => [ 
						'required' 
				],
				'content' => [ 
						'required' 
				] 
		];
	}
}
