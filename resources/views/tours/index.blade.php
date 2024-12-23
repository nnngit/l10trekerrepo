@extends('tours.layout')

@section('content')

<STYLE>
table, th, td {
  border: 1px solid black;
}
</STYLE>



    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Tours</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tours.create') }}">Add Tour pkgs</a>
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
			<th>price</th>
			<th>duration</th>
			<th>destinationid</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($tours as $tour)
            <tr>
                <td>{{ $tour->id }}</td>
                <td>{{ $tour->name }}</td>
                <td>{{ $tour->detail }}</td>
				<td>{{ $tour->price }}</td>
				<td>{{ $tour->duration }}</td>
				<td>{{ $tour->destinationid }}</td>
								
                <td>
                    <form action="{{ route('tours.destroy',$tour->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('tours.show',$tour->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('tours.edit',$tour->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Tour?');"> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $tours->links('pagination::bootstrap-5') !!} 
</body>	
	

@endsection




