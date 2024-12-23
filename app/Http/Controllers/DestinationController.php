<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use DB;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::latest()->paginate(5);

        return view('destinations.index',compact('destinations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

         Destination::create($request->all());

        return redirect()->route('destinations.index')
            ->with('success','Destination created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination  $destination)
    {
        return view('destinations.show',compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination  $destination)
    {
        return view('destinations.edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Destination  $destination)
    {
        $request->validate([
            'name' => 'required',           
            'detail' => 'required',
        ]);

         $destination->update($request->all());

        return redirect()->route('destinations.index')
            ->with('success','Destination Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination  $destination)
    {
         $destination->delete();

        return redirect()->route('destinations.index')
            ->with('success','Destination deleted successfully');
    }
	
	public function listy()
	{
		//return view('welcome');
		$lists = DB::select('select * from destinations');
		return view('destinations.list',['lists'=>$lists]);
	}

	public function testy()
	{
	
	return view('welcome');
	}

}
