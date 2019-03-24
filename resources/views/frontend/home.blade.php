@extends('frontend.master')
@section('content')
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Selamat datang {{Auth::user()->nama}}!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  <a class="dropdown-item" href="{{ route('logout') }}"
     onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
      Logout
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
</div>
@endsection
