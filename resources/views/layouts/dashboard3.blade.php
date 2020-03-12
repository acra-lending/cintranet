<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('includes.header')

        <!-- Sidebar -->
        @include('includes.sidebar')
        @include('includes.announcements3')
        @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer">
            @include('includes.footer')
        </footer>
    </div>
        <!-- Scripts -->
        @include('includes.scripts')
</body> 
</html>
