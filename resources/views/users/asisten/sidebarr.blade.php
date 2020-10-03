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
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <img class="img-xs rounded-circle" src="{{('/image/' . Auth::guard('assistant')->user()->image )}}"  width="120" height="120" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
            <p class="profile-name"></p>
            <p class="designation"> {{Auth::guard('assistant')->user()->name}}</p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-category">Main Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('as-content')}}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Keberadaan</span>
        </a>
      </li>

      <li class="nav-item">
            <a class="nav-link" href="{{ route('jadwal-asisten')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Jadwal Asistensi</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('profil-asisten.index')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Data Diri</span>
            </a>
        </li>



    </ul>
  </nav>
</body>
</html>
