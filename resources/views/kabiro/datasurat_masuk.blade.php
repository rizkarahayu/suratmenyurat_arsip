@extends('layout.template')
@section('content')
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>Lakukan Edit untuk Menambahkan Jenis Pengadaan dan Mengisi Form Sesuai Pilihan Jenis Pengadaan</strong>
</div>
<!-- <div class="alert alert-warning">
  <strong>Warning!</strong> Indicates a warning that might need attention.
</div> -->
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
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
                            <th style="text-align: center;font-size:14px;">Kode J01</th>
                            <th>Kode Proyek</th>
                            <th style="text-align: center;font-size:14px;">Deskripsi Jasa</th>
                            <th style="text-align: center;font-size:14px;">Tanggal Diterima</th>
                            <th style="text-align: center;font-size:14px;">Status Surat</th>
                            <th style="text-align: center;font-size:14px;">Nama PJ/Kabiro</th>
                            <th style="text-align: center;font-size:14px;">Jenis Pengadaan</th>
                            <!-- <th>Buat Surat</th> -->
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($surat_masuk as $i => $masuk)
                                @if(($masuk->nama_pj==Auth::user()->name) && ($masuk->status_surat=='diterima'))
                                    <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{ $masuk->kodej01 }}</td>
                                          <td>{{ $masuk->kode_proyek }}</td>
                                          <td>{{ $masuk->deskripsi }}</td>
                                          <td>{{$masuk->tanggal_diterima}}</td>
                                          @if( $masuk->status_surat == NULL)
                                            <td><span class="badge badge-warning">{{ $masuk->status_surat = 'Belum Diverifikasi'}}</span></td>
                                          @elseif ($masuk->status_surat == 'diterima') 
                                            <td><span class="badge badge-success">{{ $masuk->status_surat = 'Diterima'}}</span></td>
                                          @else
                                            <td><span class="badge badge-danger">{{ $masuk->status_surat = 'Ditolak'}}</td>
                                          @endif
                                          <td>{{ $masuk->nama_pj}}</td>
                                          @if( $masuk->jenis_pengadaan == null)
                                             <td>Belum Isi Jenis Pengadaan</td>
                                          @else 
                                            <td>{{ $masuk->jenis_pengadaan}} Langsung</td>
                                          @endif
                                          <!-- <td>
                                                <a href="/editsurat_masuk_kadep/{{ $masuk->id }}" class="btn btn-warning">Penunjukan Langsung</a><br>
                                                <a href="/surat_masuk_kadep/show/{{ $masuk->id }}" class="btn btn-success">Pemilihan Langsung<i class="fa fa-eye"></i></a>
                                          </td> -->
                                          <td>
                                                @if($masuk->jenis_pengadaan == 'pemilihan')
                                                    <a href="/surat_masuk_kabiro/show/pemilihan/{{ $masuk->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                @else
                                                    <a href="/surat_masuk_kabiro/show/penunjukan/{{ $masuk->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                @endif
                                                <a href="/surat_masuk_kabiro/edit/{{ $masuk->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="/surat_masuk_kabiro/delete/{{ $masuk->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
<style>
    .alert {
    padding: 15px;
    color: #9F6000;
    background-color: #FEEFB3;
    margin-bottom: 0px;
    }

    /* The close button */
    .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
    }

    /* When moving the mouse over the close button */
    .closebtn:hover {
    color: black;
    }
</style>
@endsection