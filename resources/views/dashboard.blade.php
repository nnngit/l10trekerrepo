@extends('layout')
  
@section('content')
<br>
<div class="container" style=background:#1DC5CE>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style=background:aliceblue>
                <div class="card-header"><b>{{ __('Dashboard') }}<b></div>
@if(Auth::user()->name!="admin")                    
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/bookings ><b>Tour Bookings List<b></a>  
<p></p>
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/tours ><b>Tour Packages List<b></a><br>  
<p></p>
<button style="width:100%;background:#DC5CE;" type="submit" class="btn btn-primary" onclick=window.location='{{ route("destinations") }}'>Tour Packages</button>
<p></p>

@endif
<div id=div1 class="card-body" style=display:none; style=background:#1DC5CE > 
@if(Auth::check())
    <?php    $userinfo= Auth::user() ;    ?>
    ID:-&nbsp;{{ $userinfo->id }} ,NAME:-&nbsp;{{ $userinfo->name}}  ,EMAIL:-&nbsp;{{ $userinfo->email }}
    // Authenticated...
@else
    // Not Authenticated...
@endif
</div>

@if(Auth::user()->name=="admin")
<br>
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/books ><b>Tour Bookings  MASTER<b></a>
<p></p>

<a style="width:100%;background:darkorange ;" type="submit" class="btn btn-primary" href=/tours ><b>Tour Packages MASTER<b></a>
<p></p> 
<a style="width:100%;background:darkorange ;" type="submit" class="btn btn-primary" href=/destinations ><b>Destinations MASTER<b></a>
<p></p>
<!-only linked lists ->
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/blisty ><b>Tour Bookings List<b></a><br>  
<p></p>
<a style="width:100%;background: darkorange;" type="submit" class="btn btn-primary" href=/tlisty ><b>Tour Packages List<b></a>
<p></p>  


@endif    

                <br>
                <div class="card-body" style=background:#1DC5CE>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert" >
                    You Are Logged In As:-&nbsp; <span style=color:red>{{ $userinfo->name  }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection







<script>
function fn1() {
    alert("My Profile Information");
  var x = document.getElementById("div1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>