@extends('frontend.master')
@section('content')
  <div class="col-md-9">
    <form class="" action="index.html" method="post">
      <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="Masukan Nama" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Masukan Email" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Masukan Password" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Re-type Password</label>
        <input type="password" name="confirm_password" placeholder="Masukan Password Ulang" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Alamat</label>
        <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="">No Telepon</label>
        <input type="number" name="no_telp" placeholder="Masukan No Telepon" class="form-control">
      </div>
    </form>
  </div>
@endsection
