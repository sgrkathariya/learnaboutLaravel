@extends('layout.main')
@section('main-section')
<div class="container p-2">
    <div style="overflow-y: scroll; height: 480px;" class="inner">
        <div class="card m-auto p-2 col-8">
            <form action="{{$url}}" method="post" class="row m-auto col-7">
                @csrf
                <div class="container">
                    <h2 class="text-center text-primary">
                     {{$title}}
                    </h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" value="{{$Registrations->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" name="fullname" value="{{$Registrations->fullname}}" class="form-control" id="exampleInputName" placeholder="Name">
                        <spam class="text-danger">
                            @error('fullname')
                            {{$message}}
                            @enderror
                        </spam>
                    </div>
                    <div class="form-group">
                        <label for="exampleAddress">Address</label>
                        <input type="text" name="address" value="{{$Registrations->address}}" class="form-control" id="exampleInputAddress" placeholder="Address">
                        <span class="text-danger">
                            @error('address')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="examplePhone">Phone</label>
                        <input type="text" name="phone" value="{{$Registrations->phone}}" class="form-control" id="exampleInputAddress" placeholder="Phone">
                        <span class="text-danger">
                            @error('phone')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPasswordConfirmed">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConfirmed" placeholder="Confirm Password">
                        <span class="text-danger">
                            @error('password_confirmation')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary text-center">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection