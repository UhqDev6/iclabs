@extends('master.masterAdmin')
@section('datauser')

    <h4>Data User</h4>
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
    </div><br/>
@endif
    <a href="{{ route('add-user')}}" class="btn btn-primary">Add Data</a></td><br><br>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Stambuk</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php
              $no = 1;
          @endphp
            @foreach($addUser as $i)
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$i->name}}</td>
            <td>{{$i->stambuk}}</td>
            <td>{{$i->email}}</td>
          <td><img src="{{('image/' . $i->image )}}" /></td>
            <td>
              {{-- <form action="{{route('data-user.destroy', $i->id)}}" method="POST"> --}}
              <a href="{{route('edit-user.edit', $i->id)}}" class="btn btn-success">Update</a> | 
              <a href="{{route('data-user.destroy', $i->id)}}" class="btn btn-danger">Delete</a> 
              {{-- @csrf
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