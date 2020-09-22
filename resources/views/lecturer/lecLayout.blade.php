<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <!--<link rel="stylesheet" href="/css/app.css">-->
  <style>
    .navbar-bg{
      background-color: #339933;
    }
    .bg-wallColor{
      background-color: #ddeeea;
    }
    .sideMenu{
      background-color: #1a1a1a;
      
    }
    .headblast{
      text-shadow: 1px 1px #000;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
  <div id="app">
    <main>
      @yield('lecContent')
    </main>
    
  </div>
  
  <script rel="stylesheet" src="{{ asset('/js/app.js') }}"></script>
  <!--<script src="/js/app.js"></script>-->
<script  src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-i18n/dist/vue-i18n.js"></script>
</body>
</html>
