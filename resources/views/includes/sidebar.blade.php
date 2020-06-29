<aside class="main-sidebar sidebar-dark-primary elevation-4">
  @if(Auth::user()->is_admin=='kadep')
    <a href="{{url('/kadep')}}" class="brand-link">
      <img src="/assets/dist/img/AdminLTEAdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ADAJASAPROC</span>
    </a>
  @endif
  @if(Auth::user()->is_admin=='kabiro')
    <a href="{{url('/kabiro')}}" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8;">
      <span class="brand-text font-weight-light">ADAJASAPROC</span>
    </a>
  @endif
  @if(Auth::user()->is_admin=='sekretaris')
    <a href="{{url('/sekretaris')}}" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8; ">
      <span class="brand-text font-weight-light">ADAJASAPROC</span>
    </a>
  @endif
  @if(Auth::user()->is_admin=='subkontraktor')
    <a href="{{url('/subkontraktor')}}" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8; ">
      <span class="brand-text font-weight-light">ADAJASAPROC</span>
    </a>
  @endif
  @if(Auth::user()->is_admin=='pengadaan')
    <a href="{{url('/jurubeli')}}" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8; ">
      <span class="brand-text font-weight-light">ADAJASAPROC</span>
    </a>
  @endif

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @if(Auth::user()->is_admin=='kadep')
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Surat Masuk
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/surat_masuk_kadep')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Data Surat Masuk Bagian I</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/surat_masuk_kadep2')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Data Surat Masuk Bagian II</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
                <p>
                  Data Master
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/datapj_spk_kadep')}}" class="nav-link">
                    <i class="far fa-user nav-icon"></i>
                    <p>Data PJ SPK/SPER</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif
          @if(Auth::user()->is_admin=='sekretaris') 
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Surat Masuk
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/datasurat_masuk')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Data Surat Masuk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/tambahsurat_masuk')}}" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Buat Surat Masuk</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-paper-plane"></i>
                <p>
                  Surat Keluar
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <!-- <li class="nav-item">
                  <a href="{{url('/tambahsurat_keluar')}}" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Buat Surat Keluar</p>
                  </a>
                </li> -->
                <li class="nav-item">
                  <a href="{{url('/datasurat_keluar')}}" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>
                      Data Surat Keluar
                    </p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
                <p>
                  Data Master
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/datapj_spk')}}" class="nav-link">
                    <i class="far fa-user nav-icon"></i>
                    <p>Data PJ SPK/SPER</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif
          @if(Auth::user()->is_admin=='pengadaan')
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Dokumen SPPH
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/dataspph')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Buat SPPH</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Dokumen SPH
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/datasphjuru')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Data Dokumen SPH</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Dokumen BAET
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/databaet')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Buat Dokumen BAET</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Dokumen BANH
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/databanh')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p style="font-size:15px;">Buat Dokumen BANH & EIKH</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p style="font-size:15px;">
                  Dok Pengumuman Pemenang
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/datapemenang')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Pengumuman Pemenang</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Dokumen MUPP
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/datausulan')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Data Dok. MUPP</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Dokumen SPK/SPER
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/dataspk')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>SPER</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif
          @if(Auth::user()->is_admin =='subkontraktor')
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>
                    Dokumen SPH
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/datasph')}}" class="nav-link">
                    <i class="fas fa-envelope-open-text nav-icon"></i>
                      <p>Data Surat SPH</p>
                    </a>
                  </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>
                    Dokumen SPPH
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/dataspphsubkon')}}" class="nav-link">
                    <i class="fas fa-envelope-open-text nav-icon"></i>
                      <p>Download SPPH</p>
                    </a>
                  </li>
                </ul>
            </li>
          @endif
          @if(Auth::user()->is_admin=='kabiro')
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Surat Masuk
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/surat_masuk_kabiro')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Data Surat Masuk</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Surat Masuk
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/surat_masuk_kabiro')}}" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                    <p>Data Surat Masuk</p>
                  </a>
                </li>
              </ul>
            </li> -->
          @endif
        </ul>
      </nav>
    </div>
  </aside>    