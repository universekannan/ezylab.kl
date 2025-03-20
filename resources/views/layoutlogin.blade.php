<!DOCTYPE html>
<html lang="en">
<!-- meta contains meta taga, css and fontawesome icons etc -->
@include('common.login_meta')
<!-- ./end of meta -->
<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">
        <!-- dynamic content -->
            @yield('content')
        <!-- ./end of dynamic content -->
    </div>
<!-- /.login-box -->

<!-- all js scripts including custom js -->
@include('common.login_footer')
<!-- ./end of js scripts -->
</body>
</html>
