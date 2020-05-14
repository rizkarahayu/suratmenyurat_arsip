@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                    <!-- <a href="/tambahsurat_keluar" class="btn btn-primary">Buat Surat Keluar</a> -->
                    <br/>
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
                            <th>Kode Proyek</th>
                            <th>Deskripsi Jasa</th>
                            <th>Tanggal Diterima</th>
                            <th>Status Surat</th>
                            <th>Nama PJ/Kabiro</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($surat_masuk as $i => $masuk)
                                    @if($masuk->status_surat == 'diterima')
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $masuk->kodej01 }}</td>
                                            <td>{{ $masuk->kode_proyek }}</td>
                                            <td>{{ $masuk->deskripsi }}</td>
                                            <td>{{ $masuk->tanggal_diterima }}</td>
                                            <td><span class="badge badge-success">{{ $masuk->status_surat = 'Diterima'}}</span></td>
                                            <td>{{ $masuk->nama_pj}}</td>
                                            <td>
                                                <!-- <a href="/editsurat_keluar/{{ $masuk->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a> -->
                                                <a href="/surat_keluar/show/{{ $masuk->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                <!-- <a href="/surat_keluar/delete/{{ $masuk->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
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