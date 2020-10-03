

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  



  <title>Document</title>
</head>
<body>
  <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <a class="navbar-brand brand-logo" href="index.html">
        <img src="{{('/lte/src/assets/images/logo.svg')}}" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="index.html">
        <img src="" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <ul class="navbar-nav">
        <h5>Laboratory OF Computer Sience</h5>
      </ul>

      <ul class="navbar-nav ml-auto">
            
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"> {{ __('Logout') }} <i class="dropdown-item-icon ti-power-off"></i></a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>

</body>
</html>