@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Detail Surat Masuk No Surat 1 : {{$surat_keluar_sekretaris->nomor_surat}}
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
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nomor Surat</label>
                                <input type="text" class="form-control" name="nomor_surat" id="nomor_surat" disabled placeholder="{{ $surat_keluar_sekretaris->nomor_surat }}" >       
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Subkontraktor</label>
                                <input type="text" class="form-control" name="nomor_surat" id="nomor_surat" disabled placeholder="{{ $surat_keluar_sekretaris->nama_subkon }}" >       
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Deskripsi Pekerjaan Jasa</label>
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi" disabled placeholder="{{ $surat_keluar_sekretaris->deskripsi }}" >
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Diambil</label>
                                <!-- <input type="date" class="date form-control" name="tanggal_diterima" id="tanggal_diterima" disabled placeholder="Pilih Tanggal" > -->
                                <input class="form-control datepicker" name="tanggal_diambil" id="tanggal_diambil" type="text" disabled placeholder="{{ $surat_keluar_sekretaris->tanggal_diambil }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Pengambil</label>
                                <input class="form-control" placeholder="{{ $surat_keluar_sekretaris->nama_ygambil }}" name="nama_ygambil" id="nama_ygambil" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Kabiro</label>
                                <input type="text" class="form-control" name="nomor_surat" id="nomor_surat" disabled placeholder="{{ $surat_keluar_sekretaris->pj_spk_sper }}" >     
                            </div>
                            <!-- <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Kabiro</label>
                                <select class="form-control" name="status" id="status">
                                    <option disabled placeholder="{{ $surat_keluar_sekretaris->status }}" >{{ $surat_keluar_sekretaris->status }}</option>
                                    <option value="1" @if (old('status') == 1) selected @endif>Diterima</option>
                                    <option value="0" @if (old('status') == 0) selected @endif>Ditolak</option>
                                </select>
                            </div> -->
                            <div class="box-footer">
                                <a href="{{ url('/datasurat_keluar') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                            </div>
                        </div>
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