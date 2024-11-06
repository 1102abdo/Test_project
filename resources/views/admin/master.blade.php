{{-- @php
    $dir = LaravelLocalization::getCurrentLocale() =='ar'? 'vertical  light  rtl':'vertical  light  ';
@endphp --}}
<!doctype html>
<html lang="en">
@include('admin.partials.head')

<body class="vertical  light @if (LaravelLocalization::getCurrentLocale() =='ar')  rtl @endif">
    <div class="wrapper">
        @include('admin.partials.nav')


        @include('admin.partials.aside')
        <main role="main" class="main-content">
            @yield('content')
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('admin.partials.script')
    <script>
        setTimeout(function() {
            var elementToHide = document.getElementById('myElement');
            if (elementToHide) {
                elementToHide.style.display = 'none';
            }
        }, 5000);

        function confirmDelete(id){
            if (confirm('Do you really delete service where id = '+id)){
                document.getElementById('confirmTO-'+id).submit();
            }
        }
    </script>
</body>

</html>
