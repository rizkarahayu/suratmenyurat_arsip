<!DOCTYPE html>
<html>
<head>
  <title>ADAJASAPROC</title>
<body>
<table style="width:100%">
  <tr>
    <td>
        <img src="{{asset('assets/img/ptpal.jpg')}}" width="200px" align="left">
        <img src="" width="200px" align="right">
    </td>
  </tr>
  <tr>
    <td>
      <br/>
    </td>
  </tr>
  <tr>
    <td>
      <br/>
    </td>
  </tr>
  <tr>
    <td>
      <br/>
    </td>
  </tr>
  <tr>
    <td>
      <br/>
    </td>
  </tr>
  <tr>
    <td><p align="right" style="font-size:13px;">Surabaya,  {{ date('d-M-yy', strtotime($dok_spph->tanggal_pelaksanaan)) }}</p></td>
  </tr>
  <tr>
    <td>
    <p align="left" style="font-size:13px;">
        Nomor      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; &nbsp;{{$dok_spph->no_surat}} <br/>
        Klasif     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; Biasa <br/>
        Lampiran   &nbsp;&nbsp; : &nbsp; - <br/>
        Perihal    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; {{$dok_spph->perihal}} <br/>
    </p>
    <p align="left" style="padding-left: 65%;font-size:13px;">
        <strong>Kepada</strong> Yth. Direktur <br/><br/>
        {{$dok_spph->nama_subkon}} <br/><br/>
        Ditempat    <br/>
    </p>
    </td>
  </tr>
  <tr>
    <td>
    <p align="left" style="font-size:13px;">Dengan Hormat,</p>
    </td>
  </tr>
  <tr>
    <td>
    <p style="font-size:13px;">
    Bersama ini kami mengundang perusahaan saudara untuk melakukan penawaran harga pekerjaan: <br/><br/>
    {{$dok_spph->deskripsi_jasa}} <br/><br/>
    Kami berharap surat penawaran harga tersebut sudah dapat kami terima dan sekaligus mengharap kehadirannya pada :<br/>
    <br/>
    <?php
\Carbon\Carbon::setLocale('id');
?>
        Hari      &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  &nbsp;{{ Carbon\Carbon::parse($dok_spph->tanggal_pelaksanaan)->->formatLocalized('%A')}}&nbsp;<br/>
        Tanggal   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; {{ date('d-M-yy', strtotime($dok_spph->tanggal_pelaksanaan)) }} <br/>
        Jam       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; {{$dok_spph->jam}} <br/>
        Tempat    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; Ruang Negosiasi Dep. Pengadaan Jasa   <br/>
        Acara     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; Klarifikasi Teknis <br/><br/>
        Demikian disampaikan, atas perhatian dan kerjasamanya diucapkan terimakasih.
    </p>
    </td>
  </tr>
  <tr>
  <td>
    <p align="left" style="padding-left: 65%;font-size:13px;">
        PT. PAL INDONESIA (PERSERO) <br/>
        DIVISI SUPPLY CHAIN <br/>
        KADEP PENGADAAN JASA    <br/><br/><br/>

        <p align="left" style="padding-left: 65%;font-size:13px;"><strong><u>M. Khalili</u></strong></p>
    </p>
    </td>
  </tr>
  <tr>
  <td>
    <p align="left" style="font-size:13px;">
        <u>DISTRIBUSI Yth : </u><br/>
        1. Kepala Divisi Supply Chain (Sebagai Laporan)
    </p>
    </td>
  </tr>
  <tr>
  <td><br/></td>
  </tr>
  <tr>
  <td><br/></td>
  </tr>
  <tr>
  <td><br/></td>
  </tr>
  <tr>
  <td><p align="center"style="font-size:11px;">PT. PAL INDONESIA (PERSERO)<br/>
  Kantor Pusat : Ujung Surabayar 60155, PO BOX 1134 INDONESIA <br/> 
  Telp (62-31) 3292275 (Hunting) Fax: (62-31) 3292530, 3292516, 3292426, E-Mail : headoffice@pal.co.id Web Site : http://www.pal.co.id<br/>
  Kantor Perwakilan : Jl. Tanah Abang II/27 Jakarta Pusat 10160, Telp. (62-21) 38446833, Fax: (62-21) 3843717, E-Mail : jakartabranch@pal.co.id</p></td>
  </tr>
  <tr>
  <td><br/></td>
  </tr>
</table>
</body>
</html>