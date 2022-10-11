@extends('layout.main')
@section('main-section')
<div class="container">
    <div style="overflow-y: scroll; height: 480px;" class="inner">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
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
                    <a href="/register/edit/{{$registration->id}}"><i class="bi bi-pencil-square"></i></a>
                    <a href="/register/delete/{{$registration->id}}"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</div>
@endsection
<style>
    .inner::-webkit-scrollbar{
        display: none;
    }
</style>