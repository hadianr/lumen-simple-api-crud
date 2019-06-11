<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->group(['prefix' => 'api/v1'], function($app)
{
    
  $app->get('books','BookController@index');
  $app->get('books/{id}','BookController@getById');
  $app->put('books/{id}','BookController@updateBookById');
  $app->delete('books/{id}','BookController@deleteBookById');
  $app->post('books','BookController@createBooks');
    
  $app->get('author','AuthorController@index');
  $app->get('author/{id}','AuthorController@getById');
  $app->put('author/{id}','AuthorController@updateBookById');
  $app->delete('author/{id}','AuthorController@deleteBookById');
  $app->post('author','AuthorController@createBooks');
    
});
