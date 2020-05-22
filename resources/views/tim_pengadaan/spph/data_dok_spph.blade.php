@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                <div class="box-header">
                        <div class="card-header text-center">
                        Tabel Data Dokumen SPPH
                        </div>
                    </div>
                    <br/>
                    <a href="/tambah_spph" class="btn btn-primary">Buat SPPH</a>
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
                    <h3 class="card-title">Tabel Data Dokumen SPPH</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                    </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Tanggal Dibuat</th>
                            <!-- <th>Deskripsi Pekerjaan Jasa</th> -->
                            <th>Tanggal Pelaksanaan</th>
                            <th>Jam</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($dok_spph  as $i => $spph)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $spph->no_surat }}</td>
                                            <td>{{ $spph->perihal }}</td>
                                            <td>{{ $spph->tanggal_dibuat }}</td>
                                            <!-- <td>{{ $spph->deskripsi_jasa }}</td> -->
                                            <td>{{ $spph->tanggal_pelaksanaan }}</td>
                                            <td>{{ $spph->jam }}</td>
                                            <td>
                                                <a href="/edit_spph/{{ $spph->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="/dok_spph/show/{{ $spph->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="/dok_spph/delete/{{ $spph->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                <a href="/dok_spph/download/{{ $spph->id }}" class="btn btn-danger"><i class="fa fa-download"></i></a>
                                                <a href="/dok_spph/upload/{{ $spph->id }}" class="btn btn-success"><i class="fas fa-upload"></i></a>
                                            </td>
                                        </tr>
                                @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
                    <div class="card-header align-center"  >
                        Halaman : {{ $dok_spph ?? ''->currentPage() }} <br/>
                        Jumlah Data : {{ $dok_spph ?? ''->total() }} <br/>
                        Data Per Halaman : {{ $dok_spph ?? ''->perPage() }} <br/>
                        {{ $dok_spph ?? ''->links() }}
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