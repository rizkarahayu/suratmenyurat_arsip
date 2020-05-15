@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Lakukan Edit untuk Verifikasi Surat</strong>
    </div>
        <div class="card mt-5">
              <div class="card-header">
                  <h3 class="card-title text-center">Tabel Data Surat Masuk Kepala Departemen</h3>
              </div>
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
                                    <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{ $masuk->kodej01 }}</td>
                                          <td>{{ $masuk->kode_proyek }}</td>
                                          <td>{{ $masuk->deskripsi }}</td>
                                          <td>{{ $masuk->tanggal_diterima }}</td>
                                          @if($masuk->status_surat == 'ditolak') 
                                            <td><span class="badge badge-danger">Ditolak</span></td>
                                          @elseif ($masuk->status_surat == 'diterima') 
                                            <td><span class="badge badge-success">Diterima</span></td>
                                          @else 
                                            <td><span class="badge badge-warning">Belum Verifikasi</td>
                                          @endif
                                          @if($masuk->status_surat == 'ditolak') 
                                            <td>-</td>
                                          @elseif($masuk->status_surat == 'diterima') 
                                            <td>{{ $masuk->nama_pj}}</td>
                                          @else 
                                            <td>Belum Input</td>
                                          @endif
                                          @if($masuk->status_surat == 'ditolak')
                                          <td>
                                            <a href="/surat_masuk_kadep/show/{{ $masuk->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                            <a href="/surat_masuk_kadep/delete/{{ $masuk->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                          </td>
                                          @else
                                          <td>
                                            <a href="/editsurat_masuk_kadep/{{ $masuk->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="/surat_masuk_kadep/show/{{ $masuk->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                            <a href="/surat_masuk_kadep/delete/{{ $masuk->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                          </td>
                                          @endif
                                    </tr>
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