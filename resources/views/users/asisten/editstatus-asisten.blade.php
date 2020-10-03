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
        <h4>Asisten</h4>
    @endsection

    {{-- header --}}
        @section('as-content')
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
        <form action="{{route('editstatus-asisten.update',$asisten->id)}}" method = "POST" enctype="multipart/form-data">
            @csrf
            
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value = "present" checked>
                    <label class="form-check-label " for="gridRadios1">
                      Present
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value = "no present">
                    <label class="form-check-label" for="gridRadios2">
                      No Present
                    </label>
                  </div>
                      {{-- <input class="form-control col-sm-1" id="disabledInput" type="text" value="{{Auth::guard('assistant')->user()->id}}" name="id"> --}}
                    
                  
                </div>
              </div>
            </fieldset>
         
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
       
            <br>
            <br>
      
        @endsection
    
</body>
</html>