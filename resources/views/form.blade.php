@extends('layout.main')
@section('main-section')
<div class="container p-4">
    <div class="card m-auto p-4 col-7">
        <form action="{{url('/')}}/register" method="post" class="m-auto col-8">
            @csrf
            <div class="container">
                <h2 class="text-center">Registration</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputAddress" placeholder="Address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection