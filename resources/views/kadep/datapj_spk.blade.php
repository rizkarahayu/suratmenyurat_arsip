@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                    <br/>
                    <br/>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissable flat" style="margin-left: 0px;">
                            <i class="fa fa-check"></i>
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($data_pj as $i => $pj)
                                    @if ($pj->is_admin == 'kabiro')
                                    <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{ $pj->name }}</td>
                                          <td>{{ $pj->email }}</td>
                                          <td>{{ $pj->is_admin }}</td>
                                    </tr>
                                    @endif
                                @endforeach
                         </tbody>
                      </table>
                </div>
            </div>
    </div>
</div>
@endsection