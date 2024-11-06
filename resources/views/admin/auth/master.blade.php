<!doctype html>
<html lang="en">
@include('admin.auth.partials.head')

<body class="light @if( LaravelLocalization::getCurrentLocale()=='ar') rtl  @endif ">
  
  @yield('content')
  @include('admin.auth.partials.scripts')
</body>

</html>
