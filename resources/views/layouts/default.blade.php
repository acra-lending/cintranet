<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('includes.header')


        @include('includes.sidebar')

        <div class="container col-3">    
            @include('includes.messages')
        </div>

        @yield('content')


        <footer class="main-footer">
            @include('includes.footer')
        </footer>
    </div>

        @include('includes.scripts')
</body> 
</html>
