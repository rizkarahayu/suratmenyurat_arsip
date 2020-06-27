@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Form Buat Dokumen SPK
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
                    <form class="form-horizontal" method="POST" action="{{ url('/tambah_spk/store') }}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nomor Surat</label>
                                <input type="text" class="form-control" name="no_surat" id="no_surat" required placeholder="Masukkan Nomor Surat">       
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No SPH</label>
                                <input class="form-control" name="no_sph" id="no_sph" required placeholder="Masukkan No SPH">
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal SPH</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="tanggal_sph" id="tanggal_sph" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No BAET</label>
                                <input class="form-control" name="no_baet" id="no_baet" required placeholder="Masukkan No BAET">
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal BAET</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="tanggal_baet" id="tanggal_baet" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No BANH</label>
                                <input class="form-control" name="no_banh" id="no_banh" required placeholder="Masukkan No BAET">
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal BANH</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="tanggal_banh" id="tanggal_banh" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Proyek</label>
                                <input class="form-control" name="nama_proyek" id="nama_proyek" required placeholder="Masukkan Nama Proyek">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Harga</label>
                                <input class="form-control" placeholder="Masukkan Harga" name="harga" id="harga" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Harga Terbilang</label>
                                <input class="form-control" name="harga_terbilang" id="harga_terbilang" required placeholder="Masukkan Harga Terbilang">
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
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Dibuat</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="tanggal_dibuat" id="tanggal_dibuat" type="datetime-local">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Subkontraktor</label>
                                <select  class="form-control" name ="nama_subkon" id="nama_subkon">
                                    <option>Pilih Nama Sub Kontraktor</option>
                                    @foreach ($nama_subkon  as  $subkon)
                                        @if ($subkon->is_admin == 'subkontraktor')
                                            <option  value="{{ $subkon->name }}" > {{ $subkon->name }} </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Perwakilan</label>
                                <input class="form-control" name="nama_perwakilan" id="nama_perwakilan" required placeholder="Masukkan Nama Perwakilan">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Alamat Subkontraktor</label>
                                <input class="form-control" name="alamat" id="alamat" required placeholder="Masukkan Alamat Subkontraktor">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tembusan1</label>
                                <input class="form-control" placeholder="Masukkan Tembusan1" name="tembusan1" id="tembusan1" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tembusan2</label>
                                <input class="form-control" placeholder="Masukkan Tembusan2" name="tembusan2" id="tembusan2" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tembusan3</label>
                                <input class="form-control" placeholder="Masukkan Tembusan3" name="tembusan3" id="tembusan3" type="text">
                            </div>
                            <div class="box-footer">
                                <a href="{{ url('/dataspk') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
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