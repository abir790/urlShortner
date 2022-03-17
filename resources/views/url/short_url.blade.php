@extends('layout.app')
@section('main_content')


<div id="t" class="col-lg-3 d-none d-lg-block ">
	<br></br>
<a class="btn btn-primary" href="{{url('/short/')}}">Back</a>

 </div>

 <div id="t" class="col-lg-6 d-none d-lg-block ">
 	       <div style=" top-left;" class="p-5">
       	<h2>This is the short Url:</h2>
       	<br>
         <ul>
            <td>
            	<th>
            	   <a style="font-size: 39px;" href="{{url('/short/'.$url->short)}}" target="_blank">{{$url->short}}</a>		
            	</th>
            </td>
          </ul>                          
    </div>

 </div>

<div class="col-lg-3  d-lg-block">
	<br></br>
	<a class="btn btn-primary" href="{{route('logout')}}">LOgout</a>

</div>






@endsection