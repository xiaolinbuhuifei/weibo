<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>

  <body>
    {{-- 头部导航 --}}
    @include('layouts._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
        {{-- 提示信息 --}}
        @include('shared._messages')
        {{-- 内容 --}}
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
