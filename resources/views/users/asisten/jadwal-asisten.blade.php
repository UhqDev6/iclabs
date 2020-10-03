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
    <h4>Jadwal Asistensi</h4>
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
  </button>
</div><br/>
 @endif

 @if(session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="false">&times;</span>
        </button>
    </div><br/>
@endif

<form method="POST" action="{{route('jadwal-asisten.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="row">


        <div class="col-md-6 mx-auto">

            <div class="py-1 text-center"><i class="fa fa-calendar fa-5x"></i></div>
            <!-- Date Picker Input -->
                <div class="datepicker date input-group p-0 shadow-sm">
                    <label class="col-form-label col-sm-2 pt-0">Schedule</label>
                    <input type="date" placeholder="Asistensi" class="form-control px-4" name="waktu">

                </div>

                <div class=" input-group p-0 shadow-sm">
                    <label class="col-form-label col-sm-2 pt-0">Kode</label>

                    <select name="id_status" class="form-control px-4">
                        <option>Status</option>
                        @foreach ($status as $item)

                             <option value="{{$item->id_status}}">{{$item->id_status}}</option>
                         @endforeach
                      </select>

                </div>
                <br>


                <div class=" input-group p-0 shadow-sm">
                    <label class="col-form-label col-sm-2 pt-0">Kode</label>

                    <select name="id_praktikum" class="form-control px-4">
                        <option>Praktikum</option>
                        @foreach ($praktikum as $item)

                             <option value="{{$item->id_praktikum}}">{{$item->id_praktikum}}</option>
                         @endforeach
                      </select>

                </div>
                <br>
                <div class="py-1 text-center"><i class="fa fa-calendar fa-5x"></i></div>
                <!-- Date Picker Input -->
                    <div class="input-group p-0 shadow-sm">
                        <label class="col-form-label col-sm-2 pt-0">Praktikum</label>
                        <input type="text" placeholder="....."  id="prak" class="form-control px-4">
                    </div>

                    <br>
                    <div class=" input-group p-0 shadow-sm">
                        <label class="col-form-label col-sm-2 pt-0">Kode</label>
                        <select name="id_ruangan" class="form-control px-4">
                            <option>Ruangan</option>
                            @foreach ($ruangan as $item)

                                 <option value="{{$item->id_ruangan}}">{{$item->id_ruangan}}</option>
                             @endforeach
                          </select>
                    </div>
                    <br>
                    <div class="py-1 text-center"><i class="fa fa-calendar fa-5x"></i></div>
                    <!-- Date Picker Input -->
                        <div class="input-group p-0 shadow-sm">
                            <label class="col-form-label col-sm-2 pt-0">Ruangan</label>
                            <input type="text" placeholder="....." class="form-control px-4">

                        </div>



            <!-- For Demo Purpose -->
            <br><br>
            <div class="text-center">

                <button type="submit" class="btn btn-success btn-sm px-4 rounded-pill text-uppercase font-weight-bold shadow-sm">Add Data</button>
            </div>
        </div>
    </div>


</form>
<br>
<br>



</body>
</html>
@endsection




