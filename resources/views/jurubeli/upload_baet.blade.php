@extends('layout.template')
@section('content')
<div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Upload Dokumen BAET : {{$dok_baet->no_surat}}
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
                        <form action="{{ url('/dok_baet/uploadstore_baet/'.$dok_baet->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Masukkan File</label>
                                        <input type="file" class="form-control" name="file" id="file" required placeholder="Pilih File">       
                                    </div> 
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Keterangan</label>
                                        <input type="text" class="form-control" name="keterangan_upload" id="keterangan_upload" required placeholder="Masukkan Keterangan">  
                                    </div>
                                    <div class="box-footer">
                                        <a href="{{ url('/databaet') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                                        <button type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                                            <i class="fa fa-save"></i> Upload
                                        </button>
                                    </div>
                                </div>
                        </form>
                        <div class="modal-body">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title">File Upload Dokumen baet</h4>
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
                                                <!-- <iframe src="{{url('/uploads/file/'.$dok_baet->file)}}" width="100%" height="600px"><iframe> -->
                                                <a href="{{asset('/uploads/file/'.$dok_baet->file)}}">{{$dok_baet->file}}</a>
                                            </td>
                                                <td>{{ $dok_baet->keterangan_upload }}</td>
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