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
                            @if($surat_masuk_sekretaris->status_surat == 'diterima')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Kode J01</label>
                                        <input type="text" class="form-control" name="kodej01" id="kodej01" required placeholder="{{$surat_masuk_sekretaris->kodej01}}" >       
                                    </div> 
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Kode Proyek</label>
                                        <input type="text" class="form-control" name="kode_proyek" id="kode_proyek" required placeholder="{{$surat_masuk_sekretaris->kode_proyek}}" >
                                    </div> 
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Deskripsi Pekerjaan Jasa</label>
                                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" required placeholder="{{$surat_masuk_sekretaris->deskripsi}}" >
                                    </div> 
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Diterima</label>
                                        <!-- <input type="date" class="date form-control" name="tanggal_diterima" id="tanggal_diterima" required placeholder="Pilih Tanggal" > -->
                                        <input class="form-control" placeholder="{{$surat_masuk_sekretaris->tanggal_diterima}}" name="tanggal_diterima" id="tanggal_diterima" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Status Surat</label>
                                        <!-- <input type="date" class="date form-control" name="tanggal_diterima" id="tanggal_diterima" required placeholder="Pilih Tanggal" > -->
                                        <input class="form-control" placeholder="{{ $surat_masuk_sekretaris->status_surat = 'Diterima'}}" name="tanggal_diterima" id="tanggal_diterima" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama PJ/Kabiro</label>
                                        <input type="text" class="form-control" name="nama_pj" id="nama_pj" required placeholder="{{$surat_masuk_sekretaris->nama_pj}}" >
                                    </div>
                                    <div class="box-footer">
                                        <a href="{{ url('/datasurat_keluar') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                                </div>
                            @endif
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