<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group ( [ 
		'prefix' => 'v1' 
], function () {
	Route::resource ( 'articles', 'ArticlesApiController' );
} );
Route::middleware ( 'auth:api' )->get ( '/user', function (Request $request) {
	return $request->user ();
} );
