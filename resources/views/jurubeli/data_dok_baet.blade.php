@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                <div class="box-header">
                        <div class="card-header text-center">
                        Tabel Data Dokumen BAET
                        </div>
                    </div>
                    <br/>
                    <a href="/tambah_baet" class="btn btn-primary">Buat BAET</a>
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
                <div style="overflow-x:auto;">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr style="font-size:13px;">
                            <th>No.</th>
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Referensi J01</th>
                            <th>Tanggal Dibuat</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($dok_baet  as $i => $baet)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $baet->no_surat }}</td>
                                            <td>{{ $baet->perihal }}</td>
                                            <td>{{ $baet->referensi_j01 }}</td>
                                            <td>{{ $baet->tanggal_dibuat }}</td>
                                            <td>
                                                <a href="/edit_baet/{{ $baet->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="/dok_baet/show/{{ $baet->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="/dok_baet/delete/{{ $baet->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                <a href="/dok_baet/download/{{ $baet->id }}" class="btn btn-danger"><i class="fa fa-download"></i></a>
                                                <a href="/dok_baet/upload_baet/{{ $baet->id }}" class="btn btn-success"><i class="fas fa-upload"></i></a>
                                            </td>
                                        </tr>
                                @endforeach
                         </tbody>
                    </table>
                    </div>
                </div>
            </div>
                    <div class="card-header align-center"  >
                        Halaman : {{ $dok_baet->currentPage() }} <br/>
                        Jumlah Data : {{ $dok_baet->total() }} <br/>
                        Data Per Halaman : {{ $dok_baet->perPage() }} <br/>
                        {{ $dok_baet->links() }}
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