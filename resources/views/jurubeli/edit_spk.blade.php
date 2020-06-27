@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Edit Dokumen spk : {{$dok_spk->no_surat}}
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
                    <form class="form-horizontal" method="POST" action="{{ url('/edit_spk/update/'.$dok_spk->id) }}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nomor Surat</label>
                                <input type="text" class="form-control" name="no_surat" id="no_surat"  value="{{$dok_spk->no_surat}}">       
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No SPH</label>
                                <input class="form-control" name="no_sph" id="no_sph"  value="{{$dok_spk->no_sph}}">
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal SPH</label>
                                <input class="form-control datepicker" value="{{$dok_spk->tanggal_sph}}" name="tanggal_sph" id="tanggal_sph" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No BAET</label>
                                <input class="form-control" name="no_baet" id="no_baet"  value="{{$dok_spk->no_baet}}">
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal BAET</label>
                                <input class="form-control datepicker" value="{{$dok_spk->tanggal_baet}}" name="tanggal_baet" id="tanggal_baet" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>No BANH</label>
                                <input class="form-control" name="no_banh" id="no_banh"  value="{{$dok_spk->no_banh}}">
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal BANH</label>
                                <input class="form-control datepicker" value="{{$dok_spk->tanggal_banh}}" name="tanggal_banh" id="tanggal_banh" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Proyek</label>
                                <input class="form-control" name="nama_proyek" id="nama_proyek"  value="{{$dok_spk->nama_proyek}}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Harga</label>
                                <input class="form-control" value="{{$dok_spk->harga}}" name="harga" id="harga" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Harga Terbilang</label>
                                <input class="form-control" name="harga_terbilang" id="harga_terbilang"  value="{{$dok_spk->harga_terbilang}}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Mulai</label>
                                <input class="form-control datepicker" value="{{$dok_spk->tanggal_mulai}}" name="tanggal_mulai" id="tanggal_mulai" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Selesai</label>
                                <input class="form-control datepicker" value="{{$dok_spk->tanggal_selesai}}" name="tanggal_selesai" id="tanggal_selesai" type="date">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Dibuat</label>
                                <input class="form-control datepicker" value="{{$dok_spk->tanggal_dibuat}}" name="tanggal_dibuat" id="tanggal_dibuat" type="datetime-local">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Subkontraktor</label>
                                <select  class="form-control" name ="nama_subkon" id="nama_subkon">
                                    <option>{{$dok_spk->nama_subkon}}</option>
                                    @foreach ($nama_subkon  as  $subkon)
                                        @if ($subkon->is_admin == 'subkontraktor')
                                            <option  value="{{ $subkon->name }}" > {{ $subkon->name }} </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>  
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Perwakilan</label>
                                <input class="form-control" name="nama_perwakilan" id="nama_perwakilan"  value="{{$dok_spk->nama_perwakilan}}">
                            </div><div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Alamat Subkontraktor</label>
                                <input class="form-control" name="alamat" id="alamat"  value="{{$dok_spk->alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tembusan1</label>
                                <input class="form-control" value="{{$dok_spk->tembusan1}}" name="tembusan1" id="tembusan1" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tembusan2</label>
                                <input class="form-control" value="{{$dok_spk->tembusan2}}" name="tembusan2" id="tembusan2" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tembusan3</label>
                                <input class="form-control" value="{{$dok_spk->tembusan3}}" name="tembusan3" id="tembusan3" type="text">
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