<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('includes.header')
        <!-- Scripts -->
        @include('includes.scripts')

        <!-- Sidebar -->
        @include('includes.sidebar')
        {{-- @include('includes.announcements') --}}
        <div class="container col-3">    
            @include('includes.messages')
        </div>
        @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer">
            @include('includes.footer')
        </footer>
    </div>

</body> 
</html>
