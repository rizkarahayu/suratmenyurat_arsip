@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
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
                                <input type="text" class="form-control" name="no_surat" id="no_surat" required placeholder="{{$dok_spph->no_surat}}">       
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Perihal</label>
                                <input type="text" class="form-control" name="perihal" id="perihal" required placeholder="{{$dok_spph->perihal}}">  
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Subkontraktor</label>
                                <input type="text" class="form-control" name="perihal" id="perihal" required placeholder="{{$dok_spph->nama_subkon}}">  
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Dibuat</label>
                                <input class="form-control textpicker" name="tanggal_dibuat" id="tanggal_dibuat" type="text" required placeholder="{{$dok_spph->created_at}}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Deskripsi Pekerjaan Jasa</label>
                                <input type="textarea" class="form-control" name="deskripsi_jasa" id="deskripsi_jasa" required placeholder="{{$dok_spph->deskripsi_jasa}}">
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Pelaksanaan</label>
                                <input class="form-control textpicker" required placeholder="{{$dok_spph->tanggal_pelaksanaan}}" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Jam</label>
                                <input type="text" class="form-control" name="jam" id="jam" required placeholder="{{$dok_spph->jam}}">
                            </div> 
                            <div class="box-footer">
                                <a href="{{ url('/dataspph') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
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