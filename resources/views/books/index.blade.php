@extends('books.layout')

@section('content')

<STYLE>
table, th, td {
  border: 1px solid black;
  padding;25px;
}
</STYLE>

    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Books</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}">Add Booking</a>
            </div>
        </div>
    </div>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


<body style=background:#1DC5CE>
    <table style="width:100%;border: 1px solid black;background:ALICEBLUE" >
        <tr>
            <th>ID</th>
            <th>Name</th>           
            <th>Details</th>
			<th>duration</th>           
			<th>bookingdate</th>           
			<th>Travel Date</th>           
			<th>totalcost</th>           
			<th>paymentstatus</th>           
			<th>travelerNameage</th>           
			<th>phones</th>           
			<th>tourid</th>           
            <th width="280px">Actions</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->detail }}</td>
				<td>{{ $book->duration }}</td>
				<td>{{ $book->bookingdate }}</td>
				<td>{{ $book->traveldate }}</td>
				<td>{{ $book->totalcost }}</td>
				<td>{{ $book->paymentstatus }}</td>
				<td>{{ $book->travelernameage }}</td>
				<td>{{ $book->phones }}</td>
					
					@php
					//$v  =	$book->tourid;
					//$tourname = DB::table('tours')->where('id',$v)->get('name');							
				    //echo "'".$tourname."'";	
					
					//$jsonobj ="'".$tourname."'";
					//echo $jsonobj;
					//exit;

//$obj = json_decode($jsonobj);
//echo $obj;
//echo $obj->name;
//exit;
					

					
					
				    @endphp
				
				<td>{{ $book->tourid }}</td>
					
					
													

				
                <td>
                    <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Destination?');"> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
	     {!! $books->links('pagination::bootstrap-5') !!}  
</body>	
	

@endsection




