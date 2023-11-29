<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159340296-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159340296-2');
</script>
  @include('includes.head')
  @stack('includes.head')
  @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('includes.header')


        @include('includes.sidebar')

        <div class="container col-3" id="messages">    
            @include('includes.messages')
        </div>

        @yield('content')


        <footer class="main-footer">
            @include('includes.footer')
        </footer>
    </div>

        @include('includes.scripts')
        @stack('includes.scripts')
        @livewireScripts

</body> 
</html>
