@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                <div class="box-header">
                        <div class="card-header text-center">
                        Tabel Data Dokumen MUPP
                        </div>
                    </div>
                    <br/>
                    <a href="/tambah_usulan" class="btn btn-primary">Buat Dok MUPP</a>
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
                        <th style="text-align: center;font-size:13px;">No Memo</th>
                        <th style="text-align: center;font-size:13px;">Referensi J01</th>
                        <th style="text-align: center;font-size:13px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($dok_usulan  as $i => $usulan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $usulan->no_memo }}</td>
                                            <td>{{ $usulan->referensi_j01 }}</td>
                                            <td>
                                                <a href="/edit_usulan/{{ $usulan->id }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="/dok_usulan/show/{{ $usulan->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="/dok_usulan/delete/{{ $usulan->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                <!-- <a href="/dok_usulan/download/{{ $usulan->id }}" class="btn btn-danger"><i class="fa fa-download"></i></a> -->
                                                <a href="/dok_usulan/upload_usulan/{{ $usulan->id }}" class="btn btn-success"><i class="fas fa-upload"></i></a>
                                            </td>
                                        </tr>
                                
                                @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
                    <div class="card-header align-center"  >
                        Halaman : {{ $dok_usulan->currentPage() }} <br/>
                        Jumlah Data : {{ $dok_usulan->total() }} <br/>
                        Data Per Halaman : {{ $dok_usulan->perPage() }} <br/>
                        {{ $dok_usulan->links() }}
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