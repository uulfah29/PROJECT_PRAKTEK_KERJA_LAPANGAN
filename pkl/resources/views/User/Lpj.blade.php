@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Serahkan LPJ</h1>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Silahkan Input Data Yang Diperlukan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/insertdatalpj" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Pengajuan</label>
                                <input type="text" name="id" class="form-control" value="{{$id}}" readonly>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama ORTOM / ORMAWA</label>
                                    <div class="form-control">{{ Auth()->User()->name}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kegiatan</label>
                                <input type="text" name="kegiatan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Kegiatan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="lpj" class="form-control">
                                        @error('lpj')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary submit-lpj">Serahkan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection