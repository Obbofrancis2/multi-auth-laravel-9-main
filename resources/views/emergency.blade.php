<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="{{asset('css/emergency.css')}}" rel="stylesheet" />
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
@include('layouts.navigation')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="{{asset('logo.png')}}" alt="Logo" class="logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item" >
          <a class="nav-link" href="{{url('/dashboard')}}" style="color: white;"><i class="fas fa-home" style="color: white;"></i> HOME</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="{{url('/update')}}" style="color: white;"><i class="fas fa-exclamation-circle" style="color: white;"></i> UPDATES</a>
        </li>
        <li class="nav-item" style="background-color:rgba(109,196,156,1); border-radius: 10px;">
          <a class="nav-link" href="{{url('/emergency')}}" style="color: white;"><i class="fas fa-exclamation-triangle" style="color: white;"></i> EMERGENCY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/pending')}}" style="color: white;"><i class="fas fa-clock" style="color: white;"></i> PENDING</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="container">
    <div class="row special">
         <div class="row head">Accident Emergency</div>
         <p><button class="btn">Request Service</button></p>
    </div>
    <div class="row news">
        <div class="row head">Pregnancy Emergency</div>
        <p><button class="btn">Request Service</button></p>
        </div>
    </div>
  </div>

  <!-- Include the Bootstrap JS files at the end of the body -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
