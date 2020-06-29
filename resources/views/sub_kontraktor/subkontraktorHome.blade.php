@extends('layout.template')
@section('content')<div class="row">
          <div class="col-lg-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <br/>
                <h1 align="center"><strong>Selamat Datang di Dashboard Sub Kontraktor</strong></h1>
                <h1 align="center"><strong>e-Procurement PT. PAL Indonesia Persero</strong></h1>
                <h2 align="center">Sistem Informasi Pengadaan Jasa PT. PAL Indonesia (Persero)</h2>
              <br/>
              </div>
            </div>
          </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$dok_spph}}</h3>

              <p>Total SPPH Masuk</p>
              </div>
              <a href="/dataspphsubkon" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>{{$dok_sph}}</h3>
              <p>Total Dokumen SPH</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/datasph" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$dok_spph}}</h3>
                <p>Total SPH Diterima</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$dok_spph}}</h3>
                <p>Total SPH Ditolak</p>
              </div>
            </div>
          </div>
</div>
@endsection