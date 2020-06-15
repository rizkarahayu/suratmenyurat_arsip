@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                <div class="box-header">
                        <div class="card-header text-center">
                        Tabel Data Dokumen Pemenang
                        </div>
                    </div>
                    <br/>
                    <a href="/tambah_pemenang" class="btn btn-primary">Buat Dok Pemenang</a>
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
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                        <th style="text-align: center;font-size:13px;">No.</th>
                        <th style="text-align: center;font-size:13px;">Deskripsi Singkat</th>
                        <th style="text-align: center;font-size:13px;">Nama Proyek</th>
                        <th style="text-align: center;font-size:13px;">Nama Pemenang</th>
                        <th style="text-align: center;font-size:13px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($dok_pemenang  as $i => $pemenang)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $pemenang->deskripsi_singkat }}</td>
                                            <td>{{ $pemenang->nama_proyek }}</td>
                                            <td>{{ $pemenang->nama_pemenang }}</td>
                                            <td>
                                                <a href="/edit_pemenang/{{ $pemenang->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="/dok_pemenang/show/{{ $pemenang->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="/dok_pemenang/delete/{{ $pemenang->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                <!-- <a href="/dok_pemenang/download/{{ $pemenang->id }}" class="btn btn-danger"><i class="fa fa-download"></i></a>
                                                <a href="/dok_pemenang/upload_pemenang/{{ $pemenang->id }}" class="btn btn-success"><i class="fas fa-upload"></i></a> -->
                                            </td>
                                        </tr>
                                
                                @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
                    <div class="card-header align-center"  >
                        Halaman : {{ $dok_pemenang->currentPage() }} <br/>
                        Jumlah Data : {{ $dok_pemenang->total() }} <br/>
                        Data Per Halaman : {{ $dok_pemenang->perPage() }} <br/>
                        {{ $dok_pemenang->links() }}
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