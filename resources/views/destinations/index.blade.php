@extends('destinations.layout')

@section('content')

<STYLE>
table, th, td {
  border: 1px solid black;
}
</STYLE>

    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Destinations</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('destinations.create') }}">Add Destination</a>
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
            <th width="280px">Actions</th>
        </tr>
        @foreach ($destinations as $destination)
            <tr>
                <td>{{ $destination->id }}</td>
                <td>{{ $destination->name }}</td>
                <td>{{ $destination->detail }}</td>
                <td>
                    <form action="{{ route('destinations.destroy',$destination->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('destinations.show',$destination->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('destinations.edit',$destination->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Destination?');"> Delete</button>
                    </form>
                </td>
            </tr>
			
        @endforeach
		
    </table>
	     {!! $destinations->links('pagination::bootstrap-5') !!} 
      <!-- {{ $destinations->links() }} -->
</body>
@endsection




