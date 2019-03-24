@extends('frontend.master')
@section('content')
  <div class="col-md-9">
    @if (Session::has('success'))
      <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Information !</h4>
          {{Session::get('success')}}
      </div>
    @elseif (Session::has('error'))
      <div class="alert alert-error alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Information !</h4>
          {{Session::get('error')}}
      </div>
    @endif
    <form action="{{url('register')}}" method="post">
      {{ csrf_field() }}
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
        <input type="password" name="password" id="password" placeholder="Masukan Password" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Re-type Password</label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Masukan Password Ulang" class="form-control">
        <span id="message"></span>
      </div>
      <div class="form-group">
        <label for="">Alamat</label>
        <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="">No Telepon</label>
        <input type="number" name="no_telp" placeholder="Masukan No Telepon" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Simpan </button>
        <a href="{{url('/')}}" class="btn btn-success"> <i class="fa fa-arrow-left"></i> Kembali </a>
      </div>
    </form>
  </div>
@endsection
@section('js')
  <script type="text/javascript">
  $('#password, #confirm_password').on('keyup', function () {
    if ($('#password').val() == $('#confirm_password').val()) {
      $('#message').html('Password sama').css('color', 'green');
    } else
      $('#message').html('Password tidak sama').css('color', 'red');
    });
  </script>
@endsection
