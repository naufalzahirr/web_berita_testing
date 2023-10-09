<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title> &mdash; </title>

  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fontawesome/css/all.min.css">
  <!-- <link rel="stylesheet" href="{{asset('assets/modules/codemirror/lib/codemirror.css')}}">
  <link rel="stylesheet" href="{{asset('assets/modules/codemirror/theme/duotone-dark.css')}}">
  <link rel="stylesheet" href="{{asset('assets/modules/jquery-selectric/selectric.css')}}"> -->
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/jquery-selectric/selectric.css">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
  

  <!-- CSS Libraries -->
<br>
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">

  

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('includes.navbar')
      @include('includes.sidebar')
      <!-- Main Content -->
      <div class="main-content">
      @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="https://instagram/naufalzahirr">Naufal Zahir Rizqullah</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  
  <!-- General JS Scripts -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script> -->


  

  <script src="https://demo.getstisla.com/assets/modules/jquery.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/popper.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/tooltip.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/moment.min.js"></script>
  <script src="https://demo.getstisla.com/assets/js/stisla.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>

  <!-- <script src="{{asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('assets/modules/codemirror/lib/codemirror.js')}}"></script>
  <script src="{{asset('assets/modules/codemirror/mode/javascript/javascript.js')}}"></script>
  <script src="{{asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
 -->

 <script src="https://demo.getstisla.com/assets/modules/summernote/summernote-bs4.js"></script>
 <script src="https://demo.getstisla.com/assets/modules/codemirror/lib/codemirror.js"></script>
 <script src="https://demo.getstisla.com/assets/modules/codemirror/mode/javascript/javascript.js"></script>
 <script src="https://demo.getstisla.com/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>


  <!-- Template JS File -->
  <!-- <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script> -->

  <script src="https://demo.getstisla.com/assets/js/scripts.js"></script>
  <script src="https://demo.getstisla.com/assets/js/custom.js"></script>
  <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
  </script>
  <!-- Page Specific JS File -->
</body>
</html>
