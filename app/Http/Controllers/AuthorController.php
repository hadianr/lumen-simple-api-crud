<?php

namespace App\Http\Controllers;

use App\Model\Author;
use Illuminate\Http\Request;



class AuthorController extends Controller
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
        $authors = Author::all();
        // $authors;

        

        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Get List All Data Authors",
            'data' => [
                'content' => $authors
            ],
        ];

        return response()->json($result);
    }

    public function updateBookById(Request $request, $id){

        $authors = Author::find($id);
        $authors->title = $request->input('name');
        $authors->save();

        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Update Data Authors By Id",
            'data' => [
                'content' => $authors
            ],
        ];

        return response()->json($result);
    }

    public function createBooks(Request $request){


        $authors = Author::create($request->all());


        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Create Data Authors",
            'data' => [
                'content' => $authors
            ],
        ];

        return response()->json($result);
    }

    public function deleteBookById($id){

        $authors = Author::find($id);
        $authors->delete();

        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Delete Data Authors By Id",
            'data' => [
                'content' => $authors
            ],
        ];

        return response()->json($result);
    }

    public function getById($id){
        $authors = Author::find($id);

        $result = [
            'status' => true,
            'code' => 200,
            'message' => "Success Get List Data Authors By Id",
            'data' => [
                'content' => $authors
            ],
        ];

        return response()->json($result);
    }

    //
}
