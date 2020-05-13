@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Detail Surat Masuk
                        </div>
                    </div>
                    <div class="box-body">
                        @if(Session::has('message'))
                            <div class="alert alert-danger alert-dismissable flat" style="margin-left: 0px;">
                                <i class="fa fa-check"></i>
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    <form class="form-horizontal" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Surat Masuk Dari Kepala Departemen</h3>
                                    <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Kode J01</label>
                                                <input type="text" class="form-control" name="kodej01" id="kodej01" placeholder="{{$surat_masuk_kabiro->kodej01}}" >       
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Kode Proyek</label>
                                                <input type="text" class="form-control" name="kode_proyek" id="kode_proyek" placeholder="{{$surat_masuk_kabiro->kode_proyek}}" >
                                            </div> 
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Deskripsi Pekerjaan Jasa</label>
                                                <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="{{$surat_masuk_kabiro->deskripsi}}" >
                                            </div> 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Kabiro</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->nama_pj}}" name="nama_pj" id="nama_pj" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Jenis Pengadaan</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->jenis_pengadaan}}" name="status_surat" id="status_surat" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Diterima</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" name="tanggal_diterima" id="tanggal_diterima" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Status Surat</label>
                                        @if($surat_masuk_kabiro->status_surat == 1)
                                            <input class="form-control" placeholder="Diterima" name="status_surat" id="status_surat" type="text">
                                        @endif
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Surat Masuk Jenis Pengadaan - Penunjukan Langsung</h3>
                                    <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Jenis Pengadaan</label>
                                        <input type="text" class="form-control" placeholder="{{$surat_masuk_kabiro->jenis_pengadaan}} Langsung" >       
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Mulai SPPH</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div> 
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Selesai SPPH</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Mulai Pembukaan Penawaran Dokumen</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Selesai Pembukaan Penawaran Dokumen</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div> 
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Mulai BAET</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Selesai BAET</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>    
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Mulai BANH</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Selesai BANH</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Mulai Pemilihan Pemenang</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Selesai Pemilihan Pemenang</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Mulai Usulan + Persetujuan Kontrak</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Selesai Usulan + Persetujuan Kontrak</label>
                                                <input class="form-control" placeholder="{{$surat_masuk_kabiro->tanggal_diterima}}" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('/surat_masuk_kabiro') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                        </div>
                    </form>
                    </div>
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