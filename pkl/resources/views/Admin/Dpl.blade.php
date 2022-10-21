@extends('layout.mastercode')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header md-12">
            <h5 class="text-center">Daftar Penyerahan LPJ</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <div>
                    <a href="/sbdpl" class="btn btn-success btn-xs mb-3">Rekap Penyerahan</a>
                </div>
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">No Pengajuan</th>
                        <th class="text-center">Nama Organisasi</th>
                        <th class="text-center">Nama Kegiatan</th>
                        <th class="text-center">File LPJ</th>
                        <th class="text-center">Diserahkan</th>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $e=>$row)
                    <tr>
                        <td>{{$e+1}}</td>
                        <td>{{$row->id}}</td>
                        <td>{{$row->namaorganisasi}}</td>
                        <td>{{$row->kegiatan}}</td>
                        <td>
                            <a href="Lpj/{{ $row->lpj }}" target="_blank">Lihat LPJ</a>
                        </td>
                        <td>{{$row->created_at}}</td>
                        <td class="center">
                            <a href="/Dpl/{{$row->id}}/setuju" type="button" class="btn btn-primary btn-xs">Disetujui</a>
                            <a href="/Dpl/{{$row->id}}/revisi" type="button" class="btn btn-warning btn-xs">Direvisi</a>
                            <a href="/Dpl/{{$row->id}}/tolak" type="button" class="btn btn-danger btn-xs">Ditolak</a>
                        </td>
                        <td>
                            <a href="" type="button" class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Keterangan validasi</a>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Keterangan Validasi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/insertdatalpj" method="POST">
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="message-text" name="keterangann"></textarea>
                                                </div>
                                                <div class="card footer">
                                                    <button type="submit" name="submit" class="btn btn-primary">Tambah Keterangan Validasi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection