@extends('layout.app')
@section('main_content')


<div id="t" class="col-lg-6 d-none d-lg-block ">
<div class="col-lg-3  d-lg-block">
	<br></br>
	<a class="btn btn-primary" href="{{route('logout')}}">LOgout</a>
</div>


 </div>
<div class="col-lg-6">
       <div class="p-5">
             <form action="{{route('shortAction')}}" method="post">
             @csrf

                <label style="font-size: 25px;">Url : </label>
                <input type="text" name="url">
                <button class="btn btn-primary ">Click</button>
                </form>                              
    </div>
</div>






@endsection

