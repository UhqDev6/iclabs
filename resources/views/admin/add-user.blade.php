@extends('master.masterAdmin')
@section('adduser')



    <h4>Menambahkan user</h4>
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

    <form method="POST" action="{{route('add-user.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="contoh1">Nama</label>
                <input type="text" class="form-control" id="contoh1" name="name" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="contoh2">E-Mail Address</label>
                <input type="email" class="form-control" id="contoh2" name="email" placeholder="E-mail Address">
            </div>
        </div>
     
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="contoh1">Stambuk</label>
                <input type="text" class="form-control" id="contoh1" name="stambuk" placeholder="Stambuk">
            </div>
            <div class="form-group col-md-4">
                <label for="contoh2">Password</label>
                <input type="password" class="form-control" id="contoh2" name="password" placeholder="Password">
            </div>
            <div class="form-group col-md-4">
                <label for="image">Image Upload</label>
                <input type="file" class="form-control" id="image" name="image" onchange="loadPreview(this);" class="form-control"><br>
                <img id="preview_img" src={{('image/iconperson.png')}} class="hidden" width="95" height="90"/>

            </div>
        </div>
     
        <button type="submit" class="btn btn-success">Add Data</button>
    </form>
    <br>
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