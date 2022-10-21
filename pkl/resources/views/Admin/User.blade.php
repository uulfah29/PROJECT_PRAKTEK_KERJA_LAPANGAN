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
            <h5 class="text-center">Data User</h5>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Organisasi</th>
                        <th class="text-center">Email</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $e=>$row)
                    <tr>
                        <td>{{$e+1}}</td>
                        <td>{{$row->id}}</td>
                        <td>{{$row->nmaorganisasi}}</td>
                        <td>{{$row->kegiatan}}</td>
                        <td>
                            <a href="proposal/{{ $row->proposal }}" target="_blank">Lihat Proposal</a>
                        </td>
                        <td>{{$row->created_at}}</td>
                        <td>
                            <a href="/Dpp/{{$row->id}}/setuju" type="button" class="btn btn-primary btn-xs">Disetujui</a>
                            <a href="/Dpp/{{$row->id}}/revisi" type="button" class="btn btn-warning btn-xs">Direvisi</a>
                            <a href="/Dpp/{{$row->id}}/tolak" type="button" class="btn btn-danger btn-xs">Ditolak</a>
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