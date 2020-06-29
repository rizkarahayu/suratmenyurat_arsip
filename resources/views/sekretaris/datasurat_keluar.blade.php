@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                <div class="box-header">
                        <div class="card-header text-center">
                        Tabel Data Surat Keluar Sekretaris
                        </div>
                    </div>
                    <br/>
                    <a href="/tambahsurat_keluar" class="btn btn-primary">Buat Surat Keluar</a>
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
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Tabel Data Surat Keluar Status Kepala Biro</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                    </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr style="font-size:13px;">
                            <th>No.</th>
                            <th>Kode J01</th>
                            <th>Kode Proyek</th>
                            <th>Deskripsi Jasa</th>
                            <!-- <th>Tanggal Diterima</th> -->
                            <th>Status Surat</th>
                            <th>Nama PJ/Kabiro</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($surat_masuk as $i => $masuk)
                                    @if(($masuk->status_surat == 'diterima') || ($masuk->status_surat == 'ditolak'))
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $masuk->kodej01 }}</td>
                                            <td>{{ $masuk->kode_proyek }}</td>
                                            <td>{{ $masuk->deskripsi }}</td>
                                            <!-- <td>{{ $masuk->tanggal_diterima }}</td> -->
                                            @if($masuk->status_surat == 'diterima')
                                            <td><span class="badge badge-success">{{ $masuk->status_surat = 'Diterima'}}</span></td>
                                            @else
                                            <td><span class="badge badge-danger">{{ $masuk->status_surat = 'Ditolak'}}</span></td>
                                            @endif
                                            @if($masuk->nama_pj == NULL)
                                            <td>-</td>
                                            @else
                                            <td>{{ $masuk->nama_pj }}</td>
                                            @endif
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
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Tabel Data Surat Keluar Manual</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                    </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="text-align: center;font-size:12px;">No.</th>
                            <th style="text-align: center;font-size:14px;">No SPK/SPER</th>
                            <th style="text-align: center;font-size:14px;">Deskripsi Jasa</th>
                            <th style="text-align: center;font-size:14px;">Nama Subkontraktor</th>
                            <th style="text-align: center;font-size:14px;">Nama Pengambil Surat</th>
                            <th style="text-align: center;font-size:14px;">Tanggal Diambil</th>
                            <th style="text-align: center;font-size:14px;">Nama PJ SPK/SPER</th>
                            <!-- <th style="text-align: center;font-size:14px;">Status Surat</th> -->
                            <th style="text-align: center;font-size:14px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($surat_keluar as $i => $keluar)
                                        <tr>
                                            <td style="text-align: center;font-size:11px;">{{ ++$i }}</td>
                                            <td style="text-align: center;font-size:14px;">{{ $keluar->nomor_surat }}</td>
                                            <td style="text-align: center;font-size:14px;">{{ $keluar->deskripsi }}</td>
                                            <td style="text-align: center;font-size:14px;">{{ $keluar->nama_subkon }}</td>
                                            <td style="text-align: center;font-size:14px;">{{ $keluar->nama_ygambil }}</td>
                                            <td style="text-align: center;font-size:14px;">{{ $keluar->tanggal_diambil }}</td>
                                            <td style="text-align: center;font-size:14px;">{{ $keluar->pj_spk_sper }}</td>
                                            <!-- <td style="text-align: center;font-size:14px;">{{ $keluar->status }}</td> -->
                                            <td style="text-align: center;font-size:14px;">
                                                <a href="/editsurat_keluar/{{ $keluar->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="/surat_keluar/show_manual/{{ $keluar->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="/surat_keluar/delete/{{ $keluar->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
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
@section('scripts')
    <link rel="stylesheet" href="{{asset('https:///code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css')">
    <script src="{{asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js')"></script>
    <script>
        $( function() {
            $( ".datepicker" ).datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
@endsection