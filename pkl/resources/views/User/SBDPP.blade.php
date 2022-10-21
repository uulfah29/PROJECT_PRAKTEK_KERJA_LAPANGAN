@extends('layout.mastercode')
@section('content')
<div class="content-header justify-content-center">
    @if (Auth()->user()->level=="Admin")
    <div class="card-primary">
        <form action="/sbdpp" class="form-inline ml-3" method="GET">
            <div class="form-group">
                <input type="text" class="form-control" class="form-control" name="cari" placeholder="Search Data" value="{{$request->cari}}" aria-label="Search"></input>
                <div class="ml-1">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
    @endif
</div>
<!-- Main content -->
<script>
    window.print();
</script>
<section class="content">
    <div class="card card-primary">
        <div class="card-header md-12">
            <h5 class="text-center">Daftar Status Pengajuan Proposal</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pengajuan</th>
                        <th>Nama Organisasi</th>
                        <th>Nama Kegiatan</th>
                        <th>File Proposal</th>
                        <th>Diajukan</th>
                        <th>Status</th>
                        <th>Keterangan</th>
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
                        <td>@if($row->status==0)
                            Pending
                            @elseif($row->status==1)
                            Disetujui
                            @elseif($row->status==2)
                            Direvisi
                            @elseif($row->status==3)
                            Ditolak
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection