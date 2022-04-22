@extends('layouts.mycss')

@section('content') 
<div class="container">
@if(session('msg'))

<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>{{session('msg')}}</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>


@endif


<form action="{{route('savecontact')}}" method="POST">
  @csrf
    <div class="form-group p-3 m-3">
      <label for="exampleInputEmail1" class="form-label mt-4">Full Name</label>
      <input type="text" class="form-control " name="full_name" aria-describedby="emailHelp" placeholder="Enter your name here">
    </div>
    <div class="form-group p-3 m-3">
      <label for="exampleInputPassword1" class="form-label mt-4">Occupation</label>
      <input type="text" class="form-control" name="occupation" placeholder="Enter your occupation here">
    </div>
    
    <div class="form-group p-3 m-3">
      <label for="exampleInputPassword1" class="form-label mt-4">Phone Number</label>
      <input type="number" class="form-control " name="phone_number" placeholder="Enter your phone number here">
    </div>
    
    <div class="form-group p-3 m-3">
      <label for="exampleInputPassword1" class="form-label mt-4">Address</label>
      <input type="text" class="form-control" name="address" placeholder="Enter your address here">
    </div>
    <div class="form-group p-3 m-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>

@endsection