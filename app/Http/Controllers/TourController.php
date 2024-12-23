<?php

namespace App\Http\Controllers;

use App\Models\Tour;
USE DB;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::latest()->paginate(5);

        return view('tours.index',compact('tours'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
			'price'=> 'required',
			'duration'=> 'required',
			'destinationid'=> 'required'
			
        ]);

         Tour::create($request->all());

        return redirect()->route('tours.index')
            ->with('success','Tour created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour  $tour)
    {
        return view('tours.show',compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour  $tour)
    {
        return view('tours.edit',compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Tour  $tour)
    {
        $request->validate([
            'name' => 'required',           
            'detail' => 'required',
			'price'=> 'required',
			'duration'=> 'required',
			'destinationid'=> 'required'
			
        ]);

         $tour->update($request->all());

        return redirect()->route('tours.index')
            ->with('success','Tour Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour  $tour)
    {
         $tour->delete();

        return redirect()->route('tours.index')
            ->with('success','Tour deleted successfully');
    }

	public function listy()
	{
		//return view('welcome');
		$lists = DB::select('select * from tours');
		return view('tours.list',['lists'=>$lists]);
	}

	public function testy()
	{
	
	return view('welcome');
	}

}
