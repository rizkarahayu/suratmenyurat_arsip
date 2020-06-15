@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Form Buat Dokumen SPPH
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
                    <form class="form-horizontal" method="POST" action="{{ url('/tambah_sph/store') }}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nomor Surat</label>
                                <input type="text" class="form-control" name="no_surat" id="no_surat" required placeholder="Masukkan Nomor Surat">       
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Dibuat</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="tanggal_dibuat" id="tanggal_dibuat" type="datetime-local">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nomor SPPH</label>
                                <input type="text" class="form-control" name="no_spph" id="no_spph" required placeholder="Masukkan Nomor SPPH">  
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal SPPH</label>
                                <input class="form-control datepicker" placeholder="Pilih Tanggal" name="tanggal_spph" id="tanggal_spph" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Deskripsi Pekerjaan Jasa</label>
                                <input type="textarea" class="form-control" name="deskripsi_pekerjaan" id="deskripsi_pekerjaan" required placeholder="Masukkan Deskripsi" >
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Proyek</label>
                                <input type="text" class="form-control" name="nama_proyek" id="nama_proyek" required placeholder="Masukkan Nama Proyek">  
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Harga</label>
                                <input type="text" class="form-control" name="harga" id="harga" required placeholder="Masukkan Harga (40000)">  
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Terbilang</label>
                                <input type="text" class="form-control" name="terbilang" id="terbilang" required placeholder="Masukkan Terbilang">  
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
                                <input type="text" class="form-control" name="nama_perwakilan" id="nama_perwakilan" required placeholder="Masukkan Nama Perwakilan" >
                            </div> 
                            <div class="box-footer">
                                <a href="{{ url('/datasph') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
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