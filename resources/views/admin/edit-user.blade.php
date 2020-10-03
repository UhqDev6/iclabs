@extends('master.masterAdmin')
@section('edituser')
<h5>Edit Data</h5>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
      @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br/>
     @endif

     @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div><br/>
    @endif
    <form action="{{route('edit-user.update',$addUser->id)}}" method = "POST" enctype="multipart/form-data">
        @csrf
        {{-- @method('PUT') --}}
        <div class="form-group">
          <label for="firstname">Nama</label>
        <input type="text" name = "name" id = " name" class="form-control"  value = "{{$addUser->name}}">
        </div>
        <div class="form-group">
          <label for="lastname">Stambuk:</label>
        <input type="text" name = "stambuk" id = "stambuk" class="form-control" required value = "{{$addUser->stambuk}}">
        </div>
        <div class="form-group">
          <label for="department">Email Address</label>
        <input type="text" name = "email" id = "email" class="form-control" required value = "{{$addUser->email}}">
        </div>
        <div class="form-group">
          <label for="phone">Password</label>
        <input type="password" name = "password" id = "password" class="form-control" required value = "{{$addUser->password}}">
        </div>

        <div class="form-group col-md-4">
            <label for="image">Image Upload</label>
        <input type="file" class="form-control" id="image" name="image" onchange="loadPreview(this);" class="form-control" required value = "{{$addUser->image}}"><br>
            <img id="preview_img" src="{{('/image/' . $addUser->image )}}" class="hidden" width="95" height="90"/>

        </div>
 
        <button type = "submit" class = "btn btn-success">Update</button>
      </form>
    </div>
</div>
<br>


<script>
  function loadPreview(input, id)
  {
      id = id || '#preview_img';
      if (input.files && input.files[0]) 
      {
          var reader = new FileReader();

          reader.onload = function (e)
          {
              $(id) 
                  .attr('src', e.target.result)
                  .width(95)
                  .height(90);
          };

          reader.readAsDataURL(input.files[0]);
           $('#preview_img').removeClass('hidden');
           $('#start').hide();
      }
  }

</script>
    
@endsection