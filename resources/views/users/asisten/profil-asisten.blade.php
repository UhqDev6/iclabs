
@section('jadwalasisten')


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('master.masterUser')

@section('title')
    <h4>Tambah Profil</h4>
@endsection



{{-- <h4>Ruangan</h4>
<br> --}}
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

<form method="POST" action="{{route('jadwal-asisten.store')}}" enctype="multipart/form-data">
    @csrf



</form>
<br>
<br>



</body>
</html>
@endsection




