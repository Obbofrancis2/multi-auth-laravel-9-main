<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="{{asset('css/index.css')}}" rel="stylesheet" />
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style="height:50px;position:fixed; background-color:" >
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="background-color:white;">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

            <div class="menubar" style="margin-top:50px;">
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
        <li class="nav-item" style="background-color:rgba(109,196,156,1); border-radius: 10px;">
          <a class="nav-link" href="{{url('/')}}" style="color: white;"><i class="fas fa-home" style="color: white;"></i> HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}" style="color: white;"><i class="fas fa-exclamation-circle" style="color: white;"></i> UPDATES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}" style="color: white;"><i class="fas fa-exclamation-triangle" style="color: white;"></i> EMERGENCY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}" style="color: white;"><i class="fas fa-clock" style="color: white;"></i> PENDING</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="search-container">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search for service" aria-label="Search" aria-describedby="search-button">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="search-button">Search</button>
      </div>
    </div>
  </div>

  </div>
  <div class="content">

  <div class="hospital-info">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <img src="bg.png" alt="Hospital Image" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h5 class="card-title">NAKASERO HOSPITAL</h5>
            <p class="card-text"> ANTENENTAL CARE, CARDIOLOGY, CT SCAN</p>
            <!-- <p class="card-text">5KM AWAY</p> -->
            <button class="btn btn-primary" id="registerLoginButton">Book appointment</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="hospital-info">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="{{asset('bg.png')}}" alt="Hospital Image" class="img-fluid">
            </div>
            <div class="col-md-8">
              <h5 class="card-title">CASE CLINIC KAMPALA</h5>
              <p class="card-text">CARDIOLOGY, CT SCAN, DENTAL</p>
              <!-- <p class="card-text">5KM AWAY</p> -->
              <button class="btn btn-primary" >Book appointment</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hospital-info">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="bg.png" alt="Hospital Image" class="img-fluid">
            </div>
            <div class="col-md-8">
              <h5 class="card-title">NAKASERO HOSPITAL</h5>
              <p class="card-text">CARDIOLOGY, CARDIOGRAPHIC SURGERY, CT SCAN</p>
              <p class="card-text">5KM AWAY</p>
              <button class="btn btn-primary" >Book appointment</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Include the Bootstrap JS files at the end of the body -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <script>
    const registerLoginButton = document.getElementById('registerLoginButton');

    registerLoginButton.addEventListener('click', () => {
      Swal.fire({
        title: 'Register or Login',
        text: 'Please register or log in to Book Appointment.',
        icon: 'info',
        showCancelButton: true,
        confirmButtonText: 'Register',
        cancelButtonText: 'Log In',
      }).then((result) => {
        if (result.isConfirmed) {
          // Handle register action
          window.location.href = '/register';
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          // Handle log in action
          window.location.href = '/login';
        }
      });
    });
  </script>
</body>