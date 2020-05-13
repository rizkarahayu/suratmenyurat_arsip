@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Edit Surat Masuk
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
                        <form class="form-horizontal" method="POST" action="{{ url('/surat_keluar/update/'.$surat_keluar_sekretaris->id) }}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nomor Surat</label>
                                <input type="text" class="form-control" name="nomor_surat" id="nomor_surat" required placeholder="{{ $surat_keluar_sekretaris->nomor_surat }}" >       
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Subkontraktor</label>
                                <select required class="form-control" name ="nama_subkon" id="nama_subkon">
                                    <option value="" >{{ $surat_keluar_sekretaris->nama_subkon }}</option>
                                    @foreach ($nama_subkon  as  $subkon)
                                        @if ($subkon->is_admin == 'subkontraktor')
                                            <option  value="{{ $subkon->name }}" > {{ $subkon->name }} </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Deskripsi Pekerjaan Jasa</label>
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi" required placeholder="{{ $surat_keluar_sekretaris->deskripsi }}" >
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Diambil</label>
                                <!-- <input type="date" class="date form-control" name="tanggal_diterima" id="tanggal_diterima" required placeholder="Pilih Tanggal" > -->
                                <input class="form-control datepicker" name="tanggal_diambil" id="tanggal_diambil" type="date" required placeholder="{{ $surat_keluar_sekretaris->tanggal_diambil }}>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Pengambil</label>
                                <input class="form-control" placeholder="{{ $surat_keluar_sekretaris->nama_ygambil }}" name="nama_ygambil" id="nama_ygambil" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Kabiro</label>
                                <select required class="form-control" name ="pj_spk_sper" id="pj_spk_sper">
                                    <option value="" >{{ $surat_keluar_sekretaris->pj_spk_sper }}</option>
                                    @foreach ($nama_subkon  as  $kabiro)
                                        @if ($kabiro->is_admin == 'kabiro')
                                            <option  value="{{ $kabiro->name }}" > {{ $kabiro->name }} </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Kabiro</label>
                                <select class="form-control" name="status" id="status">
                                    <option required placeholder="{{ $surat_keluar_sekretaris->status }}" >{{ $surat_keluar_sekretaris->status }}</option>
                                    <option value="1" @if (old('status') == 1) selected @endif>Diterima</option>
                                    <option value="0" @if (old('status') == 0) selected @endif>Ditolak</option>
                                </select>
                            </div>
                            <div class="box-footer">
                                <a href="{{ url('/datasurat_keluar') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
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