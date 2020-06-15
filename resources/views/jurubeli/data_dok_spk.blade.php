@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                <div class="box-header">
                        <div class="card-header text-center">
                        Tabel Data Dokumen SPK
                        </div>
                    </div>
                    <br/>
                    <a href="/tambah_spk" class="btn btn-primary">Buat SPK</a>
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
                        <th style="text-align: center;font-size:13px;">Nomor Surat</th>
                        <th style="text-align: center;font-size:13px;">Tanggal Dibuat</th>
                        <th style="text-align: center;font-size:13px;">Nama Subkon</th>
                        <th style="text-align: center;font-size:13px;">Nama Perwakilan</th>
                        <th style="text-align: center;font-size:13px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($dok_spk  as $i => $spk)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $spk->no_surat }}</td>
                                            <td>{{ $spk->tanggal_dibuat }}</td>
                                            <td>{{ $spk->nama_subkon }}</td>
                                            <td>{{ $spk->nama_perwakilan }}</td>
                                            <td>
                                                <a href="/edit_spk/{{ $spk->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="/dok_spk/show/{{ $spk->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="/dok_spk/delete/{{ $spk->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                <a href="/dok_spk/download/{{ $spk->id }}" class="btn btn-danger"><i class="fa fa-download"></i></a>
                                                <a href="/dok_spk/upload_spk/{{ $spk->id }}" class="btn btn-success"><i class="fas fa-upload"></i></a>
                                            </td>
                                        </tr>
                                @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
                    <div class="card-header align-center"  >
                        Halaman : {{ $dok_spk->currentPage() }} <br/>
                        Jumlah Data : {{ $dok_spk->total() }} <br/>
                        Data Per Halaman : {{ $dok_spk->perPage() }} <br/>
                        {{ $dok_spk->links() }}
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