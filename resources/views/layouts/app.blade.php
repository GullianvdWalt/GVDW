{{-- Created By Gullian Van Der Walt Nov 2020 --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GVDW</title>
        <!-- Styles -->
<link href="/css/app.css" rel="stylesheet">
  <!-- FaveIcon -->
  <link rel="icon" href="images/logo.png">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/95fb766341.js" crossorigin="anonymous"></script>
    <!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
    <div class="wrapper">
            <button id="toggleButton"> ☰ </button>
            @include('partials.aside')

        @yield('content')
    </div>
   <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
