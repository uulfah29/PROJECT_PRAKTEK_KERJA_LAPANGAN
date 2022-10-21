@extends('layout.mastercode')
@section('content')
<section class="content-header">
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
</section>
<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header md-12">
            <h5 class="text-center">Status Penyerahan LPJ</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Penyerahan</th>
                        <th>Nama Organisasi</th>
                        <th>Nama Kegiatan</th>
                        <th>File LPJ</th>
                        <th>Diserahkan</th>
                        <th>Status</th>
                        <th>Keterangan</th>
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
                        <td>@if($row->statuss==0)
                            Pending
                            @elseif($row->statuss==1)
                            <font color="blue">Disetujui</font>
                            @elseif($row->statuss==2)
                            <font color="yellow">Direvisi</font>
                            @elseif($row->statuss==3)
                            <font color="red">Ditolak</font>
                            @endif
                        </td>
                        <td>{{$row->keterangann}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection