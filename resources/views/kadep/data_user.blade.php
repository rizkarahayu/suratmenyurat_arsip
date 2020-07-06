@extends('layout.template')
@section('content')
<div class="row">
    <div class="container">
        <div class="card mt-5">
                <div class="card-body">
                <div class="box-header">
                        <div class="card-header text-center">
                        Tabel Data User
                        </div>
                    </div>
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
                            <th>Role User</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($data_user as $i => $user)
                                    <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{ $user->name }}</td>
                                          <td>{{ $user->email }}</td>
                                          <td>{{ $user->is_admin }}</td>
                                          <td>
                                          <a href="/data_user/show_user/{{ $user->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                            <a href="/data_user/delete_user/{{ $user->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                          </td>
                                    </tr>
                                @endforeach
                         </tbody>
                      </table>
                      <div class="card-header align-center"  >
                        Halaman : {{ $data_user->currentPage() }} <br/>
                        Jumlah Data : {{ $data_user->total() }} <br/>
                        Data Per Halaman : {{ $data_user->perPage() }} <br/>
                        {{ $data_user->links() }}
                    </div>  
                </div>
            </div>
    </div>
</div>
@endsection