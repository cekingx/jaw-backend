@extends('frontend.master')
@section('content')
  <div class="col-md-9">
    <form action="{{url('/login')}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Masukan Email" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Masukan Password" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
@endsection
