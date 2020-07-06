@extends('layout.template')
@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Upload Dokumen SPER : {{$dok_sper->no_sper}}
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
                        <form action="{{ url('/dok_sper/uploadstore_sper/'.$dok_sper->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Masukkan File SPER</label>
                                        <input type="file" class="form-control" name="file_sper" id="file_sper" required placeholder="Pilih File Untuk SPER">       
                                    </div> 
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Keterangan SPER</label>
                                        <input type="text" class="form-control" name="keterangan_sper" id="keterangan_sper" required placeholder="Masukkan Keterangan Untuk SPK">  
                                    </div>
                                        <a href="{{ url('/datasper') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                                        <button type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                                            <i class="fa fa-save"></i> Upload
                                        </button>
                                    </div>
                                </div>
                        </form>
                        <div class="modal-body">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title">File Upload Dokumen SPER</h4>
                                    <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>File</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>
                                                <a href="{{asset('/uploads/sper/'.$dok_sper->file)}}">{{$dok_sper->file_sper}}</a>
                                            </td>
                                                <td>{{ $dok_sper->keterangan_sper }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection