@extends('layout.mastercode')
@section('content')
<div class="card-body">

    <h1 class="m-0 text-dark text-bold text-center">Tambahkan User Baru</h1>

    <form action="/saveregistrasi" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Nama Organisasi ORTOM / ORMAWA">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="col-13">
            <button type="submit" class="btn btn-primary btn-block submit-registrasi">Daftar</button>
        </div>

</div>
</form>
@endsection