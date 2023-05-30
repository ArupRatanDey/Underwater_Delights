@extends('layouts.frontend')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
</style>

@section('main')
<div class="container" style="font-family: 'Bree Serif', serif;">
    <div class="row align-items-center mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('register')}}" method="post" class="" style="padding: 40px; border-radius: 2%; background-color: whitesmoke ">
                @csrf
                <h3 class="text-center h2">Registration Form</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" class="form-control"></textarea>    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
