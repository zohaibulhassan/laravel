@extends('layouts.mycss')

@section('content')
<div class="container">
@if(session('msg'))

        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>{{session('msg')}}</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

    @endif

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Occupation</th>
        <th scope="col">Phone number</th>
        <th scope="col">Address</th>
        <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
{{--  {{$users}}--}}

@foreach($data as $u)
    <tr class="table-active">
      <th scope="row">{{$u->id}}</th>
      <td>{{$u->full_name}}</td>
      <td>{{$u->occupation}}</td>
      <td>{{$u->phone_number}}</td>
        <td>{{$u->address}}</td>
        <td>
            <a href="{{route('edit',$u->id)}}">
            <button type="button" class="btn btn-warning">edit</button>--
            </a>
            <a href="{{route('deleterecords',$u->id)}}">
            <button type="button" class="btn btn-danger">delete</button>
            </a>
        </td>
    </tr>
@endforeach
  </tbody>
</table>

</div>

@endsection
