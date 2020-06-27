<!DOCTYPE html>
<html>
<head>
  <title>ADAJASAPROC</title>
<body>
<table style="width:100%"; border="1">
  <tr>
    <td width="100%">
        <img src="{{asset('assets/img/ptpal.jpg')}}" width="150px" align="left"><br/>
        <br/>
        <br/>
        <br/>
    </td>
  </tr>
  <tr>
      <td width="100%" align="center" style="font-size:20px">
        <strong><u>SURAT PERINTAH KERJA</u></strong><br/>
        <strong>Nomor : SPK R / {{$dok_spk->no_surat}} </strong>
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
      
        I.  <u>DASAR</u>                  :<br/>
        1. Surat Penawaran Harga No.  &nbsp;&nbsp;&nbsp;&nbsp;: {{$dok_spk->no_sph}} , tanggal {{ date('d-M-yy', strtotime($dok_spk->tanggal_sph)) }} <br/>
        2. Berita Acara Evaluasi Teknis No. &nbsp;&nbsp;: {{$dok_spk->no_baet}} , tanggal {{ date('d-M-yy', strtotime($dok_spk->tanggal_baet)) }} <br/>
        3. Berita Acara Negosiasi Harga No. &nbsp;: {{$dok_spk->no_banh}} , tanggal {{ date('d-M-yy', strtotime($dok_spk->tanggal_banh)) }} <br/>
        <br/>
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
      
        II.  <u>DIPERINTAHKAN</u>         :<br/>
             Nama Perusahaan : {{$dok_spk->nama_subkon}}<br/> 
             Pimpinan : {{$dok_spk->alamat_perwakilan}}<br/> 
             Alamat : 
             <br/>
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
        III.  <u>UNTUK MELAKSANAKAN</u>   :<br/>
              Borong pekerjaan fabrikasi dan install cable tray, install equipment & sensor, recondition ASB, 
              MSB, sensor, lighting & small equipment dan pulling cable dengan scope dan lingkup pekerjaan 
              sesuai pada Berita Acara Evaluasi Teknis. Penerimaan pekerjaan sampai dengan user.   
              <br/>
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
        IV.  <u>KODE PROYEK</u>           : {{$dok_spk->nama_proyek}}
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
        V.  <u>SYARAT-SYARAT</u>           : <br/>
            1.Pelaksanaan pekerjaan sesuai spesifikasi, pedoman kerja yang berlaku di PT. PAL Indonesia (Persero) dan peraturan perundangan yang berlaku<br/>
            2.Lingkup pekerjaan sesuai dengan hasil evaluasi teknis dan negosiasi harga<br/>
            3.asok PT.PAL INDONESIA : Supervisi pekerjaan, prosedur pelaksanaan pekerjaan dan consumable<br/>
            4.Pasok & Scope Pelaksana : Tenaga kerja berkualifikasi, hand tools, asuransi kesehatan dan ketenagakerjaan untuk pekerja.<br/>
            5.Pelaksana pekerjaan bertanggung jawab penuh atas segala resiko akibat dari pelanggaran yang dilakukan<br/>
            6.Pembayaran dilaksanakan 30 (tiga puluh) hari kalender setelah dokumen tagihan lengkap dan benar diterima oleh Divisi Perbendaharaan PT. PAL Indonesia (Persero). <br/>
            <br/>
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
      
        VI.  <u>BIAYA PELAKSANAAN</u>           : <br/>
            1.Total biaya pekerjaan adalah sebesar Rp.{{$dok_spk->harga}},- ({{$dok_spk->terbilang}}<br/>
            2.Harga belum termasuk pajak pertambahan nilai (PPN) 10 % dan sudah termasuk Pph 2%<br/>
            <br/>
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
      
        VII.  <u>CARA PEMBAYARAN</u>           : <br/>
        Pembayaran berdasarkan realisasi progress perbulan sesuai dengan Laporan Kemajuan Pekerjaan yang telah disetujui oleh kedua belah pihak dan dibuktikan dengan Bukti Penerimaan Pekerjaan.
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
      
        VIII.  <u>WAKTU PELAKSANAAN</u>           : <br/>
        Terhitung mulai tanggal : {{$dok_spk->tanggal_mulai }} sampai dengan {{$dok_spk->tanggal_selesai }}
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
      
        IX.  <u>SANKSI DAN DENDA</u>           : <br/>
            1.Apabila karena kesengajaan atau kelalaian penerima SPK pekerjaan ini sehingga pekerjaan 
tidak dapat diselesaikan sesuai waktu pelaksanaan pada pasal VIII, maka PT. PAL Indonesia berhak memindahkan pekerjaan kepada pihak ketiga dan biaya yang timbul atas pengalihan 
tersebut menjadi beban Penerima SPK ini.  
<br/>
            2.1% (Satu persen) untuk setiap hari kalender keterlambatan penyelesaian pesanan pekerjaan 
dan maksimal 10% (Sepuluh persen) dari biaya pelaksanaan.<br/>
            <br/>
      </td>
  </tr>
  <tr>
      <td width="100%" align="left">
      
        IX.  <u>LAIN - LAIN</u>           : <br/>
            1.Sesuatu yang belum tercantum dalam Surat Perintah Kerja ini, maka akan diadakan 
perubahan/tambahan seperlunya. 2<br/>
            2.PT. PAL Indonesia (Persero) berhak dan diberi kewenangan untuk menunda transaksi bisnis 
apabila diketemukan adanya indikasi penyimpangan dan/atau kecurangan yang mengakibatkan kerugian/ berpotensi merugikan PT. PAL Indonesia (Persero), sesuai ketentuan Peraturan Menteri BUMN Nomor PER-19/MBU/2012 tanggal 27 Desember 2012 tentang 
Pedoman Penundaan Transaksi Bisnis Yang Terindikasi Penyimpangan Dan/Atau Kecurangan<br/>
            3. Surat Perintah Kerja ini dibuat rangkap 2 (dua), masing-masing bermaterai cukup.<br/>
            <br/>
      </td>
  </tr>
  <tr>
    <td align="right">
    <br/><br/><br/><br/>
      DIKELUARKAN DI : SURABAYA<br/>
      PADA TANGGAL   : {{ date('d-M-yy', strtotime($dok_spk->tanggal_dibuat)) }}
    </td>
  </tr>
  <tr>
    <td align="left">
    MENYETUJUI SESUAI YANG DISYARATKAN<br/>
    UNTUK MELAKSANAKAN PEKERJAAN
    </td>
  </tr>
  <table style="width:100%"; border="1">
  <tr>
      <td width="50%" align="left">
      {{$dok_spk->nama_subkon}}<br/>                                                                                                                 
      DIREKTUR<br/>                                                                                                                                              
      <br/>  
      <br/>  
      <br/>  
      <br/>  
      {{$dok_spk->nama_perwakilan}}                                                                                                                                               
      </td>
      <td width="50%" align="left">
      PT.PAL INDONESIA<br/>  
      Kepala Divisi Supply Chain
      <br/>  
      <br/>  
      <br/>  
      <br/>
      <br/>
      WIYONO KUMOJOYO
      </td>
  </tr>
  </table>
  </table>
</table>
<table style="width:100%"; border="1">
  <tr>
    <td>
    <br/><br/>
      Tembusan :<br/>
      1. DIVISI PERBENDAHARAAN<br/>
      2. DIVISI JAMINAN KUALITAS<br/>
      3. DIVISI KAPAL SELAM<br/>
    </td>
  </tr>
</body>
</html>