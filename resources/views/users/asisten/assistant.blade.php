
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    
</body>
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
        <form method="POST" action="{{route('assistant.store')}}" enctype="multipart/form-data">
            @csrf
            
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="present" checked>
                    <label class="form-check-label " for="gridRadios1">
                      Present
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="no present">
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
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </form>
        
          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Status</th>
                  <th scope="col">Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
    
                  @foreach($asisten as $i)
                <tr>
                  <th scope="row">{{$no++}}</th>
                  <td>{{$i->status}}</td>
                  <td><img src="{{('image/' . $i->image )}}"/></td>
                  <td>
                    {{-- <form action="{{route('data-user.destroy', $i->id)}}" method="POST"> --}}
                    <a href="{{route('editstatus-asisten.edit', $i->id)}}" class="btn btn-success">Update</a> 
                    <a href="{{route('assistant.destroy', $i->id)}}" class="btn btn-danger">Delete</a> 
                    {{-- {{-- @csrf 
                    @method('POA') --}}
                    {{-- <button type="submit" class="btn btn-danger">Delete</button>
                    </form> --}}
                  </td>
      
                </tr>
                @endforeach
        
              </tbody>
            </table>
            <br>
            <br>
      



        @endsection
    {{-- end header --}}


</html>