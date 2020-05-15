@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                    <div class="card-header">
                        <h3 class="card-title text-center">Tabel Surat Masuk Kepala Departemen Bagian 2</h3>
                    </div>
                    <br/>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissable flat" style="margin-left: 0px;">
                            <i class="fa fa-check"></i>
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode J01</th>
                            <th>Status J01</th>
                            <th>Nama Kepala Biro</th>
                            <th>Jenis Pengadaan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($surat_masuk as $i => $masuk)
                                    @if(($masuk->status_surat_kabiro=='onprogress') || ($masuk->status_surat_kabiro=='selesai'))
                                    <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{ $masuk->kodej01 }}</td>
                                          <td>{{ $masuk->status_surat_kabiro }}</td>
                                          <td>{{ $masuk->nama_pj}}</td>
                                          <td>{{ $masuk->jenis_pengadaan}}</td>
                                          <td>
                                          @if($masuk->jenis_pengadaan == 'pemilihan')
                                                <a href="/surat_masuk_kadep/show/pemilihan/{{ $masuk->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                          @else
                                                <a href="/surat_masuk_kadep/show/penunjukan/{{ $masuk->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                          @endif
                                          </td>
                                    </tr>
                                    @endif
                                @endforeach
                         </tbody>
                      </table>
                    <div class="card-header align-center"  >
                        Halaman : {{ $surat_masuk->currentPage() }} <br/>
                        Jumlah Data : {{ $surat_masuk->total() }} <br/>
                        Data Per Halaman : {{ $surat_masuk->perPage() }} <br/>
                        {{ $surat_masuk->links() }}
                    </div>  
                </div>
            </div>
    </div>
</div>
@endsection