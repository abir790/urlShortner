@extends('layout.app')

@section('main_content')



                            <div id="" class="col-lg-6 d-none d-lg-block ">
                                <h5 style="font-size: 50px; color: White; background-color: Black">NamespaceIT-Hi</h5>
                                <br>

                                <h2 style="color:black ;font-size 20px; ">Email is : abir@gmail.com </h2>

                                <h1 id="a" style="color:green ;font-size: 40px; "></h1> 
                                <button style="background-color:yellow ;"  onclick="document.getElementById('a').innerHTML='12345' ";>Click to Get Password is :</button>                         
                           <script>
                               public function data(){
                                const some="Please Login UserName is: Password :";
                                document.getElementById("aa").innerHTML = some;

                               }
                            </script>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Please Login</h1>
                                    </div>
                                    <form class="user" action="{{route('login')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter EmailAdress...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                            <button class="btn btn-primary btn-user btn-block">Login</button>
                                        </form>
                                </div>
                            </div>

@endsection