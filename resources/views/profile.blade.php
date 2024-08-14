@extends('layouts.app')
@section('title','Profile')
@section('content')
    

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="text-center">
            <img src="{{asset('storage/' . auth()->user()->image)}}" alt="no pp" class="profile-image" width="80px" height="80px">
            <h3> {{ auth()->user()->name }} </h3>
        </div>

  
        <body>
            <div class="container mt-4">
                <form action="/profile" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name" class="form-label">Enter Your Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{auth()->user()->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Enter Your Email:</label>
                        <input value="{{ auth()->user()->email }}" type="email" name="email" id="email" class="form-control">

                    </div>
                    <div class="mb-3">  
                        <label for="password" class="form-label">Enter Your Password:</label>
                        <input type="password" name="pass" id="pass" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirm Your Password:</label>
                        <input type="password" name="pass-confirmation" id="pass-confirmation" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label"></label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
                <form action="/logout" method="POST" class="mt-2">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
            
        </body>
        </html>
        


        </div>
    </div>
</div>


@endsection