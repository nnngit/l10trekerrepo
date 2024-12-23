@extends('books.layout')

@section('content')
<BODY STYLE=background:#1DC5CE>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Show Destination</h3>
            </div>
        </div>
    </div>

    <div class="row" style="margin;25px;PADDING:25PX;background:DARKORANGE;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $book->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $book->detail }}
            </div>
        </div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duration:</strong>
                    {{ $book->duration }}
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Booking Date:</strong>
                    {{ $book->bookingdate }}
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Travel Date:</strong>
                    {{ $book->traveldate }}
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Cost:</strong>
                    {{ $book->totalcost }}
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Payment Status:</strong>
                    {{ $book->paymentstatus }}
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>TravelerName-age:</strong>
                    {{ $book->travelernameage }}
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phones:</strong>
                    {{ $book->phones }}
                </div>
            </div>
			   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tourid & Name:</strong>
                    {{ $book->tourid }}
                </div>
            </div>
			
			
			<p></p>
		
		
		
    </div>
</bODY>	
@endsection
