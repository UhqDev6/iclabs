<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <br>
      {{-- <li class="nav-item nav-profile">
        {{-- <a href="#" class="nav-link">
          {{-- <div class="profile-image">
            {{-- <img class="img-xs rounded-circle" src="{{('/lte/src/assets/images/faces/face8.jpg')}}" alt="profile image"> --}}
            {{-- <div class="dot-indicator bg-success"></div>
          </div> --}}
          {{-- <div class="text-wrapper">
            <p class="profile-name">Allen Moreno</p>
            <p class="designation">Premium user</p>
          </div> --}}
        {{-- </a> --}}
      {{-- </li> --}}
      <li class="nav-item nav-category">Main Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('add-user')}}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Add User</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="{{ route('data-user.show')}}">
          <i class="menu-icon typcn typcn-shopping-bag"></i>
          <span class="menu-title">Data User</span>
        </a>
      </li>

        
      <li class="nav-item">
        <a class="nav-link" href="{{ route('praktikum')}}">
          <i class="menu-icon typcn typcn-shopping-bag"></i>
          <span class="menu-title">Praktikum</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('ruangan')}}">
          <i class="menu-icon typcn typcn-shopping-bag"></i>
          <span class="menu-title">Ruangan</span>
        </a>
      </li>
      

      
    </ul>
  </nav>
</body>
</html>