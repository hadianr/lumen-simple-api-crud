<?php

namespace App\Http\Controllers;

use App\Model\Book;
use Illuminate\Http\Request;



class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $books = Book::join('authors', 'books.author_id', '=', 'authors.id')->get();
        // $books;

        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Get List All Data Books",
            'data' => [
                'content' => $books
            ],
        ];

        return response()->json($result);
    }

    public function updateBookById(Request $request, $id){

        $books = Book::find($id);
        $books->title = $request->input('title');
        $books->author_id = $request->input('author_id');
        $books->save();

        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Update Data Books By Id",
            'data' => [
                'content' => $books
            ],
        ];

        return response()->json($result);
    }

    public function createBooks(Request $request){


        $books = Book::create($request->all());


        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Create Data Books",
            'data' => [
                'content' => $books
            ],
        ];

        return response()->json($result);
    }

    public function deleteBookById($id){

        $books = Book::find($id);
        $books->delete();

        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Delete Data Books By Id",
            'data' => [
                'content' => $books
            ],
        ];

        return response()->json($result);
    }

    public function getById($id){
        $books = Book::join('authors', 'books.author_id', '=', 'authors.id')->where('books.id',$id)->get();
        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Get List Data Books By Id",
            'data' => [
                'content' => $books
            ],
        ];

        return response()->json($result);
    }

    //
}
