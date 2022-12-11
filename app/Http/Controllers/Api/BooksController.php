<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;


class BooksController extends Controller
{
    protected $books = [];

    function __construct(){
        $this->books = json_decode(file_get_contents(storage_path() . "/json/Booklist.json"), true);

    }
    function getBooks(Request $request){

        if($request->has('q')){

            $searchQuery = strtolower($request->get('q'));
            
                $data = collect($this->books)->filter(function($item) use ($searchQuery){
                return Str::contains(strtolower($item['name']), $searchQuery) || Str::contains(strtolower($item['author']), $searchQuery);
            });
            return $data->values();
        }
        return [];
    }
}
