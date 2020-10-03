@extends('master.masterAdmin')
@section('ruangan')



    <h4>Ruangan</h4>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="false">&times;</span>
    </div><br/>
     @endif

     @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session()->get('success') }}  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="false">&times;</span>
        </div><br/>
    @endif

   
    <form method="POST" action="{{route('ruangan.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
              <input type="text" class="form-control" name="kd_ruangan" placeholder="Kode Praktikum">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" name="ruangan" placeholder="Nama Praktikum">
            </div>
          </div>
          <br>
        <button type="submit" class="btn btn-success">Add Data</button>
    </form>
    <br>
    <br>


@endsection