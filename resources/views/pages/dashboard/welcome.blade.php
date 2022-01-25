<div>
  <h3 class="text-black mb-3" style="justify-content: center">Welcome to Cintranet, {{ $first_name }}!</h3>
    <img class ="img-fluid rounded" src="{{ asset('img/dashboard-bg.jpg') }}">
  </div>
  <div class="container">
  <!-- SEARCH FORM -->  
  <form action="/search" method="GET" role="search">
    @csrf
    <div class="input-group input-group dashboard-input" style="width:75%;">
    <input class="form-control form-control-navbar" type="search" name="q" placeholder="Search Files, Posts, Events, or Users" aria-label="Search">
    <div class="input-group-append">
        <button class="btn btn-navbar" type="submit" style="right: 40px;">
        <i class="fas fa-search"></i>
        </button>
    </div>
    </div>
  </form>
</div>