@extends('layout.template')
@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Upload Dokumen SPH : {{$dok_sph->no_surat}}
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
                        <form action="{{ url('/dok_sph/uploadstore_sph/'.$dok_sph->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Masukkan File</label>
                                        <input type="file" class="form-control" name="file" id="file" required placeholder="Pilih File">       
                                    </div> 
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Keterangan</label>
                                        <input type="text" class="form-control" name="keterangan" id="keterangan" required placeholder="Masukkan Keterangan">  
                                    </div>
                                    <div class="box-footer">
                                        <a href="{{ url('/datasph') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                                        <button type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                                            <i class="fa fa-save"></i> Upload
                                        </button>
                                    </div>
                                </div>
                        </form>
                        <div class="modal-body">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title">File Upload Dokumen SPH</h4>
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
                                                <a href="{{asset('/uploads/sph/'.$dok_sph->file)}}">{{$dok_sph->file}}</a>
                                            </td>
                                                <td>{{ $dok_sph->keterangan }}</td>
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