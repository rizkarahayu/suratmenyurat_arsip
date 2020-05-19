@extends('layout.template')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="card-header text-center">
                            Edit Surat Masuk Kode J01 : {{$surat_masuk_kabiro->kodej01}}
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
                    <form class="form-horizontal" method="POST" action="{{ url('/surat_masuk_kabiro/jenis_pengadaan/'.$surat_masuk_kabiro->id) }}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="card card-default">
                                    <div class="card-header">
                                        <h3 class="card-title">Detail Surat Masuk Jenis Pengadaan</h3>
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Kode J01</label>
                                    <input type="text" class="form-control" name="kodej01" id="kodej01" disabled value="{{$surat_masuk_kabiro->kodej01}}" >       
                                </div> 
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Kode Proyek</label>
                                    <input type="text" class="form-control" name="kode_proyek" id="kode_proyek" disabled value="{{$surat_masuk_kabiro->kode_proyek}}" >
                                </div> 
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Deskripsi Pekerjaan Jasa</label>
                                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" disabled value="{{$surat_masuk_kabiro->deskripsi}}" >
                                </div> 
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Tanggal Diterima</label>
                                    <!-- <input type="date" class="date form-control" name="tanggal_diterima" id="tanggal_diterima" required disabled value="Pilih Tanggal" > -->
                                    <input class="form-control" disabled value="{{$surat_masuk_kabiro->tanggal_diterima}}" name="tanggal_diterima" id="tanggal_diterima" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Kabiro</label>
                                    <input class="form-control" disabled value="{{$surat_masuk_kabiro->nama_pj}}" name="nama_pj" id="nama_pj" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Status Surat</label>
                                    @if($surat_masuk_kabiro->status_surat == 'diterima')
                                        <input class="form-control" disabled value="Diterima" name="status_surat" id="status_surat" type="text">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Jenis Pengadaan</label>
                                    <select class="form-control" name="jenis_pengadaan" id="jenis_pengadaan">
                                        <option value="{{$surat_masuk_kabiro->jenis_pengadaan}}" >{{$surat_masuk_kabiro->jenis_pengadaan}} Langsung</option>
                                        <option value="pemilihan">Pemilihan Langsung</option>
                                        <option value="penunjukan">Penunjukan Langsung</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Juru Beli</label>
                                    <select required class="form-control" name ="juru_beli" id="juru_beli">
                                        <option value="{{$surat_masuk_kabiro->juru_beli}}" >{{$surat_masuk_kabiro->juru_beli}}</option>
                                        @foreach ($nama_jurubeli  as  $jurubeli)
                                            @if ($jurubeli->is_admin == 'pengadaan')
                                                <option  value="{{ $jurubeli->name }}" > {{ $jurubeli->name }} </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="box-footer">
                                    <a href="{{ url('/surat_masuk_kabiro') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                                    <button type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                                        <i class="fa fa-save"></i> Update
                                    </button>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if($surat_masuk_kabiro->jenis_pengadaan == 'pemilihan')
                        <form class="form-horizontal" method="POST" action="{{ url('/surat_masuk_kabiro/update_pemilihan_langsung/'.$surat_masuk_kabiro->id) }}" autocomplete="off" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h3 class="card-title">Detail Surat Masuk Jenis Pengadaan - Pemilihan Langsung</h3>
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Jenis Pengadaan</label>
                                            <input type="text" class="form-control"  value="{{$surat_masuk_kabiro->jenis_pengadaan}} Langsung" >       
                                        </div>                                                
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Juru Beli</label>
                                            <input type="text" class="form-control"  value="{{$surat_masuk_kabiro->juru_beli}}" >       
                                        </div>
                                        <div class="row border">
                                            <div class="col-sm-1">No</div>
                                            <div class="col-sm-5">Tahap</div>
                                            <div class="col-sm-3">Tanggal Mulai</div>
                                            <div class="col-sm-3">Tanggal Selesai</div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-sm-1">1</div>
                                            <div class="col-sm-5">Buat undangan SPPH</div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_mulai_spph}}" name="tanggal_mulai_spph" id="tanggal_mulai_spph" type="date"></div>
                                            <div class="col-sm-3"> <input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_selesaispph}}" name="tanggal_selesaispph" id="tanggal_selesaispph" type="date"></div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-sm-1">2</div>
                                            <div class="col-sm-5">Penerimaan Dokumen Penawaran</div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_mulai_dokpenawaran}}" name="tanggal_mulai_dokpenawaran" id="tanggal_mulai_dokpenawaran" type="date"></div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_selesai_dokpenawaran}}" name="tanggal_selesai_dokpenawaran" id="tanggal_selesai_dokpenawaran" type="date"></div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-sm-1">3</div>
                                            <div class="col-sm-5">Evaluasi Teknik (BAET)</div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_mulai_baet}}" name="tanggal_mulai_baet" id="tanggal_mulai_baet" type="date"></div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_selesai_baet}}" name="tanggal_selesai_baet" id="tanggal_selesai_baet" type="date"></div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-sm-1">4</div>
                                            <div class="col-sm-5">Negoisasi (BANH)</div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_mulai_banh}}" name="tanggal_mulai_banh" id="tanggal_mulai_banh" type="date"></div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_selesai_banh}}" name="tanggal_selesai_banh" id="tanggal_selesai_banh" type="date"></div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-sm-1">5</div>
                                            <div class="col-sm-5">Pemilihan Pemenang</div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_mulai_pemenang}}" name="tanggal_mulai_pemenang" id="tanggal_mulai_pemenang" type="date"></div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_selesai_pemenang}}" name="tanggal_selesai_pemenang" id="tanggal_selesai_pemenang" type="date"></div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-sm-1">6</div>
                                            <div class="col-sm-5">Pengesahan/Penandatanganan Kontrak</div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_mulai_persetujuankontrak}}" name="tanggal_mulai_persetujuankontrak" id="tanggal_mulai_persetujuankontrak" type="date"></div>
                                            <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_selesai_persetujuankontrak}}" name="tanggal_selesai_persetujuankontrak" id="tanggal_selesai_persetujuankontrak" type="date"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Status Surat Pemilihan Langsung</label>
                                    <select required class="form-control" name ="status_surat_kabiro" id="status_surat_kabiro">
                                        <option value="" >Status Surat</option>
                                            <option  value="onprogress" >On Progress</option>
                                            <option  value="selesai" >Selesai</option>
                                    </select>
                                </div>
                                <div class="box-footer">
                                    <a href="{{ url('/surat_masuk_kabiro') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                                    <button type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                                        <i class="fa fa-save"></i> Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endif
                    @if($surat_masuk_kabiro->jenis_pengadaan == 'penunjukan')
                    <form class="form-horizontal" method="POST" action="{{ url('/surat_masuk_kabiro/update_penunjukan_langsung/'.$surat_masuk_kabiro->id) }}" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Surat Masuk Jenis Pengadaan - Penunjukan Langsung</h3>
                                    <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Jenis Pengadaan</label>
                                        <input type="text" class="form-control"  disabled value="{{$surat_masuk_kabiro->jenis_pengadaan}} Langsung" >       
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-6 control-label"><i class="fa fa-tty"> &nbsp;</i>Nama Juru Beli</label>
                                        <input type="text" class="form-control" disabled value="{{$surat_masuk_kabiro->juru_beli}}" >       
                                    </div>
                                    <div class="row border">
                                        <div class="col-sm-1">No</div>
                                        <div class="col-sm-5">Tahap</div>
                                        <div class="col-sm-3">Tanggal Mulai</div>
                                        <div class="col-sm-3">Tanggal Selesai</div>
                                    </div>
                                    <div class="row border">
                                        <div class="col-sm-1">1</div>
                                        <div class="col-sm-5">Buat undangan SPPH</div>
                                        <div class="col-sm-3"><input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_mulai_spph}}" name="tanggal_mulai_spph" id="tanggal_mulai_spph" type="date"></div>
                                        <div class="col-sm-3"> <input class="form-control"  value="{{$surat_masuk_kabiro->tanggal_selesaispph}}" name="tanggal_selesaispph" id="tanggal_selesaispph" type="date"></div>
                                    </div>
                                    <div class="row border">
                                        <div class="col-sm-1">2</div>
                                        <div class="col-sm-5">Penerimaan Dokumen Penawaran</div>
                                        <div class="col-sm-3"><input class="form-control" value="{{$surat_masuk_kabiro->tanggal_mulai_dokpenawaran}}" name="tanggal_mulai_dokpenawaran" id="tanggal_mulai_dokpenawaran" type="date"></div>
                                        <div class="col-sm-3"><input class="form-control" value="{{$surat_masuk_kabiro->tanggal_selesai_dokpenawaran}}" name="tanggal_selesai_dokpenawaran" id="tanggal_selesai_dokpenawaran" type="date"></div>
                                    </div>
                                    <div class="row border">
                                        <div class="col-sm-1">3</div>
                                        <div class="col-sm-5">Evaluasi Teknik (BAET)</div>
                                        <div class="col-sm-3"><input class="form-control" value="{{$surat_masuk_kabiro->tanggal_mulai_baet}}" name="tanggal_mulai_baet" id="tanggal_mulai_baet" type="date"></div>
                                        <div class="col-sm-3"><input class="form-control" value="{{$surat_masuk_kabiro->tanggal_selesai_baet}}" name="tanggal_selesai_baet" id="tanggal_selesai_baet" type="date"></div>
                                    </div>
                                    <div class="row border">
                                        <div class="col-sm-1">4</div>
                                        <div class="col-sm-5">Negoisasi (BANH)</div>
                                        <div class="col-sm-3"><input class="form-control" value="{{$surat_masuk_kabiro->tanggal_mulai_banh}}" name="tanggal_mulai_banh" id="tanggal_mulai_banh" type="date"></div>
                                        <div class="col-sm-3"><input class="form-control" value="{{$surat_masuk_kabiro->tanggal_selesai_banh}}" name="tanggal_selesai_banh" id="tanggal_selesai_banh" type="date"></div>
                                    </div>
                                    <div class="row border">
                                        <div class="col-sm-1">5</div>
                                        <div class="col-sm-5">Pengesahan/Penandatanganan Kontrak</div>
                                        <div class="col-sm-3"><input class="form-control" value="{{$surat_masuk_kabiro->tanggal_mulai_persetujuankontrak}}" name="tanggal_mulai_persetujuankontrak" id="tanggal_mulai_persetujuankontrak" type="date"></div>
                                        <div class="col-sm-3"><input class="form-control" value="{{$surat_masuk_kabiro->tanggal_selesai_persetujuankontrak}}" name="tanggal_selesai_persetujuankontrak" id="tanggal_selesai_persetujuankontrak" type="date"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-12 control-label"><i class="fa fa-tty"> &nbsp;</i>Status Surat Penunjukan Langsung</label>
                                <select required class="form-control" name ="status_surat_kabiro" id="status_surat_kabiro">
                                    <option value="" >Status Surat</option>
                                    <option  value="onprogress" >On Progress</option>
                                    <option  value="selesai" >Selesai</option>
                                </select>
                            </div>
                            <div class="box-footer">
                                <a href="{{ url('/surat_masuk_kabiro') }}" data-dismiss="modal" class="btn btn-default flat"><span class="glyphicon glyphicon-ban-circle"></span> Back</a>
                                <button type="submit" class="btn btn-primary pull-right flat" id="insert" value="Save">
                                    <i class="fa fa-save"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
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