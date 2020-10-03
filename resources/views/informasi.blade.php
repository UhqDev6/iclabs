<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem Informasi Lab Fikom UMI</title>

          <!-- Bootstrap core CSS -->
          <link href={{('assets/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href={{('css/scrolling-nav.css')}} rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            .loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 100px;
}

.loader.hidden {
    animation: fadeOut 2.5s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}

.thumb {
    height: 100px;
    border: 1px solid black;
    margin: 10px;
}



        </style>
    </head>
    <body id="page-top">

    <div class="loader">
        <img src="{{('/lte/src/assets/images/iclabs.jpeg')}}" alt="Loading..." />
        <p>Laboratory Of Computer Sience</p>
    </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav ">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Information System Laboratory Of Computer Sience </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#about">Employee</a>
                </li>
                <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    login
                 </button>
                <button disabled="disabled"></button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('login-admin')}}">Admin</a>
                <a class="dropdown-item" href="{{route('login-asisten')}}">Asistants</a>
                </div>
              </div>
              </ul>
            </div>
          </div>
        </nav>

        <header class="bg-primary text-white">
          <div class="container text-center">
            <h1>Laboratory Of Computer Sience</h1>
            <p class="lead">Lab Of Fundamental | Lab Of Software Engeneering | lab Of Informatics Industry | Lab Of Micro/Net | Lab Of Multimedia</p>
          </div>
        </header>

        <section id="about">
          <div class="container">
            <h5 style="color : black">Employee Status</h5>
            <hr>
            <div class="row" >
              @foreach ($jadwal as $item)
              <div class="col-md-2" >
                <td><img src="{{('image/' . $item->image )}}"  width="120" height="120"/></td>
                <div class="bg-primary text-center text-white" style="width: 120px">
                  <p>{{$item->name}}</p>
                </div>
                </div>
                <div class="col-md-2 ">

                    <p class=" btn btn-primary ">{{$item->status}}</p>
                    <p  style="color : #000000"> Stambuk : {{$item->stambuk}}</p>
                    <p  style="color : #000000"> Praktikum : {{$item->praktikum}}</p>
                    <p style="color : #000000"> Ruangan : {{$item->ruangan}}</p>
                    <p style="color : #000000"> Waktu Asistansi : {{$item->waktu}}</p>
                <br>
              </div>
              @endforeach
            </div>
          </div>
        </section>

        <section id="services" class="bg-light">
          <div class="container">
            <h5 style="color:black">Schedule</h5>
            <hr>
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h2>Services we offer</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
              </div>
            </div>
          </div>
        </section>

        <div class="footer" >
          <!-- Footer -->
          <footer class="bg-primary text-white">

          <!-- Copyright -->
          <div class="footer-copyright text-center text-black py-3">© 2020 Copyright:
            <a href="{{('https://www.fikom.umi.ac.id/')}}" class="text-white">Fakultas Ilmu Komputer UMI</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
      </div>


        <!-- Bootstrap core JavaScript -->
        <script src={{('assets/vendor/jquery/jquery.min.js')}}></script>
        <script src={{('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

        <!-- Plugin JavaScript -->
        <script src={{('assets/vendor/jquery-easing/jquery.easing.min.js')}}></script>
        <!-- Custom JavaScript for this theme -->
        <script src={{('js/scrolling-nav.js')}}></script>
        <script>
          window.addEventListener("load", function () {
          const loader = document.querySelector(".loader");
          loader.className += " hidden"; // class "loader hidden"
});
        </script>
    </body>
</html>
