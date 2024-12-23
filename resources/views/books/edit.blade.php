@extends('books.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit Booking</h3>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<body style=background:#1DC5CE>
    <form action="{{ route('books.update',$book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row" style="margin;25px;PADDING:25PX;background:aliceblue;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $book->name }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail">{{ $book->detail }}</textarea>
                </div>
            </div>
			
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>duration:</strong>
                    <input type="text" name="duration" value="{{ $book->duration }}" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bookingdate:</strong>
                    <input type="text" name="bookingdate" value="{{ $book->bookingdate }}" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>traveldate:</strong>
                    <input type="text" name="traveldate" value="{{ $book->traveldate }}" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>totalcost:</strong>
                    <input type="text" name="totalcost" value="{{ $book->totalcost }}" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>paymentstatus:</strong>
                    <input type="text" name="paymentstatus" value="{{ $book->paymentstatus }}" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>travelernameage:</strong>
                    <input type="text" name="travelernameage" value="{{ $book->travelernameage }}" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>phones:</strong>
                    <input type="text" name="phones" value="{{ $book->phones }}" class="form-control">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tourid:</strong>
                    <input type="text" name="tourid" value="{{ $book->tourid }}" class="form-control">
                </div>
            </div>
			
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>

    </form>
</BODY>	
@endsection
