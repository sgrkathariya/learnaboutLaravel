@extends('layout.main')
@section('main-section')
<div class="container m-auto col-10">
    <div style="overflow-y: scroll; height: 480px;" class="inner">
    <a class="btn btn-primary d-inline-block m-2 float-right" href="{{route('register')}}">
        <i class="fa-solid fa-plus"></i>
    </a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Registrations as $registration)
                <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                    <td scope="row">{{$registration->fullName}}</td>
                    <td scope="row">{{$registration->email}}</td>
                    <td scope="row">{{$registration->address}}</td>
                    <td scope="row">{{$registration->phone}}</td>
                    <td scope="row">
                        @if($registration->status == 1)
                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                    </td>
                    <td scope="row">
                        <a href="#"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{route('delete', ['id'=>$registration->id])}}"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection