@extends('books.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Add Bookings Tour</h3>
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
    <form action="{{ route('books.store') }}" method="POST" STYLE="MARGINF:25PX;PADDING:25PX;">
        @csrf

        <div class="row" style="margin;25px;PADDING:25PX;background:aliceblue;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
			<p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:66px" name="detail"></textarea>
                </div>
            </div>
			<p></p>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duration:</strong>
                    <input type="text" name="duration" class="form-control">
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Booking Date:</strong>
                    <input type="text" name="bookingdate" class="form-control">
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Travel Date:</strong>
                    <input type="text" name="traveldate" class="form-control">
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Cost:</strong>
                    <input type="text" name="totalcost" class="form-control">
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Payment Status:</strong>
                    <input type="text" name="paymentstatus" class="form-control">
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>TravelerName-age:</strong>
                    <input type="text" name="travelernameage" class="form-control">
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phones:</strong>
                    <input type="text" name="phones" class="form-control">
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tourid & Name:</strong>
                    <input type="text" name="tourid" class="form-control">
                </div>
            </div>
			
			
			<p></p>
			
			
			
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Add Bookings Tour</button>
            </div>
        </div>

    </form>
</BODY>	
@endsection
