@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Form Buat Dokumen BAET
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
                    <form class="form-horizontal" method="POST" action="{{ url('/tambah_baet/store') }}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nomor Surat</label>
                                <input type="text" class="form-control" name="no_surat" id="no_surat" required placeholder="Masukkan Nomor Surat">       
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Perihal</label>
                                <input type="text" class="form-control" name="perihal" id="perihal" required placeholder="Masukkan Perihal">  
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Referensi J01</label>
                                <input type="text" class="form-control" name="referensi_j01" id="referensi_j01" required placeholder="Masukkan Referensi J01">  
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Dibuat</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="tanggal_dibuat" id="tanggal_dibuat" type="datetime-local">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>List Pekerjaan</label>
                                <textarea class="form-control" name="list_pekerjaan" id="list_pekerjaan" required placeholder="Masukkan List Pekerjaan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Keterangan Pekerjaan</label>
                                <textarea class="form-control" name="keterangan_pekerjaan" id="keterangan_pekerjaan" required placeholder="Masukkan Keterangan Pekerjaan"></textarea>
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Mulai</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="tanggal_mulai" id="tanggal_mulai" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Selesai</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="tanggal_selesai" id="tanggal_selesai" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Keterangan Tanggal</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="keterangan_tanggal" id="keterangan_tanggal" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Peralatan Subkon</label>
                                <textarea class="form-control" name="peralatan_subkon" id="peralatan_subkon" required placeholder="Masukkan Peralatan Subkon"></textarea>
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Peralatan PAL</label>
                                <textarea class="form-control" name="peralatan_pal" id="peralatan_pal" required placeholder="Masukkan Peralatan PAL"></textarea>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Keterangan Peralatan</label>
                                <input type="text" class="form-control" name="keterangan_peralatan" id="keterangan_peralatan" required placeholder="Masukkan Keterangan Peralatan" >
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tertanda 1</label>
                                <input type="text" class="form-control" name="tertanda1" id="tertanda1" required placeholder="Masukkan Tertanda 1" >
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tertanda 2</label>
                                <input type="text" class="form-control" name="tertanda2" id="tertanda2" required placeholder="Masukkan Tertanda 2" >
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tertanda 3</label>
                                <input type="text" class="form-control" name="tertanda3" id="tertanda3" required placeholder="Masukkan Tertanda 3" >
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tertanda 4</label>
                                <input type="text" class="form-control" name="tertanda4" id="tertanda4" required placeholder="Masukkan Tertanda 4" >
                            </div>
                            <div class="box-footer">
                                <a href="{{ url('/databaet') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                                <button type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                                    <i class="fa fa-save"></i> Save
                                </button>
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