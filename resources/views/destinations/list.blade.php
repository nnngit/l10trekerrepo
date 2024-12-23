@extends('DESTINATIONS.layout1')

@section('content')

<STYLE>
table, th, td {
  border: 1px solid black;
  padding;25px;
}
</STYLE>


<body onclick=alert("MAGIZH"); style=background:aliceblue >
<div class="container">
<h6>DESTINATIONS LIST</h6>
<table style="width:100%;border: 1px solid black;background:darkorange" > 
    <tr >
	    <td><strong>ID</strong></td>
        <td><strong>NAME</strong></td>
		<td><strong>DESTINATION IMAGE</strong></td>
		</tr>
@foreach($lists as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->name}} </td>
           	<td><IMG SRC='WEB/IMAGES/TREKKING.JPG' WIDTH=77PX HEIGHT=77PX>placeholder lorem ipsum</IMG></td>		
        </tr>
@endforeach
</table>
</div>


@endsection

