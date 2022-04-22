@extends('layouts.mycss')

@section('content')
<div class="container">
@if(session('msg'))

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <strong>{{session('msg')}}</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>


@endif


<form action="{{route('updaterecord',$data->id)}}" method="POST">
  @csrf
    <div class="form-group p-3 m-3">
      <label for="exampleInputEmail1" class="form-label mt-4">Full Name</label>
      <input type="text" class="form-control " name="full_name" aria-describedby="emailHelp" placeholder="Enter your name here" value="{{$data->full_name}}">
    </div>
    <div class="form-group p-3 m-3">
      <label for="exampleInputPassword1" class="form-label mt-4">Occupation</label>
      <input type="text" class="form-control" name="occupation" placeholder="Enter your occupation here" value="{{$data->occupation}}">
    </div>

    <div class="form-group p-3 m-3">
      <label for="exampleInputPassword1" class="form-label mt-4">Phone Number</label>
      <input type="number" class="form-control " name="phone_number" placeholder="Enter your phone number here" value="{{$data->phone_number}}">
    </div>

    <div class="form-group p-3 m-3">
      <label for="exampleInputPassword1" class="form-label mt-4">Address</label>
      <input type="text" class="form-control" name="address" placeholder="Enter your address here" value="{{$data->address}}">
    </div>
    <div class="form-group p-3 m-3">
    <button type="submit" class="btn btn-primary">update record</button>
    </div>
</form>
</div>

@endsection
