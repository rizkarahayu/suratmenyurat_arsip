@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Detail Dokumen BANH
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
                                <input type="text" class="form-control" name="no_surat" id="no_surat"  disabled value="{{$dok_banh->no_surat}}">       
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Dibuat</label>
                                <input class="form-control" disabled value="{{$dok_banh->tanggal_dibuat}}" name="tanggal_dibuat" id="tanggal_dibuat" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Subkontraktor</label>
                                <input class="form-control" disabled value="{{$dok_banh->nama_subkon}}" name="tanggal_dibuat" id="tanggal_dibuat" type="text">
                                
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Perwakilan</label>
                                <input class="form-control" name="nama_perwakilan" id="nama_perwakilan"  disabled value="{{$dok_banh->nama_perwakilan}}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No J01</label>
                                <input class="form-control" name="no_j01" id="no_j01"  disabled value="{{$dok_banh->no_j01}}">
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Proyek</label>
                                <input class="form-control" name="no_proyek" id="no_proyek"  disabled value="{{$dok_banh->no_proyek}}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Kode Proyek</label>
                                <input class="form-control" name="kode_proyek" id="kode_proyek"  disabled value="{{$dok_banh->kode_proyek}}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No SPH</label>
                                <input class="form-control" name="no_sph" id="no_sph"  disabled value="{{$dok_banh->no_sph}}">
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal SPH</label>
                                <input class="form-control" disabled value="{{$dok_banh->tanggal_sph}}" name="tanggal_sph" id="tanggal_sph" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No BAET</label>
                                <input class="form-control" name="no_baet" id="no_baet"  disabled value="{{$dok_banh->no_baet}}">
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal BAET</label>
                                <input class="form-control " disabled value="{{$dok_banh->tanggal_baet}}" name="tanggal_baet" id="tanggal_baet" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Harga</label>
                                <input class="form-control" disabled value="{{$dok_banh->harga}}" name="harga" id="harga" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Harga Nego 1</label>
                                <input class="form-control" disabled value="{{$dok_banh->harga_nego1}}" name="harga_nego1" id="harga_nego1" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Harga Nego 2</label>
                                <input class="form-control" disabled value="{{$dok_banh->harga_nego2}}" name="harga_nego2" id="harga_nego2" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Harga Nego 3</label>
                                <input class="form-control" disabled value="{{$dok_banh->harga_nego3}}" name="harga_nego3" id="harga_nego3" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nilai Kontrak</label>
                                <input class="form-control" disabled value="{{$dok_banh->nilai_kontrak}}" name="nilai_kontrak" id="nilai_kontrak" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Juru Beli 1</label>
                                <input class="form-control" disabled value="{{$dok_banh->nama_jurubeli1}}" name="nama_jurubeli1" id="nama_jurubeli1" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Juru Beli 2</label>
                                <input class="form-control" disabled value="{{$dok_banh->nama_jurubeli1}}" name="nama_jurubeli2" id="nama_jurubeli2" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Juru Beli 3</label>
                                <input class="form-control" disabled value="{{$dok_banh->nama_jurubeli1}}" name="nama_jurubeli3" id="nama_jurubeli3" type="text">
                            </div>
                            <div class="box-footer">
                                <a href="{{ url('/databanh') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
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
            $( ".textpicker" ).textpicker({
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
@endsection