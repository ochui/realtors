<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/', 'HomeController@index')->name('home');

//Subscribe
Route::get('subscription/confirm', 'SubscriptionController@confirm')->name('subscription.confirm');
Route::get('unsubscribe', 'SubscriptionController@unsubscribe')->name('unsubscribe');

//feedback
Route::view('contact', 'frontend.contact.create')->name('contact');

//Article
Route::get('blog', 'ArticleController@index')->name('articles');
Route::get('blog/{articleId}/{articleHeading?}', 'ArticleController@show')->name('get-article');
Route::get('category/article/{categoryAlias}', 'CategoryController@getArticles')->name('articles-by-category');
Route::get('keyword/article/{keywordName}', 'KeywordController@getArticles')->name('articles-by-keyword');
Route::get('search', 'ArticleController@search')->name('search-article');

//Comment
Route::post('comment/{articleId}', 'CommentController@store')->name('add-comment');
Route::get('comment/{commentId}/confirm', 'CommentController@confirmComment')->name('confirm-comment');

//Category
Route::get('category/{categoryId}', 'CategoryController@show')->name('get-category');

Route::view('pages/about', 'frontend.pages.about')->name('page.about');

// Route::get('{service}/{location}', 'ListingController@index');

Route::get('alabama', 'ListingController@stateListing');
Route::get('alaska', 'ListingController@stateListing');
Route::get('arizona', 'ListingController@stateListing');
Route::get('arkansas', 'ListingController@stateListing');
Route::get('california', 'ListingController@stateListing');
Route::get('colorado', 'ListingController@stateListing');
Route::get('connecticut', 'ListingController@stateListing');
Route::get('delaware', 'ListingController@stateListing');
Route::get('florida', 'ListingController@stateListing');
Route::get('georgia', 'ListingController@stateListing');
Route::get('hawaii', 'ListingController@stateListing');
Route::get('idaho', 'ListingController@stateListing');
Route::get('illinois', 'ListingController@stateListing');
Route::get('indiana', 'ListingController@stateListing');
Route::get('iowa', 'ListingController@stateListing');
Route::get('kansas', 'ListingController@stateListing');
Route::get('kentucky', 'ListingController@stateListing');
Route::get('louisiana', 'ListingController@stateListing');
Route::get('maine', 'ListingController@stateListing');
Route::get('maryland', 'ListingController@stateListing');
Route::get('massachusetts', 'ListingController@stateListing');
Route::get('michigan', 'ListingController@stateListing');
Route::get('minnesota', 'ListingController@stateListing');
Route::get('mississippi', 'ListingController@stateListing');
Route::get('missouri', 'ListingController@stateListing');
Route::get('montana', 'ListingController@stateListing');
Route::get('nebraska', 'ListingController@stateListing');
Route::get('nevada', 'ListingController@stateListing');
Route::get('new-hampshire', 'ListingController@stateListing');
Route::get('new-jersey', 'ListingController@stateListing');
Route::get('new-mexico', 'ListingController@stateListing');
Route::get('new-york', 'ListingController@stateListing');
Route::get('north-carolina', 'ListingController@stateListing');
Route::get('north-dakota', 'ListingController@stateListing');
Route::get('ohio', 'ListingController@stateListing');
Route::get('oklahoma', 'ListingController@stateListing');
Route::get('oregon', 'ListingController@stateListing');
Route::get('pennsylvania', 'ListingController@stateListing');
Route::get('rhode-island', 'ListingController@stateListing');
Route::get('south-carolina', 'ListingController@stateListing');
Route::get('south-dakota', 'ListingController@stateListing');
Route::get('tennessee', 'ListingController@stateListing');
Route::get('texas', 'ListingController@stateListing');
Route::get('utah', 'ListingController@stateListing');
Route::get('vermont', 'ListingController@stateListing');
Route::get('virginia', 'ListingController@stateListing');
Route::get('washington', 'ListingController@stateListing');
Route::get('west-virginia', 'ListingController@stateListing');
Route::get('wisconsin', 'ListingController@stateListing');
Route::get('wyoming', 'ListingController@stateListing');
//Admin auth
Route::get('admin/login', 'AuthController@showLoginForm')->name('login-form');
Route::post('admin/login', 'AuthController@login')->name('login');
Route::get('admin/logout', 'AuthController@logout')->name('logout');
