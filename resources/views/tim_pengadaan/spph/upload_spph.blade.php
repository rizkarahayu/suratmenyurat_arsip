@extends('layout.template')
@section('content')
<div class="row">
<div class="container">
   
   <div class="panel panel-primary">
     <div class="panel-heading"><h2>laravel 6 file upload example - ItSolutionStuff.com.com</h2></div>
     <div class="panel-body">
  
       @if ($message = Session::get('success'))
       <div class="alert alert-success alert-block">
           <button type="button" class="close" data-dismiss="alert">×</button>
               <strong>{{ $message }}</strong>
       </div>
       <img src="uploads/{{ Session::get('file') }}">
       @endif
 
       @if (count($errors) > 0)
           <div class="alert alert-danger">
               <strong>Whoops!</strong> There were some problems with your input.
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
 
       <form action="{{ url('/dok_spph/upload_store/'.$dok_spph->id) }}" method="POST" enctype="multipart/form-data">
           @csrf
           <div class="row">
 
               <div class="col-md-6">
                   <input type="file" name="file" class="form-control">
               </div>

               <div class="col-md-6">
                   <input type="text" name="keterangan" class="form-control">
               </div>
  
               <div class="col-md-6">
                   <button type="submit" class="btn btn-success">Upload</button>
               </div>
  
           </div>
       </form>
 
     </div>
   </div>
</div>
</div>
@endsection
