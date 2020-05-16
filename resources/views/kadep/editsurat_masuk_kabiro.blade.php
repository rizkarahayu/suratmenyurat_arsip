@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Edit Surat Masuk Kode J01 : {{$surat_masuk_kadep->kodej01}}
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
                    <form class="form-horizontal" method="POST" action="{{ url('/surat_masuk_kadep/update_kabiro/'.$surat_masuk_kadep->id) }}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Kode J01</label>
                                <input type="text" class="form-control" name="kodej01" id="kodej01"  value="{{$surat_masuk_kadep->kodej01}}" >
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Kode Proyek</label>
                                <input type="text" class="form-control" name="kode_proyek" id="kode_proyek"  value="{{$surat_masuk_kadep->kode_proyek}}" >
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Deskripsi Pekerjaan Jasa</label>
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi"  value="{{$surat_masuk_kadep->deskripsi}}">
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Diterima</label>
                                <!-- <input type="date" class="date form-control" name="tanggal_diterima" id="tanggal_diterima" required value="Pilih Tanggal" > -->
                                <input class="form-control datepicker" value="{{$surat_masuk_kadep->tanggal_diterima}}" name=">tanggal_diterima" id="tanggal_diterima"  type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Status Surat</label>
                                <input class="form-control datepicker" value="{{$surat_masuk_kadep->status_surat = 'Diterima'}}" name=">tanggal_diterima" id="tanggal_diterima"  type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Kabiro</label>
                                <select required class="form-control" name ="nama_pj" id="nama_pj">
                                    <option value="" >Pilih Nama Kabiro (PJ SPK/SPER)</option>
                                    @foreach ($nama_kabiro  as  $kabiro)
                                        @if ($kabiro->is_admin == 'kabiro')
                                            <option  value="{{ $kabiro->name }}" > {{ $kabiro->name }} </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="box-footer">
                                <a href="{{ url('/surat_masuk_kadep') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
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