<?php

namespace App\Http\Controllers\BookApp;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookApp\BookStoreRequest;
use App\Models\BookApp\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books=Book::get();
        return view('[bookapp].book-index',compact('books'));
    }

    public function create()
    {
        return view('[bookapp].book-create');
    }

    public function store(BookStoreRequest $request)
    {
        Book::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'category'=>$request->category,

        ]);
        return back()->with('message','New book added!');
    }

    public function edit($id)
    {
        $item=Book::find($id);
        return view('[bookapp].book-edit',compact('item'));

    }
    public function update(BookStoreRequest $request,$id)
    {
        $book=Book::find($id);
        dd($book);
        Book::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'category'=>$request->category,

        ]);
        return back()->with('message','New book added!');
    }
}
