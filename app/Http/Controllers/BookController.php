<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

USE DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::latest()->paginate(5);

        return view('books.index',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
			'duration'=> 'required',
			//'bookingdate'=> 'required',
			//'traveldate'=> 'required',
			'totalcost'=> 'required',
			'paymentstatus'=> 'required',
			'travelernameage'=> 'required',
			'phones'=> 'required',
			//'tourid'=> 'required'
						
        ]);

         Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book  $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book  $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Book  $book)
    {
        $request->validate([
            'name' => 'required',           
            'detail' => 'required',
			//'duration'=> 'required',
			//'bookingdate'=> 'required',
			//'traveldate'=> 'required',
			//'totalcost'=> 'required',
			'paymentstatus'=> 'required',
			'travelernameage'=> 'required',
			'phones'=> 'required',
			//'tourid'=> 'required'
			
        ]);

         $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success','Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book  $book)
    {
         $book->delete();

        return redirect()->route('books.index')
            ->with('success','Book deleted successfully');
    }

public function listy()
	{
		//return view('welcome');
		$lists = DB::select('select * from books');
		return view('books.list',['lists'=>$lists]);
	}

	public function testy()
	{
	
	return view('welcome');
	}

}
